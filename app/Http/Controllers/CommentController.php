<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $post = Post::findOrFail($id);

        $comment = new Comment();

        $comment->post_id = $id;
        $comment->content = $request->input('content');

        $comment->save();

        return redirect()->route('posts.show', ['post'=>$post]);
    }
}
