<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>travel</title>
    <link rel="icon" href="{{asset('https://oleoletravel.herokuapp.com/public/tourby/img/favicon.png')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('https://oleoletravel.herokuapp.com/public/tourby/css/bootstrap.min.css')}}">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{asset('https://oleoletravel.herokuapp.com/public/tourby/css/animate.css')}}">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{asset('https://oleoletravel.herokuapp.com/public/tourby/css/owl.carousel.min.css')}}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{asset('https://oleoletravel.herokuapp.com/public/tourby/css/all.css')}}">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{asset('https://oleoletravel.herokuapp.com/public/tourby/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('https://oleoletravel.herokuapp.com/public/tourby/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('https://oleoletravel.herokuapp.com/public/tourby/css/nice-select.css')}}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{asset('https://oleoletravel.herokuapp.com/public/tourby/css/magnific-popup.css')}}">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="{{asset('https://oleoletravel.herokuapp.com/public/tourby/css/slick.css')}}">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{asset('https://oleoletravel.herokuapp.com/public/tourby/css/style.css')}}">
    
</head>

<body>

<header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="{{route('view.index')}}"> <img src="{{asset('public/tourby/img/logo.png')}}" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="menu_icon"><i class="fas fa-bars"></i></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('view.index')}}">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('view.about')}}">about</a>
                                </li>
                                
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('view.contact')}}">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <a class="btn_1 d-none d-lg-block" href="{{route('view.contact')}}">Call Us</a>
                    </nav>
                </div>
            </div>
        </div>
    </header>