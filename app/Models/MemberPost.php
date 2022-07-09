<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MemberPost extends Model
{
    protected $guarded = ['id'];
    public $timestamps = false;
    public $table = 'memberposts';

    public function media(){
        return $this->belongsTo('App\Models\Media');
    }
    
    public function pdf(){
        return $this->belongsTo('App\Models\Media');
    }
}
