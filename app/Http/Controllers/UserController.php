<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\User;

class UserController extends Controller
{
    public function export(){
        $users = User::all();
        header("Content-Disposition: attachment; filename=yztd-uyeler.xls");
        header("Content-Type: application/vnd.ms-excel");

        echo "Ad Soyad\tE-posta Adresi\tTelefon\tÇalışılan Firma\tFaaliyet Alanı\tAI İlgi Alanı\tGörev\tNeden Üye Oldu\tDurum\tÜyelik Tipi\tReferans\tÜyelik Tarihi\r\n";
        foreach($users as $user){
            echo $user->name . "\t" . $user->email . "\t" . $user->tel . "\t" . $user->company . "\t" .$user->area . "\t" . $user->interest . "\t" . $user->position . "\t" . $user->reason . "\t" . $user->status . "\t" . $user->type . "\t" . $user->reference . "\t" . $user->created_at . "\r\n";
        }
        exit;
    }

    public function preConfirmAccount($id){
        $user = User::find($id);

        $data = [
            'name' => $user->name,
            'email' => $user->email,
            'type' => $user->type
        ];

        Mail::send('mail.membership-pre-confirmation', $data, function($message) use ($data) {
            $message->to($data['email'],$data['name']);
            $message->subject(config('app.name') . " Üyeliğiniz Ön Kabul Aldı");
        });
        
        session()->flash('message', $user->name . ' Kullanıcısına ön onay maili gönderildi');
        return redirect(route('users.index'));
    }

    public function confirmAccount($id){
        $user = User::find($id);
        $user->status = true;
        $user->save();

        $data = [
            'name' => $user->name,
            'email' => $user->email,
            'activationcode' => $user->activationcode
        ];

        Mail::send('mail.welcome', $data, function($message) use ($data) {
            $message->to($data['email'],$data['name']);
            $message->subject(config('app.name') . " Üyeliğiniz Onaylandı");
        });
        
        session()->flash('message', $user->name . ' Kullanıcısının hesabı onaylandı. Bilgi maili gönderildi.');
        return redirect(route('users.index'));
    }

    public function index()
    {
        $users = User::orderByDesc('created_at')->get();
        return view('shell.users.index',compact('users'));
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('shell.users.edit',compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $user->update(request()->all());
        session()->flash('message', 'İçerik kaydedildi');
        return redirect(route('users.edit', $user->id));
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('shell.users.delete',compact('user'));
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        session()->flash('message', 'İçerik silindi');
        return redirect(route('users.index'));
    }
}
