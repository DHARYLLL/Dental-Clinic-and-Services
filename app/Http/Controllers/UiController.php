<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use App\Models\Supply;
use Illuminate\Http\Request;

class UiController extends Controller
{
    // Patient UI
    public function login()
    {
        return view('patientUI.login');
    }

    public function register()
    {
        return view('patientUI.register');
    }

    public function profile()
    {
        return view('patientUI.profile');
    }

    public function welcome(){
        return view('patientUI.welcome');
    }
    // Patient UI


    //  Admin UI
    public function dashboard()
    {
        return view('adminUI.adminDashboard');
    }

    public function dentist()
    {
        return view('adminUI.dentist');
    }

    public function staff()
    {
        $staffs = Staff::all();
        return view('adminUI.staff', ['staffs' => $staffs]);
    }

    public function service(){
        return view('adminUI.service');
    }

    public function patient()
    {
        return view('adminUI.patient');
    }

    public function appointment()
    {
        return view('adminUI.appointment');
    }

    public function treatment_record()
    {
        return view('adminUI.treatment_record');
    }

    public function supply()
    {
        $supplies = Supply::all();
        return view('adminUI.supply', ['supplies' => $supplies]);
    }
    //  Admin UI

// Staff UI
public function staff_dashboard(){
    return view('staffUI.staff_dashboard');
   }

   public function staff_supply(){
       return view('staffUI.supply');
      }

<<<<<<< HEAD
    // Staff UI
=======
// Staff UI
>>>>>>> parent of 69230df (service crud admin/staff)
}
