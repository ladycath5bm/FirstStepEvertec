<table class="table table-light"> 
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>First Name</th>
            <th>last Name</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Country</th>
            <th>City</th>
            <th>Adress</th>
            
        
            <th>Options</th>
        </tr>

    </thead>
    <tbody>
        @foreach ($clients as $client)
        
        <tr>
            <td>{{ $client->id }}</td>
            <td>{{ $client->first_name }}}</td>
            <td>{{ $client->last_name }}</td>
            <td>{{ $client->email }}</td>
            <td>{{ $client->phone_number }}</td>
            <td>{{ $client->country }}}</td>
            <td>{{ $client->city }}</td>
            <td>{{ $client->adress }}</td>

            <td>
                <form action="{{ url('/clients/'.$client->id) }}" method="POST">
                
                @csrf
                @method('DELETE')
                <input type="submit" onclick="return confirm('Delete?')" value="Delete">
                </form>

                |

                <form action="{{ url('/clients/'.$client->id) }}" method="POST">
                
                @csrf
                @method('DELETE')
                <input type="submit" onclick="return confirm('Delete?')" value="Delete">
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>