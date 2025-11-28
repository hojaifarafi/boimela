<!DOCTYPE html>
<html lang="en">
<!--<< Header Area >>-->

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="pixel-plus">
    <meta name="description" content="Boimela - Books Library eCommerce Store">
    <!-- ======== Page title ============ -->
    <title>Boimela - Books Library eCommerce Store</title>
    <!--<< Favcion >>-->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png') }}">
    <!--<< Bootstrap min.css >>-->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!--<< All Min Css >>-->
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <!--<< Animate.css >>-->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <!--<< Magnific Popup.css >>-->
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <!--<< MeanMenu.css >>-->
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css') }}">
    <!--<< Swiper Bundle.css >>-->
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
    <!--<< Nice Select.css >>-->
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
    <!--<< Icomoon.css >>-->
    <link rel="stylesheet" href="{{ asset('assets/css/icomoon.css') }}">
    <!--<< Main.css >>-->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
</head>
<body>
    <!-- Cursor follower -->
    <div class="cursor-follower"></div>

    <!-- Preloader start -->
     <div id="preloader" class="preloader">
        <div class="animation-preloader">
            <div class="spinner">
            </div>
            <div class="txt-loading">
                <span data-text-preloader="B" class="letters-loading">
                    B
                </span>
                <span data-text-preloader="O" class="letters-loading">
                    O
                </span>
                <span data-text-preloader="I" class="letters-loading">
                    I
                </span>
                <span data-text-preloader="M" class="letters-loading">
                    M
                </span>
                <span data-text-preloader="E" class="letters-loading">
                    E
                </span>
                <span data-text-preloader="L" class="letters-loading">
                    L
                </span>
                <span data-text-preloader="A" class="letters-loading">
                    A
                </span>
            </div>
            <p class="text-center">Loading</p>
        </div>
        <div class="loader">
            <div class="row">
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Back To Top start -->
    <button id="back-top" class="back-to-top">
        <i class="fa-solid fa-chevron-up"></i>
    </button>
