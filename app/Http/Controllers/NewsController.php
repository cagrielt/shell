<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\News;

class NewsController extends Controller
{
    function index()
    {
        $news = News::orderByDesc('ends_at')->get();
        return view('shell.news.index',compact('news'));
    }

    function create()
    {
        $news = new News;
        if(request('origin_id')){
            $news = News::find(request('origin_id'));
            $news->id = null;
        }else{
            $news->title = "Başlıksız";
        }
        return view('shell.news.create', compact('news'));
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

        $news = News::create(request()->all());
        session()->flash('message', 'İçerik kaydedildi');
        return redirect(route('news.edit', $news->id));
    }

    function edit($id)
    {
        $news = News::findOrFail($id);
        return view('shell.news.edit',compact('news'));
    }

    function update(Request $request, $id)
    {
        $news = News::findOrFail($id);

        $this->validate(request(),[
            'title' => 'required'
        ]);

        if(!request('slug') || strlen(request('slug')) < 4){
            request()['slug'] = Str::slug(request('title'));
        }
        
        request()['private'] = request()->has('private');

        $news->update(request()->all());
        session()->flash('message', 'İçerik kaydedildi');
        return redirect(route('news.edit', $news->id));
    }

    function show($id)
    {
        $news = News::findOrFail($id);
        return view('shell.news.delete',compact('news'));
    }

    function destroy($id)
    {
        $news = News::findOrFail($id);
        $news->delete();

        session()->flash('message', 'İçerik silindi.');
        return redirect(route('news.index'));
    }
}
