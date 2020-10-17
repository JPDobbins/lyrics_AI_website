@extends('layouts/app')

@section('content')
    <h1> Find Friends</h1>
    <!-- User can search for other users by inputted string that matches with other users usernames-->



    <div id="findFriends">
        <form action="{{ route('friends.index') }}" method="friends.store">
                @csrf

                
                <div class="input-group input-group-sm mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Search by Username</span>
                    </div>
                    <input v-model='test_input' v-bind:disabled='' type="text" class="form-control" name="usernameSearch" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                </div>

                <div class="input-group input-group-sm mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Search by User ID</span>
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