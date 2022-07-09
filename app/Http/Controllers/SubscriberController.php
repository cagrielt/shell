<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscriber;

class SubscriberController extends Controller
{
    public function export(){
        $subscribers = Subscriber::all();
        header("Content-Disposition: attachment; filename=yztd-aboneler.xls");
        header("Content-Type: application/vnd.ms-excel");
    
        echo "E-posta Adresi\tKayıt Tarihi\r\n";
        foreach($subscribers as $subscriber){
            $output = $subscriber->email ."\t" . $subscriber->created_at . "\r\n";
            echo $output;
        }
        exit;
    }

    public function index()
    {
        $subscribers = Subscriber::orderByDesc('created_at')->get();
        return view('shell.subscribers.index',compact('subscribers'));
    }

    public function show($id)
    {
        $subscriber = Subscriber::findOrFail($id);
        return view('shell.subscribers.delete',compact('subscriber'));
    }

    public function destroy($id)
    {
        $subscriber = Subscriber::findOrFail($id);
        $subscriber->delete();

        session()->flash('message', 'İçerik silindi.');
        return redirect(route('subscribers.index'));
    }
}
