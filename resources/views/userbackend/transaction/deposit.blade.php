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

                        <form action="{{ route('user.deposit.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf               
                       
                        <div class="progress-steps-form">
                           <div class="row">


                             <div class="col-xl-12 col-md-6">
                                 <label class="box-input-label">Deposit Amount:</label>
                                 <div class="input-group">
                                   <input type="number" name="amount" class="form-control" placeholder="Enter amount" required>
                                 </div>
                              </div>



                                  <h4>Select Payment Method</h4>
   <!-- Payment Buttons Section -->
<div class="row text-center my-4">
  <!-- PayPal -->
  <div class="col-md-4 mb-3">
    <img src="{{ asset('paypal.png') }}" alt="Pay with PayPal" class="img-fluid mb-2" style="max-height: 50px;">
    <button class="btn btn-primary btn-block" onclick="showUnavailableModal('PayPal')">Pay with PayPal</button>
  </div>

  <!-- Stripe -->
  <div class="col-md-4 mb-3">
    <img src="{{ asset('lloyd.png') }}" alt="Pay with Lloyd Bank" class="img-fluid mb-2" style="max-height: 50px;">
    <button class="btn btn-info btn-block" onclick="showUnavailableModal('Stripe')">Pay with Lloyds Bank</button>
  </div>

  <!-- Crypto -->
  <!-- Crypto -->
<div class="col-md-4 mb-3">
  <img src="{{ asset('logo.png') }}" alt="Pay with Crypto" class="img-fluid mb-2" style="max-height: 50px;">
 <button type="button" class="btn btn-warning btn-block" data-bs-toggle="modal" data-bs-target="#cryptoModal">
  Pay with Cryptocurrency
</button>




</div>

<!-- Modal -->

<div class="modal fade" id="unavailableModal" tabindex="-1" aria-labelledby="unavailableModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content border-0 shadow-lg rounded-4">
      <div class="modal-header bg-danger text-white rounded-top-4">
        <h5 style="color: white" class="modal-title d-flex align-items-center" id="unavailableModalLabel">
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-exclamation-triangle me-2" viewBox="0 0 16 16">
            <path d="M7.938 2.016a.13.13 0 0 1 .124 0l6.857 11.856c.06.103.06.23 0 .333A.145.145 0 0 1 14.875 14H1.125a.145.145 0 0 1-.124-.195L7.858 2.016a.13.13 0 0 1 .08-.045zm.004 1.25L1.58 13.25h12.84L7.942 3.266zM8 5.5a.5.5 0 0 1 .5.5v3.5a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm.002 6.5a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5z"/>
          </svg>
          Payment Method Unavailable
        </h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center py-4 px-5">
        <p class="fs-5 text-muted" id="modalMessage">
          Sorry, this payment method is not available in your location.
        </p>
        <button type="button" class="btn btn-outline-danger mt-3 px-4" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



<!-- CRYPTO MODAL -->
<div class="modal fade" id="cryptoModal" tabindex="-1" aria-labelledby="cryptoModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content border-0 rounded-4 shadow-lg text-center">
      <div class="modal-header bg-dark text-white rounded-top-4">
          <img src="{{ asset('logo.png') }}" alt="Pay with Crypto" class="img-fluid mb-2" style="max-height: 50px;">
        <h5 style="color: white" class="modal-title w-100" id="cryptoModalLabel">Tether (USDT) Payment</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- QR Image -->
        <img src="{{ asset('qrcode.jpg') }}" id="qrImage" alt="USDT QR Code" class="img-fluid mb-3" style="max-width: 220px; border-radius: 12px;">

        <!-- Address -->
        <p style="color: black;" class="fw-bold mb-1">Your Tether USD Address</p>
        <div class="input-group mb-3 justify-content-center">
          <input type="text" class="form-control text-center" id="usdtAddress" readonly value="TNbd4Xf1gpdT2DdAuigyKcEkcLtdLzUm1q" style="max-width: 400px; color: black;">
          <button class="btn btn-outline-secondary" onclick="copyUSDT()">Copy</button>
          <small id="copyMsg" class="text-success mt-2" style="display: none;">Address copied to clipboard!</small>

        </div>
        <small class="text-muted d-block mb-3">Receive tokens on the <strong>TRX (TRC20)</strong> network only.</small>
        <!-- Countdown Timer -->
