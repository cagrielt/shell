<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\BoardMember;

class BoardMemberController extends Controller
{
    function index()
    {
        $boardMembers = BoardMember::orderByDesc('order')->get();
        return view('shell.board-members.index',compact('boardMembers'));
    }

    function create()
    {
        $boardMember = new BoardMember;
        if(request('origin_id')){
            $boardMember = BoardMember::find(request('origin_id'));
            $boardMember->id = null;
        }else{
            $boardMember->name = "Başlıksız";
            $boardMember->order = 0;
        }
        return view('shell.board-members.create', compact('boardMember'));
    }

    function store(Request $request)
    {
        $this->validate(request(),[
            'name' => 'required',
            'position' => 'required',
            'order' => 'required'
        ]);

        if(!request('slug') || strlen(request('slug')) < 4){
            request()['slug'] = Str::slug(request('name'));
        }

        $boardMember = BoardMember::create(request()->all());
        session()->flash('message', 'İçerik kaydedildi');
        return redirect(route('board-members.edit', $boardMember->id));
    }

    function edit($id)
    {
        $boardMember = BoardMember::findOrFail($id);
        return view('shell.board-members.edit',compact('boardMember'));
    }

    function update(Request $request, $id)
    {
        $boardMember = BoardMember::findOrFail($id);

        $this->validate(request(),[
            'name' => 'required',
            'position' => 'required',
            'order' => 'required'
        ]);

        if(!request('slug') || strlen(request('slug')) < 4){
            request()['slug'] = Str::slug(request('name'));
        }

        $boardMember->update(request()->all());
        session()->flash('message', 'İçerik kaydedildi');
        return redirect(route('board-members.edit', $boardMember->id));
    }

    function show($id)
    {
        $boardMember = BoardMember::findOrFail($id);
        return view('shell.board-members.delete',compact('boardMember'));
    }

    function destroy($id)
    {
        $boardMember = BoardMember::findOrFail($id);
        $boardMember->delete();

        session()->flash('message', 'İçerik silindi.');
        return redirect(route('board-members.index'));
    }
}
