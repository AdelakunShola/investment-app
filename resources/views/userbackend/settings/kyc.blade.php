@extends('user.user_dashboard') 
@section('user')

<div class="main-content">
   <div class="section-gap">
      <div class="container-fluid">
        <a href="{{ url()->previous() }}" class="btn btn-sm btn-secondary me-2">
   ← Back
</a>

         @if($user->kyc_verified)
            {{-- ✅ KYC Verified --}}
            <div class="row desktop-screen-show">
               <div class="col">
                  <div class="alert site-alert alert-success alert-dismissible fade show" role="alert">
                     <div class="content">
                        <div class="icon"><i class="anticon anticon-check-circle"></i></div>
                        <strong>Your KYC is Verified</strong>
                     </div>
                  </div>
               </div>
            </div>

         @elseif($user->document_type || $user->document_number || $user->id_document_path)
            {{-- ⏳ KYC Pending --}}
            <div class="row desktop-screen-show">
               <div class="col">
                  <div class="alert site-alert alert-warning alert-dismissible fade show" role="alert">
                     <div class="content">
                        <div class="icon"><i class="anticon anticon-warning"></i></div>
                        <strong>KYC Pending</strong>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row justify-content-center">
               <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12">
                  <div class="site-card">
                     <div class="site-card-header">
                        <h3 class="title">KYC</h3>
                     </div>
                     <div class="site-card-body">
                        <div class="site-badge warnning">Your KYC is currently pending approval.</div>
                     </div>
                  </div>
               </div>
            </div>

         @else
            {{-- 📝 Show KYC Form --}}
            <div class="row desktop-screen-show">
               <div class="col">
                  <div class="alert site-alert alert-dismissible fade show" role="alert">
                     <div class="content">
                        <div class="icon"><i class="anticon anticon-warning"></i></div>
                        You need to submit your
                        <strong>KYC and Other Documents</strong> before proceeding to the system.
                     </div>
                     <div class="action">
                        <a href="{{ route('user.kyc') }}" class="site-btn-sm grad-btn"><i class="anticon anticon-info-circle"></i>Submit Now</a>
                        <a href="#" class="site-btn-sm red-btn ms-2" type="button" data-bs-dismiss="alert" aria-label="Close"><i class="anticon anticon-close"></i>Later</a>
                     </div>
                  </div>
               </div>
            </div>

            {{-- 🧾 KYC Submission Form --}}
            <div class="row justify-content-center">
               <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12">
                  <div class="site-card">
                     <div class="site-card-header">
                        <h3 class="title">KYC</h3>
                     </div>
                     <div class="site-card-body">
                        <form action="{{ route('user.kyc.submit') }}" method="POST" enctype="multipart/form-data">
                           @csrf
                           <div class="col-xl-12 col-md-12">
                              <div class="progress-steps-form">
                                 <label class="form-label">Verification Type</label>
                                 <div class="input-group">
                                    <select name="document_type" class="site-nice-select" required>
                                       <option selected disabled>----</option>
                                       <option value="NIN">National ID Verification</option>
                                       <option value="PASSPORT">International Passport</option>
                                       <option value="DL">Driver's License</option>
                                    </select>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-12 col-md-12">
                              <div class="progress-steps-form">
                                 <label class="form-label">Document Number</label>
                                 <div class="input-group">
                                    <input type="text" name="document_number" class="form-control" required>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-12 col-md-12">
  <div class="progress-steps-form">
    <label class="form-label">Upload Document</label>
    <div class="wrap-custom-file">
      <input type="file" name="id_document_path" id="id_document_path" accept=".jpg,.png,.jpeg,.pdf" required hidden>
      <label for="id_document_path" class="custom-upload-label">
        <img class="upload-icon" src="" alt="">
        <span>Select Document</span>
      </label>
    </div>
  </div>
</div>

                           <button type="submit" class="site-btn blue-btn mt-3">Submit Now</button>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         @endif

      </div>
   </div>
</div>

@endsection
