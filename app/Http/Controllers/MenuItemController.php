<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MenuItem;

class MenuItemController extends Controller
{
    function index(){
        return view('shell.menuitems.index');
    }

    function edit(){
        $position = request('position');
        $language = request('language');
        $menuItems = MenuItem::where('position', $position)->where('language',$language)->where('parent_id',null)->with('children')->orderBy('id')->get();

        if($menuItems->count() < 1){
            $firstItem = new MenuItem;
            $firstItem->title = 'metin';
            $firstItem->url = 'link';
            $menuItems->push($firstItem);
        }

        return view('shell.menuitems.edit',compact('menuItems','position','language'));
    }

    function save(){
        $position = request('position');
        $language = request('language');
        MenuItem::where('position',$position)->where('language',$language)->delete();
        $items = json_decode(request('Value'));
        foreach($items as $item){
            $this->saveMenuItem($item,$position,$language);
        }
        
        session()->flash('message', 'Menü kaydedildi');
        return redirect(route('menuitems.edit', ['position' => $position,'language' => $language]));
    }

    private function saveMenuItem($item, $position,$language,$parentId = null){
        $menuItem = MenuItem::create([
            'title' => $item->text,
            'url' => $item->link,
            'private' => $item->private,
            'newtab' => $item->newtab,
            'position' => $position,
            'language' => $language,
            'parent_id' => $parentId
        ]);

        if(isset($item->children)){
            foreach($item->children as $child){
                $this->saveMenuItem($child,$position,$language,$menuItem->id);
            }
        }
    }
}
