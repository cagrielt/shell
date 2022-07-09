<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Slide;
use App\Models\Page;
use App\Models\BoardMember;
use App\Models\Brand;
use App\Models\User;
use App\Models\PasswordReset;
use App\Models\Post;
use App\Models\News;
use App\Models\Video;
use App\Models\MemberPost;
use App\Models\LaunchUser;

class HomeController extends Controller
{

    function index(){
        $lang = app()->getLocale();

        $slides = Slide::where('status',true)->where('language',$lang)->orderBy('order')->get();
        $brands = Brand::where('status',true)->orderBy('order')->get();
        $posts = Post::where('status',true)->where('language',$lang)->orderByDesc('created_at')->with('media')->take(3)->get();
        $news = News::where('status',true)->where('language',$lang)->where('ends_at','>=',date('Y-m-d'))->orderBy('ends_at')->with('media')->take(3)->get();
        $videos = Video::where('status',true)->where('language',$lang)->orderByDesc('created_at')->with('media')->take(3)->get();
        $boardMembers = BoardMember::where('status',true)->where('language',$lang)->where('category',1)->orderByDesc('order')->with('media')->get();
        return view('index', compact('slides','brands','posts','news','videos','boardMembers'));
    }

    function boardMember($slug){
        $lang = app()->getLocale();
        $boardMember = BoardMember::where('status',true)->where('language',$lang)->where('slug',$slug)->where('content','!=',null)->first();
        if($boardMember){
            $metas = [
                'title' => $boardMember->name,
                'description' => $boardMember->description,
                'keywords' => $boardMember->keywords
            ];

            $pageBoardMembers = Page::where('status',true)->where('language',$lang)->where('template','Yönetim Kurulu')->first();
            return view('board-member',compact('boardMember','pageBoardMembers','metas'));
        }

        abort(404);
    }

    function post($slug){
        $lang = app()->getLocale();
        $post = Post::where('status',true)->where('language',$lang)->where('slug',$slug)->with('media')->first();
        if($post){
            $metas = [
                'title' => $post->title,
                'description' => $post->description,
                'keywords' => $post->keywords
            ];

            $pageBlog = Page::where('status',true)->where('language',$lang)->where('template','Blog')->first();
            return view('post',compact('post','pageBlog','metas'));
        }

        abort(404);
    }

    function news($slug){
        $lang = app()->getLocale();
        $news = News::where('status',true)->where('language',$lang)->where('slug',$slug)->where('link',null)->first();
        if($news){
            $metas = [
                'title' => $news->title,
                'description' => $news->description,
                'keywords' => $news->keywords
            ];

            $pageNews = Page::where('status',true)->where('language',$lang)->where('template','AI Güncel')->first();
            return view('news',compact('news','pageNews','metas'));
        }

        abort(404);
    }

    function memberPost($slug){
        $post = MemberPost::where('status',true)->where('slug',$slug)->with('media')->with('pdf')->first();
        if($post){
            $metas = [
                'title' => $post->title,
                'description' => $post->description,
                'keywords' => $post->keywords
            ];

            $page = Page::where('status',true)->where('template','Üyelere Özel')->first();
            
            return view('memberpost',compact('post','page','metas'));
        }
        abort(404);
    }

