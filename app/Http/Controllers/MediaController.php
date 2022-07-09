<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Media;

class MediaController extends Controller
{

    function massAction(){
        $action = request('action');
        $medias = explode(',',request('medias'));
        $message = "";

        if($action == "delete"){
            foreach($medias as $id){
                $media = Media::find($id);
                if($media->delete()){
                    unlink(public_path('/uploads/').$media->slug);
                }
            }

            $message = count($medias) . " Adet ortam dosyası silindi";
        }else{
            $folder = request('folder');
            if($folder == ""){
                $folder = null;
            }
            Media::whereIn('id',$medias)->update(['folder' => $folder]);
            $message = count($medias) . " Adet ortam dosyası {$folder} klasörüne taşındı";
        }
        
        session()->flash('message', $message);
        return redirect(route('media.index'));
    }

    function index()
    {
        $s = request('s');
        $folder = request('folder');
        if($s != null){
            $medias = Media::where('title', 'LIKE', '%' . $s . '%')->orderBy('created_at','desc')->paginate(200);
        }else{
            $medias = Media::where('folder', '=', $folder)->orderBy('created_at','desc')->paginate(200);
        }
        $folders = Media::select('folder')->distinct()->pluck('folder');
        return view('shell.media.index',compact('medias','folders','folder','s'));
    }

    function create()
    {
        return view('shell.media.create');
    }

    function store(Request $request)
    {
        $this->validate(request(),[
            'title' => 'required',
            'files' => 'required'
        ]);

        $uploaded = $this->saveFiles(request('title'), request('files'),request('folder'));

        session()->flash('message', $uploaded . ' ortam dosyası kaydedildi.');

        return redirect(route('media.index'));
    }

    function edit($id)
    {
        $media = Media::findOrFail($id);
        $folders = Media::select('folder')->distinct()->pluck('folder');
        $data = $this->populateDropdowns($media);
        return view('shell.media.edit',compact('media','data','folders'));
    }

    function update(Request $request, $id)
    {
        $this->validate(request(),[
            'title' => 'required'
        ]);
        $media = Media::findOrFail($id);
        $media->title = request('title');
        $media->folder = request('folder');
        $media->save();

        session()->flash('message', 'İçerik güncellendi.');
        return redirect(route('media.index'));
    }

    function show($id)
    {
        $media = Media::findOrFail($id);
        $data = $this->populateDropdowns($media);
        return view('shell.media.delete',compact('media','data'));
    }

    function destroy($id)
    {
        $media = Media::findOrFail($id);
        if($media->delete()){
            unlink(public_path('/uploads/').$media->slug);
        }

        session()->flash('message', 'İçerik silindi.');
        return redirect(route('media.index'));
    }

    function upload(){
        return $this->saveFiles(request('title'),request('files'),request('folder'));
    }

    private function populateDropdowns($media){
        $data = [];
        $data['size'] = round((filesize(public_path('/uploads/').$media->slug) / (1024*1024)),3) . " MB";
        if(Str::contains($media->type,"image") && !Str::contains($media->type,"svg")){
            $dimensions = getimagesize(public_path('/uploads/').$media->slug);
            $data['dimensions'] = $dimensions[0] . "x" . $dimensions[1] . "px";
        }
        return $data;
    }

    private function saveFiles($title, $files, $folder = null){

        $fileCounter = 0;
        $allowedExtensions = [".jpg", ".jpeg", ".png", ".gif", ".doc", ".docx", ".pdf", ".xls", ".xlsx", ".ppt", ".pptx", ".txt", ".mp4", ".mp3",".mov",".svg"];
        $year = date('Y');
        $month = date('m');
        $dir = public_path("/uploads/{$year}/{$month}/");

        foreach($files as $file){
            $extension = '.'.$file->getClientOriginalExtension();

            if(in_array($extension,$allowedExtensions)){
                $fileName = Str::slug($title);
                $type = $file->getMimeType();
                $path = $dir . $fileName.$extension;
                while(file_exists($path)){
                    $counter = 0;
                    $last = explode("--",$fileName);
                    if(isset($last[1])){
                        $counter = (int) $last[1];
                        $fileName = $last[0];
                    }
                    $counter++;
                    $fileName .= "--".$counter;
                    $path = $dir . $fileName.$extension;
                }
                $result = $file->move($dir,$fileName.$extension);

                Media::create([
                    'title' => $title,
                    'slug' => "{$year}/{$month}/{$fileName}{$extension}",
                    'type' => $type,
                    'folder' => $folder
                ]);

                $fileCounter += 1;

            }
        }

        return $fileCounter;
    }
}
