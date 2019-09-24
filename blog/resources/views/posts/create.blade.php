@extends('layouts.master')


@section('content')

    <div class="col-md-8">

        <h1>create a POST</h1>

        <hr>

        <form method="post" action="/posts">

            {{ csrf_field() }}

            <div class="form-group">
                <label for="title">Title: </label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="title">
            </div>

            <div class="form-group">
                <label for="body">Body:</label>
                <textarea class="form-control" rows="7" name="body"></textarea>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Post!</button>
            </div>

            @include('layouts.errors')

        </form>

    </div>

@endsection