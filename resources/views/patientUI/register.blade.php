@extends('layout.layout')

@section('title', 'Register')

@section('content')
<div style="background-color: #1e466b;" class="container-fluid vh-100">
   <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-md-10 col-lg-8">
         <div class="card shadow p-3">
            <div class="card-body px-3">
               <h1 style="color:#1e466b;" class="fw-bold">Registration</h1>
               <p class="pb-3 text-secondary">Fill out the fields to create an account.</p>
               <hr>

               <form action="">
                  @csrf

                  <div class="row pt-4 gap-3">
                     <div class="col col-12 col-md-6">
                        <label for="fname">First Name</label>
                        <input type="text" id="fname" name="fname" class="form-control p-2">
                     </div>
                     <div class="col">
                        <label for="lname">Last Name</label>
                        <input type="text" id="lname" name="lname" class="form-control p-2">
                     </div>
                  </div>

                  <div class="row pt-3 gap-3">
                     <div class="col col-12 col-md-2">
                        <label for="age">Age</label>
                        <input type="number" id="age" name="age" class="form-control p-2">
                     </div>
                     <div class="col col-12 col-md-2">
                        <label for="gender">Gender</label>
                        <select id="gender" name="gender" class="form-control p-2">
                           <option value="Male">Male</option>
                           <option value="Female">Female</option>
                        </select>
                     </div>
                     <div class="col col-12 col-md-4">
                        <label for="address">Address</label>
                        <input type="text" id="address" name="address" class="form-control p-2">
                     </div>
                     <div class="col">
                        <label for="contactNum">Contact Number</label>
                        <input type="text" id="contactNum" name="contactNum" class="form-control p-2">
                     </div>
                  </div>

                  <div class="row pt-3 gap-3">
                     <div class="col col-12 col-md-6">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" id="email" name="email" class="form-control p-2">
                     </div>
                     <div class="col">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" id="password" name="password" class="form-control p-2">
                     </div>
                  </div>

                  <div class="pt-4 d-flex flex-column flex-md-row gap-3">
                     <a href="#" class="btn cancel-btn w-100 p-2 rounded-pill fw-bold text-center">Cancel</a>
                     <button type="submit"
                        class="btn log-reg w-100 p-2 rounded-pill fw-bold text-white">Register</button>
                  </div>

                  <p class="text-center mt-3">Already have an account? <a href="{{route('patientUI.login')}}"
                        class="text-info">Login</a></p>
               </form>

            </div>
         </div>
      </div>
   </div>
</div>
@endsection