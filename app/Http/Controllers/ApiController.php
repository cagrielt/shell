<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Models\Subscriber;
use App\Models\User;
use App\Models\PasswordReset;
use App\Models\LaunchUser;
use App\Models\Question;

class ApiController extends Controller
{
    function subscribe(){
        $message = "Lütfen geçerli bir e-posta adresi girin.";
        $email = request('email');

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            if(Subscriber::where('email',$email)->count() > 0){
                $message = "E-posta adresiniz daha önce kayıt edilmiştir.";
            }else{
                Subscriber::create(['email' => $email]);
                $message = "E-bülten aboneliğiniz başarıyla tanımlandı.";
            }
        }

        return ["message" => $message];
    }

    function contact(){
        request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        $data = [
            'name' => request('name'),
            'email' => request('email'),
            'msg' => request('message'),
            'company' => request('company'),
            'tel' => request('tel')
        ];
        
        Mail::send('mail.contact', $data, function($message){
            $message->to("info@yztd.org.tr","Info");
            $message->to("engin@tazefikir.com","Engin Satıcı");
            $message->subject(config('app.name') . " İletişim Formu");
        });

        return ["message" => "Bize ulaştığınız için teşekkür ederiz. Mesajınıza en kısa sürede cevap vereceğiz."];
    }

    function register(){
        $message = "";
        $type = request('type');
        if(!request()->has('terms')){
            $message = "Lütfen Üyelik Sözleşmesini kabul ettiğinizi onaylayın.";
        }elseif(request('name') == null){
            $message = "Ad Soyad alanı boş olamaz.";
        }elseif(request('tel') == null){
            $message = "Telefon alanı boş olamaz.";
        }elseif(!filter_var(request('email'), FILTER_VALIDATE_EMAIL)){
            $message = "Lütfen geçerli bir e-posta adresi girin.";
        }elseif($type == null){
            $message = "Lütfen başvurmak istediğiniz üyelik modelini seçin.";
        }elseif(request('interest') == null){
            $message = "Lütfen AI ilgi alanını seçiniz.";
        }elseif($type == 'business' || $type == 'other'){
            if(request('company') == null){
                $message = "Lütfen şirket adını girin.";
            }elseif(request('position') == null){
                $message = "Lütfen görevinizi girin.";
            }elseif(request('area') == null){
                $message = "Lütfen şirket faaliyet alanını seçin.";
            }
        }elseif($type == 'academician'){
            if(request('institution') == null){
                $message = "Lütfen öğrenim kurumu adını girin.";
            }elseif(request('faculty') == null){
                $message = "Lütfen fakülte adını girin.";
            }
        }elseif($type == 'student'){
            if(request('school') == null){
                $message = "Lütfen okul adını girin.";
            }elseif(request('education') == null){
                $message = "Lütfen eğitim durumunu seçin.";
            }elseif(request('department') == null){
                $message = "Lütfen bölümü girin.";
            }
        }

        if($message == ""){

            if(User::where('email',request('email'))->count() > 0){
                return ["message" => "Bu e-posta adresi kullanılıyor"];
            }
    
            $activationCode = randomString();
    
            while(User::where('activationcode',$activationCode)->count() > 0){
                $activationCode = randomString();
            }

            $data = request()->all();
            $data['activationcode'] = $activationCode;
            if($type == 'business' || $type == 'other'){
                $data['institution'] = null;
                $data['faculty'] = null;
                $data['school'] = null;
                $data['education'] = null;
                $data['department'] = null;
            }elseif($type == 'academician'){
                $data['company'] = null;
                $data['position'] = null;
                $data['area'] = null;
                $data['school'] = null;
                $data['education'] = null;
                $data['department'] = null;
            }elseif($type == 'student'){
                $data['company'] = null;
                $data['position'] = null;
                $data['area'] = null;
                $data['institution'] = null;
                $data['faculty'] = null;
            }
            $user = User::create($data);

            
            if($user){
                Mail::send('mail.membership-application', $data, function($message) use ($data) {
                    $message->to($data['email'],$data['name']);
                    $message->subject(config('app.name') . " Üyelik Başvurusu");
                });

                Mail::send('mail.membership-application-details', $data, function($message){
                    $message->to("info@yztd.org.tr","Info");
                    $message->to("engin@tazefikir.com","Engin Satıcı");
                    $message->subject(config('app.name') . " Üyelik Başvurusu");
                });

                $message = "Gösterdiğiniz ilgi için teşekkürler. Başvurunuz alınmıştır. En yakın zamanda dönüş yapılacaktır.";
            }else{
                $message = "Bir hata oluştu. Lütfen girdiğiniz bilgileri kontrol edip tekrar deneyin.";
            }
        }

        return ["message" => $message];
    }

    function login(){
        $user = User::where('email',request('email'))->first();
        if($user && Hash::check(request('password'), $user->password)){
            if($user->status){
                session()->put('user',$user);
                return ['message' => 'Hoş Geldiniz ' . $user->name, 'redirect' => url('/')];
            }else{
                return ["message" => "Hesabınız henüz onaylanmamış. Moderasyon onayından önce giriş yapamazsınız."];
            }
        }

        return ['message' => 'Geçersiz e-posta adresi veya şifre. Lütfen bilgilerinizi kontrol edip tekrar deneyin.'];
    }

    function forgotPassword(){

        $message = "";
        $user = User::where('email',request('email'))->first();

        if($user){
            if($user->status){
                PasswordReset::where('user_id',$user->id)->delete();
                $token = randomString();
                while(PasswordReset::where('token',$token)->count() > 0){
                    $token = randomString();
                }

                PasswordReset::create(['user_id' => $user->id, 'token' => $token]);

                $data = [
                    'name' => $user->name,
                    'email' => $user->email,
                    'token' => $token
                ];
    
                Mail::send('mail.forgot-password', $data, function($message) use ($data) {
                    $message->to($data['email'],$data['name']);
                    $message->subject(config('app.name') . " Şifremi Sıfırla");
                });

                $message = "E-posta adresinize şifrenizi sıfırlamanız için bir bağlantı gönderdik. Bu bağlantıyı kullanarak şifrenizi sıfırlayabilirsiniz.";
            }else{
                $message = "Hesabınız henüz onaylanmadığı için şifre sıfırlama işlemi yapamazsınız.";
            }
        }else{
            $message = "Böyle bir hesap bulunamadı. Lütfen girdiğiniz bilgileri kontrol edip tekrar deneyin.";
        }

        return ["message" => $message];
    }
    
    function resetPassword(){
        $passwordReset = PasswordReset::where('token',request('token'))->first();
        if($passwordReset){
            $message = "";
            $password = request('password');
            $confirmation = request('confirmation');

            if(strlen($password) < 6){
                $message = "Yeni şifreniz en az 6 karakter olmalıdır.";
            }elseif($password != $confirmation){
                $message = "Girdiğiniz şifreler eşleşmiyor.";
            }

            if($message == ""){
                $user = User::find($passwordReset->user_id);
                if($user){
                    $user->password = bcrypt($password);
                    $user->save();
                    session()->put('user',$user);
                    $passwordReset->delete();
                    return ['message' => 'Şifreniz başarıyla sıfırlandı.', 'redirect' => url('/')];
                }else{
                    $message = "Bir hata oluştu. Lütfen daha sonra tekrar deneyin.";
                }
            }

            return ["message" => $message];
        }

        return ["message" => "Bir hata oluştu. Lütfen daha sonra tekrar deneyin."];
    }
    
    function changePassword(){
        $oldPassword = request('oldpassword');
        $newPassword = request('newpassword');
        $message = "";

        if(strlen($newPassword) < 6){
            $message = "Yeni şifreniz en az 6 karakter olmalıdır.";
        }

        if($message == ""){
            $user = User::find(session('user')->id);
            if($user){
                if(Hash::check($oldPassword,$user->password)){
                    $user->password = bcrypt($newPassword);
                    $user->save();
                    $message = "Şifreniz başarıyla değiştirildi.";
                }else{
                    $message = "Yanlış şifre girdiniz. Lütfen tekrar deneyin.";
                }
            }else{
                $message = "Bir hata oluştu. Lütfen daha sonra tekrar deneyin.";
            }
        }

        return ['message' => $message];
    }

    function definePassword(){
        $message = "";
        $password = request('password');
        $confirmation = request('confirmation');

        if(strlen($password) < 6){
            $message = "Şifreniz en az 6 karakter olmalıdır.";
        }elseif($password != $confirmation){
            $message = "Girdiğiniz şifreler eşleşmiyor.";
        }

        if($message == ""){
            $user = User::where('activationcode',request('activationcode'))->where('status',true)->where('password',null)->first();
            if($user){
                $user->password = bcrypt($password);
                $user->save();
                session()->put('user',$user);
                return ["message" => "YZTD'ye Hoş Geldiniz " . $user->name, "redirect" => route('home.profile')];
            }

            $message = "Bir hata oluştu. Lütfen daha sonra tekrar deneyin.";
        }

        return ["message" => $message];
    }

    function saveProfile(){
        $message = "";
        if(request('name') == null){
            $message = "Ad Soyad alanı boş olamaz.";
        }

        if($message == ""){
            $user = User::find(session('user')->id);
            $user->update(request()->all());
            $message = "Profiliniz başarıyla güncellendi.";
        }

        return ["message" => $message];
    }

    function launchRegister(){
        $message = "";
        if(!request()->has('terms')){
            $message = "Gizlilik politikasını onaylayın.";
        }elseif(!request()->has('permission')){
            $message = "İletişim izinlerini onaylayın.";
        }elseif(request('name') == null){
            $message = "Ad Soyad alanı boş olamaz.";
        }elseif(!filter_var(request('email'), FILTER_VALIDATE_EMAIL)){
            $message = "Lütfen geçerli bir e-posta adresi girin.";
        }

        if($message == ""){

            if(launchUser::where('email',request('email'))->count() > 0){
                return ["message" => "Bu e-posta adresi ile kayıt gerçekleştirilmiş."];
            }

            $data = request()->all();
            $launchUser = launchUser::create($data);

            if($launchUser){
                Mail::send('mail.launch-register', $data, function($message) use ($data) {
                    $message->to($data['email'],$data['name']);
                    $message->subject(config('app.name') . " Online Toplantı Kayıt");
                });

                Mail::send('mail.launch-register-details', $data, function($message){
                    $message->to("info@yztd.org.tr","Info");
                    $message->to("engin@tazefikir.com","Engin Satıcı");
                    $message->subject(config('app.name') . " Online Toplantı Kayıt");
                });

                $message = "Gösterdiğiniz ilgi için teşekkürler. Kaydınız alınmıştır. En yakın zamanda dönüş yapılacaktır.";
            }else{
                $message = "Bir hata oluştu. Lütfen girdiğiniz bilgileri kontrol edip tekrar deneyin.";
            }
        }

        return ["message" => $message];
    }

    function launchAsk(){
        $message = "Bir hata oldu. Lütfen sayfayı yenileyip tekrar deneyin.";
        $clear = false;

        $question = Question::create([
            'user_id' => request('user_id'),
            'content' => request('message')
        ]);

        if($question){
            $message = "Sorunuz başarıyla iletildi. Teşekkür ederiz.";
            $clear = true;
        }

        return ["message" => $message,"clear" => $clear];
    }

    function launchQuestions(){
        $questions = Question::where('id','>',request('lastID'))->with('user')->orderBy('id')->get();

        return $questions;
    }
}
