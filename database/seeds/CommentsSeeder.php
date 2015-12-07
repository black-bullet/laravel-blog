<?php

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentsSeeder extends Seeder
{
    public function run()
    {
        DB::table('comments')->delete();

        $posts=Post::all()->lists('id')->toArray();
        for($i=0;$i<50;$i++){
            Comment::create([
                'post_id' => $posts[array_rand($posts, 1)],
                'name' => 'Annonim',
                'comment' => 'My first post',
                'published'=>true
            ]);
        }

    }
}