<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit User Data</title>
</head>
<body>
    <h1>
        Edit User Data 
    </h1>
    <form action="{{ route('clients.update', $client) }}" method="POST">
        @csrf 
        @method('PUT')
        <input type="text" name="first_name" id="first_name" value="{{ $client->first_name }}">
        <input type="text" name="last_name" id="last_name" value="{{ $client->last_name }}">
        <input type="text" name="email" id="email" value="{{ $client->email }}">
        <input type="text" name="phone_number" id="phone_number" value="{{ $client->phone_number }}">
        <input type="text" name="country" id="country" value="{{ $client->country }}">
        <input type="text" name="city" id="city" value="{{ $client->city }}">
        <input type="text" name="adress" id="adress" value="{{ $client->adress }}">
        <br>
        <br>
        <button type="submit">Update</button>
    
    </form>
    <br>
    <p>
        <a href="{{ route('clients.index') }}">Back</a>
    </p>
</body>
</html>