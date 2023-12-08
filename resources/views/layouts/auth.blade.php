<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <title>@yield('title') - E-waste</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Premium Bootstrap 5 Landing Page Template" />
    <meta name="keywords" content="Saas, Software, multi-uses, HTML, Clean, Modern" />
    <meta name="author" content="Shreethemes" />
    <meta name="email" content="support@shreethemes.in" />
    <meta name="website" content="https://shreethemes.in" />
    <meta name="Version" content="v4.3.0" />

    <!-- favicon -->
    <link rel="shortcut icon" href="/dist/assets/images/favicon.ico" />
    <!-- Css -->
    <link href="/dist/assets/libs/simplebar/simplebar.min.css" rel="stylesheet">
    <!-- Bootstrap Css -->
    <link href="/dist/assets/css/bootstrap.min.css" class="theme-opt" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="/dist/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="/dist/assets/libs/@iconscout/unicons/css/line.css" type="text/css" rel="stylesheet" />
    <!-- Style Css-->
    <link href="/dist/assets/css/style.min.css" class="theme-opt" rel="stylesheet" type="text/css" />

</head>

<body>
    <!-- Loader -->
    <!-- <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div> -->
    <!-- Loader -->

    <!-- Hero Start -->
    <section class="bg-home bg-circle-gradiant d-flex align-items-center">
        <div class="bg-overlay bg-overlay-white"></div>
        @yield('content')
    </section><!--end section-->
    <!-- Hero End -->

    <!-- javascript -->
    <!-- JAVASCRIPT -->
    <script src="/dist/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/dist/assets/libs/feather-icons/feather.min.js"></script>
    <script src="/dist/assets/libs/simplebar/simplebar.min.js"></script>
    <!-- Main Js -->
    <script src="/dist/assets/js/plugins.init.js"></script>
    <script src="/dist/assets/js/app.js"></script>

</body>

</html>
