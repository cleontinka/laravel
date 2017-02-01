<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{

    protected $guarded = ['id','remember_token','created_at','updated_at','deleted_at'];
    public function articles()
    {
        return $this->hasMany('App\Models\Post');
    }
}
