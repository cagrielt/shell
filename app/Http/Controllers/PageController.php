<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Page;

class PageController extends Controller
{
    function index()
    {
        $pages = Page::all();
        return view('shell.pages.index',compact('pages'));
    }

    function create()
    {
        $page = new Page;
        $page->title = "Başlıksız";
        return view('shell.pages.create', compact('page'));
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

        $page = Page::create(request()->all());
        session()->flash('message', 'İçerik kaydedildi');
        return redirect(route('pages.edit', $page->id));
    }

    function edit($id)
    {
        $page = Page::findOrFail($id);
        return view('shell.pages.edit',compact('page'));
    }

    function update(Request $request, $id)
    {
        $page = Page::findOrFail($id);

        $this->validate(request(),[
            'title' => 'required'
        ]);

        if(!request('slug') || strlen(request('slug')) < 4){
            request()['slug'] = Str::slug(request('title'));
        }

        request()['private'] = request()->has('private');

        $page->update(request()->all());
        session()->flash('message', 'İçerik kaydedildi');
        return redirect(route('pages.edit', $page->id));
    }

    function show($id)
    {
        $page = Page::findOrFail($id);
        return view('shell.pages.delete',compact('page'));
    }

    function destroy($id)
    {
        $page = Page::findOrFail($id);
        $page->delete();

        session()->flash('message', 'İçerik silindi.');
        return redirect(route('pages.index'));
    }
}
