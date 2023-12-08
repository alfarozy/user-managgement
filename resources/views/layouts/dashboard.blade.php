<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="Version" content="v4.3.0" />

    <!-- favicon -->
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

    <div class="page-wrapper toggled">
        <!-- sidebar-wrapper -->
        <nav id="sidebar" class="sidebar-wrapper sidebar-dark">
            <div class="sidebar-content" data-simplebar style="height: calc(100% - 60px);">
                <div class="sidebar-brand text-center">
                    <a href="/" class="text-center text-white">
                        E-waste
                    </a>
                </div>

                <ul class="sidebar-menu">
                    <li class="active"><a href="/"><i class="ti ti-home me-2"></i>Dashboard</a></li>
                    <li><a href="/"><i class="ti ti-list me-2"></i>Menu lainnya</a></li>
                    <li><a href="/"><i class="ti ti-list me-2"></i>Menu lainnya</a></li>

                </ul>
                <!-- sidebar-menu  -->
            </div>
            <!-- Sidebar Footer -->

            <!-- Sidebar Footer -->
        </nav>
        <!-- sidebar-wrapper  -->

        <!-- Start Page Content -->
        <main class="page-content bg-light">
            <!-- Top Header -->
            <div class="top-header">
                <div class="header-bar d-flex justify-content-between">
                    <div class="d-flex align-items-center">
                        <a href="#" class="logo-icon me-3">
                            E-waste
                        </a>
                        <a id="close-sidebar" class="btn btn-icon btn-soft-light" href="javascript:void(0)">
                            <i class="ti ti-menu-2"></i>
                        </a>

                    </div>

                    <ul class="list-unstyled mb-0">

                        <li class="list-inline-item mb-0 ms-1">
                            <div class="dropdown dropdown-primary">
                                <button type="button" class="btn btn-soft-light dropdown-toggle p-0"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img
                                        src="{{ Auth()->user()->getAvatar() }}" class="avatar avatar-ex-small rounded"
                                        alt=""></button>
                                <div class="dropdown-menu dd-menu dropdown-menu-end shadow border-0 mt-3 py-3"
                                    style="min-width: 200px;">
                                    <a class="dropdown-item d-flex align-items-center text-dark pb-3"
                                        href="profile.html">
                                        <img src="{{ Auth()->user()->getAvatar() }}"
                                            class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                        <div class="flex-1 ms-2">
                                            <span class="d-block">{{ Auth()->user()->name }}</span>
                                            <small class="text-muted">User Manager</small>
                                        </div>
                                    </a>

                                    <a class="dropdown-item text-dark" href="{{ route('profile.index') }}"><span
                                            class="mb-0 d-inline-block me-1"><i class="ti ti-settings"></i></span>
                                        Update Profile</a>

                                    <a class="dropdown-item text-dark" href="{{ route('logout') }}"><span
                                            class="mb-0 d-inline-block me-1"><i class="ti ti-logout"></i></span>
                                        Logout</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Top Header -->

            @yield('content')

            <!-- Footer Start -->
            <footer class="shadow py-3">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col">
                            <div class="text-sm-start text-center mx-md-2">
                                <p class="mb-0 text-muted">©
                                    <script>
                                        document.write(new Date().getFullYear())
                                    </script> E-waste. Powered by G-Tech</a>.
                                </p>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end container-->
            </footer><!--end footer-->
            <!-- End -->
        </main>
        <!--End page-content" -->
    </div>
    <!-- page-wrapper -->

    <!-- Offcanvas Start -->
    <div class="offcanvas offcanvas-end shadow" tabindex="-1" id="offcanvasRight"
        aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header p-4 border-bottom">
            <h5 id="offcanvasLeftLabel" class="mb-0">
                <img src="/dist/assets/images/logo-dark.png" height="24" class="light-version" alt="">
                <img src="/dist/assets/images/logo-light.png" height="24" class="dark-version" alt="">
            </h5>
            <button type="button" class="btn-close d-flex align-items-center text-dark" data-bs-dismiss="offcanvas"
                aria-label="Close"><i class="uil uil-times fs-4"></i></button>
        </div>
        <div class="offcanvas-body p-4">
            <div class="row">
                <div class="col-12">
                    <div class="text-center">
                        <h6 class="fw-bold">Theme Options</h6>

                        <ul class="text-center style-switcher list-unstyled mt-4">
                            <li class="d-grid"><a href="javascript:void(0)" class="rtl-version t-rtl-light"
                                    onclick="setTheme('style-rtl')"><img src="/dist/assets/images/demos/rtl.png"
                                        class="img-fluid rounded-md shadow-md d-block mx-auto" style="width: 230px;"
                                        alt=""><span class="text-dark fw-medium mt-3 d-block">RTL
                                        Version</span></a>
                            </li>
                            <li class="d-grid"><a href="javascript:void(0)" class="ltr-version t-ltr-light"
                                    onclick="setTheme('style')"><img src="/dist/assets/images/demos/ltr.png"
                                        class="img-fluid rounded-md shadow-md d-block mx-auto" style="width: 230px;"
                                        alt=""><span class="text-dark fw-medium mt-3 d-block">LTR
                                        Version</span></a>
                            </li>
                            <li class="d-grid"><a href="javascript:void(0)" class="dark-rtl-version t-rtl-dark"
                                    onclick="setTheme('style-dark-rtl')"><img
                                        src="/dist/assets/images/demos/dark-rtl.png"
                                        class="img-fluid rounded-md shadow-md d-block mx-auto" style="width: 230px;"
                                        alt=""><span class="text-dark fw-medium mt-3 d-block">RTL
                                        Version</span></a>
                            </li>
                            <li class="d-grid"><a href="javascript:void(0)" class="dark-ltr-version t-ltr-dark"
                                    onclick="setTheme('style-dark')"><img src="/dist/assets/images/demos/dark.png"
                                        class="img-fluid rounded-md shadow-md d-block mx-auto" style="width: 230px;"
                                        alt=""><span class="text-dark fw-medium mt-3 d-block">LTR
                                        Version</span></a>
                            </li>
                            <li class="d-grid"><a href="javascript:void(0)" class="dark-version t-dark mt-4"
                                    onclick="setTheme('style-dark')"><img src="/dist/assets/images/demos/dark.png"
                                        class="img-fluid rounded-md shadow-md d-block mx-auto" style="width: 230px;"
                                        alt=""><span class="text-dark fw-medium mt-3 d-block">Dark
                                        Version</span></a>
                            </li>
                            <li class="d-grid"><a href="javascript:void(0)" class="light-version t-light mt-4"
                                    onclick="setTheme('style')"><img src="/dist/assets/images/demos/ltr.png"
                                        class="img-fluid rounded-md shadow-md d-block mx-auto" style="width: 230px;"
                                        alt=""><span class="text-dark fw-medium mt-3 d-block">Light
                                        Version</span></a>
                            </li>
                            <li class="d-grid"><a href="../../landing/dist/index.html" target="_blank"
                                    class="mt-4"><img src="/dist/assets/images/demos/landing.png"
                                        class="img-fluid rounded-md shadow-md d-block mx-auto" style="width: 230px;"
                                        alt=""><span
                                        class="text-dark fw-medium mt-3 d-block">Landing</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="offcanvas-footer p-4 border-top text-center">
            <ul class="list-unstyled social-icon social mb-0">
                <li class="list-inline-item mb-0"><a href="https://1.envato.market/landrick" target="_blank"
                        class="rounded"><i class="uil uil-shopping-cart align-middle" title="Buy Now"></i></a></li>
                <li class="list-inline-item mb-0"><a href="https://dribbble.com/shreethemes" target="_blank"
                        class="rounded"><i class="uil uil-dribbble align-middle" title="dribbble"></i></a></li>
                <li class="list-inline-item mb-0"><a href="https://www.behance.net/shreethemes" target="_blank"
                        class="rounded"><i class="uil uil-behance align-middle" title="behance"></i></a></li>
                <li class="list-inline-item mb-0"><a href="https://www.facebook.com/shreethemes" target="_blank"
                        class="rounded"><i class="uil uil-facebook-f align-middle" title="facebook"></i></a></li>
                <li class="list-inline-item mb-0"><a href="https://www.instagram.com/shreethemes/" target="_blank"
                        class="rounded"><i class="uil uil-instagram align-middle" title="instagram"></i></a></li>
                <li class="list-inline-item mb-0"><a href="https://twitter.com/shreethemes" target="_blank"
                        class="rounded"><i class="uil uil-twitter align-middle" title="twitter"></i></a></li>
                <li class="list-inline-item mb-0"><a href="mailto:support@shreethemes.in" class="rounded"><i
                            class="uil uil-envelope align-middle" title="email"></i></a></li>
                <li class="list-inline-item mb-0"><a href="https://shreethemes.in" target="_blank"
                        class="rounded"><i class="uil uil-globe align-middle" title="website"></i></a></li>
            </ul><!--end icon-->
        </div>
    </div>
    <!-- Offcanvas End -->

    <!-- javascript -->
    <!-- JAVASCRIPT -->
    <script src="/dist/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/dist/assets/libs/feather-icons/feather.min.js"></script>
    <script src="/dist/assets/libs/simplebar/simplebar.min.js"></script>
    <script src="/dist/assets/libs/apexcharts/apexcharts.min.js"></script>
    <!-- Main Js -->
    <script src="/dist/assets/js/plugins.init.js"></script>
    <script src="/dist/assets/js/app.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>

    <script>
        $('.btn-upload').click(function() {
            $(".input-img").click();
        });
        $('.input-img').change(function() {
            const file = this.files[0];
            if (file && file.name.match(/\.(jpg|jpeg|png|svg)$/)) {
                let reader = new FileReader();
                reader.onload = function(event) {
                    $('.image-preview').attr('src', event.target.result)
                }
                reader.readAsDataURL(file);
            } else {
                alert('please upload image file');
            }
        });
    </script>
</body>

</html>
