<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from mannatthemes.com/metrica/dark/analytics/analytics-customers.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Jul 2019 06:15:02 GMT -->

<head>
    <meta charset="utf-8">
    <title>Metrica - Responsive Bootstrap 4 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta content="A premium admin dashboard template by Mannatthemes" name="description">
    <meta content="Mannatthemes" name="author">}
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="../front/images/favicon.ico">
    <!-- DataTables -->
    <!-- App css -->
    @include('front-home.includes.style-home')
    @yield('styles')
</head>

<body>
    <!-- Top Bar Start -->
    <div class="topbar">
        <!-- LOGO -->
        <div class="topbar-left"><a href="analytics-index.html" class="logo"><span><img src="../front/images/logo-sm.png" alt="logo-small" class="logo-sm"> </span><span><img src="../front/images/logo.png" alt="logo-large" class="logo-lg"></span></a></div>
        <!--end logo-->
        <!-- Navbar -->
        <nav class="navbar-custom">
            <ul class="list-unstyled topbar-nav float-right mb-0">
                <li class="hidden-sm"><a class="nav-link dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="javascript: void(0);" role="button" aria-haspopup="false" aria-expanded="false">English <img src="../front/images/flags/us_flag.jpg" class="ml-2" height="16" alt=""> <i class="mdi mdi-chevron-down"></i></a>
                    <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="javascript: void(0);"><span>German </span><img src="../front/images/flags/germany_flag.jpg" alt="" class="ml-2 float-right" height="14"></a><a class="dropdown-item" href="javascript: void(0);"><span>Italian </span><img src="../front/images/flags/italy_flag.jpg" alt="" class="ml-2 float-right" height="14"></a><a class="dropdown-item" href="javascript: void(0);"><span>French </span><img src="../front/images/flags/french_flag.jpg" alt="" class="ml-2 float-right" height="14"></a><a class="dropdown-item" href="javascript: void(0);"><span>Spanish </span><img src="../front/images/flags/spain_flag.jpg" alt="" class="ml-2 float-right" height="14"></a><a class="dropdown-item" href="javascript: void(0);"><span>Russian </span><img src="../front/images/flags/russia_flag.jpg" alt="" class="ml-2 float-right" height="14"></a></div>
                </li>
                <li class="dropdown notification-list"><a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false"><i class="dripicons-bell noti-icon"></i> <span class="badge badge-danger badge-pill noti-icon-badge">2</span></a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-lg">
                        <!-- item-->
                        <h6 class="dropdown-item-text">Notifications (18)</h6>
                        <div class="slimscroll notification-list">
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                <div class="notify-icon bg-success"><i class="mdi mdi-cart-outline"></i></div>
                                <p class="notify-details">Your order is placed<small class="text-muted">Dummy text of the printing and typesetting industry.</small></p>
                            </a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-warning"><i class="mdi mdi-message"></i></div>
                                <p class="notify-details">New Message received<small class="text-muted">You have 87 unread messages</small></p>
                            </a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-info"><i class="mdi mdi-glass-cocktail"></i></div>
                                <p class="notify-details">Your item is shipped<small class="text-muted">It is a long established fact that a reader will</small></p>
                            </a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-primary"><i class="mdi mdi-cart-outline"></i></div>
                                <p class="notify-details">Your order is placed<small class="text-muted">Dummy text of the printing and typesetting industry.</small></p>
                            </a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-danger"><i class="mdi mdi-message"></i></div>
                                <p class="notify-details">New Message received<small class="text-muted">You have 87 unread messages</small></p>
                            </a>
                        </div>
                        <!-- All--><a href="javascript:void(0);" class="dropdown-item text-center text-primary">View all <i class="fi-arrow-right"></i></a></div>
                </li>
                <li class="dropdown">
                    <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false"><img src="../front/images/users/user-4.jpg" alt="profile-user" class="rounded-circle"> <span class="ml-1 nav-user-name hidden-sm">Amelia <i class="mdi mdi-chevron-down"></i></span></a>
                    <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#"><i class="dripicons-user text-muted mr-2"></i> Profile</a> <a class="dropdown-item" href="#"><i class="dripicons-wallet text-muted mr-2"></i> My Wallet</a> <a class="dropdown-item" href="#"><i class="dripicons-gear text-muted mr-2"></i> Settings</a> <a class="dropdown-item" href="#"><i class="dripicons-lock text-muted mr-2"></i> Lock screen</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="dripicons-exit text-muted mr-2"></i> Logout</a></div>
                </li>
            </ul>
            <!--end topbar-nav-->
            <ul class="list-unstyled topbar-nav mb-0">
                <li>
                    <button class="button-menu-mobile nav-link waves-effect waves-light"><i class="dripicons-menu nav-icon"></i></button>
                </li>
                <li class="hide-phone app-search">
                    <form role="search" class="">
                        <input type="text" placeholder="Search..." class="form-control"> <a href="#"><i class="fas fa-search"></i></a></form>
                </li>
            </ul>
        </nav>
        <!-- end navbar-->
    </div>
    <!-- Top Bar End -->
    <div class="page-wrapper">
        <!-- Left Sidenav -->
        <div class="left-sidenav">
            <div class="main-icon-menu">
                <nav class="nav">
                    <a href="#MetricaAnalytic" class="nav-link" data-toggle="tooltip-custom" data-placement="top" title="" data-original-title="Analytics">
                        <svg class="nav-svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                            <g>
                                <path d="M184,448h48c4.4,0,8-3.6,8-8V72c0-4.4-3.6-8-8-8h-48c-4.4,0-8,3.6-8,8v368C176,444.4,179.6,448,184,448z" />
                                <path class="svg-primary" d="M88,448H136c4.4,0,8-3.6,8-8V296c0-4.4-3.6-8-8-8H88c-4.4,0-8,3.6-8,8V440C80,444.4,83.6,448,88,448z" />
                                <path class="svg-primary" d="M280.1,448h47.8c4.5,0,8.1-3.6,8.1-8.1V232.1c0-4.5-3.6-8.1-8.1-8.1h-47.8c-4.5,0-8.1,3.6-8.1,8.1v207.8
                                        C272,444.4,275.6,448,280.1,448z" />
                                <path d="M368,136.1v303.8c0,4.5,3.6,8.1,8.1,8.1h47.8c4.5,0,8.1-3.6,8.1-8.1V136.1c0-4.5-3.6-8.1-8.1-8.1h-47.8
                                        C371.6,128,368,131.6,368,136.1z" />
                            </g>
                        </svg>
                    </a>
                    <!--end MetricaAnalytic-->
                    <a href="#MetricaCrypto" class="nav-link" data-toggle="tooltip-custom" data-placement="top" title="" data-original-title="Crypto">
                        <svg class="nav-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path class="svg-primary" d="M410.5 279.2c-5-11.5-12.7-21.6-28.1-30.1-8.2-4.5-16.1-7.8-25.4-10 5.4-2.5 10-5.4 16.3-11 7.5-6.6 13.1-15.7 15.6-23.3 2.6-7.5 4.1-18 3.5-28.2-1.1-16.8-4.4-33.1-13.2-44.8-8.8-11.7-21.2-20.7-37.6-27-12.6-4.8-25.5-7.8-45.5-8.9V32h-40v64h-32V32h-41v64H96v48h27.9c8.7 0 14.6.8 17.6 2.3 3.1 1.5 5.3 3.5 6.5 6 1.3 2.5 1.9 8.4 1.9 17.5V343c0 9-.6 14.8-1.9 17.4-1.3 2.6-2 4.9-5.1 6.3-3.1 1.4-3.2 1.3-11.8 1.3h-26.4L96 416h87v64h41v-64h32v64h40v-64.4c26-1.3 44.5-4.7 59.4-10.3 19.3-7.2 34.1-17.7 44.7-31.5 10.6-13.8 14.9-34.9 15.8-51.2.7-14.5-.9-33.2-5.4-43.4zM224 150h32v74h-32v-74zm0 212v-90h32v90h-32zm72-208.1c6 2.5 9.9 7.5 13.8 12.7 4.3 5.7 6.5 13.3 6.5 21.4 0 7.8-2.9 14.5-7.5 20.5-3.8 4.9-6.8 8.3-12.8 11.1v-65.7zm28.8 186.7c-7.8 6.9-12.3 10.1-22.1 13.8-2 .8-4.7 1.4-6.7 1.9v-82.8c5 .8 7.6 1.8 11.3 3.4 7.8 3.3 15.2 6.9 19.8 13.2 4.6 6.3 8 15.6 8 24.7 0 10.9-2.8 19.2-10.3 25.8z" />
                        </svg>
                    </a>
                    <!--end MetricaAuthentication-->
                </nav>
                <!--end nav-->
            </div>
            <!--end main-icon-menu-->
            <div class="main-menu-inner">
                <div class="menu-body slimscroll">
                    <div id="MetricaAnalytic" class="main-icon-menu-pane">
                        <div class="title-box">
                            <h6 class="menu-title">Servicios</h6></div>
                        <ul class="nav">
                            <li class="nav-item"><a class="nav-link" href="/user"><i class="dripicons-meter"></i>Registrar servicio</a></li>
                            <li class="nav-item"><a class="nav-link" href="/ver"><i class="dripicons-user-group"></i>Encontrar Servicios</a></li>
                            <li class="nav-item"><a class="nav-link" href="/mantenimiento"><i class="dripicons-document"></i>Mantenimiento</a></li>
                        </ul>
                    </div>
                    <!-- end Analytic -->
                    <div id="MetricaCrypto" class="main-icon-menu-pane">
                        <div class="title-box">
                            <h6 class="menu-title">Crypto</h6></div>
                        <ul class="nav">
                            <li class="nav-item"><a class="nav-link" href="/dark/crypto/crypto-index.html"><i class="dripicons-device-desktop"></i>Dashboard</a></li>
                            <li class="nav-item"><a class="nav-link" href="/dark/crypto/crypto-exchange.html"><i class="dripicons-swap"></i>Exchange</a></li>
                            <li class="nav-item"><a class="nav-link" href="/dark/crypto/crypto-wallet.html"><i class="dripicons-wallet"></i>My Wallet</a></li>
                            <li class="nav-item"><a class="nav-link" href="/dark/crypto/crypto-calendar.html"><i class="dripicons-calendar"></i>Calendar</a></li>
                            <li class="nav-item"><a class="nav-link" href="/dark/crypto/crypto-news.html"><i class="dripicons-blog"></i>Crypto News</a></li>
                            <li class="nav-item"><a class="nav-link" href="/dark/crypto/crypto-ico.html"><i class="dripicons-stack"></i>ICO List</a></li>
                            <li class="nav-item"><a class="nav-link" href="/dark/crypto/crypto-settings.html"><i class="dripicons-gear"></i>Settings</a></li>
                        </ul>
                    </div>
                    <!-- end Authentication-->
                </div>
                <!--end menu-body-->
            </div>
            <!-- end main-menu-inner-->
        </div>
        <!-- end left-sidenav-->
        <!-- Page Content-->
        <div class="page-content">
            @yield('content')
            <!-- container -->
            <footer class="footer text-center text-sm-left">&copy; 2019 GlobalServ <span class="text-muted d-none d-sm-inline-block float-right">FireCode <i class="mdi mdi-heart text-danger"></i> by Orlando Kuan</span></footer>
            <!--end footer-->
        </div>
        <!-- end page content -->
    </div>
    <!-- end page-wrapper -->
    <!-- jQuery  -->
    @include('front-home.includes.script-home')
</body>
@yield('javascripts')
<!-- Mirrored from mannatthemes.com/metrica/dark/analytics/analytics-customers.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Jul 2019 06:15:09 GMT -->

</html>