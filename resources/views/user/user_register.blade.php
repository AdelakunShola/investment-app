<!doctype html>
<html lang="en">
   <head>
      <meta http-equiv="origin-trial" content="">
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="csrf-token" content="">
         <meta name="keywords" content="luxury affiliate platform, digital income, share ads for money, crypto shopping, earn with referrals, luxury real estate ads, luxury fashion, passive income online, influencer income, social media monetization, PayPal crypto ecommerce">
      <meta name="description" content="ShareAlux is a next-gen platform where users earn daily by sharing luxury ads online. Monetize your influence, refer others, and earn crypto-enabled passive income on high-end listings.">
    
      <link rel="canonical" href="{{ route('user.register') }}">
      <link rel="shortcut icon" href="{{ asset('frontend/favicon-1.png') }}" type="image/x-icon">
      <link rel="icon" href="{{ asset('frontend/favicon-1.png') }}" type="image/x-icon">
      <link rel="stylesheet" href="https://hyiprio.tdevs.co/assets/global/css/fontawesome.min.css">
      <link rel="stylesheet" href="https://hyiprio.tdevs.co/assets/frontend/css/vendor/bootstrap.min.css">
      <link rel="stylesheet" href="https://hyiprio.tdevs.co/assets/frontend/css/animate.css">
      <link rel="stylesheet" href="https://hyiprio.tdevs.co/assets/frontend/css/owl.carousel.min.css">
      <link rel="stylesheet" href="https://hyiprio.tdevs.co/assets/global/css/nice-select.css">
      <link rel="stylesheet" href="https://hyiprio.tdevs.co/assets/global/css/datatables.min.css">
      <link rel="stylesheet" href="https://hyiprio.tdevs.co/assets/global/css/simple-notify.min.css">
      <link rel="stylesheet" type="text/css" href="https://hyiprio.tdevs.co/assets/vendor/mckenziearts/laravel-notify/css/notify.css">
      <link rel="stylesheet" href="https://hyiprio.tdevs.co/assets/global/css/custom.css">
      <link rel="stylesheet" href="https://hyiprio.tdevs.co/assets/frontend/css/magnific-popup.css">
      <link rel="stylesheet" href="https://hyiprio.tdevs.co/assets/frontend/css/aos.css">
      <link rel="stylesheet" href="https://hyiprio.tdevs.co/assets/frontend/css/styles.css?var=2.1">
      <script src="https://embed.tawk.to/_s/v4/app/685389b9a70/js/twk-main.js" charset="UTF-8" crossorigin="*"></script><script src="https://embed.tawk.to/_s/v4/app/685389b9a70/js/twk-vendor.js" charset="UTF-8" crossorigin="*"></script><script src="https://embed.tawk.to/_s/v4/app/685389b9a70/js/twk-chunk-vendors.js" charset="UTF-8" crossorigin="*"></script><script src="https://embed.tawk.to/_s/v4/app/685389b9a70/js/twk-chunk-common.js" charset="UTF-8" crossorigin="*"></script><script src="https://embed.tawk.to/_s/v4/app/685389b9a70/js/twk-runtime.js" charset="UTF-8" crossorigin="*"></script><script src="https://embed.tawk.to/_s/v4/app/685389b9a70/js/twk-app.js" charset="UTF-8" crossorigin="*"></script><script type="text/javascript" async="" charset="utf-8" src="https://www.gstatic.com/recaptcha/releases/h7qt2xUGz2zqKEhSc8DD8baZ/recaptcha__en.js" crossorigin="anonymous" integrity="sha384-R2p1xdGKcSzm/oeFxRBmUuFAKdZRdY7u+SIsHBFbhXYxXlZ0TQJejBaVuyPwEVKn"></script><script async="" src="https://embed.tawk.to/635d5805b0d6371309cc36aa/1ggi9vm2o" charset="UTF-8" crossorigin="*"></script><script src="https://hyiprio.tdevs.co/assets/global/js/jquery.min.js"></script>
      <style>
         //The Custom CSS will be added on the site head tag 
         .site-head-tag {
         margin: 0;
         padding: 0;
         }
      </style>
      <link rel="stylesheet" href="https://hyiprio.tdevs.co/assets/frontend/css/vendor/bootstrap.min.css">
<script src="https://hyiprio.tdevs.co/assets/frontend/js/bootstrap.bundle.min.js"></script>

      <title>Sharealux -    User Register</title>
      <style>
         .imageye-selected {
         outline: 2px solid black !important;
         box-shadow: 0 0 10px rgba(0, 0, 0, 0.5) !important;
         }
      </style>
   </head>
   <body data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0">
      <script>
         var notify = {
             timeout: "5000",
         }
      </script>
      <!-- Login Section -->
      
           @php
    use App\Models\About;
    $about = About::first();
