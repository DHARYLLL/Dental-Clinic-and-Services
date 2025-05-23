@extends('layout.admin_nav_layout')

@section('title', 'Staff Lists')

@section('breadcrumb')

<div class="px-4 py-2 text-secondary" style="font-size: 0.95rem;">
   <span><a href="" class="text-decoration-none text-dark">Home</a></span>
   <span class="mx-2">></span>
   <span class="text-muted">Staff</span>
</div>

@endsection

@section('adminContent')

<style>
   .modal-dialog {
      margin: auto !important;
   }

   .modal,
   .modal-dialog,
   .modal-content {
      padding: 15px !important;
   }
</style>

<div class="row m-2">
   <div class="card shadow">
      <div class="card-body d-flex justify-content-between">

         <div class="row w-100 p-3">
            <div class="col">
               <h3>Staff Lists</h3>
            </div>

            <div class="col col-2">
               <button class="btn btn-dark w-100 p-1" data-bs-toggle="modal" data-bs-target="#addSuppliesModal">ADD <i
                     class="ms-2 bi bi-plus-circle-fill"></i></button>
            </div>
         </div>
      </div>
   </div>
</div>

<div class="row m-2">
   <div class="card">
      <div class="card-body p-1">
         @if($staffs->isEmpty())
         <p class="alert text-center text-secondary">No supplies available.</p>
         @else
         @foreach ($staffs as $staff)
         <div class="">
            <ul class="list-group mb-1 ">
               <li class="list-group-item d-flex align-items-center justify-content-between border border-2">
                  <div class="d-flex justify-content-between align-items-center w-100 px-2">
                     <div class="">
                        <span><strong>Name: </strong>{{$staff->fname}} {{ $staff->lname }}</span><br>
                        <span><strong>Email: </strong>{{$staff->email}}</span><br>
                        <span><strong>Address: </strong>{{$staff->address}}</span><br>
                        <span><strong>Contact Number: </strong>{{$staff->contact_number}}</span>
                     </div>

                     <div class="d-flex gap-3">
                        <div>
                           <button class="btn btn-dark w-100 px-2 py-1" data-bs-toggle="modal"
                              data-bs-target="#editSuppliesModal{{$staff->id}}"><i
                                 class="bi bi-pencil-square"></i></button>
                        </div>

                        <div>
                           <form action="{{route('admin.staff.destroy', ['staff' => $staff])}}" method="POST">
                              @csrf
                              @method('delete')
                              <button class="btn btn-dark w-100 px-2 py-1"><i class="bi bi-trash-fill"></i></button>
                           </form>
                        </div>
                     </div>
                  </div>
               </li>
            </ul>
         </div>

         {{-- Modal to Edit supplies --}}
         <div class="modal fade" id="editSuppliesModal{{$staff->id}}" tabindex="-1"
            aria-labelledby="editSuppliesModalLabel{{$staff->id}}" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" style="max-width: 500px;">
               <div class="modal-content">
                  <div class="modal-header fw-semibold d-flex justify-content-between">
                     <h5 class="modal-title" id="editSuppliesModalLabel{{$staff->id}}">EDIT SUPPLIES</h5>
                     <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>

                  <div class="modal-body mt-3">
                     <form action="{{route('admin.staff.update', ['staff' => $staff->id])}}" method="POST">
                        @csrf
                        @method('put')
                        <div class="row mb-3 gap-2">
                           <div class="col">
                              <input style="background-color: #d9d9d9" type="text" id="fname" name="fname"
                                 class="form-control p-2" value="{{ $staff->fname }}">
                           </div>

                           <div class="col">
                              <input style="background-color: #d9d9d9" type="text" id="lname" name="lname"
                                 class="form-control p-2" value="{{ $staff->lname }}">
                           </div>
                        </div>

                        <div class="row mb-3 gap-2">
                           <div class="col">
                              <input style="background-color: #d9d9d9" type="email" id="email" name="email"
                                 class="form-control p-2" value="{{ $staff->email }}">
                           </div>
                        </div>

                        <div class="row mb-3 gap-2">
                           <div class="col">
                              <input style="background-color: #d9d9d9" type="text" id="address" name="address"
                                 class="form-control p-2" value="{{ $staff->address }}">
                           </div>
                        </div>

                        <div class="row mb-3 gap-2">
                           <div class="col">
                              <input style="background-color: #d9d9d9" type="text" id="contact_number"
                                 name="contact_number" class="form-control p-2" value="{{ $staff->contact_number }}">
                           </div>
                        </div>

                        <div class="row mb-3 gap-2">
                           <div class="col">
                              <input style="background-color: #d9d9d9" type="password" id="password" name="password"
                                 class="form-control p-2" value="Enter new passowrd (optional)">
                           </div>
                        </div>

                        <div class="modal-footer row mt-3 gap-2 pt-3">
                           <div class="col">
                              <button class="btn btn-outline-info text-black fw-bold w-100 p-1" type="button"
                                 data-bs-dismiss="modal">Cancel</button>
                           </div>
                           <div class="col">
                              <button class="btn w-100 fw-bold text-white p-1" style="background-color: #00a1df"
                                 type="submit">Update</button>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>

         @endforeach
         @endif

      </div>
   </div>
</div>


{{-- Modal to Add supplies --}}
<div class="modal fade" id="addSuppliesModal" tabindex="-1" aria-labelledby="addSuppliesModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered" style="max-width: 500px;">

      <div class="modal-content">
         <div class="modal-header fw-semibold d-flex justify-content-between">
            <h5 class="modal-title" id="addSuppliesModalLabel">ADD SUPPLIES</h5>
            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>

         <div class="modal-body mt-3">
            <form action="{{route('admin.staff.store')}}" method="POST">
               @csrf
               @method('POST')
               <div class="row mb-3 gap-2">
                  <div class="col">
                     <input style="background-color: #d9d9d9" type="text" id="fname" name="fname"
                        placeholder="First Name" class="form-control p-2">
                  </div>

                  <div class="col">
                     <input style="background-color: #d9d9d9" type="text" id="lname" name="lname"
                        placeholder="Last Name" class="form-control p-2">
                  </div>

               </div>

               <div class="row mb-3 gap-2">
                  <div class="col">
                     <input style="background-color: #d9d9d9" type="email" id="email" name="email" placeholder="Email"
                        class="form-control p-2">
                  </div>
               </div>

               <div class="row mb-3 gap-2">
                  <div class="col">
                     <input style="background-color: #d9d9d9" type="text" id="address" name="address"
                        placeholder="Address" class="form-control p-2">
                  </div>
               </div>

               <div class="row mb-3 gap-2">
                  <div class="col">
                     <input style="background-color: #d9d9d9" type="text" id="contact_number" name="contact_number"
                        placeholder="Contact Number" class="form-control p-2">
                  </div>
               </div>

               <div class="row mb-3 gap-2">
                  <div class="col">
                     <input style="background-color: #d9d9d9" type="password" id="password" name="password"
                        placeholder="password" class="form-control p-2">
                  </div>
               </div>

               <div class="modal-footer row mt-3 gap-2 pt-3">
                  <div class="col">
                     <button class="btn btn-outline-info text-black fw-bold w-100 p-1" type="button"
                        data-bs-dismiss="modal">Cancel</button>
                  </div>
                  <div class="col">
                     <button class="btn w-100 fw-bold text-white p-1" style="background-color: #00a1df"
                        type="submit">Add</button>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>

@endsection