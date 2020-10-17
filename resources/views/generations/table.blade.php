<table class="table table-striped">
    <thead>
        <tr>
            <th>GENERATION ID</th>
            <th>TIME OF CREATION</th>
            <th>USER ID</th> <!--Final version won't require user id to be displayed-->
            <th>GENERATED LYRICS</th>
            <th>USER RATING</th>
            <th>OPTIONS</th>
        </tr>
    </thead>
    <tbody>
        @forelse($generations as $generation)   <!-- $generations == content of DB as defined in index function of controller -->
            <tr>
                <td>{{ $generation -> id }}</td>
                <td>{{ $generation -> created_at }}</td>
                <td>{{ $generation -> user_id }}</td>
                <td>{{ $generation -> lyrics }}</td>
                <td>{{ $generation -> user_rating }}</td>
                <td>
                    <button class="btn btn-primary">SHARE</button>


                    <button class="btn btn-secondary">SAVE TO DRIVE</button>


                    <form action=" {{ route('generations.destroy', $generation->id) }} " method="post">
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