<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'body', 'user_id'];

    public function author() {
    	return $this->belongesTo('App\User');
    }
    public function post_images() {
    	return $this->hasMany('App\PostImage');
    }
}
