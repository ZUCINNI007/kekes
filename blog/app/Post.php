<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Http\Requests\CommentPostStore;

class Post extends Model
{

    protected $fillable = ['title', 'body'];


    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function addComment($body){
        $this->comments()->create(compact('body'));
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

}
