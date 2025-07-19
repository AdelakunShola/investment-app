<html lang="en"><head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content=" ">
  <link rel="shortcut icon" href="{{ asset('frontend/favicon-1.png') }}" type="image/x-icon">
<link rel="icon" href="{{ asset('frontend/favicon-1.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://hyiprio.tdevs.co/assets/global/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://hyiprio.tdevs.co/assets/backend/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://hyiprio.tdevs.co/assets/backend/css/animate.css">
    <link rel="stylesheet" href="https://hyiprio.tdevs.co/assets/global/css/nice-select.css">
    <link rel="stylesheet" href="https://hyiprio.tdevs.co/assets/global/css/datatables.min.css">
    <link rel="stylesheet" href="https://hyiprio.tdevs.co/assets/global/css/simple-notify.min.css">
    <link rel="stylesheet" href="https://hyiprio.tdevs.co/assets/global/css/simple-notify.min.css">
    <link rel="stylesheet" href="https://hyiprio.tdevs.co/assets/global/css/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="https://hyiprio.tdevs.co/assets/vendor/mckenziearts/laravel-notify/css/notify.css">    <link rel="stylesheet" href="https://hyiprio.tdevs.co/assets/backend/css/summernote-lite.min.css">
    <link rel="stylesheet" href="https://hyiprio.tdevs.co/assets/global/css/select2.min.css">
    <link rel="stylesheet" href="https://hyiprio.tdevs.co/assets/global/css/custom.css?var=2.2">
    <link rel="stylesheet" href="https://hyiprio.tdevs.co/assets/backend/css/styles.css?var=2.2">
    
    <title>Sharealux -    Admin Dashboard
</title>
<style>
  .imageye-selected {
    outline: 2px solid black !important;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5) !important;
  }
</style><style type="text/css">
@font-face {
	font-family: 'Atlassian Sans Ext';
	font-style: normal;
	font-weight: 100 900;
	font-display: swap;
	src: url('chrome-extension://liecbddmkiiihnedobmlmillhodjkdmb/fonts/AtlassianSans-cyrillic-ext.woff2') format('woff2');
	unicode-range: U+0460-052F, U+1C80-1C8A, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}

@font-face {
	font-family: 'Atlassian Sans Ext';
	font-style: normal;
	font-weight: 100 900;
	font-display: swap;
	src: url('chrome-extension://liecbddmkiiihnedobmlmillhodjkdmb/fonts/AtlassianSans-cyrillic.woff2') format('woff2');
	unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}

@font-face {
	font-family: 'Atlassian Sans Ext';
	font-style: normal;
	font-weight: 100 900;
	font-display: swap;
	src: url('chrome-extension://liecbddmkiiihnedobmlmillhodjkdmb/fonts/AtlassianSans-vietnamese.woff2') format('woff2');
	unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0,
		U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
}