@endphp

      <section class="section-style site-auth">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-xl-8 col-md-12">
                  <div class="auth-content">
                     <div class="logo">
                        <a href=""><img src="{{ $about && $about->image ? asset($about->image) : '' }}" style="height: 140px; width: 140px;" alt="Logo"></a>
                     </div>
                     <div class="title">
                        <h2> 💪 Create an account</h2>
                        <p>Register to continue with Sharealux</p>
                     </div>
                     <div class="site-auth-form">
                        @if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

                            <form method="POST" action="{{ route('user.register.submit') }}">
                      @csrf                   
                      <input type="hidden" name="referred_by" value="{{ $refCode }}">


                     

         
                            <div class="row">
                             <div class="col-md-6">
                              <div class="single-field">
                                 <label class="box-label" for="name">First Name<span class="required-field">*</span></label>
                                 <input class="box-input" type="text" placeholder="Your First Name" name="first_name" value="" >
                              </div>
                           </div>
                            <div class="col-md-6">
                              <div class="single-field">
                                 <label class="box-label" for="name">Last Name<span class="required-field">*</span></label>
                                 <input class="box-input" type="text" placeholder="Your Last Name" name="last_name" value="" >
                              </div>
                           </div>
                           </div>



                           <div class="row">
                             <div class="col-md-6">
                              <div class="single-field">
                                 <label class="box-label" for="email">Email Address<span class="required-field">*</span></label>
                                 <input class="box-input" type="email" name="email" value="" placeholder="Enter Your Email Address" >
                              </div>
                           </div>
                            <div class="col-md-6">
                              <div class="single-field">
                                 <label class="box-label" for="username">User Name<span class="required-field">*</span></label>
                                 <input class="box-input" type="text" placeholder="Enter Your User Name" name="username" value="" >
                              </div>
                           </div>
                            </div>


                           <div class="row">
                             <div class="col-md-6">
                              <div class="single-field">
                                 <label class="box-label" for="username">Country<span class="required-field">*</span></label>
                                 <input class="box-input" type="text" placeholder="Enter Your Country" name="country" value="" >
                              </div>
                           </div>
                           
                           <div class="col-md-6">
                              <div class="single-field">
                                 <label class="box-label" for="username">Phone Number<span class="required-field">*</span></label>
                                 <div class="input-group joint-input">
                                    <input type="text" class="form-control" placeholder="e.g. +1 555-123-4567" name="phone" value="" aria-label="Username" aria-describedby="basic-addon1">
                                 </div>
                              </div>
                           </div>
                           </div>


                           <div class="row">
                             <div class="col-md-6">
                              <div class="single-field">
                                 <label class="box-label" for="invite">Referral Code</label>
                                 <input class="box-input" type="text" placeholder="Enter Your Referral Code" name="referral_code" value="">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="single-field">
                                 <label class="box-label" for="password">Password<span class="required-field">*</span></label>
                                 <div class="password">
                                    <input class="box-input" type="password" name="password" placeholder="Enter your password" >
                                 </div>
                              </div>
                           </div>
                           </div>


                           <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                              <div class="single-field">
                                 <label class="box-label" for="password">Confirm Password<span class="required-field">*</span></label>
                                 <div class="password">
                                    <input class="box-input" type="password" name="password_confirmation" placeholder="Enter your password" >
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                              
                           </div>
                           <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                              <div class="single-field">
                                 <input class="form-check-input check-input" type="checkbox" name="i_agree" value="yes" id="flexCheckDefault" >
                                 <label class="form-check-label" for="flexCheckDefault">
                                I agree with
<a href="#" data-bs-toggle="modal" data-bs-target="#privacyModal">Privacy Policy</a>
and
<a href="#" data-bs-toggle="modal" data-bs-target="#termsModal">Terms & Conditions</a>

                                 </label>
                              </div>
                           </div>
                           <div class="col-xl-12">
                              <button type="submit" class="site-btn grad-btn w-100">
                              Create Account
                              </button>
                           </div>
                        </form>
                        <div class="singnup-text">
                           <p>Already have an account? <a href="{{ route('user.login') }}">Login</a></p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>


      <!-- Privacy Policy Modal -->
