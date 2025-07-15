<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Sharealux - Investment </title>

<link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/assets/css/all.min.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/assets/css/odometer.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/assets/css/nice-select.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.min.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/assets/css/jquery-ui.min.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/assets/css/magnific-popup.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/assets/css/flaticon.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/assets/css/main.css') }}">

<link rel="shortcut icon" href="{{ asset('frontend/assets/images/favicon.png') }}" type="image/x-icon">

</head>

<body>
    <div class="main--body">
        <!--========== Preloader ==========-->
        
        <a href="#0" class="scrollToTop"><i class="fas fa-angle-up"></i></a>
        <div class="overlay"></div>
        <!--========== Preloader ==========-->
        

        <!--=======Header-Section Starts Here=======-->
        @include('frontend.body.header')
        <!--=======Header-Section Ends Here=======-->



        @yield('main')

       

        
        <!-- ==========Footer-Section Starts Here========== -->
       @include('frontend.body.footer')
        <!-- ==========Footer-Section Ends Here========== -->

        
    </div>

    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="{{ asset('frontend/assets/js/modernizr-3.6.0.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/plugins.js') }}"></script>
<script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/magnific-popup.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/jquery-ui.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/wow.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/odometer.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/viewport.jquery.js') }}"></script>
<script src="{{ asset('frontend/assets/js/nice-select.js') }}"></script>
<script src="{{ asset('frontend/assets/js/owl.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/paroller.js') }}"></script>
<script src="{{ asset('frontend/assets/js/main.js') }}"></script>

</body>


</html>