<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Post $postModel)
    {
        $posts = $postModel->getLastPosts();
        return view('post.index', ['posts' => $posts]);
    }

    public function create()
    {
        return view('post.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
            'author' => 'required'
        ]);

        $input = $request->all();

        Post::create($input);

        return redirect()->route('posts.index');
    }

    public function show($id)
    {
        return view('post.show', ['post' => Post::findOrFail($id)]);
    }

    public function edit($id)
    {
        return view('post.edit', ['post' => Post::findOrFail($id)]);
    }

    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);

        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
            'author' => 'required'
        ]);

        $input = $request->all();

        $post->fill($input)->save();

        return redirect()->route('posts.index');
    }

    public function destroy($id)
    {
        Post::destroy($id);
        return redirect()->route('posts.index');
    }
}