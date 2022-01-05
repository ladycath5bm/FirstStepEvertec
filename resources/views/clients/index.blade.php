@extends('layouts.app')

@section('content')
<div class="container">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>List: clients data</title>
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
                    <th>Status</th>
                    <th>Options</th>
                </tr>
        
            </thead>
            <tbody>
                @foreach ($clients as $client)
                
                <tr>
                    <td>{{ $client->id }}</td>
                    <td>{{ $client->first_name }}</td>
                    <td>{{ $client->last_name }}</td>
                    <td>{{ $client->email }}</td>
                    <td>{{ $client->phone_number }}</td>
                    <td>{{ $client->country }}</td>
                    <td>{{ $client->city }}</td>
                    <td>{{ $client->adress }}</td>
                    <td>
                    @if ( $client->status == 1)
                        {{ __('Enable') }}
                    @else
                        {{ __('Disable') }}
                    @endif
                    </td>
                    <td>
        
                        <a href="{{ route('clients.edit', $client) }}">Edit |</a>
                        <a href="{{ route('clients.show', $client) }}"> Show |</a>
                        <a href="#" onclick="event.preventDefault(); document.getElementById('form-{{ $client->id }}').submit();"> Delete</a>
                        <form id="form-{{ $client->id }}" action="{{ route('clients.destroy', $client) }}" method="POST">
                            @csrf
                            @method('DELETE')
                        </form>
                    </td>   
                </tr>
                @endforeach
            </tbody>
        
        </table>
        
        <p>
            <a href="{{ route('clients.create') }}" class="btn btn-primary">Register new client</a>
        </p>
        
    </body>
</div>
@endsection