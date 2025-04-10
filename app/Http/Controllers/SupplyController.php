<?php

namespace App\Http\Controllers;

use App\Models\Supply;
use Illuminate\Http\Request;

class SupplyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $supplies = Supply::all();
        return view('staffUI.supply', ['supplies' => $supplies]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'Name' => 'required|string',
            'Quantity' => 'required|integer|min:1',
            'Description' => 'nullable|string'
        ]);

        $newSupply = Supply::create($data);
        return redirect($request->input('redirect_to', route('staffUI.supply')));
    }

    /**
     * Display the specified resource.
     */
    public function show(Supply $supply)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Supply $supply)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Supply $supply)
    {
        $data = $request->validate([
            'Name' => 'required|string',
            'Quantity' => 'required|integer|min:1',
            'Description' => 'nullable|string'
        ]);

        $supply->update($data);
        return redirect($request->input('redirect_to', route('staffUI.supply')));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Supply $supply)
    {
        $supply->delete();
        return redirect($request->input('redirect_to', route('staffUI.supply')));
    }
}
