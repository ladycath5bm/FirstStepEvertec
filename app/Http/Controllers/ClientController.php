<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClientRequest;
use App\Http\Requests\UpdateClientRequest;
use App\Models\Client;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
               
        $data['clients'] = Client::paginate(10);

        return view('clients.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreClientRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClientRequest $request)
    {
        $vars = [
            'first_name' => 'required|string|max:100',
            'last_name' => 'required|string|max:100',
            'email' => 'required|email',
            'password' => 'required|password|max:20',
            'phone_number' => 'required|string|max:25',
            'country' => 'required|string|max:25',
            'city' => 'required|string|max:25',
            'adress' => 'required|string|max:100',
            'status' => 'required|integer|max:1',
        ];

        $message = [
            'required' => 'The field :attribute is required',
        ];

        $this->validate($request, $vars, $message);

        $dataClient = request()->except('_token');
        Client::insert($dataClient);

        return redirect()->route('clients.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        return view('clients.show', ['client' => $client]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        return view('clients.edit', ['client' => $client]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateClientRequest  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */

    public function update(UpdateClientRequest $request, Client $client)
    {
        //update data-client
        $vars = [
            'first_name' => 'required|string|max:100',
            'last_name' => 'required|string|max:100',
            'email' => 'required|email',
            'phone_number' => 'required|string|max:25',
            'country' => 'required|string|max:25',
            'city' => 'required|string|max:25',
            'adress' => 'required|string|max:100',
            'status' => 'required|integer|max:1',
        ];

        $message = [
            'required' => 'The field :attribute is required',
        ];

        $this->validate($request, $vars, $message);

        $client->first_name = $request->first_name;
        $client->last_name = $request->last_name;
        $client->email = $request->email;
        $client->phone_number = $request->phone_number;
        $client->country = $request->country;
        $client->city = $request->city;
        $client->adress = $request->adress;
        $client->status = $request->status;
        
        $client->save();

        return redirect()->route('clients.index')->with('message', 'Client edited!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        $client->delete();

        return redirect()->route('clients.index')->with('message', 'Client delete!');
    }
}