    function slug($slug){
        $lang = app()->getLocale();
        $page = null;
        if($slug == "arama"){
            $page = new Page;
            $page->title = "Arama Sonuçları";
            $page->template = "search";
        }elseif($slug == "search"){
            $page = new Page;
            $page->title = "Search Results";
            $page->template = "search";
        }else{
            $page = Page::where('slug',$slug)->where('language',$lang)->where('status',true)->first();
        }

        if($page){
            if($page->private && !session()->has('user')){
                return redirect()->route('home.login');
            }

            $data = [];
            $metas = [
                'title' => $page->title,
                'description' => $page->description,
                'keywords' => $page->keywords
            ];

            if($page->template == "İletişim"){
                return view('contact',compact('page','metas'));
            }elseif($page->template == "Yönetim Kurulu"){
                $data['board-members'] = BoardMember::where('status',true)->where('language',$lang)->orderByDesc('order')->with('media')->get();
            }elseif($page->template == "Hakkımızda"){
                $data['brands'] = Brand::where('status',true)->orderBy('order')->with('media')->get();
            }elseif($page->template == "Blog"){
                $data['posts'] = Post::where('status',true)->where('language',$lang)->orderByDesc('created_at')->with('media')->get();
            }elseif($page->template == "AI Güncel"){
                $data['news'] = News::where('status',true)->where('language',$lang)->orderByDesc('ends_at')->with('media')->get();
            }elseif($page->template == "Videolar"){
                $data['videos'] = Video::where('status',true)->where('language',$lang)->orderByDesc('created_at')->with('media')->get();
            }elseif($page->template == "Üyelere Özel"){
                $data['memberPosts'] = MemberPost::where('status',true)->orderByDesc('created_at')->with('media')->get();
            }elseif($page->template == "search"){
                $s = request('s');
                if($s == null){
                    return redirect(url('/'));
                }

                $data = [
                    'board-members' => BoardMember::where('status',true)->where('name','like','%'.$s.'%')->where('language',$lang)->orderByDesc('order')->with('media')->get(),
                    'posts' => Post::where('status',true)->where('title','like','%'.$s.'%')->where('language',$lang)->orderByDesc('created_at')->with('media')->get(),
                    'videos' => Video::where('status',true)->where('title','like','%'.$s.'%')->where('language',$lang)->orderByDesc('created_at')->with('media')->get(),
                    'pages' => Page::where('status',true)->where('title','like','%'.$s.'%')->where('language',$lang)->orderBy('title')->get(),
                    'news' => News::where('status',true)->where('title','like','%'.$s.'%')->where('language',$lang)->orderByDesc('ends_at')->with('media')->get()
                ];
            }
            return view('page',compact('page', 'data','metas'));
        }

        abort(404);
    }

    function register(){
        $metas = ['title' => 'Üye Ol'];
        return view('user.register',compact('metas'));
    }

    function confirmAccount(){
        $user = User::where('activationcode',request('activationcode'))->where('status',true)->where('password',null)->first();

        if($user){
            $metas = ['title' => 'Üyelik Onayı'];
            return view('user.define-password',compact('user','metas'));
        }

        session()->flash('message','Geçersiz hesap onay kodu.');
        return redirect(url('/'));
    }

    function login(){
        $metas = ['title' => 'Giriş Yap'];
        return view('user.login',compact('metas'));
    }

    function forgotPassword(){
        $metas = ['title' => 'Şifremi Unuttum'];
        return view('user.forgot-password',compact('metas'));
    }

    function resetPassword(){
        $passwordReset = PasswordReset::where('token',request('token'))->first();
        if($passwordReset){
            $now = new \DateTime();
            $createdAt = new \DateTime($passwordReset->created_at);

            if($createdAt->diff($now)->d > 3){
                session()->flash('message','Bu şifre sıfırlama anahtarının süresi dolmuş. Lütfen terkar şifrenizi sıfırlayın.');
                return redirect(url('/'));
            }else{
                $metas = ['title' => 'Şifremi Sıfırla'];
                return view('user.reset-password', compact('passwordReset','metas'));
            }
        }

        session()->flash('message','Geçersiz şifre sıfırlama anahtarı.');
        return redirect(url('/'));
    }

    function changePassword(){
        $metas = ['title' => 'Şifremi Değiştir'];
        return view('user.change-password',compact('metas'));
    }

    function logout(){
        session()->forget('user');
        return redirect(url('/'));
    }

    function profile(){
        $metas = ['title' => 'Profil'];
        $user = User::find(session('user')->id);
        return view('user.profile',compact('user','metas'));
    }

    function launchment(){
        if(session()->has('launchUser')){
            return view('launchment');
        }

        return redirect(route('home.launch-login'));
    }

    function launchLogin(){
        return view('launch-login');
    }

    function processLaunchLogin(){

        $this->validate(request(),[
            'name' => 'required',
            'email' => 'required|email',
            'terms' => 'required',
            'permission' => 'required'
        ]);

        $launchUser = LaunchUser::where('email',request('email'))->first();

        if($launchUser == null){
            $launchUser = LaunchUser::create(request()->all());
        }

        session()->put('launchUser',$launchUser);
        return redirect(route('home.launchment'));
    }

    function launchRegister(){
        $metas = ['title' => 'Online Toplantı Kayıt Formu'];
        return view('launch-register',compact('metas'));
    }

    function launchQuestions(){
        return view('launch-questions');
    }
}
