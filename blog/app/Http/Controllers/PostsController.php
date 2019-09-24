<?php

namespace App\Http\Controllers;

use App\Post;
use App\Http\Requests\PostBlogStore;
use Carbon\Carbon;

class PostsController extends Controller
{

    public function index(){
        $posts = Post::latest()->get();

        return view('posts.index', compact('posts'));
    }

    public function show(Post $post){
        return view('posts.show', compact('post', 'comment'));
    }

    public function create(){
        return view('posts.create');
    }

    public function store(PostBlogStore $request){

        $this->validate($request, $request->rules());
        Post::create(request(['title', 'body']));

        return redirect('posts');

    }

}
