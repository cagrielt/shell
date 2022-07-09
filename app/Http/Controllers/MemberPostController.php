<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\MemberPost;

class MemberPostController extends Controller
{
    function index()
    {
        $memberposts = MemberPost::orderByDesc('created_at')->get();
        return view('shell.memberposts.index',compact('memberposts'));
    }

    function create()
    {
        $memberpost = new MemberPost;
        $memberpost->title = "Başlıksız";
        return view('shell.memberposts.create', compact('memberpost'));
    }

    function store(Request $request)
    {
        $this->validate(request(),[
            'title' => 'required'
        ]);

        if(!request('slug') || strlen(request('slug')) < 4){
            request()['slug'] = Str::slug(request('title'));
        }

        $memberpost = MemberPost::create(request()->all());
        session()->flash('message', 'İçerik kaydedildi');
        return redirect(route('memberposts.edit', $memberpost->id));
    }

    function edit($id)
    {
        $memberpost = MemberPost::findOrFail($id);
        return view('shell.memberposts.edit',compact('memberpost'));
    }

    function update(Request $request, $id)
    {
        $memberpost = MemberPost::findOrFail($id);

        $this->validate(request(),[
            'title' => 'required'
        ]);

        if(!request('slug') || strlen(request('slug')) < 4){
            request()['slug'] = Str::slug(request('title'));
        }

        $memberpost->update(request()->all());
        session()->flash('message', 'İçerik kaydedildi');
        return redirect(route('memberposts.edit', $memberpost->id));
    }

    function show($id)
    {
        $memberpost = MemberPost::findOrFail($id);
        return view('shell.memberposts.delete',compact('memberpost'));
    }

    function destroy($id)
    {
        $memberpost = MemberPost::findOrFail($id);
        $memberpost->delete();

        session()->flash('message', 'İçerik silindi.');
        return redirect(route('memberposts.index'));
    }
}
