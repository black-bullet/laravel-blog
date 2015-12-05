<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['name', 'comment', 'published', 'post_id'];

    public function post()
    {
        return $this->hasOne('App\Models\Post');
    }
}