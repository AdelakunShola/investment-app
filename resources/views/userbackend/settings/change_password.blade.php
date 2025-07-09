@extends('user.user_dashboard')
@section('user')
<div class="main-content">
   <div class="section-gap">
      <div class="container-fluid">
         <div class="row desktop-screen-show">
            <div class="col">
            </div>
         </div>
         <div class="row mobile-screen-show">
            <div class="col">
            </div>
         </div>
         <!--Page Content-->
         <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
               <div class="site-card">
                  <div class="site-card-header">
                     <h3 class="title">Change Password</h3>
                  </div>
                  <div class="site-card-body">
                     <div class="progress-steps-form">
                        @if(session('message'))
   <div class="alert alert-{{ session('alert-type') }}">
      {{ session('message') }}
   </div>
@endif

@if ($errors->any())
   <div class="alert alert-danger">
      <ul class="mb-0">
         @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
         @endforeach
      </ul>
   </div>
@endif

                        <form action="{{ route('user.password.update') }}" method="POST">
    @csrf

                           <div class="row">
                              <div class="col-xl-12 col-md-12">
                                 <label for="exampleFormControlInput1" class="form-label">Current Password</label>
                                 <div class="input-group">
                                    <input type="password" name="old_password" class="form-control">
                                 </div>
                              </div>
                              <div class="col-xl-6 col-md-12">
                                 <label for="exampleFormControlInput1" class="form-label">New Password</label>
                                 <div class="input-group">
                                    <input type="password" name="new_password" class="form-control">
                                 </div>
                              </div>
                              <div class="col-xl-6 col-md-12">
                                 <label for="exampleFormControlInput1" class="form-label">Confirm Password</label>
                                 <div class="input-group">
                                    <input type="password" name="new_password_confirmation" class="form-control">
                                 </div>
                              </div>
                              <div class="col-xl-6 col-md-12">
                                 <button type="submit" class="site-btn blue-btn">Change Password</button>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!--Page Content-->
      </div>
   </div>
</div>
@endsection