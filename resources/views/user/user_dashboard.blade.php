<!doctype html>
<html lang="en"><head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="">
    <meta name="keywords" content="digibank,digital banking">
    <meta name="description" content="Digi Bank is a fully online banking system.">
    <link rel="canonical" href="https://hyiprio.tdevs.co/user/dashboard">
    <link rel="shortcut icon" href="https://hyiprio.tdevs.co/assets/global/images/uwMsIQh95hIgRhCppVCH.png" type="image/x-icon">

    <link rel="icon" href="https://hyiprio.tdevs.co/assets/global/images/uwMsIQh95hIgRhCppVCH.png" type="image/x-icon"> 
    <link rel="stylesheet" href="https://hyiprio.tdevs.co/assets/global/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://hyiprio.tdevs.co/assets/frontend/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="https://hyiprio.tdevs.co/assets/frontend/css/animate.css">
    <link rel="stylesheet" href="https://hyiprio.tdevs.co/assets/frontend/css/owl.carousel.min.css">
    <link rel="stylesheet" href="https://hyiprio.tdevs.co/assets/global/css/nice-select.css">
    <link rel="stylesheet" href="https://hyiprio.tdevs.co/assets/global/css/datatables.min.css">
    <link rel="stylesheet" href="https://hyiprio.tdevs.co/assets/global/css/simple-notify.min.css">
        <link rel="stylesheet" type="text/css" href="https://hyiprio.tdevs.co/assets/vendor/mckenziearts/laravel-notify/css/notify.css">        <link rel="stylesheet" href="https://hyiprio.tdevs.co/assets/global/css/custom.css">
    <link rel="stylesheet" href="https://hyiprio.tdevs.co/assets/frontend/css/magnific-popup.css">
            <link rel="stylesheet" href="https://hyiprio.tdevs.co/assets/frontend/css/aos.css">
        <link rel="stylesheet" href="https://hyiprio.tdevs.co/assets/frontend/css/styles.css?var=2.1">
<script src="https://hyiprio.tdevs.co/assets/global/js/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ant-design-icons/4.7.0/ant-design-icons.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">


    <style>
        //The Custom CSS will be added on the site head tag 
.site-head-tag {
	margin: 0;
  	padding: 0;
}
    </style>

    <title>Sharealux -    User Dashboard
</title>


<style>
  .imageye-selected {
    outline: 2px solid black !important;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5) !important;
  }
</style></head>
<body class="dark-theme" data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0">
<script>
    var notify = {
        timeout: "5000",
    }
</script>
<!--Full Layout-->
<div class="panel-layout">
    <!--Header-->
    @include('user.body.header')
    <!--/Header-->

   

    @include('user.body.sidebar')
  
    <div class="page-container">
        {{-- KYC Alert --}}
    <div style="margin-top: 80px;"> {{-- Adjust margin if header overlaps --}}
        @include('user.body.kyc_alert')
    </div>
      @yield('user')
    </div>


    <!-- Show in 575px in Mobile Screen -->
    <div class="mobile-screen-show">
        <div class="bottom-appbar">
    <a href="{{ route('user.dashboard') }}" class="active">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="layout-dashboard" icon-name="layout-dashboard" class="lucide lucide-layout-dashboard"><rect width="7" height="9" x="3" y="3" rx="1"></rect><rect width="7" height="5" x="14" y="3" rx="1"></rect><rect width="7" height="9" x="14" y="12" rx="1"></rect><rect width="7" height="5" x="3" y="16" rx="1"></rect></svg>
    </a>
    <a href="https://hyiprio.tdevs.co/user/deposit" class="">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="download" icon-name="download" class="lucide lucide-download"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" x2="12" y1="15" y2="3"></line></svg>
    </a>
    <a href="{{ route('user.plans') }}" class="">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="box" icon-name="box" class="lucide lucide-box"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.29 7 12 12 20.71 7"></polyline><line x1="12" x2="12" y1="22" y2="12"></line></svg>
    </a>
    <a href="{{ route('user.referral') }}" class="">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="gift" icon-name="gift" class="lucide lucide-gift"><polyline points="20 12 20 22 4 22 4 12"></polyline><rect width="20" height="5" x="2" y="7"></rect><line x1="12" x2="12" y1="22" y2="7"></line><path d="M12 7H7.5a2.5 2.5 0 0 1 0-5C11 2 12 7 12 7z"></path><path d="M12 7h4.5a2.5 2.5 0 0 0 0-5C13 2 12 7 12 7z"></path></svg>
    </a>
    <a href="{{ route('user.setting') }}" class="">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="settings" icon-name="settings" class="lucide lucide-settings"><path d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z"></path><circle cx="12" cy="12" r="3"></circle></svg>
    </a>
