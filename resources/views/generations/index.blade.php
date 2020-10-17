<!--View to display the previously generated lyrics of the user -->
@extends('layouts/app')

@section('content')
    <div class="mt-5">
        <h1>View previous generations</h1>
        
        @include('generations/table', compact('generations'))
    </div>
@endsection