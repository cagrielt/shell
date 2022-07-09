<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LaunchUser extends Model
{
    protected $table = 'launch_users';
    protected $guarded = ['id'];
    public $timestamps = false;
}
