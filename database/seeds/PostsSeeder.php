<?php

use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsSeeder extends Seeder
{
    public function run()
    {
        DB::table('posts')->delete();
        Post::create([
            'title' => 'First Post',
            'content' => 'My first post',
            'author' => 'Yevgeniy Zholkevskiy',
            'published'=>true
        ]);

        Post::create([
            'title' => 'Two Post',
            'content' => 'My second post',
            'author' => 'Yevgeniy Zholkevskiy',
            'published'=>true
        ]);

        Post::create([
            'title' => 'Three Post',
            'content' => 'My third post',
            'author' => 'Yevgeniy Zholkevskiy',
            'published'=>true
        ]);
    }
}