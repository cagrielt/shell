<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LaunchUser;

class LaunchUsersController extends Controller
{

    public function index(){
        $launchUsers = LaunchUser::orderByDesc('id')->get();
        return view('shell.launch-users.index',compact('launchUsers'));
    }

    public function show($id)
    {
        $launchUser = LaunchUser::findOrFail($id);
        return view('shell.launch-users.delete',compact('launchUser'));
    }

    public function destroy($id)
    {
        $launchUser = LaunchUser::findOrFail($id);
        $launchUser->delete();

        session()->flash('message', 'İçerik silindi.');
        return redirect(route('launch-users.index'));
    }

    public function export(){
        $users = LaunchUser::all();
        header("Content-Disposition: attachment; filename=yztd-lansman-katilimcilari.xls");
        header("Content-Type: application/vnd.ms-excel");

        echo "Ad Soyad\tE-posta Adresi\tÇalışılan Firma\tGörev\r\n";
        foreach($users as $user){
            echo $user->name . "\t" . $user->email . "\t" .  $user->company . "\t" . $user->position . "\r\n";
        }
        exit;
    }

}
