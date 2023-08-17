<!-- /*
* Template Name: Financing
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="favicon.png">

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap5" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;600;700&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="{{ asset('template') }}/fonts/icomoon/style.css">
    <link rel="stylesheet" href="{{ asset('template') }}/fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="{{ asset('template') }}/css/tiny-slider.css">
    <link rel="stylesheet" href="{{ asset('template') }}/css/aos.css">
    <link rel="stylesheet" href="{{ asset('template') }}/css/glightbox.min.css">
    <link rel="stylesheet" href="{{ asset('template') }}/css/style.css">

    <link rel="stylesheet" href="{{ asset('template') }}/css/flatpickr.min.css">


    <title>Financing &mdash; Free Bootstrap 5 Website Template by Untree.co</title>
</head>
<body>

<div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close">
            <span class="icofont-close js-menu-toggle"></span>
        </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div>

<nav class="site-nav">
    <div class="container">
        <div class="menu-bg-wrap">
            <div class="site-navigation">
                <div class="row g-0 align-items-center">
                    <div class="col-2">
                        <a href="index.html" class="logo m-0 float-start">{{ $setting->site_name }}</a>
                    </div>
                    <div class="col-8 text-center ">
                        <ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu mx-auto">
                            <li class="active"><a href="{{ route('home') }}">Home</a></li>
                            <li class="has-children">
                                <a href="#">Organization</a>
                                <ul class="dropdown">
                                    <li><a href="{{ route('about') }}">About Us</a></li>
                                    <li><a href="{{ route('governing_body') }}">Governing Body</a></li>
                                    <li><a href="{{ route('members') }}">Members</a></li>
                                    <li><a href="{{ route('members') }}">Membership Info</a></li>
                                    <li><a href="{{ route('website.faq') }}">FAQ</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('website.photogallery') }}">Photo Gallery</a></li>
                            <li><a href="{{ route('website.resources') }}">Resources</a></li>
                            <li><a href="{{ route('news') }}">News</a></li>
                            <li><a href="{{ route('activities') }}">Activities</a></li>
                            <li><a href="{{ route('blog') }}">Blog</a></li>
                            <li><a href="{{ route('contact') }}">Contact</a></li>
                        </ul>
                    </div>
                    <div class="col-2 text-end">
                        <a href="#" class="burger ms-auto float-end site-menu-toggle js-menu-toggle d-inline-block d-lg-none light">
                            <span></span>
                        </a>

                        <a href="#" class="call-us d-flex align-items-center">
                            <span class="icon-phone"></span>
                            <span>{{ $setting->phone }}</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
<!-- Content of the website -->
@yield('content')

<div class="section">
    <div class="container">

    </div>
</div>

<div class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="widget">
                    <h3>About</h3>
                    <p>{!! $setting->about_site !!}</p>
                </div> <!-- /.widget -->

            </div> <!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <div class="widget">
                    <h3>Organization</h3>
                    <ul class="list-unstyled float-start links">
                        <li><a href="{{ route('governing_body') }}">Governing Body</a></li>
                        <li><a href="{{ route('members') }}">Members</a></li>
                        <li><a href="{{ route('contact') }}">Contact us</a></li>
                        <li><a href="{{ route('website.membership-info') }}">Membership Info</a></li>
                    </ul>
                    <!--<ul class="list-unstyled float-start links">
                        <li><a href="#">Partners</a></li>
                        <li><a href="#">Business</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Creative</a></li>
                    </ul>-->
                </div> <!-- /.widget -->
            </div> <!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <div class="widget">
                    <!--<h3>Navigation</h3>
                    <ul class="list-unstyled links mb-4">
                        <li><a href="#">Our Vision</a></li>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Contact us</a></li>
                    </ul>-->
                    <div class="widget">
                        <address>43 Raymouth Rd. Baltemoer, <br> London 3910</address>
                        <ul class="list-unstyled links">
                            <li><a href="tel://{{ $setting->phone }}">{{ $setting->phone }}</a></li>
                            <li><a href="mailto:{{ $setting->phone }}">{{ $setting->email }}</a></li>
                        </ul>
                    </div> <!-- /.widget -->
                    <h3>Social</h3>
                    <ul class="list-unstyled social">
                        <li>@if($setting->facebook)<a href="{{ $setting->facebook }}" target="_blank"><span class="icon-facebook"></span></a>@endif</li>
                        <li>@if($setting->twitter)<a href="{{ $setting->twitter }}" target="_blank"><span class="icon-twitter"></span></a>@endif</li>
                        <li>@if($setting->linkedin)<a href="{{ $setting->linkedin }}" target="_blank"><span class="icon-linkedin"></span></a>@endif</li>
                        <li>@if($setting->instagram)<a href="{{ $setting->instagram }}" target="_blank"><span class="icon-instagram"></span></a>@endif</li>
                        <li>@if($setting->youtube)<a href="{{ $setting->youtube }}" target="_blank"><span class="icon-youtube"></span></a>@endif</li>
                    </ul>
                </div> <!-- /.widget -->
            </div> <!-- /.col-lg-4 -->
        </div> <!-- /.row -->

        <div class="row mt-5">
            <div class="col-12 text-center">
                <!--
          **==========
          NOTE:
          Please don't remove this copyright link unless you buy the license here https://untree.co/license/
          **==========
        -->

                <p>{{ $setting->copyright }}</p>
            </div>
        </div>
    </div> <!-- /.container -->
</div> <!-- /.site-footer -->

<!-- Preloader -->
<div id="overlayer"></div>
<div class="loader">
    <div class="spinner-border text-primary" role="status">
        <span class="visually-hidden">Loading...</span>
    </div>
</div>


<script src="{{ asset('template') }}/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('template') }}/js/tiny-slider.js"></script>

<script src="{{ asset('template') }}/js/flatpickr.min.js"></script>


<script src="{{ asset('template') }}/js/aos.js"></script>
<script src="{{ asset('template') }}/js/glightbox.min.js"></script>
<script src="{{ asset('template') }}/js/navbar.js"></script>
<script src="{{ asset('template') }}/js/counter.js"></script>
<script src="{{ asset('template') }}/js/custom.js"></script>
</body>
</html>
