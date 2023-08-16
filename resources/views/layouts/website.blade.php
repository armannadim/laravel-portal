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
                    <i class="fa fa-envelope">&nbsp;&nbsp;hola@email.com  &nbsp;&nbsp;&nbsp;&nbsp;</i>
                    <i class="fas fa fa-mobile">&nbsp;&nbsp;+880110101123</i>
                </div>
            </div>
            <div class="col-lg-3 text-right">
                <div class="header__nav__option_social">
                    <div class="header__nav__social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-youtube-play"></i></a>
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
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-youtube-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__option">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer__option__item">
                        <h5>About us</h5>
                        <p>Formed in 2006 by Matt Hobbs and Cael Jones, Videoprah is an award-winning, full-service
                            production company specializing.</p>
                        <a href="#" class="read__more">Read more <span class="arrow_right"></span></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-3">
                    <div class="footer__option__item">
                        <h5>Who we are</h5>
                        <ul>
                            <li><a href="#">Team</a></li>
                            <li><a href="#">Carrers</a></li>
                            <li><a href="#">Contact us</a></li>
                            <li><a href="#">Locations</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-3">
                    <div class="footer__option__item">
                        <h5>Our work</h5>
                        <ul>
                            <li><a href="#">Feature</a></li>
                            <li><a href="#">Latest</a></li>
                            <li><a href="#">Browse Archive</a></li>
                            <li><a href="#">Video for web</a></li>
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
