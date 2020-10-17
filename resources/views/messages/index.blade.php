@extends('layouts/app')

@section('content')
    <div class="mt-5">
        <h1>Messages</h1>
        <a class="btn btn-primary" href="{{ route('messages.create') }}" role="button">New Message</a>
        @include('messages/table', compact('messages'))
    </div>
@endsection