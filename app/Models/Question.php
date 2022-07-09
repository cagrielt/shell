<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $guarded = ['id'];
    public $timestamps = false;

    public function user(){
        return $this->belongsTo('App\Models\LaunchUser');
    }
}