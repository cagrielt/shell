<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    public function index()
    {
        $admins = Admin::all();
        return view('shell.admins.index', compact('admins'));
    }

    public function create()
    {
        $admin = new Admin;
        return view('shell.admins.create', compact('admin'));
    }

    public function store(Request $request)
    {
        $this->validate(request(),[
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $data = [
            'email' => request('email'),
            'password' => bcrypt(request('password'))
        ];

        $admin = Admin::create($data);
        session()->flash('message','Kullanıcı kaydedildi');
        return redirect(route('admins.edit', $admin->id));
    }

    public function edit($id)
    {
        $admin = Admin::findOrFail($id);

        return view('shell.admins.edit', compact('admin'));
    }

    public function update(Request $request, $id)
    {
        $admin = Admin::findOrFail($id);

        $this->validate(request(),[
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $data = ['email' => request('email')];

        if(request('password') != $admin->password){
            $data['password'] = bcrypt(request('password'));
        }

        $admin->update($data);
        session()->flash('message','Kullanıcı kaydedildi');
        return redirect(route('admins.edit', $admin->id));
    }

    public function show($id)
    {
        $admin = Admin::findOrFail($id);
        return view('shell.admins.delete', compact('admin'));
    }

    public function destroy($id)
    {
        $admin = Admin::findOrFail($id);
        $admin->delete();

        session()->flash('message', 'Kullanıcı silindi.');
        return redirect(route('admins.index'));
    }
}
