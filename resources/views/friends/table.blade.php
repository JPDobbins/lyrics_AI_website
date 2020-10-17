<table class="table table-striped">
    <thead>
        <tr>
            <th>Frind Link ID</th>
            <th>Link A</th>
            <th>Link B</th>
        </tr>
    </thead>
    <tbody>
        @forelse($friends as $friend)
            <tr>
                <td>{{ $friend -> friends_link_id }}</td>
                <td>{{ $friend -> user_id}}</td>
                <td>{{ $friend -> user_link }}</td>
                <td>
                <a class="btn btn-primary" href="{{ route('messages.create') }}" role="button">message</a> 



                    <!--<button class="btn btn-danger">REMOVE FRIEND</button> --> <!-- vue.js alert confirming their choise?-->
                    <form action=" {{ route('friends.destroy', $friend->friends_link_id)}} " method="post">
                        @csrf
                        @method('delete')
                        <input class="btn btn-danger" type="submit" value="delete" role="button">

                    </form>
                </td>
            </tr>
        @empty
        @endforelse
    </tbody>
</table>