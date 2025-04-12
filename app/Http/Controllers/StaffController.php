<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $staffs = Staff::all();
        return view('adminUI.staff', ['staffs' => $staffs]);
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
            'fname' => 'required|string',
            'lname' => 'required|string',
            'email' => 'required|email|string',
            'address' => 'required|string',
            'contact_number' => 'required|integer',
            'password' => 'required|min:8'
        ]);

        $data['password'] = Hash::make($data['password']);

        Staff::create($data);
        return redirect(route('adminUI.staff'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Staff $staff)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Staff $staff)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Staff $staff)
    {
        $data = $request->validate([
            'fname' => 'required|string',
            'lname' => 'required|string',
            'email' => 'required|email|unique:staff,email,' . $staff->id,
            'address' => 'required|string',
            'contact_number' => 'required|integer',
            'password' => 'nullable|min:8'
        ]);

        if (!empty($data['password'])) {
            $data['password'] = Hash::make($data['password']);
        } else {
            unset($data['password']);
        }

        $staff->update($data);
        return redirect(route('adminUI.staff'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Staff $staff)
    {
        $staff->delete();
        return redirect(route('adminUI.staff'));
    }
}