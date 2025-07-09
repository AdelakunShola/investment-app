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
                     <h3 class="title">Profile Settings</h3>
                  </div>
                  <div class="site-card-body">
                      @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                     @endif

                     <form method="POST" action="{{ route('user.setting.update') }}" enctype="multipart/form-data">
                        @csrf                 
                        <div class="row">
                           <div class="col-xl-3">
                              <div class="mb-3">
                                 <div class="body-title">Avatar:</div>
                                 <div class="wrap-custom-file">
                                    <input type="file" name="avatar" id="avatar" accept=".gif, .jpg, .png">
                                    <label for="avatar">
                                    <img class="upload-icon" src="https://hyiprio.tdevs.co/assets/global/materials/upload.svg" alt="">
                                    <span>Update Avatar</span>
                                    </label>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="progress-steps-form">
                           <div class="row">
                              <div class="col-xl-6 col-md-12">
                                 <label for="exampleFormControlInput1" class="form-label">First Name</label>
                                 <div class="input-group">
                                     <input type="text" name="first_name" class="form-control" value="{{ $user->first_name }}">
                                 </div>
                              </div>
                              <div class="col-xl-6 col-md-12">
                                 <label for="exampleFormControlInput1" class="form-label">Last Name</label>
                                 <div class="input-group">
                                    <input type="text" name="last_name" class="form-control" value="{{ $user->last_name }}">
                                 </div>
                              </div>
                              <div class="col-xl-6 col-md-12">
                                 <label for="exampleFormControlInput1" class="form-label">Username</label>
                                 <div class="input-group">
                                    <input type="text" name="username" class="form-control" value="{{ $user->username }}">
                                 </div>
                              </div>
                             <div class="col-xl-6 col-md-12">
  <label for="exampleFormControlInput1" class="form-label">Gender</label>
  <div class="input-group">
    <select name="gender" class="form-select">
                                 <option value="">Select</option>
                                 <option value="male" {{ $user->gender == 'male' ? 'selected' : '' }}>Male</option>
                                 <option value="female" {{ $user->gender == 'female' ? 'selected' : '' }}>Female</option>
                                 <option value="other" {{ $user->gender == 'other' ? 'selected' : '' }}>Other</option>
                              </select>
  </div>
</div>

                              <div class="col-xl-6 col-md-12">
                                 <label for="exampleFormControlInput1" class="form-label">Date of Birth</label>
                                 <div class="input-group">
                                     <input type="date" name="date_of_birth" class="form-control" value="{{ $user->date_of_birth }}">
                                 </div>
                              </div>
                              <div class="col-xl-6 col-md-12">
                                 <label for="exampleFormControlInput1" class="form-label">Email Address</label>
                                 <div class="input-group">
                                     <input type="email" name="email" class="form-control" value="{{ $user->email }}" disabled>
                                 </div>
                              </div>
                              <div class="col-xl-6 col-md-12">
                                 <label for="exampleFormControlInput1" class="form-label">Phone</label>
                                 <div class="input-group">
                                    <input type="text" name="phone" class="form-control" value="{{ $user->phone }}">
                                 </div>
                              </div>
                              <div class="col-xl-6 col-md-12">
                                 <label for="exampleFormControlInput1" class="form-label">Country</label>
                                 <div class="input-group">
                                       <input type="text" class="form-control" value="{{ $user->country }}" disabled>
                                 </div>
                              </div>
                              <div class="col-xl-6 col-md-12">
                                 <label for="exampleFormControlInput1" class="form-label">City</label>
                                 <div class="input-group">
                                   <input type="text" name="city" class="form-control" value="{{ $user->city }}">
                                 </div>
                              </div>
                              <div class="col-xl-6 col-md-12">
                                 <label for="exampleFormControlInput1" class="form-label">Zip</label>
                                 <div class="input-group">
                                    <input type="text" name="zip_code" class="form-control" value="{{ $user->zip_code }}">
                                 </div>
                              </div>
                              <div class="col-xl-6 col-md-12">
                                 <label for="exampleFormControlInput1" class="form-label">Address</label>
                                 <div class="input-group">
                                    <input type="text" name="address" class="form-control" value="{{ $user->address }}">
                                 </div>
                              </div>
                              <div class="col-xl-6 col-md-12">
                                 <label for="exampleFormControlInput1" class="form-label">Joining Date</label>
                                 <div class="input-group">
                                     <input type="text" class="form-control" value="{{ $user->created_at->format('D, M d, Y h:i A') }}" disabled>
                                 </div>
                              </div>
                              <div class="col-xl-6 col-md-12">
                                 <button type="submit" class="site-btn blue-btn">Save Changes</button>
                              </div>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
            
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
               <div class="site-card">
                  <div class="site-card-header">
                     <h3 class="title">KYC</h3>
                  </div>
                  <div class="site-card-body">
                     <a href="{{ route('user.kyc') }}" class="site-btn blue-btn">Upload KYC</a>
                     <p class="mt-3"></p>
                  </div>
               </div>
               <div class="site-card">
                  <div class="site-card-header">
                     <h3 class="title">Change Password</h3>
                  </div>
                  <div class="site-card-body">
                     <a href="{{ route('user.change.password') }}" class="site-btn blue-btn">Change Password</a>
                  </div>
               </div>
            </div>
         </div>
         <!--Page Content-->
      </div>
   </div>
</div>
@endsection