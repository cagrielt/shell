<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;

class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::orderByDesc('created_at')->get();
        return view('shell.videos.index',compact('videos'));
    }

    public function create()
    {
        $video = new Video;
        if(request('origin_id')){
            $video = Video::find(request('origin_id'));
            $video->id = null;
        }else{
            $video->title = "Başlıksız";
        }
        return view('shell.videos.create', compact('video'));
    }

    public function store(Request $request)
    {
        $this->validate(request(),[
            'title' => 'required'
        ]);

        $video = Video::create(request()->all());
        session()->flash('message', 'İçerik kaydedildi');
        return redirect(route('videos.edit', $video->id));
    }

    public function edit($id)
    {
        $video = Video::findOrFail($id);
        return view('shell.videos.edit',compact('video'));
    }

    public function update(Request $request, $id)
    {
        $video = Video::findOrFail($id);

        $this->validate(request(),[
            'title' => 'required'
        ]);

        $video->update(request()->all());
        session()->flash('message', 'İçerik kaydedildi');
        return redirect(route('videos.edit', $video->id));
    }

    public function show($id)
    {
        $video = Video::findOrFail($id);
        return view('shell.videos.delete',compact('video'));
    }

    public function destroy($id)
    {
        $video = Video::findOrFail($id);
        $video->delete();

        session()->flash('message', 'İçerik silindi.');
        return redirect(route('videos.index'));
    }
}
