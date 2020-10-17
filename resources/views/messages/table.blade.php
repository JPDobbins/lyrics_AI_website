<table class="table table-striped">
    <thead>
        <tr>
            <th>MESSAGE ID</th>
            <th>MESSAGE</th>
            <th>SENDER</th> 
            <th>RECIEVER</th>
        </tr>
    </thead>
    <tbody>
        @forelse($messages as $message)
            <tr>
                <td>{{ $message ->  message_id}}</td>
                <td>{{ $message ->  message}}</td>
                <td>{{ $message ->  sender_id}}</td>
                <td>{{ $message ->  reciever_id}}</td>
                <td>
                    <button class="btn btn-primary">REPLY</button>



                    
                    <form action=" {{ route('messages.destroy', $message->message_id) }} " method="post">
                        @csrf
                        @method('delete')
                        <input class="btn btn-danger" type="submit" value="delete message" role="button">
                    </form>
                </td>
            </tr>
        @empty
        @endforelse
    </tbody>
</table>id