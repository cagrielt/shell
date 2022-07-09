<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $guarded = ['id'];
    public $timestamps = false;

    public function ogimage(){
        return $this->belongsTo('App\Models\Media');
    }
}
