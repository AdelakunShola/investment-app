<!doctype html>
<html lang="en">
   <head>
      <meta http-equiv="origin-trial" content="A7vZI3v+Gz7JfuRolKNM4Aff6zaGuT7X0mf3wtoZTnKv6497cVMnhy03KDqX7kBz/q/iidW7srW31oQbBt4VhgoAAACUeyJvcmlnaW4iOiJodHRwczovL3d3dy5nb29nbGUuY29tOjQ0MyIsImZlYXR1cmUiOiJEaXNhYmxlVGhpcmRQYXJ0eVN0b3JhZ2VQYXJ0aXRpb25pbmczIiwiZXhwaXJ5IjoxNzU3OTgwODAwLCJpc1N1YmRvbWFpbiI6dHJ1ZSwiaXNUaGlyZFBhcnR5Ijp0cnVlfQ==">
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="csrf-token" content="X35FYZ6cizqru3ehnMKk12ta5sOwjSlNbOE0exqP">
      <meta name="keywords" content="digibank,digital banking">
      <meta name="description" content="Digi Bank is a fully online banking system.">
      <link rel="canonical" href="https://hyiprio.tdevs.co/login">
      <link rel="shortcut icon" href="https://hyiprio.tdevs.co/assets/global/images/uwMsIQh95hIgRhCppVCH.png" type="image/x-icon">
      <link rel="icon" href="https://hyiprio.tdevs.co/assets/global/images/uwMsIQh95hIgRhCppVCH.png" type="image/x-icon">
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
      <title>Hyiprio -     Login</title>
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
      <section class="section-style site-auth">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-xl-5 col-lg-8 col-md-12">
                  <div class="auth-content">
                     <div class="logo">
                        <a href="https://hyiprio.tdevs.co"><img src="https://hyiprio.tdevs.co/assets/global/images/paciTCYiu8qnAjTEmCQg.png" alt=""></a>
                     </div>
                     <div class="title">
                        <h2> 👋 Welcome Back!</h2>
                        <p>Sign in to continue with Sharealux User Panel</p>
                     </div>
                     <div class="site-auth-form">
                        <form class="row g-3" method="POST" action="{{ route('login') }}">
                           @csrf                             
                           <div class="single-field">
                              <label class="box-label" for="email">Email Or Username</label>
                              <input type="text" class="box-input @error('login') is-invalid @enderror " id="login" name="login" placeholder="jhon@example.com">
                              @error('login')
                              <span class="text-danger"> {{ $message }} </span>
                              @enderror
                           </div>
                           <div class="single-field">
                              <label class="box-label" for="password">Password</label>
                              <div class="password">
                                 <input type="password" name="password" class="box-input" id="password" placeholder="Enter Password"> 
                              </div>
                           </div>
                          
                           <div class="single-field">
                              <input class="form-check-input check-input" type="checkbox" name="remember" id="flexCheckDefault">
                              <label class="form-check-label" for="flexCheckDefault">
                              Remember me
                              </label>
                           </div>
                           <button type="submit" class="site-btn grad-btn w-100">
                           Account Login
                           </button>
                        </form>
                        <div class="singnup-text">
                           <p>
                              Don't have an account?
                              <a href="">Signup for free</a>
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
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
      <script type="text/javascript" src="https://hyiprio.tdevs.co/assets/vendor/mckenziearts/laravel-notify/js/notify.js"></script>
      <script src="https://www.google.com/recaptcha/api.js" async="" defer=""></script>
      <!--Start of Tawk.to Script-->
      <script type="text/javascript">
         var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
         (function () {
             var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
             s1.async = true;
             s1.src = 'https://embed.tawk.to/635d5805b0d6371309cc36aa/1ggi9vm2o';
             s1.charset = 'UTF-8';
             s1.setAttribute('crossorigin', '*');
             s0.parentNode.insertBefore(s1, s0);
         })();
      </script>
      <!--End of Tawk.to Script-->
      <div style="background-color: rgb(255, 255, 255); border: 1px solid rgb(204, 204, 204); box-shadow: rgba(0, 0, 0, 0.2) 2px 2px 3px; position: absolute; transition: visibility linear 0.3s, opacity 0.3s linear; opacity: 0; visibility: hidden; z-index: 2000000000; left: 0px; top: -10000px;">
         <div style="width: 100%; height: 100%; position: fixed; top: 0px; left: 0px; z-index: 2000000000; background-color: rgb(255, 255, 255); opacity: 0.05;"></div>
         <div class="g-recaptcha-bubble-arrow" style="border: 11px solid transparent; width: 0px; height: 0px; position: absolute; pointer-events: none; margin-top: -11px; z-index: 2000000000;"></div>
         <div class="g-recaptcha-bubble-arrow" style="border: 10px solid transparent; width: 0px; height: 0px; position: absolute; pointer-events: none; margin-top: -10px; z-index: 2000000000;"></div>
         <div style="z-index: 2000000000; position: relative;"><iframe title="recaptcha challenge expires in two minutes" name="c-lhch141kqhjh" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation" src="https://www.google.com/recaptcha/api2/bframe?hl=en&amp;v=h7qt2xUGz2zqKEhSc8DD8baZ&amp;k=6LdY0AgjAAAAAIe6cwoa8ReDAv-J0gCGMnwF9rDu" style="width: 100%; height: 100%;"></iframe></div>
      </div>
   </body>
</html>