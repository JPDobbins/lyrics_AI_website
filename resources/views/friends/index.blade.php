@extends('layouts/app')

@section('content')
    <div class="mt-5">
        <h1>Friends Page</h1>
        <a class="btn btn-primary" href="{{  route('friends.create') }}" role="button">Add New Friend</a>

        @include('friends/table', compact('friends'))
    </div>
@endsection