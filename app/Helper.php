<?php

function IMG($media, $size = null, $classname = null){
    $result = '<img src="%s%s" class="%s" alt="%s" title="%s" />';
    $src = $media->slug;
    if($size == null){
        $src = '/uploads/'.$src;
    }else{
        $filearr = explode(".",$src);
        $filename = $filearr[0];
        $extension = $filearr[1];
        $src = '/uploads/cache/'.$filename.'-'.$size.'.'.$extension;
        if(!file_exists(public_path().$src) && file_exists(public_path('/uploads/').$media->slug)){
            $image = new \Gumlet\ImageResize(public_path('/uploads/').$media->slug);
            $image->quality_jpg = 100;
            $image->quality_webp = 100;
            $image->quality_png = 9;
            if($size == "library"){
                $image->crop(144,144);
            }elseif($size == "tiny"){
                $image->crop(80,80);
            }elseif($size == "board-member"){
                $image->crop(270,351);
            }elseif($size == "thumbnail"){
                $image->crop(400,280);
            }

            $dirname = dirname(public_path() . $src);

            if (!is_dir($dirname))
            {
                mkdir($dirname, 0755, true);
            }

            $image->save(public_path().$src);
        }
    }

    $result = sprintf($result,url('/'),$src,$classname,$media->title, $media->title);
    return $result;
}

function randomString($length = 12){
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function pageUrl($item){
    return $item->language == "tr" ? url($item->slug): url("en/" . $item->slug);
}

function boardMemberUrl($item){
    return $item->language == "tr" ? url('yonetim-kurulu/' . $item->slug): url("en/board-of-management/" . $item->slug);
}

function postUrl($item){
    return $item->language == "tr" ? url('blog/' . $item->slug): url("en/blog/" . $item->slug);
}

function newsUrl($item){
    return $item->language == "tr" ? url('ai-guncel/' . $item->slug): url("en/ai-actual/" . $item->slug);
}

function memberpostUrl($item){
    return url("uyelere-ozel/" . $item->slug);
}