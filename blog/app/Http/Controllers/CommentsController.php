<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use App\Http\Requests\CommentPostStore;

class CommentsController extends Controller
{
    public function store(Post $post, CommentPostStore $request){

        $this->validate($request, $request->rules());

        $post->addComment(request('body'));

        return back();

    }
}
