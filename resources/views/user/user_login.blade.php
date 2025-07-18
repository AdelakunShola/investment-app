<!doctype html>
<html lang="en">
   <head>
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
   <style>
         //The Custom CSS will be added on the site head tag 
         .site-head-tag {
         margin: 0;
         padding: 0;
         }
      </style>
      <title>Sharealux -    User Login</title>
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
               <div class="col-xl-5 col-lg-8 col-md-12">
                  <div class="auth-content">
                     <div class="logo">
                        <a href="{{ route('home') }}">
                           <img src="{{ $about && $about->image ? asset($about->image) : '' }}" style="height: 80px; width: auto;" alt="Logo"></a>
                     </div>
                     <div class="title">
                        <h2> 👋 Welcome Back!</h2>
                        <p>Sign in to continue with Hyiprio User Panel</p>
                     </div>
                     <div class="site-auth-form">
                        <form class="row g-3" method="POST" action="{{ route('user.authenticate') }}">
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
                              <a href="{{ route('user.register') }}">Signup for free</a>
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
     
      <script type="text/javascript" src="https://hyiprio.tdevs.co/assets/vendor/mckenziearts/laravel-notify/js/notify.js"></script>
      
     
   </body>
</html>