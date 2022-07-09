<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;

class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::orderBy('order')->get();
        return view('shell.brands.index',compact('brands'));
    }

    public function create()
    {
        $brand = new Brand;
        $brand->title = "Başlıksız";
        $brand->order = 0;
        return view('shell.brands.create', compact('brand'));
    }

    public function store(Request $request)
    {
        $this->validate(request(),[
            'title' => 'required',
            'order' => 'required'
        ]);

        $brand = Brand::create(request()->all());
        session()->flash('message', 'İçerik kaydedildi');
        return redirect(route('brands.edit', $brand->id));
    }

    public function edit($id)
    {
        $brand = Brand::findOrFail($id);
        return view('shell.brands.edit',compact('brand'));
    }

    public function update(Request $request, $id)
    {
        $brand = Brand::findOrFail($id);

        $this->validate(request(),[
            'title' => 'required',
            'order' => 'required'
        ]);

        $brand->update(request()->all());
        session()->flash('message', 'İçerik kaydedildi');
        return redirect(route('brands.edit', $brand->id));
    }

    public function show($id)
    {
        $brand = Brand::findOrFail($id);
        return view('shell.brands.delete',compact('brand'));
    }

    public function destroy($id)
    {
        $brand = Brand::findOrFail($id);
        $brand->delete();

        session()->flash('message', 'İçerik silindi.');
        return redirect(route('brands.index'));
    }
}
