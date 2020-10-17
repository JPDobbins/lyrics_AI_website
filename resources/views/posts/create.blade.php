@extends('layouts/app')

@section('content')
        <h1>Create New Post </h1>


<div id="createPosts">
        <form action="{{ route('posts.index') }}" method="post.store">
                @csrf

                
                <div class="input-group input-group-sm mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Post Header</span>
                    </div>
                    <input v-model='test_input' v-bind:disabled='' type="text" class="form-control" name="header" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                </div>

                <div class="input-group input-group-sm mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Lyrics</span>
                    </div>
                    <input v-model='test_input' v-bind:disabled='' type="text" class="form-control" name="header" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                </div>
                <div>
                    <button class="btn btn-primary" type="submit">
                        Submit
                    </button>
                </div>
        </form>
</div>
        
@endsection