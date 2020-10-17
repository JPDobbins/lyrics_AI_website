@extends('layouts/app')

@section('content')
    <div class="mt-5">
        <h1>User Posts</h1>
        <a class="btn btn-primary" href="{{  route('posts.create') }}" role="button">Create New Post</a>
        @include('posts/table', compact('posts'));
    </div>
@endsection