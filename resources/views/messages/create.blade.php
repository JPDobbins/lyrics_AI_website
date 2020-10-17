@extends('layouts/app')

@section('content')
        <h1>Craft new Message</h1>
        <!--User can craft new message and send it to other users registered as friends-->


        <div id="createMessages">
        <form action="{{ route('messages.index') }}" method="message.store">
                @csrf

                
                <div class="input-group input-group-sm mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Recipient</span>
                    </div>
                    <input v-model='test_input' v-bind:disabled='' type="text" class="form-control" name="header" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                </div>

                <div class="input-group input-group-sm mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Message</span>
                    </div>
                    <input v-model='test_input' v-bind:disabled='' type="text" class="form-control" name="header" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                </div>

                <div class="input-group input-group-sm mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Attached Lyrics (optional)</span>
                    </div>
                    <input v-model='test_input' v-bind:disabled='' type="text" class="form-control" name="header" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                </div>
                <div>

                <div>
                    <button class="btn btn-primary" type="submit">
                        Submit
                    </button>
                </div>


        </form>
</div>
        
@endsection
