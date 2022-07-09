<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slide;

class SlideController extends Controller
{
    public function index()
    {
        $slides = Slide::orderBy('order')->get();
        return view('shell.slides.index',compact('slides'));
    }

    public function create()
    {
        $slide = new Slide;
        if(request('origin_id')){
            $slide = Slide::find(request('origin_id'));
            $slide->id = null;
        }else{
            $slide->title = "Başlıksız";
            $slide->order = 0;
        }
        return view('shell.slides.create', compact('slide'));
    }

    public function store(Request $request)
    {
        $this->validate(request(),[
            'title' => 'required',
            'order' => 'required'
        ]);

        request()['newtab'] = request()->has('newtab');

        $slide = Slide::create(request()->all());
        session()->flash('message', 'İçerik kaydedildi');
        return redirect(route('slides.edit', $slide->id));
    }

    public function edit($id)
    {
        $slide = Slide::findOrFail($id);
        return view('shell.slides.edit',compact('slide'));
    }

    public function update(Request $request, $id)
    {
        $slide = Slide::findOrFail($id);

        $this->validate(request(),[
            'title' => 'required',
            'order' => 'required'
        ]);

        request()['newtab'] = request()->has('newtab');

        $slide->update(request()->all());
        session()->flash('message', 'İçerik kaydedildi');
        return redirect(route('slides.edit', $slide->id));
    }

    public function show($id)
    {
        $slide = Slide::findOrFail($id);
        return view('shell.slides.delete',compact('slide'));
    }

    public function destroy($id)
    {
        $slide = Slide::findOrFail($id);
        $slide->delete();

        session()->flash('message', 'İçerik silindi.');
        return redirect(route('slides.index'));
    }
}
