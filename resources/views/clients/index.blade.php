<!DOCTYPE html>
<html lang="en">
<head>
    <title>Client Data</title>
</head>
<body>
    <h1>
        Client Data
    </h1>
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
                <td>{{ $client->country }}</td>
                <td>{{ $client->city }}</td>
                <td>{{ $client->adress }}</td>
    
                <td>
    
                    <a href="{{ route('clients.edit', $client) }}">Edit</a>
                    <a href="{{ route('clients.show', $client) }}">Show</a>
                    <a href="#" onclick="event.preventDefault(); document.getElementById('form-{{ $client->id }}').submit();">Delete</a>
                    <form id="form-{{ $client->id }}" action="{{ route('clients.destroy', $client) }}" method="POST">
                        @csrf
                        @method('DELETE')
                    </form>
                    <!--<form action="{{ url('/clients/'.$client->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" onclick="return confirm('Delete?')" value="Delete">
                    </form>
                    -->
                </td>
            </tr>
            @endforeach
        </tbody>
    
    </table>
</body>
</html>
