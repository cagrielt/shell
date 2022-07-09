<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $guarded = ['id'];
    public $timestamps = false;

    public function media(){
        return $this->belongsTo('App\Models\Media');
    }
}
