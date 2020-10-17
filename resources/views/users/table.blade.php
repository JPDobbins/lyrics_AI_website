<table class="table table-striped">
    <thead>
        <tr>
            <th>USER ID</th>
            <th>USER NAME</th>
            <th>EMAIL ADDRESS</th> 
            <th>PASSWORD</th>
        </tr>
    </thead>
    <tbody>
        @forelse($users as $user)   <!-- $generations == content of DB as defined in index function of controller -->
            <tr>
                <td>{{ $user ->  id }}</td>
                <td>{{ $user ->  name }}</td>
                <td>{{ $user ->  email }}</td>
                <td>{{ $user ->  password }}</td>
                <td>
                    <button class="btn btn-danger">REMOVE USER</button> <!-- vue.js alert to confirm choise? "yes i made the website i can do what i want, no take me back"-->
                </td>
            </tr>
        @empty
        @endforelse
    </tbody>
</table>