</div>
    </div>

    <!-- Show in 575px in Mobile Screen End -->

    <!-- Automatic Popup -->
    
    <!-- /Automatic Popup End -->
</div>
<!--/Full Layout-->

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
    <script src="https://hyiprio.tdevs.co/assets/global/js/pusher.min.js"></script>
    <script>
    (function ($) {
        'use strict';

        let pusherAppKey = "";
        let pusherAppCluster = "mt1";

        var notification = new Pusher(pusherAppKey, {
            encrypted: true,
            cluster: pusherAppCluster,
        });
        var channel = notification.subscribe('user-notification11867');

        channel.bind('notification-event', function (result) {
            playSound();
            latestNotification();
            notifyToast(result);
        });


        function latestNotification() {
            $.get('https://hyiprio.tdevs.co/user/latest-notification', function (data) {
                $('.user-notifications11867').html(data);
            })
        }

        function notifyToast(data) {
            new Notify({
                status: 'info',
                title: data.data.title,
                text: data.data.notice,
                effect: 'slide',
                speed: 300,
                customClass: '',
                customIcon: '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-megaphone"><path d="m3 11 18-5v12L3 14v-3z"></path><path d="M11.6 16.8a3 3 0 1 1-5.8-1.6"></path></svg>',
                showIcon: true,
                showCloseButton: true,
                autoclose: true,
                autotimeout: 9000,
                gap: 20,
                distance: 20,
                type: 1,
                position: 'right bottom',
                customWrapper: '<div><a href="' + data.data.action_url + '" class="learn-more-link">Explore<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="external-link" class="lucide lucide-external-link"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" x2="21" y1="14" y2="3"></line></svg></a></div>',
            })

        }

        function playSound() {
            var audio = new Audio("https://hyiprio.tdevs.co/assets/global/tune/knock_knock.mp3");
            audio.play();
        }


    })(jQuery);
</script>
    <script>
        (function ($) {
            'use strict';
            // AOS initialization
            AOS.init();
        })(jQuery);
    </script>

<script type="text/javascript" src="https://hyiprio.tdevs.co/assets/vendor/mckenziearts/laravel-notify/js/notify.js"></script>
    <script>
        function copyRef() {
            /* Get the text field */
            var textToCopy = $('#refLink').val();
            // Create a temporary input element
            var tempInput = $('<input>');
            $('body').append(tempInput);
            tempInput.val(textToCopy).select();
            // Copy the text from the temporary input
            document.execCommand('copy');
            // Remove the temporary input element
            tempInput.remove();
            $('#copy').text('Copied');
            var copyApi = document.getElementById("refLink");
            /* Select the text field */
            copyApi.select();
            copyApi.setSelectionRange(0, 999999999); /* For mobile devices */
            /* Copy the text inside the text field */
            document.execCommand('copy');
            $('#copy').text('Copied')

        }

        // Load More
        $('.moreless-button').click(function () {
            $('.moretext').slideToggle();
            if ($('.moreless-button').text() == "Load more") {
                $(this).text("Load less")
            } else {
                $(this).text("Load more")
            }
        });

        $('.moreless-button-2').click(function () {
            $('.moretext-2').slideToggle();
            if ($('.moreless-button-2').text() == "Load more") {
                $(this).text("Load less")
            } else {
                $(this).text("Load more")
            }
        });
    </script>
    <script>
        // Color Switcher
        $(".color-switcher").on('click', function () {
            "use strict"
            $("body").toggleClass("dark-theme");
            var url = 'https://hyiprio.tdevs.co/theme-mode';
            $.get(url)
        });
    </script>


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








</body></html>