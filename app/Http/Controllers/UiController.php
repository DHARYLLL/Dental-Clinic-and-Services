<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UiController extends Controller
{
    // Patient UI
    public function login(){
        return view('patientUI.login');
    }

    public function register(){
        return view('patientUI.register');
    }

    public function profile(){
        return view('patientUI.profile');
    }

    public function welcome(){
        return view('patientUI.welcome');
    }
 // Patient UI


//  Admin UI
    public function dashboard(){
        return view('adminUI.adminDashboard');
    }

    public function dentist(){
        return view('adminUI.dentist');
    }

    public function staff(){
        return view('adminUI.staff');
    }

    public function service(){
        return view('adminUI.service');
    }

    public function patient(){
        return view('adminUI.patient');
    }

    public function appointment(){
        return view('adminUI.appointment');
    }

    public function treatment_record(){
        return view('adminUI.treatment_record');
    }

    public function supply(){
        return view('adminUI.supply');
    }
//  Admin UI
}
