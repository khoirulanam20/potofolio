<!DOCTYPE html>
<html lang="en">

<head>
    <title>Khoirul Anam</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="HTML5 website template">
    <meta name="keywords" content="global, template, html, sass, jquery">
    <meta name="author" content="Bucky Maler">
    <link rel="stylesheet" href="{{ asset('web') }}/assets/css/main.css">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('web') }}/assets/img/logo.png">
    <style>
        .colored-toast.swal2-icon-success {
            background-color: rgba(76, 175, 80, 0.9) !important;
        }
        .colored-toast.swal2-icon-error {
            background-color: rgba(244, 67, 54, 0.9) !important;
        }
        .colored-toast .swal2-title {
            color: white;
        }
        .colored-toast .swal2-close {
            color: white;
        }
        .colored-toast .swal2-html-container {
            color: white;
        }
    </style>
</head>

<body>

    <!-- notification for small viewports and landscape oriented smartphones -->
    <div class="device-notification">
        <a class="device-notification--logo" href="#0">
            <img src="{{ asset('web') }}/assets/img/logo.png" alt="Global">
            <p>Muhammad Khoirul Anam</p>
        </a>
        <p class="device-notification--message">Muhammad Khoirul Anam has so much to offer that we must request you orient your device
            to portrait or find a larger screen. You won't be disappointed.</p>
    </div>

    <div class="perspective effect-rotate-left">
        <div class="container">
            <div class="outer-nav--return"></div>
            <div id="viewport" class="l-viewport">
                <div class="l-wrapper">

                    @include('template_web.navbar')

                    @yield('content')


                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
                    <script>
                        window.jQuery || document.write('<script src="{{ asset('web') }}/assets/js/vendor/jquery-2.2.4.min.js"><\/script>')
                    </script>
                    <script src="{{ asset('web') }}/assets/js/functions-min.js"></script>
                    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

                </div>
            </div>
        </div>
    </div>
</body>

</html>
