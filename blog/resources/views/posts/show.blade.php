@extends('layouts.master')


@section('content')

        <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
            <div class="col-md-6 px-0">
                <h1 class="display-4 font-italic">{{ $post->title }}</h1>
                <br>
                <p class="lead my-3">{{ $post->body }}</p>
                <p class="lead mb-0"><a href="/posts" class="text-white font-weight-bold">Continue reading...</a></p>
            </div>
        </div>
<div class="container">
    <div class="comment">
        <ul class="list-group">

            @foreach ($post->comments as $comment)

                <li class="list-group-item">
                    <strong>
                        {{ $comment->created_at->diffForHumans() }}
                    </strong>
                    {{ $comment->body }}
                </li>

            @endforeach

        </ul>
    </div>

    <br>
    <br>

    <div class="card">
        <div class="card-block">
            <form method="post" action="/posts/{{ $post->id }}/comments">

                {{ csrf_field() }}

                <div class="form-group">
                    <textarea name="body" class="form-control" placeholder="Comment, sir!"></textarea>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Add comment</button>
                </div>

                @include('layouts.errors')

            </form>
        </div>
    </div>
</div>

@endsection


