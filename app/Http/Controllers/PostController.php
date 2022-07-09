<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Post;

class PostController extends Controller
{
    function index()
    {
        $posts = Post::orderByDesc('created_at')->get();
        return view('shell.posts.index',compact('posts'));
    }

    function create()
    {
        $post = new Post;
        if(request('origin_id')){
            $post = Post::find(request('origin_id'));
            $post->id = null;
        }else{
            $post->title = "Başlıksız";
        }
        return view('shell.posts.create', compact('post'));
    }

    function store(Request $request)
    {
        $this->validate(request(),[
            'title' => 'required'
        ]);

        if(!request('slug') || strlen(request('slug')) < 4){
            request()['slug'] = Str::slug(request('title'));
        }
        
        request()['private'] = request()->has('private');

        $post = Post::create(request()->all());
        session()->flash('message', 'İçerik kaydedildi');
        return redirect(route('posts.edit', $post->id));
    }

    function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('shell.posts.edit',compact('post'));
    }

    function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);

        $this->validate(request(),[
            'title' => 'required'
        ]);

        if(!request('slug') || strlen(request('slug')) < 4){
            request()['slug'] = Str::slug(request('title'));
        }
        
        request()['private'] = request()->has('private');

        $post->update(request()->all());
        session()->flash('message', 'İçerik kaydedildi');
        return redirect(route('posts.edit', $post->id));
    }

    function show($id)
    {
        $post = Post::findOrFail($id);
        return view('shell.posts.delete',compact('post'));
    }

    function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        session()->flash('message', 'İçerik silindi.');
        return redirect(route('posts.index'));
    }
}
