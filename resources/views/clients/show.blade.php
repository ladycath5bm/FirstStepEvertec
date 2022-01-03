<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update: Client-Data</title>
</head>
<body>
    <h1>
        Data
    </h1>
    <p>
        {{ $client->first_name }}
    </p>
    <p>
        {{ $client->last_name }}
    </p>
    <p>
        {{ $client->email }}
    </p>
    <p>
        {{ $client->phone_number }}
    </p>
    <p>
        {{ $client->country }}
    </p>
    <p>
        {{ $client->city }}
    </p>
    <p>
        {{ $client->adress }}
    </p>
    <p> 
        <a href="{{ route('clients.index') }}">Back</a>
    </p>
</body>
</html>