<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'content', 'author', 'createdAt', 'updatedAt'];

    public function getLastPosts()
    {
        return Post::orderBy("created_at", "DESC")->get();
    }
}
