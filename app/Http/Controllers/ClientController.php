<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
    
     */
    public function page()
    {
        return view('client');
    }

    /**
     * Show the form for creating a new resource.
     *
     *
     */
    public function create(Request $request)
    {
    

        // validate

        $this->validate($request, [
            'firstname'=> 'required|max:255',
            'surname'=> 'required|max:255',
            'othername'=> 'required|max:255',
            'email'=> 'required|email|max:255',
            'password'=> 'required|min:8',
            'phone' => 'required|max:11|numeric'
        ]);

        dd('store');

        //store 
        //redirect
    }

    
    /**
     * Store a newly created resource in storage.
     *
     
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     
     */
    public function edit(Client $client)
    {
        //
    }
    /**
     * Update the specified resource in storage.
     *
     * 
     */
    public function update(Request $request, Client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     *
     */
    public function destroy(Client $client)
    {
        //
    }
}
