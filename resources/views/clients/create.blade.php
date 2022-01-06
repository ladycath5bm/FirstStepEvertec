@extends('layouts.app')
@section('content')

@if (count($errors) > 0)

    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
    
@endif

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <title>New Client</title>
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <meta http-equiv="X-UA-Compatible" content="ie=edge">
                    <title>Register new client</title>
                </head>
                
                <br>
                    <div class="row-md-0 offset-md-0">
                        <div class="col-md-0 offset-md-4">
                            <h1>
                                Register new client
                                <br><br>
                            </h1>
                        </div>
                    </div>
                    
                <form action="{{ url('/clients') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="row md-3">
                        <label for="first_name" class="col-md-3 col-form-label text-md-end">{{ __('First Name') }}</label>
                        <div class="col-md-7">
                            <input type="text" name="first_name" id="first_name" class="form-control">
                        </div>
                    </div>
                    <br>

                    <div class="row md-3">
                        <label for="last_name" class="col-md-3 col-form-label text-md-end">{{ __('Last Name') }}</label>
                        <div class="col-md-7">
                            <input type="last_name" name="last_name" id="last_name" class="form-control">
                        </div>
                    </div>
                    <br>

                    <div class="row md-3">
                        <label for="email" class="col-md-3 col-form-label text-md-end">{{ __('Email') }}</label>
                        <div class="col-md-7">
                            <input type="email" name="email" id="email" class="form-control">
                        </div>
                    </div>
                    <br>

                    <div class="row md-3">
                        <label for="password" class="col-md-3 col-form-label text-md-end">{{ __('Password') }}</label>
                        <div class="col-md-7">
                            <input type="password" name="password" id="password" class="form-control">
                        </div>
                    </div>
                    <br>

                    <div class="row md-3">
                        <label for="phone_number" class="col-md-3 col-form-label text-md-end">{{ __('Phone Number') }}</label>
                        <div class="col-md-7">
                            <input type="tel" name="phone_number" id="phone_number" class="form-control">
                        </div>
                    </div>
                    <br>

                    <div class="row md-3">
                        <label for="country" class="col-md-3 col-form-label text-md-end">{{ __('Country') }}</label>
                        <div class="col-md-7">
                            <input type="country" name="country" id="country" class="form-control">
                        </div>
                    </div>
                    <br>
                    <div class="row md-3">
                        <label for="city" class="col-md-3 col-form-label text-md-end">{{ __('City') }}</label>
                        <div class="col-md-7">
                            <input type="city" name="city" id="city" class="form-control">
                        </div>
                    </div>
                    <br>

                    <div class="row md-3">
                        <label for="adress" class="col-md-3 col-form-label text-md-end">{{ __('Address') }}</label>
                        <div class="col-md-7">
                            <input type="address" name="adress" id="adress" class="form-control">
                        </div>
                    </div>
                    <br>

                    <div class="row md-3">
                        <label for="status" class="col-md-3 col-form-label text-md-end">{{ __('Status') }}</label>
                        <div class="col-md-2">
                            <input type="radio" name="status" id="enable" value="1" checked>
                            <label for="enable">Enable</label><br>

                            <input type="radio" name="status" id="disable" value="0">
                            <label for="disable">Disable</label><br>

                        </div>
                    </div>

                    <br>
                    <br>
                    <div class="col-md-0 offset-md-2">
                        <input type="submit" value="Create" class="btn btn-primary">
                        <br>
                        <br>
                        <p>
                            <a href="{{ route('clients.index') }}" class="btn btn-success">Back to list </a>
                        </p>
                    </div>
                </form>
                </div>
                @endsection