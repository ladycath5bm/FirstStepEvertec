<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Client Data</title>
</head>
<body>
    <h1>
        Edit Client Data 
    </h1>
    <form action="{{ route('clients.update', $client) }}" method="POST">
        @csrf 
        @method('PUT')
        <p>
        <label for="first_name">First name</label>
        <br>
        <input type="text" name="first_name" id="first_name" value="{{ isset($client->first_name) ? $client->first_name : '' }}">
        </p>
        <label for="last_name">Last name</label>
        <br>
        <input type="text" name="last_name" id="last_name" value="{{ isset($client->last_name) ? $client->last_name : '' }}">
        <p>
        <label for="Email">Email</label>
        <br>
        <input type="text" name="email" id="email" value="{{ isset($client->email) ? $client->email : '' }}">
        </p>
        <label for="phone_number">Phone Number</label>
        <br>
        <input type="text" name="phone_number" id="phone_number" value="{{ isset($client->phone_number) ? $client->phone_number : '' }}">
        <p>
        <label for="country">Country</label>
        <br>
        <input type="text" name="country" id="country" value="{{ isset($client->country) ? $client->country : '' }}">
        </p>
        <label for="city">City</label>
        <br>
        <input type="text" name="city" id="city" value="{{ isset($client->city) ? $client->city : '' }}">
        <p>
        <label for="adress">Address</label>
        <br>
        <input type="text" name="adress" id="adress" value="{{ isset($client->adress) ? $client->adress : '' }}">
        </p>
        <br>
        <button type="submit">Update</button>
    
    </form>
    <br>
    <p>
        <a href="{{ route('clients.index') }}">Back</a>
    </p>
</body>
</html>