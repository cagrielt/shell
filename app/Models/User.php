<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $guarded = ['id'];
    public $timestamps = false;
    
    public function profile(){
        return $this->belongsTo('App\Models\Media');
    }
}
