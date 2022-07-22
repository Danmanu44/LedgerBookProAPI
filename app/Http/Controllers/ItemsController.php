<?php

namespace App\Http\Controllers;

use App\Models\Items;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     
     */
    public function page()
    {
        return view('items');
    }

    /**
     * Show the form for creating a new resource.
     *
     *
     */
    public function create(Request $request)
    {
        $this->validate($request, [
            'description'=> 'required|max:255',
            'type'=> 'required|in:Expire,Non expire,Others',
            'category'=> 'required|in:Approved,Not approved',
            'unit'=> 'required|in:Gombe unit,Abuja unit,Bauchi unit'
            
       ]);

       Items::create([
            'description'=> $request->description,
            'type' => $request->type,
            'category'=> $request->category,
            'unit'=> $request->unit,
            'suspend_status'=>false
       ]);

       return Redirect::to('items')->withSuccess('Items has been saved succefully');

    }

    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
    
     */
    public function show(Items $items)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     *
     */
    public function edit(Items $items)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     *
     */
    public function update(Request $request, Items $items)
    {
        //
    }

    public function destroy(Items $items)
    {
        //
    }
}
