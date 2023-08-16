<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Videograph Template">
    <meta name="keywords" content="Videograph, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Videograph | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&display=swap"
          rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('template') }}/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('template') }}/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('template') }}/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('template') }}/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('template') }}/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('template') }}/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('template') }}/css/style.css" type="text/css">
</head>

<body>
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Header Section Begin -->
<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 text-right text-white">
                <div class="header__contact_info">
                    @if($setting->email)<a href="mailto:{{ $setting->email }}"><i class="fa fa-envelope"></i> {{ $setting->email }}</a>@endif
                    @if($setting->phone)<a href="callto:{{ $setting->phone }}"><i class="fa fa-phone"></i>{{ $setting->phone }}</a>@endif
                </div>
            </div>
            <div class="col-lg-3 text-right">
                <div class="header__nav__option_social">
                    <div class="header__nav__social">
                        @if($setting->facebook)<a href="{{ $setting->facebook }}" target="_blank"><i class="fa fa-facebook"></i></a>@endif
                        @if($setting->twitter)<a href="{{ $setting->twitter }}" target="_blank"><i class="fa fa-twitter"></i></a>@endif
                        @if($setting->linkedin)<a href="{{ $setting->linkedin }}" target="_blank"><i class="fa fa-linkedin"></i></a>@endif
                        @if($setting->instagram)<a href="{{ $setting->instagram }}" target="_blank"><i class="fa fa-instagram"></i></a>@endif
                        @if($setting->youtube)<a href="{{ $setting->youtube }}" target="_blank"><i class="fa fa-youtube-play"></i></a>@endif
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2">
                <div class="header__logo">
                    <a href="./index.html"><img src="{{ asset('template') }}/img/logo.png" alt=""></a>
                </div>
            </div>
            <div class="col-lg-10">
                <div class="header__nav__option">
                    <nav class="header__nav__menu mobile-menu">
                        <ul>
                            <li class="active"><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="#">Organization</a>
                                <ul class="dropdown">
                                    <li><a href="./about.html">About Us</a></li>
                                    <li><a href="./portfolio.html">Governing Body Members</a></li>
                                    <li><a href="./blog.html">Members</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('about') }}">About</a></li>
                            <li><a href="./portfolio.html">Portfolio</a></li>
                            <li><a href="./services.html">Activites</a></li>
                            <li><a href="{{ route('blog') }}">Blog</a></li>

                            <li><a href="{{ route('contact') }}">Contact</a></li>
                        </ul>
                    </nav>

                </div>
            </div>
        </div>
        <div id="mobile-menu-wrap"></div>
    </div>
</header>
<!-- Header End -->


<!-- Content of the website -->
@yield('content')

<!-- Content section closed -->
<!-- Footer Section Begin -->
<footer class="footer">
    <div class="container">
        <div class="footer__top">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="footer__top__logo">
                        <a href="#"><img src="{{ asset('template') }}/img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="footer__top__social">
                        @if($setting->facebook)<a href="{{ $setting->facebook }}" target="_blank"><i class="fa fa-facebook"></i></a>@endif
                        @if($setting->twitter)<a href="{{ $setting->twitter }}" target="_blank"><i class="fa fa-twitter"></i></a>@endif
                        @if($setting->linkedin)<a href="{{ $setting->linkedin }}" target="_blank"><i class="fa fa-linkedin"></i></a>@endif
                        @if($setting->instagram)<a href="{{ $setting->instagram }}" target="_blank"><i class="fa fa-instagram"></i></a>@endif
                        @if($setting->youtube)<a href="{{ $setting->youtube }}" target="_blank"><i class="fa fa-youtube-play"></i></a>@endif
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__option">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer__option__item">
                        <h5>About us</h5>
                        <p>{!! $setting->about_site !!} </p>
                        <a href="{{ route('about') }}" class="read__more">Read more <span class="arrow_right"></span></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-3">
                    <div class="footer__option__item">
                        <h5>Who we are</h5>
                        <ul>
                            <li><a href="#">Governing Body</a></li>
                            <li><a href="#">Members</a></li>
                            <li><a href="#">Contact us</a></li>
                            <li><a href="#">Become Member</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-3">
                    <div class="footer__option__item">
                        <h5>Our work</h5>
                        <ul>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">News</a></li>
                            <li><a href="#">Activites</a></li>
                            <!--<li><a href="#">Video for web</a></li>-->
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__option__item">
                        <h5>Newsletter</h5>
                        <p>Videoprah is an award-winning, full-service production company specializing.</p>
                        <form action="#">
                            <input type="text" placeholder="Email">
                            <button type="submit"><i class="fa fa-send"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__copyright">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    <p class="footer__copyright__text">Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script>
                        All rights reserved | This template is made with <i class="fa fa-heart-o"
                                                                            aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    </p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->

<!-- Js Plugins -->
<script src="{{ asset('template') }}/js/jquery-3.3.1.min.js"></script>
<script src="{{ asset('template') }}/js/bootstrap.min.js"></script>
<script src="{{ asset('template') }}/js/jquery.magnific-popup.min.js"></script>
<script src="{{ asset('template') }}/js/mixitup.min.js"></script>
<script src="{{ asset('template') }}/js/masonry.pkgd.min.js"></script>
<script src="{{ asset('template') }}/js/jquery.slicknav.js"></script>
<script src="{{ asset('template') }}/js/owl.carousel.min.js"></script>
<script src="{{ asset('template') }}/js/main.js"></script>
</body>

</html>
