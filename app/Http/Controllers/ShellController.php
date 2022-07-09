<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Slide;
use App\Models\BoardMember;
use App\Models\Brand;
use App\Models\User;
use App\Models\Page;
use App\Models\Media;
use App\Models\Subscriber;
use App\Models\Admin;
use App\Models\Post;
use App\Models\News;
use App\Models\LaunchUser;

class ShellController extends Controller
{
    function optimize(){
        \Artisan::call('optimize');
        return "optimized";
    }
    
    function migrate(){
        \Artisan::call('migrate');
        return "migrated";
    }

    function index(){
        $data = [
            (object) array('icon' => 'fa-picture-o', 'title' => 'Slide' , 'url' => route('slides.index'), 'count' => Slide::count()),
            (object) array('icon' => 'fa-briefcase', 'title' => 'Yönetim Kurulu' , 'url' => route('board-members.index'), 'count' => BoardMember::count()),
            (object) array('icon' => 'fa-black-tie', 'title' => 'Marka' , 'url' => route('brands.index'), 'count' => Brand::count()),
            (object) array('icon' => 'fa-users', 'title' => 'Kullanıcı' , 'url' => route('users.index'), 'count' => User::count()),
            (object) array('icon' => 'fa-pencil', 'title' => 'Blog Yazısı' , 'url' => route('posts.index'), 'count' => Post::count()),
            (object) array('icon' => 'fa-newspaper-o', 'title' => 'AI Güncel' , 'url' => route('news.index'), 'count' => News::count()),
            (object) array('icon' => 'fa-file-text', 'title' => 'Sayfa' , 'url' => route('pages.index'), 'count' => Page::count()),
            (object) array('icon' => 'fa-picture-o', 'title' => 'Ortam Dosyası' , 'url' => route('media.index'), 'count' => Media::count()),
            (object) array('icon' => 'fa-envelope', 'title' => 'E-bülten Abonesi' , 'url' => route('subscribers.index'), 'count' => Subscriber::count()),
            (object) array('icon' => 'fa-users', 'title' => 'Katılımcılar' , 'url' => route('launch-users.index'), 'count' => LaunchUser::count()),
        ];
        return view('shell.shell.index', compact('data'));
    }

    function login(){
        return view('shell.shell.login');
    }

    function processLogin(){
        $this->validate(request(),[
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $admin = Admin::where('email',request('email'))->first();
        if($admin && Hash::check(request('password'), $admin->password)){
            session()->put('admin',$admin->email);
            return redirect(route('shell.index'));
        }

        return view('shell.shell.login');
    }

    function logout(){
        session()->forget('admin');
        return redirect(route('shell.login'));
    }

    function mediaFolders(){
        $folders = Media::select('folder')->distinct()->pluck('folder');
        return $folders;
    }

    function mediaThumbnails(){
        $folder = request('folder');
        $type = request('type');
        if($type == null){
            $type = "image";
        }
        $medias = Media::where('folder',$folder)->where('type','LIKE','%' . $type .'%')->orderByDesc('created_at')->paginate(200);
        return view('shell.shared.mediathumbnails',compact('medias'));
    }

    public function renderSitemap(){
        $boardMembers = BoardMember::where('status',true)->where('content','!=',null)->get();
        $posts = Post::where('status',true)->get();
        $news = News::where('status',true)->where('link',null)->get();
        $pages = Page::where('status',true)->get();
        
        $xml = new \DomDocument('1.0', 'UTF-8');
        $urlset = $xml->createElement('urlset');
        $urlset->setAttribute('xmlns','http://www.sitemaps.org/schemas/sitemap/0.9');
        $urlset->setAttribute('xmlns:xsi','http://www.w3.org/2001/XMLSchema-instance');
        $urlset->setAttribute('xsi:schemaLocation','http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd');

        //home page
        $urlset->appendChild($this->generateSitemapNode($xml, url(''), "1.00"));
        $urlset->appendChild($this->generateSitemapNode($xml, url('en'), "1.00"));

        foreach($pages as $page){
            $urlset->appendChild($this->generateSitemapNode($xml, pageUrl($page), "0.80"));
        }

        foreach($posts as $item){
            $urlset->appendChild($this->generateSitemapNode($xml, postUrl($item), "0.64"));
        }

        foreach($boardMembers as $item){
            $urlset->appendChild($this->generateSitemapNode($xml, boardMemberUrl($item), "0.64"));
        }

        foreach($news as $item){
            $urlset->appendChild($this->generateSitemapNode($xml, newsUrl($item), "0.64"));
        }
        
        $xml->appendChild($urlset);
        $xml->save(public_path() . '/sitemap.xml');

        return redirect('/sitemap.xml');
    }

    private function generateSitemapNode($xml,$url,$prio){
        $node = $xml->createElement('url');
        $loc = $xml->createElement('loc');
        $loc->appendChild($xml->createTextNode($url));
        $lastMod = $xml->createElement('lastmod');
        $lastMod->appendChild($xml->createTextNode(date('Y-m-d H:i:s')));
        $priority = $xml->createElement('priority');
        $priority->appendChild($xml->createTextNode($prio));

        $node->appendChild($loc);
        $node->appendChild($lastMod);
        $node->appendChild($priority);

        return $node;
    }

    
}
