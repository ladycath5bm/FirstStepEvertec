@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <meta http-equiv="X-UA-Compatible" content="ie=edge">
                    <title>Edit: Client Data</title>
                </head>
                <body>
                    <br>
                    <div class="row-md-0 offset-md-0">
                        <div class="col-md-0 offset-md-4">
                            <h1>
                                Edit Client Data 
                                <br><br>
                            </h1>
                        </div>
                    </div>
                    @if (count($errors) > 0)

                        <div class="alert alert-danger" role="alert">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                            </ul>
                        </div>
                        
                    @endif
                    <form action="{{ route('clients.update', $client) }}" method="POST">
                        @csrf 
                        @method('PUT')
                        <!--<label for="first_name">First name</label>-->
                        <div class="row md-3">
                            <label for="first_name" class="col-md-3 col-form-label text-md-end">{{ __('First Name') }}</label>
                            <div class="col-md-7">
                                <input type="name" name="first_name" id="first_name" class="form-control" value="{{ $client->first_name }}" autofocus>
                            </div>
                        </div>
                        <br>

                        <!--<label for="last_name">Last name</label>-->
                        <div class="row md-3">
                            <label for="last_name" class="col-md-3 col-form-label text-md-end">{{ __('Last Name') }}</label>
                            <div class="col-md-7">
                                <input type="text" name="last_name" id="last_name" class="form-control" value="{{ $client->last_name }}">
                            </div>
                        </div>
                        <br>

                        <!--<label for="Email">Email</label>-->
                        <div class="row md-3">
                            <label for="email" class="col-md-3 col-form-label text-md-end">{{ __('Email') }}</label>
                            <div class="col-md-7">
                                <input type="email" name="email" id="email" class="form-control" value="{{ $client->email }}">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <br>

                        <!--<label for="phone_number">Phone Number</label>-->
                        <div class="row md-3">
                            <label for="phone_number" class="col-md-3 col-form-label text-md-end">{{ __('Phone Number') }}</label>

                            <div class="col-md-7">
                                <input type="tel" name="phone_number" id="phone_number" class="form-control" value="{{ $client->phone_number }}" required autocomplete="phone_number">
                            </div>
                        </div>
                        <br>

                        <!--<label for="country">Country</label>-->
                        <div class="row md-3">
                            <label for="country" class="col-md-3 col-form-label text-md-end">{{ __('Country') }}</label>
                            <div class="col-md-7">
                                <input type="text" name="country" id="country" class="form-control" value="{{ $client->country }}"  required autocomplete="country">
                            </div>
                        </div>
                        <br>

                        <!--<label for="city">City</label>-->
                        <div class="row md-3">
                            <label for="city" class="col-md-3 col-form-label text-md-end">{{ __('City') }}</label>
                            <div class="col-md-7">
                                <input type="text" name="city" id="city" class="form-control" value="{{ $client->city }}"  required autocomplete="city">
                            </div>
                        </div>
                        <br>
                        <!--<label for="adress">Address</label>-->
                        <div class="row md-3">
                            <label for="adress" class="col-md-3 col-form-label text-md-end">{{ __('Address') }}</label>
                            <div class="col-md-7">
                                <input type="address" name="adress" id="adress" class="form-control" value="{{ $client->adress }}" required autocomplete="adress">
                            </div>
                        </div>
                        <br>

                        <div class="row md-3">
                            <label for="status" class="col-md-3 col-form-label text-md-end">{{ __('Status') }}</label>
                            <div class="col-md-2">
                            @if ( $client->status == 1 )
                                <input type="radio" name="status" id="enable" value="{{ $client->status = 1 }}" checked>
                                <label for="enable">Enable</label><br>

                                <input type="radio" name="status" id="disable" value="{{ $client->status = 0 }}">
                                <label for="disable">Disable</label><br>
                            @else
                                <input type="radio" name="status" id="enable" value="{{ $client->status = 1 }}">
                                <label for="enable">Enable</label><br>

                                <input type="radio" name="status" id="disable" value="{{ $client->status = 0 }}" checked>
                                <label for="disable">Disable</label><br>

                            @endif

                            </div>
                        </div>

                        <!--<input type="submit" class="checkout-button" id="checkout-button" name="checkout-button" disabled="disabled"></button>-->
                        <br>

                        <div class="row-mb-0 offset-md-0">
                            <div class="col-md-0 offset-md-2">
                                
                                <button type="submit" class="btn btn-primary">Update </button>
                                
                                <a href="{{ route('clients.index') }}" class="btn btn-success">Back</a>    
                            </div>
                            
                        <br>
                    </form>
                </body>


            </div>
        </div>
    </div>
</div>
@endsection
