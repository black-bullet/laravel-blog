<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'content', 'author'];

    public function getLastPosts()
    {
        return Post::orderBy("created_at", "DESC")->get();
    }

    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }
}
