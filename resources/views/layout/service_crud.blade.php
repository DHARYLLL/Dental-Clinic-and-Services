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
               <h3>Services Lists</h3>
            </div>

            <div class="col col-2">
               <button class="btn btn-dark w-100 p-1" data-bs-toggle="modal" data-bs-target="#addServiceModal">ADD <i
                     class="ms-2 bi bi-plus-circle-fill"></i></button>
            </div>
         </div>
      </div>
   </div>
</div>

<div class="row m-2 ">
   <div class="card">
      <div class="card-body p-1">
         @if($services->isEmpty())
         <p class="alert text-center text-secondary">No services available.</p>
         @else

         <div style="max-height: 420px !important; overflow-y: auto;">
            @foreach ($services as $service)
            <div class="">
               <ul class="list-group mb-1 ">
                  <li class="list-group-item d-flex align-items-center justify-content-between border border-2">
                     <div class="d-flex justify-content-between align-items-center w-100 px-2">
                        <div class="">
                           <span><strong>Name: </strong>{{$service->service_name}}</span><br>
                           <span><strong>Price: </strong>{{$service->service_price}}</span><br>
                           <span><strong>Description: </strong>{{$service->service_description}}</span>
                        </div>

                        <div class="d-flex gap-3">
                           <div>
                              <button class="btn btn-dark w-100 px-2 py-1" data-bs-toggle="modal"
                                 data-bs-target="#editServiceModal{{$service->id}}"><i
                                    class="bi bi-pencil-square"></i></button>
                           </div>

                           <div>
                              <form action="{{route('service.destroy', ['service' => $service])}}" method="POST">
                                 <input type="hidden" name="redirect_to" value="{{ $redirect_route }}">
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


            <div class="modal fade" id="editServiceModal{{$service->id}}" tabindex="-1"
               aria-labelledby="editServiceModalLabel{{$service->id}}" aria-hidden="true">
               <div class="modal-dialog modal-dialog-centered" style="max-width: 500px;">
                  <div class="modal-content">
                     <div class="modal-header fw-semibold d-flex justify-content-between">
                        <h5 class="modal-title" id="editServiceModalLabel{{$service->id}}">EDIT Service</h5>
                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                     </div>

                     <div class="modal-body mt-3">
                        <form action="{{route('service.update', ['service' => $service])}}" method="POST">
                           @csrf
                           @method('put')
                           <div class="row mb-3 gap-2">
                              <div class="col">
                                 <input style="background-color: #d9d9d9" type="text" id="ServiceName"
                                    name="service_name" class="form-control p-2" value="{{$service->service_name}}">
                              </div>
                              <div class="col">
                                 <input style="background-color: #d9d9d9" type="number" id="ServicePrice"
                                    name="service_price" min="1" class="form-control p-2"
                                    value="{{$service->service_price}}">
                              </div>
                           </div>

                           <div class="row mb-3">
                              <textarea style="background-color: #d9d9d9" name="service_description"
                                 id="ServiceDescription"
                                 class="form-control pb-5">{{$service->service_description}}</textarea>
                           </div>

                           <div class="modal-footer row mt-3 gap-2 pt-3">
                              <div class="col">
                                 <button class="btn btn-outline-info text-black fw-bold w-100 p-1" type="button"
                                    data-bs-dismiss="modal">Cancel</button>
                              </div>
                              <div class="col">
                                 <input type="hidden" name="redirect_to" value="{{ $redirect_route }}">
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
</div>


{{-- Modal to Add supplies --}}
<div class="modal fade" id="addServiceModal" tabindex="-1" aria-labelledby="addServiceModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered" style="max-width: 500px;">

      <div class="modal-content">
         <div class="modal-header fw-semibold d-flex justify-content-between">
            <h5 class="modal-title" id="addServiceModalLabel">ADD SERVICE</h5>
            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>

         <div class="modal-body mt-3">
            <form action="{{route('staffs.service.store')}}" method="POST">
               @csrf
               @method('POST')
               <div class="row mb-3 gap-2">
                  <div class="col">
                     <input style="background-color: #d9d9d9" type="text" id="ServiceName" name="service_name"
                        placeholder="Service Name" class="form-control p-2">
                  </div>
                  <div class="col">
                     <input style="background-color: #d9d9d9" type="number" id="ServicePrice" name="service_price"
                        placeholder="Price" class="form-control p-2">
                  </div>
               </div>

               <div class="row">
                  <textarea style="background-color: #d9d9d9" name="service_description" id="ServiceDescription"
                     class="form-control pb-5" placeholder="Description"></textarea>
               </div>

               <div class="modal-footer row mt-3 gap-2 pt-3">
                  <div class="col">
                     <button class="btn btn-outline-info text-black fw-bold w-100 p-1" type="button"
                        data-bs-dismiss="modal">Cancel</button>
                  </div>
                  <div class="col">
                     <input type="hidden" name="redirect_to" value="{{ $redirect_route }}">

                     <button class="btn w-100 fw-bold text-white p-1" style="background-color: #00a1df"
                        type="submit">Add</button>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>