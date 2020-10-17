<table class="table table-striped">
    <thead>
        <tr>
            <th>POST ID</th>
            <th>POST CAPTION</th>
            <th>USER ID</th> 
            <th>LYRICS ID</th>
        </tr>
    </thead>
    <tbody>
        @forelse($posts as $post)   
            <tr>
                <td>{{ $post ->  post_id}}</td>
                <td>{{ $post ->  post_message}}</td>
                <td>{{ $post ->  user_id}}</td>
                <td>{{ $post ->  lyrics_id}}</td>
                <td>
                    <form action=" {{ route('posts.destroy', $post->id) }} " method="post">
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