<div class="modal fade" id="privacyModal" tabindex="-1" aria-labelledby="privacyModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="privacyModalLabel">Privacy Policy</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" style="line-height: 1.7;">
        <p><strong>At ShareAlux, protecting your privacy and ensuring the security of your personal information is a top priority.</strong></p>
        <p>This Privacy Policy explains how we securely collect, use, store, and protect your data when you access or use our website or services.</p>

        <h6>1. Information We Collect</h6>
        <ul>
          <li>Personal Identifiable Information (PII): Full name, contact details (email, phone), ID verification (if required), payment data, and login credentials.</li>
          <li>Device & Technical Data: IP address, browser type, OS, location, session timestamps, etc.</li>
          <li>Behavioral Data: Clickstreams, logs, referral links, navigation activity.</li>
          <li>Cookies & Analytics Tools: Including Google Analytics (anonymized).</li>
        </ul>

        <h6>2. How We Use Your Information</h6>
        <ul>
          <li>Operate and improve our platform</li>
          <li>Authenticate users and secure account access</li>
          <li>Process transactions safely and prevent fraud</li>
          <li>Communicate important updates</li>
          <li>Comply with legal and regulatory obligations</li>
        </ul>

        <h6>3. Data Security & Encryption</h6>
        <ul>
          <li>TLS/SSL and AES-256 encryption</li>
          <li>Passwords stored with bcrypt/Argon2</li>
          <li>2FA and anomaly detection</li>
          <li>Firewall and intrusion detection</li>
        </ul>

        <h6>4. Data Retention</h6>
        <p>We retain personal data only as necessary. Non-essential data is anonymized or deleted regularly.</p>

        <h6>5. Your Rights</h6>
        <ul>
          <li>Access, correct, or delete data</li>
          <li>Withdraw consent</li>
          <li>Request data portability</li>
          <li>File complaints with the DPA</li>
        </ul>

        <h6>6. Third-Party Access</h6>
        <p>Only vetted providers under strict DPAs can access limited data. All comply with GDPR and ISO 27001.</p>
      </div>
    </div>
  </div>
</div>

<!-- Terms and Conditions Modal -->
<div class="modal fade" id="termsModal" tabindex="-1" aria-labelledby="termsModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="termsModalLabel">Terms & Conditions</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" style="line-height: 1.7;">
        <p>These Terms and Conditions (“Terms”) govern your access to and use of our secure platform. By registering or using our services, you agree to comply with the following:</p>

        <h6>1. User Responsibilities</h6>
        <ul>
          <li>Use ShareAlux for lawful purposes</li>
          <li>Protect your login credentials</li>
          <li>Report unauthorized access or breaches</li>
          <li>No malicious uploads or reverse engineering</li>
        </ul>

        <h6>2. Account Security</h6>
        <p>2FA is encouraged. You’re responsible for your login activities. We monitor suspicious behavior.</p>

        <h6>3. Acceptable Use</h6>
        <ul>
          <li>No unauthorized access attempts</li>
          <li>No phishing, spamming, or illegal transactions</li>
          <li>No scraping private data or deploying harmful code</li>
        </ul>

        <h6>4. Payments and Refunds</h6>
        <ul>
          <li>Encrypted payments through PCI-DSS-compliant gateways</li>
          <li>Refunds follow our Refund Policy</li>
          <li>You’re responsible for correct payment details</li>
        </ul>

        <h6>5. Intellectual Property</h6>
        <p>All content and code belong to ShareAlux or its licensors. No unauthorized reuse.</p>

        <h6>6. Termination</h6>
        <p>We may terminate accounts for suspicious activity, fraud, or violations.</p>

        <h6>7. Limitation of Liability</h6>
        <p>We’re not liable for indirect damages. We aim for 99.99% uptime but can’t guarantee uninterrupted service.</p>

        <h6>8. Indemnification</h6>
        <p>You agree to indemnify ShareAlux against any legal claims or damages from your misuse or violations.</p>
      </div>
    </div>
  </div>
</div>

      <!-- Login Section End -->
      <script src="https://hyiprio.tdevs.co/assets/global/js/jquery.min.js"></script>
      <script src="https://hyiprio.tdevs.co/assets/global/js/jquery-migrate.js"></script>
      <script src="https://hyiprio.tdevs.co/assets/frontend/js/bootstrap.bundle.min.js"></script>
      <script src="https://hyiprio.tdevs.co/assets/frontend/js/scrollUp.min.js"></script>
      <script src="https://hyiprio.tdevs.co/assets/frontend/js/owl.carousel.min.js"></script>
      <script src="https://hyiprio.tdevs.co/assets/global/js/waypoints.min.js"></script>
      <script src="https://hyiprio.tdevs.co/assets/frontend/js/jquery.counterup.min.js"></script>
      <script src="https://hyiprio.tdevs.co/assets/global/js/jquery.nice-select.min.js"></script>
      <script src="https://hyiprio.tdevs.co/assets/global/js/lucide.min.js"></script>
      <script src="https://hyiprio.tdevs.co/assets/frontend/js/magnific-popup.min.js"></script>
      <script src="https://hyiprio.tdevs.co/assets/frontend/js/aos.js"></script>
      <script src="https://hyiprio.tdevs.co/assets/global/js/datatables.min.js" type="text/javascript" charset="utf8"></script>
      <script src="https://hyiprio.tdevs.co/assets/global/js/simple-notify.min.js"></script>
      <script src="https://hyiprio.tdevs.co/assets/frontend/js/main.js?var=5"></script>
      <script src="https://hyiprio.tdevs.co/assets/frontend/js/cookie.js"></script>
      <script src="https://hyiprio.tdevs.co/assets/global/js/custom.js?var=5"></script>
      <script>
         (function ($) {
             'use strict';
             // AOS initialization
             AOS.init();
         })(jQuery);
      </script>
     
 

<!-- Update your checkbox label to trigger modal -->

   </body>
</html>