<!-- Offcanvas Area start  -->
    <div class="fix-area">
        <div class="offcanvas__info">
            <div class="offcanvas__wrapper">
                <div class="offcanvas__content">
                    <div class="offcanvas__top mb-5 d-flex justify-content-between align-items-center">
                        <div class="offcanvas__logo">
                            <a href="index.html">
                                <img src="{{ asset('assets/img/logo/logo.svg') }}" alt="logo-img">
                            </a>
                        </div>
                        <div class="offcanvas__close">
                            <button>
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <p class="text d-none d-xl-block">
                        Nullam dignissim, ante scelerisque the is euismod fermentum odio sem semper the is erat, a
                        feugiat leo urna eget eros. Duis Aenean a imperdiet risus.
                    </p>
                    <div class="mobile-menu fix mb-3"></div>
                    <div class="offcanvas__contact">
                        <h4>Contact Info</h4>
                        <ul>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon">
                                    <i class="fal fa-map-marker-alt"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a target="_blank" href="index.html">Main Street, Melbourne, Australia</a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15">
                                    <i class="fal fa-envelope"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a href="mailto:info@example.com"><span
                                            class="mailto:info@example.com">info@example.com</span></a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15">
                                    <i class="fal fa-clock"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a target="_blank" href="index.html">Mod-friday, 09am -05pm</a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15">
                                    <i class="far fa-phone"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a href="tel:+11002345909">+11002345909</a>
                                </div>
                            </li>
                        </ul>
                        <div class="header-button mt-4">
                            <a href="contact.html" class="theme-btn text-center">
                                Get A Quote <i class="fa-solid fa-arrow-right-long"></i>
                            </a>
                        </div>
                        <div class="social-icon d-flex align-items-center">
                            <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://x.com/"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
                            <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas__overlay"></div>


    <!-- Header Top section start -->
    <div class="header-top-section">
        <div class="container-fluid">
            <div class="header-top-wrapper">
                <ul class="contact-list">
                    <li>
                        <i class="fa-brands fa-facebook-f"></i>
                        7500k Followers
                    </li>
                    <li>
                        <i class="fa-solid fa-phone"></i>
                        <a href="tel:+40276328246">+402 763 282 46</a>
                    </li>
                </ul>
                <div class="flag-wrapper">
                    <div class="flag-wrap">
                        <div class="nice-select" tabindex="0">
                            <span class="current">
                                English
                            </span>
                            <ul class="list">
                                <li data-value="1" class="option selected focus">
                                    English
                                </li>
                                <li data-value="1" class="option">
                                    Bangla
                                </li>
                                <li data-value="1" class="option">
                                    German
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="flag-wrap">
                        <div class="nice-select style-2" tabindex="0">
                            <span class="current">
                                $Usd
                            </span>
                            <ul class="list">
                                <li data-value="1" class="option selected focus">
                                    $Usd
                                </li>
                                <li data-value="1" class="option">
                                    €Eur
                                </li>
                                <li data-value="1" class="option">
                                    ¥Jpy
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="content">
                        <button id="openButton" class="account-text d-flex align-items-center gap-2">
                            <i class="fa-regular fa-user"></i>
                            Log in
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Header Section Start -->
    <header id="header-sticky" class="header-1">
        <div class="container-fluid">
            <div class="mega-menu-wrapper">
                <div class="header-main">
                    <div class="logo">
                        <a href="index.html" class="header-logo">
                            <img src="{{ asset('assets/img/logo/logo.svg')}}" alt="logo-img">
                        </a>
                        <a href="index.html" class="header-logo-2 d-none">
                            <img src="{{ asset('assets/img/logo/logo.svg')}}" alt="logo-img">
                        </a>
                    </div>
                    <div class="mean__menu-wrapper">
                        <div class="main-menu">
                            <nav id="mobile-menu" style="display: block;">
                                <ul>
                                    <li>
                                        <a href="index.html">
                                            Home
                                            <i class="fas fa-angle-down"></i>
                                        </a>
                                        <ul class="submenu">
                                            <li><a href="index.html">Home 01</a></li>
                                            <li><a href="index-2.html">Home 02</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="shop.html">
                                            Shop
                                            <i class="fas fa-angle-down"></i>
                                        </a>
                                        <ul class="submenu">
                                            <li><a href="shop.html">Shop Default</a></li>
                                            <li><a href="shop-list.html">Shop List</a></li>
                                            <li><a href="shop-details.html">Shop Details</a></li>
                                            <li><a href="shop-cart.html">Shop Cart</a></li>
                                            <li><a href="wishlist.html">Wishlist</a></li>
                                            <li><a href="checkout.html">Checkout</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-dropdown">
                                        <a href="about.html">
                                            Pages
                                            <i class="fas fa-angle-down"></i>
                                        </a>
                                        <ul class="submenu">
                                            <li><a href="about.html">About Us</a></li>
                                            <li class="has-dropdown">
                                                <a href="team.html">
                                                    Author
                                                    <i class="fas fa-angle-down"></i>
                                                </a>
                                                <ul class="submenu">
                                                    <li><a href="team.html">Author</a></li>
                                                    <li><a href="team-details.html">Author Profile</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="faq.html">Faq's</a></li>
                                            <li><a href="404.html">404 Page</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="news.html">
                                            Blog
                                            <i class="fas fa-angle-down"></i>
                                        </a>
                                        <ul class="submenu">
                                            <li><a href="news-grid.html">Blog Grid</a></li>
                                            <li><a href="news.html">Blog List</a></li>
                                            <li><a href="news-details.html">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="contact.html">Contact</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="header-right d-flex justify-content-end align-items-center">
                        <div class="search-widget">
                            <form action="#">
                                <input type="text" placeholder="Search for Products...">
                                <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                            </form>
                        </div>
                        <a href="#0" class="search-trigger search-icon style-2"><i
                                class="fa-regular fa-magnifying-glass"></i></a>
                        <ul class="header-icon">
                            <li>
                                <a href="#"><i class="fa-regular fa-heart"></i><span class="number">4</span></a>
                            </li>
                        </ul>
                        <div class="menu-cart">
                            <div class="cart-box">
                                <ul>
                                    <li>
                                        <img src="{{ asset('assets/img/shop-cart/01.png') }}" alt="image">
                                        <div class="cart-product">
                                            <div class="cart-ctx">
                                                <a href="#">Sky Freedom</a>
                                                <span>100$</span>
                                            </div>
                                            <i class="fa-solid fa-xmark"></i>
                                        </div>
                                    </li>
                                </ul>
                                <ul>
                                    <li class="border-none">
                                        <img src="{{ asset('assets/img/shop-cart/02.png') }}" alt="image">
                                        <div class="cart-product">
                                            <div class="cart-ctx">
                                                <a href="#">The Sky</a>
                                                <span>98$</span>
                                            </div>
                                            <i class="fa-solid fa-xmark"></i>
                                        </div>
                                    </li>
                                </ul>
                                <div class="shopping-items">
                                    <span>Total :</span>
                                    <span>$198.00</span>
                                </div>
                                <div class="cart-button mb-4">
                                    <a href="shop-cart.html" class="theme-btn">
                                        View Cart
                                    </a>
                                </div>
                            </div>
                            <a href="shop-cart.html" class="cart-icon">
                                <i class="fa-sharp fa-regular fa-bag-shopping"></i>
                            </a>
                        </div>
                        <div class="header__hamburger d-xl-none my-auto">
                            <div class="sidebar__toggle">
                                <i class="fas fa-bars"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Sidebar Area Here -->
    <div id="targetElement" class="side_bar slideInRight side_bar_hidden">
        <div class="side_bar_overlay"></div>
        <div class="cart-title mb-50">
            <h4>Log in</h4>
        </div>
        <div class="login-sidebar">
            <form action="#" id="contact-form" method="POST">
                <div class="row g-4">
                    <div class="col-lg-12">
                        <div class="form-clt">
                            <span>Username or email address *</span>
                            <input type="text" name="name15" id="name15" placeholder="">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-clt">
                            <span>Password *</span>
                            <input id="password" type="password" placeholder="">
                            <div class="icon"><i class="fa-regular fa-eye"></i></div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <button class="theme-btn" type="submit"><span>Log In</span></button>
                    </div>
                    <div class="col-lg-12">
                        <div class="from-cheak-items">
                            <div class="form-check d-flex gap-2 from-customradio">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Remember Me
                                </label>
                            </div>
                            <p>Forgot Password?</p>
                        </div>
                    </div>
                </div>
            </form>
            <p class="text">Or login with</p>
            <div class="social-item">
                <a href="#" class="facebook-text"><img src="{{ asset('assets/img/facebook.png') }}" alt="img">FACEBOOK</a>
                <a href="#" class="facebook-text google-text"><img src="{{ asset('assets/img/google.png') }}" alt="img">Google</a>
            </div>
            <div class="user-icon-box">
                <img src="{{ asset('assets/img/user.png')}}" alt="img">
                <p>No account yet?</p>
                <a href="account.html">Create an Account</a>
            </div>
        </div>
        <button id="closeButton" class="x-mark-icon"><i class="fas fa-times"></i></button>
    </div>
{{-- body --}}
