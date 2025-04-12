@extends('layout.layout')
@section('title', 'Admin Dashboard')

@section('content')
<div class="container-fluid vh-100">
   <div class="row border border-start-0 border-end-0 border-top-0 border-2 ">
      <div class="col col-2  d-flex justify-content-center">
         <img class="me-3" height="65" width="65" src="{{ asset('images/final_logo.svg') }}" alt="Clinic Logo">
      </div>

      <div class="col d-flex align-items-center">

         @yield('breadcrumb')

      </div>

      <div class="col d-flex justify-content-end align-items-center pe-3">
         <div>
            <p>Hi, Admin</p>
         </div>

      </div>
   </div>

   <div class="row">
      <div style="background-color: #1e466b !important;" class="col-2">
         <div class="p-3">
            <a class="admin-btn" href="{{route('adminUI.dashboard')}}"><i
                  class="bi bi-house-door fs-5 me-2"></i>Dashboard</a>
         </div>

         <div class="p-3">
            <a class="admin-btn" href="{{route('adminUI.dentist')}}"><i
                  class="bi bi-people-fill fs-5 me-2"></i>Dentists</a>
         </div>

         <div class="p-3">
            <a class="admin-btn" href="{{route('adminUI.staff')}}"> <i
                  class="bi bi-person-gear fs-5 me-2"></i>Staffs</a>
         </div>

         <div class="p-3">
            <a class="admin-btn" href="{{route('adminUI.service')}}"><i
                  class="bi bi-card-list fs-5 me-2"></i>Services</a>
         </div>

         <div class="p-3">
            <a class="admin-btn" href="{{route('adminUI.patient')}}"><i
                  class="bi bi-person-lines-fill fs-5 me-2"></i>Patients</a>
         </div>

         <div class="p-3">
            <a class="admin-btn" href="{{route('adminUI.appointment')}}"><i
                  class="bi bi-calendar-week fs-5 me-2"></i>Appointments</a>
         </div>

         <div class="p-3">
            <a class="admin-btn" href="{{route('adminUI.treatment_record')}}"><i
                  class="bi bi-clock-history fs-5 me-2"></i>Treatment Records</a>
         </div>

         <div class="p-3">
            <a class="admin-btn" href="{{route('adminUI.supply')}}"><i class="bi bi-box-seam fs-5 me-2"></i>Supplies</a>
         </div>

         <div class="p-3">
            <a class="admin-btn" href=""><i class="bi bi-arrow-return-left fs-5 me-2"></i>Logout</a>
         </div>
      </div>

      <div class="col border">
         @yield('adminContent')
      </div>

   </div>

</div>
@endsection