<div class="mb-3">
  <p class="fw-bold mb-1 text-danger">Time left to complete payment:</p>
  <h4 style="color: black;" id="countdownTimer">30:00</h4>
</div>

<!-- Payment Confirmation Button -->

<button type="button" class="btn btn-success mt-2" data-bs-dismiss="modal">
  I Have Made the Payment
</button>


      </div>
    </div>
  </div>
</div>


<!-- Thank You Modal -->
<div class="modal fade" id="thankYouModal" tabindex="-1" aria-labelledby="thankYouModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content border-0 shadow-lg rounded-4">
      <div class="modal-header bg-success text-white rounded-top-4">
        <h5 style="color: white" class="modal-title" id="thankYouModalLabel">Payment Received</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">
        <p class="fs-5" id="thankYouText">
          <strong>Thank you!</strong> Your payment is being processed.<br>
          A confirmation email will be sent to <span id="confirmedEmailModal"></span>.
        </p>
        <button class="btn btn-success mt-2" data-bs-dismiss="modal">OK</button>
      </div>
    </div>
  </div>
</div>
                              


                             



                             <div class="row">
  <div class="col-xl-3">
    <div class="mb-3">
      <div class="body-title mb-2">Upload Payment Screenshot:</div>

      <div class="wrap-custom-file text-center">
        <!-- File Input -->
        <input type="file" name="screenshot" id="screenshot" accept="image/*" style="display: none;" onchange="previewScreenshot(event)">

        <!-- Label for Upload Trigger -->
        <label for="screenshot" style="cursor: pointer;">
          <!-- Image Preview -->
          <img id="screenshotPreview" class="upload-icon img-fluid" src="{{ asset('placeholder.png') }}" alt="" style="max-height: 200px; border: 2px dashed #ccc; padding: 5px; border-radius: 12px;">
          <span class="d-block mt-2">Click to Upload</span>
        </label>
      </div>
    </div>
  </div>
</div>



                        


                              
                              <div class="col-xl-6 col-md-12">
                               <button type="submit" class="site-btn-sm primary-btn w-100 centered">Submit Deposit</button>
                              </div>
                           </div>
                        </div>

                       


                     </form>
                  </div>
               </div>
            </div>
         </div>
       
         <!--Page Content-->
      </div>
   </div>
</div>


<script>
  function previewScreenshot(event) {
    const input = event.target;
    const preview = document.getElementById('screenshotPreview');

    if (input.files && input.files[0]) {
      const reader = new FileReader();
      reader.onload = function(e) {
        preview.src = e.target.result;
      };
      reader.readAsDataURL(input.files[0]);
    }
  }
</script>


<script>
  // Show unavailable modal with custom method name
  function showUnavailableModal(method) {
    document.getElementById('modalMessage').innerText = method + " payment is currently unavailable in your location.";
    var unavailableModal = new bootstrap.Modal(document.getElementById('unavailableModal'));
    unavailableModal.show();
  }

  // Copy USDT Address
  function copyUSDT() {
    const addressField = document.getElementById("usdtAddress");
    addressField.select();
    addressField.setSelectionRange(0, 99999); // Mobile support
    document.execCommand("copy");

    document.getElementById("copyMsg").style.display = "block";
    setTimeout(() => {
      document.getElementById("copyMsg").style.display = "none";
    }, 3000);
  }

  // Countdown Timer
  let countdown;
  function startCountdown(durationMinutes = 30) {
    clearInterval(countdown); // Prevent duplicate timers

    const display = document.getElementById("countdownTimer");
    let time = durationMinutes * 60;

    countdown = setInterval(() => {
      const minutes = Math.floor(time / 60);
      const seconds = time % 60;

      display.textContent = `${String(minutes).padStart(2, '0')}:${String(seconds).padStart(2, '0')}`;

      if (time <= 0) {
        clearInterval(countdown);
        display.textContent = "Expired";
      }

      time--;
    }, 1000);
  }

  // On Crypto Modal Show → Start Countdown
  const cryptoModalEl = document.getElementById('cryptoModal');
  cryptoModalEl.addEventListener('show.bs.modal', function () {
    startCountdown(30); // Start 30-minute timer
  });

 
</script>

@endsection


                                 


             