@font-face {
	font-family: 'Atlassian Sans Ext';
	font-style: normal;
	font-weight: 100 900;
	font-display: swap;
	src: url('chrome-extension://liecbddmkiiihnedobmlmillhodjkdmb/fonts/AtlassianSans-latin.woff2') format('woff2');
	unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304,
		U+0308, U+0329, U+2000-206F, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

@font-face {
	font-family: 'Atlassian Sans Ext';
	font-style: normal;
	font-weight: 100 900;
	font-display: swap;
	src: url('chrome-extension://liecbddmkiiihnedobmlmillhodjkdmb/fonts/AtlassianSans-latin-ext.woff2') format('woff2');
	unicode-range: U+0100-02BA, U+02BD-02C5, U+02C7-02CC, U+02CE-02D7, U+02DD-02FF, U+0304, U+0308,
		U+0329, U+1D00-1DBF, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113,
		U+2C60-2C7F, U+A720-A7FF;
}</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>

<body>
<!--Full Layout-->
<div class="layout">

    <script>
    var notify = {
        timeout: "5000",
    }
</script>
    <!--Header-->
   @include('admin.body.header')
    <!--/Header-->

    <!--Side Nav-->
            
@include('admin.body.sidebar')
    <!--/Side Nav-->

    <!--Page Content-->
    <div class="page-container">
  
			@yield('admin')
		



    <!-- Modal for Send Email -->
    
    <!-- Modal for Send Email-->

    </div>
    <!--Page Content-->
</div>
<!--/Full Layout-->



<script src="https://hyiprio.tdevs.co/assets/global/js/jquery.min.js"></script>
<script src="https://hyiprio.tdevs.co/assets/global/js/jquery-migrate.js"></script>
<script src="https://hyiprio.tdevs.co/assets/backend/js/jquery-ui.js"></script>

<script src="https://hyiprio.tdevs.co/assets/backend/js/bootstrap.bundle.min.js"></script>

<script src="https://hyiprio.tdevs.co/assets/backend/js/scrollUp.min.js"></script>
<script src="https://hyiprio.tdevs.co/assets/global/js/waypoints.min.js"></script>
<script src="https://hyiprio.tdevs.co/assets/global/js/jquery.counterup.min.js"></script>
<script src="https://hyiprio.tdevs.co/assets/backend/js/chart.js"></script>
<script src="https://hyiprio.tdevs.co/assets/global/js/lucide.min.js"></script>
<script src="https://hyiprio.tdevs.co/assets/global/js/jquery.nice-select.min.js"></script>
<script src="https://hyiprio.tdevs.co/assets/global/js/datatables.min.js" type="text/javascript" charset="utf8"></script>
<script src="https://hyiprio.tdevs.co/assets/global/js/moment.min.js"></script>
<script src="https://hyiprio.tdevs.co/assets/global/js/daterangepicker.min.js"></script>

<script src="https://hyiprio.tdevs.co/assets/global/js/simple-notify.min.js"></script>
<script src="https://hyiprio.tdevs.co/assets/backend/js/summernote-lite.min.js"></script>
<script src="https://hyiprio.tdevs.co/assets/global/js/select2.min.js"></script>
<script src="https://hyiprio.tdevs.co/assets/backend/js/main.js?var=5"></script>
<script src="https://hyiprio.tdevs.co/assets/global/js/pusher.min.js"></script>
<script src="https://hyiprio.tdevs.co/assets/global/js/custom.js?var=6"></script>

<script>
    (function ($) {
        'use strict';

        let pusherAppKey = "";
        let pusherAppCluster = "mt1";

        var notification = new Pusher(pusherAppKey, {
            encrypted: true,
            cluster: pusherAppCluster,
        });
        var channel = notification.subscribe('admin-notification');

        channel.bind('notification-event', function (result) {
            playSound();
            latestNotification();
            notifyToast(result);
        });


        function latestNotification() {
            $.get('https://hyiprio.tdevs.co/admin/latest-notification', function (data) {
                $('.admin-notifications').html(data);
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
<script type="text/javascript" src="https://hyiprio.tdevs.co/assets/vendor/mckenziearts/laravel-notify/js/notify.js"></script>    <script>
    (function ($) {
        'use strict';

        //site chart
        let chart;
        $('input[name="daterange"]').daterangepicker({
            opens: 'left'
        }, function (start, end) {

            $.get('https://hyiprio.tdevs.co/admin', {
                start_date: start.format('YYYY-MM-DD'),
                end_date: end.format('YYYY-MM-DD')
            }, function (chartData) {

                chart.destroy()
                chart_show(chartData);
            });
        });


        function chart_show(chartData) {
            var date_label = Object.keys(chartData['date_label']);
            var deposit_data = Object.values(chartData['deposit_statistics']);
            var invest_data = Object.values(chartData['invest_statistics']);
            var withdraw_data = Object.values(chartData['withdraw_statistics']);
            var profit_data = Object.values(chartData['profit_statistics']);
            var symbol = chartData['symbol'];


            // Bar Chart
            var data = {
                labels: date_label,
                datasets: [{
                    label: 'Total Deposit ' + symbol + sumArrayValues(deposit_data),
                    data: deposit_data,
                    backgroundColor: '#ef476f',
                    borderColor: '#ffffff',
                    borderWidth: 0,
                    borderRadius: 90,
                    tension: 0.1
                },
                    {
                        label: 'Total Investment ' + symbol + sumArrayValues(invest_data),
                        data: invest_data,
                        backgroundColor: '#5e3fc9',
                        borderColor: '#ffffff',
                        borderWidth: 0,
                        borderRadius: 90,
                        tension: 1
                    },
                    {
                        label: 'Total Withdraw ' + symbol + sumArrayValues(withdraw_data),
                        data: withdraw_data,
                        backgroundColor: '#2a9d8f',
                        borderColor: '#ffffff',
                        borderWidth: 0,
                        borderRadius: 90,
                        tension: 0.1
                    },
                    {
                        label: 'Total Profit ' + symbol + sumArrayValues(profit_data),
                        data: profit_data,
                        backgroundColor: '#003566',
                        borderColor: '#ffffff',
                        borderWidth: 0,
                        borderRadius: 90,
                        tension: 0.1
                    },
                ]
            };
            // render init block


            var ctx = document.getElementById('depositChart');
            var configuration = {
                type: 'bar',
                data,
                options: {
                    scales: {
                        y: {
                            beginAtZero: true,
                        }
                    },
                    plugins: {
                        tooltip: {
                            callbacks: {
                                label: function (context) {
                                    return (context.dataset.label.split(symbol)[0]).split(' ')[1] + ': ' + symbol + context.formattedValue;
                                }
                            }
                        }
                    }
                }
            }

            if (chart) {
                chart.destroy();
                chart = new Chart(ctx, configuration);
            } else {
                chart = new Chart(ctx, configuration);
            }
        }

        var chartData = {
            'date_label': {"23 Jun":0,"24 Jun":0,"25 Jun":0,"26 Jun":0,"27 Jun":0,"28 Jun":0,"29 Jun":0,"30 Jun":0},
            'deposit_statistics': {"23 Jun":0,"24 Jun":0,"25 Jun":0,"26 Jun":0,"27 Jun":0,"28 Jun":0,"29 Jun":0,"30 Jun":0},
            'invest_statistics': {"23 Jun":0,"24 Jun":0,"25 Jun":0,"26 Jun":0,"27 Jun":0,"28 Jun":0,"29 Jun":0,"30 Jun":0},
            'withdraw_statistics': {"23 Jun":0,"24 Jun":0,"25 Jun":0,"26 Jun":0,"27 Jun":0,"28 Jun":0,"29 Jun":0,"30 Jun":0},
            'profit_statistics': {"23 Jun":57,"24 Jun":36,"25 Jun":33,"26 Jun":45,"27 Jun":27,"28 Jun":45,"29 Jun":18,"30 Jun":30,"22 Jun":18},
            'symbol': "$",
        }
        chart_show(chartData);


        //Plan chart
        var schema = {"Pro Plan":105,"Starter Plan":398,"Standard Plan":130,"10000":74};
        var invest_data = Object.values(schema);
        var invest_label = Object.keys(schema);
        // Bar Chart
        var data = {
            labels: invest_label,
            datasets: [{
                label: 'Total Investment',
                data: invest_data,
                backgroundColor: [
                    '#5e3fc9',
                    '#2a9d8f',
                    '#ee6c4d',
                    '#6d597a',
                    '#003566',
                    '#ef476f',
                    '#718355',
                ],
                borderColor: [
                    '#ffffff',
                    '#ffffff',
                    '#ffffff',
                    '#ffffff',
                    '#ffffff',
                    '#ffffff',
                    '#ffffff'
                ],
                borderWidth: 3,
                borderRadius: 12,
                barPercentage: 0.3,
                hoverBackgroundColor: '#003566',
            }]
        };
        // render init block
        new Chart(
            document.getElementById('schemeChart'),
            {
                type: 'doughnut',
                data,
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            }
        );


        // Country Chart
        var country = {"Nigeria":2231,"Pakistan":1494,"India":1366,"Zimbabwe":875,"Bangladesh":724};
        var country_data = Object.values(country);
        var country_label = Object.keys(country);
        var data = {
            labels: country_label,
            datasets: [{
                label: 'Country',
                data: country_data,
                backgroundColor: [
                    '#5e3fc9',
                    '#2a9d8f',
                    '#ef476f',
                    '#718355',
                    '#ee6c4d',
                    '#6d597a',
                    '#003566',
                    "#b91d47",
                    "#00aba9",
                    "#2b5797",
                    "#e8c3b9",
                    "#1e7145"
                ],
                borderColor: [
                    '#ffffff',
                    '#ffffff',
                    '#ffffff',
                    '#ffffff',
                    '#ffffff',
                    '#ffffff',
                    '#ffffff'
                ],
                borderWidth: 3,
                borderRadius: 12,
                barPercentage: 0.3,
                hoverBackgroundColor: '#003566',
            }]
        };
        // render init block
        new Chart(
            document.getElementById('countryChart'),
            {
                type: 'doughnut',
                data,
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            }
        );

        // Browser Chart
        var browser = {"Chrome":16056,"Edge":510,"Safari":2100,"Firefox":441,"Opera":268,"Mozilla":74,"UCBrowser":9,"":1};
        var browser_data = Object.values(browser);
        var browser_label = Object.keys(browser);
        var data = {
            labels: browser_label,
            datasets: [{
                label: 'Browser',
                data: browser_data,
                backgroundColor: [
                    '#5e3fc9',
                    '#2a9d8f',
                    '#ef476f',
                    '#718355',
                    '#ee6c4d',
                    '#6d597a',
                    '#003566',
                    "#b91d47",
                    "#00aba9",
                    "#2b5797",
                    "#e8c3b9",
                    "#1e7145"
                ],
                borderColor: [
                    '#ffffff',
                    '#ffffff',
                    '#ffffff',
                    '#ffffff',
                    '#ffffff',
                    '#ffffff',
                    '#ffffff'
                ],
                borderWidth: 2,
                borderRadius: 12,
                barPercentage: 0.3,
                hoverBackgroundColor: '#003566',
            }]
        };
        // render init block
        new Chart(
            document.getElementById('browserChart'),
            {
                type: 'polarArea',
                data,
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            }
        );

        // OS Chart
        var platform = {"Windows":4741,"Ubuntu":15,"OS X":575,"AndroidOS":11164,"iOS":2608,"Linux":340,"ChromeOS":15,"":1};
        var platform_data = Object.values(platform);
        var platform_label = Object.keys(platform);
        var data = {
            labels: platform_label,
            datasets: [{
                label: 'OS',
                data: platform_data,
                backgroundColor: [
                    '#5e3fc9',
                    '#718355',
                    '#ef476f',
                    '#ee6c4d',
                    "#b91d47",
                    "#2b5797",
                    "#e8c3b9",
                    "#1e7145",
                    '#2a9d8f',
                ],
                borderColor: [
                    '#ffffff',
                    '#ffffff',
                    '#ffffff',
                    '#ffffff',
                    '#ffffff',
                    '#ffffff',
                    '#ffffff'
                ],
                borderWidth: 3,
                borderRadius: 12,
                barPercentage: 0.3,
                hoverBackgroundColor: '#003566',
            }]
        };
        // render init block
        new Chart(
            document.getElementById('osChart'),
            {
                type: 'pie',
                data,
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            }
        );

    })(jQuery);
</script><div class="daterangepicker ltr show-calendar opensleft"><div class="ranges"></div><div class="drp-calendar left"><div class="calendar-table"></div><div class="calendar-time" style="display: none;"></div></div><div class="drp-calendar right"><div class="calendar-table"></div><div class="calendar-time" style="display: none;"></div></div><div class="drp-buttons"><span class="drp-selected">06/23/2025 - 06/30/2025</span><button class="cancelBtn site-btn-xs ms-1 red-btn" type="button">Cancel</button><button class="applyBtn site-btn-xs ms-1 primary-btn" disabled="disabled" type="button">Apply</button> </div></div>
    <script>
        (function ($) {
            'use strict'
            //send mail modal form open
            $('.send-mail').on('click', function () {
                var id = $(this).data('id')
                var name = $(this).data('name')
                $('#name').html(name)
                $('#userId').val(id)
                $('#sendEmail').modal('toggle')
            })
        })(jQuery)
    </script>











</body></html>