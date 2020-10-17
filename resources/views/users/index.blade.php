@extends('layouts/app')

@section('content')
    <div class="mt-5">
        <h1>Users</h1>

        @include('users/table', compact('users'))
    </div>
@endsection