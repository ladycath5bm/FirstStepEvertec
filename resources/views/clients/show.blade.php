@extends('layouts.app')

@section('content')
<div class="container">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Update: Client-Data</title>
    </head>
    <body>
        <h1>
            Client Data id: {{ $client->id }}
        </h1>
        <br>
        <p>
            <label for="first_name" ><b>{{ __('First Name: ') }}</b></label>
            {{ $client->first_name }}
        </p>
        <p>
            <label for="last_name" ><b>{{ __('Last Name: ') }}</b></label>
            {{ $client->last_name }}
        </p>
        <p>
            <label for="email" ><b>{{ __('Email: ') }}</b></label>
            {{ $client->email }}
        </p>
        <p>
            <label for="phone_number" ><b>{{ __('Phone Number: ') }}</b></label>
            {{ $client->phone_number }}
        </p>
        <p>
            <label for="country" ><b>{{ __('Country: ') }}</b></label>
            {{ $client->country }}
        </p>
        <p>
            <label for="city" ><b>{{ __('City: ') }}</b></label>
            {{ $client->city }}
        </p>
        <p>
            <label for="adress" ><b>{{ __('Address: ') }}</b></label>
            {{ $client->adress }}
        </p>
        <p>
            <label for="status" ><b>{{ __('Status: ') }}</b></label>
            @if ( $client->status == 1)
                {{ __('Enable') }}
            @else
                {{ __('Disable') }}
            @endif
        </p>
        <p> 
            <a href="{{ route('clients.index') }}" class="btn btn-success">Back</a>
        </p>
    </body>
</div>
@endsection