<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'comment' => 'required',
            'post_id' => 'required'
        ]);
        
        $input = $request->all();

        Comment::create($input);

        return redirect()->back();
    }
}