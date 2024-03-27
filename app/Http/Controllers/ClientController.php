<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Country;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    
    public function index()
    {
        $clients = Client::with('country')->get();
        return inertia('ClientList', compact('clients'));
    }

   
    public function create()
    {
        $countries = Country::all();
        return inertia('ClientCreate', compact('countries'));
    }

    
    public function store(Request $request)
    {
        $client = Client::create($request->validate([
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'country_id' => 'required|exists:countries,id',
        ]));

        return redirect()->route('clients.index');
    }

   
    public function edit(Client $client)
    {
        $countries = Country::all();
        return inertia('ClientEditModal', compact('client', 'countries'));
    }

   
    public function update(Request $request, Client $client)
    {
        $client->update($request->validate([
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'country_id' => 'required|exists:countries,id',
        ]));

        return redirect()->route('clients.index');
    }

   
    public function destroy(Client $client)
    {
        $client->delete();
        return redirect()->route('clients.index');
    }
}