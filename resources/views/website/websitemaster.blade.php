<!DOCTYPE html>
<html lang="zxx" dir="lrt">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <script>
        const setTheme = (theme) => {
            theme ??= localStorage.theme || "light";
            document.documentElement.dataset.theme = theme;
            localStorage.theme = theme;
        };
        setTheme();
    </script>
    <meta logo="{{asset('frontend/assets/images/logo/logo.png')}}">
    <meta white-logo="{{asset('frontend/assets/images/logo/logo-white.png')}}">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Travello - Multipurpose travel and tour booking.These template is suitable for  travel agency , tour, travel website , tour operator , tourism , booking  trip or adventure website. ">
    <meta name="keywords" content="travel, trip booking,tour, hotel, tour guide, tourism, blog, flight, travel agency, tourism agency, accommodation, tour website">
    <meta name="author" content="inittheme">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Multipurpose travel and tour booking">
    <meta property="og:site_name" content="Travello">
    <meta property="og:url" content="https://inittheme.com">
    <meta property="og:image" content="https://inittheme.com/images/selfie.jpg">
    <meta property="og:description" content="Multipurpose travel and tour booking, multipurpose template">
    <meta name="twitter:title" content="Multipurpose travel and tour booking">
    <meta name="twitter:description" content="Multipurpose travel and tour booking, multipurpose template">
    <meta name="twitter:image" content="https://twitter.com/inittheme/photo">
    <meta name="twitter:card" content="summary">
    <!-- Google site verification -->
    <meta name="google-site-verification" content="...">
    <meta name="facebook-domain-verification" content="...">
    <meta name="csrf-token" content="...">
    <meta name="currency" content="$">
    <!-- Title -->
    <title>Multipurpose travel and tour booking </title>
    <link rel="icon" type="image/x-icon" sizes="20x20" href="{{asset('frontend/assets/images/icon/favicon.png')}}">
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/bootstrap-5.3.0.min.css')}}">
    <!-- Fonts & icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/remixicon.css')}}">
    <!-- Plugin -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/plugin.css')}}">
    <!-- Main CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/main-style.css')}}">
    <!-- RTL CSS::When Need RTL Uncomments File -->
    <!-- <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/rtl.css')}}"> -->
</head>
<body>
    <header class="header-area-three">
        <div class="main-header">
            <!-- Header Top -->
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="top-menu-wrapper d-flex align-items-center justify-content-between">
                                <div class="top-header-right">
                                    <div class="contact-section">
                                        <div class="circle-primary-sm">
                                            <i class="ri-phone-line"></i>
                                        </div>
                                        <div class="info">
                                            <p class="pera">Call Anytime</p>
                                            <h4 class="title">
                                                <a href="javascript:void(0)">00 (888) +123456</a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                <!-- Top Left Side -->
                                <!-- Logo-->
                                <div class="logo">
                                    <a href="index.html"><img src="{{asset('frontend/assets/images/logo/logo.png')}}" style="height: 43px; width: 104px;" alt="logo" class="changeLogo"></a>
                                </div>
                                <div class="header-right-three pl-15 d-none d-lg-flex">
                                    <div class="lang">
                                        <i class="ri-global-line"></i>
                                        <p class="pera">English</p>
                                    </div>
                                    <div class="divider gradient-divider"></div>
                                    <div class="d-flex gap-20 align-items-center">
                                        <p class="pera">
                                            <a href="login.html" class="signin">Sign In</a>
                                        </p>
                                        <div class="sign-btn">
                                            <a href="register.html" class="btn-secondary-sm radius-30">Sign Up</a>
                                        </div>
                                          <!-- Theme Mode -->
                                          <button class="ToggleThemeButton change-theme-mode m-0 p-0 border-0">
                                            <i class="ri-sun-line"></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- Mobile Device Seach & Theme Mode -->
                                <div class="search-header-position d-block d-lg-none">
                                    <div class="d-flex gap-15">
                                        <div class="search-bar">
                                            <a href="javascript:void(0)" class="rounded-btn">
                                                <i  class="ri-search-line"></i>
                                            </a>
                                        </div>
                                        <!-- Theme Mode -->
                                        <button class="ToggleThemeButton change-theme-mode m-0 p-0 border-0">
                                            <i class="ri-sun-line"></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- / Mobile Device Seach & Theme Mode-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header Bottom -->
            <div class="header-bottom header-sticky">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="menu-wrapper">
                                <!-- Main-menu for desktop -->
                                <div class="main-menu d-none d-lg-block">
                                    <nav>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <ul class="listing" id="navigation">
                                                <li class="single-list">
                                                    <a href="javascript:void(0)"
                                                        class="single link-active">Home <i
                                                            class="ri-arrow-down-s-line"></i></a>
                                                    <ul class="submenu">
                                                        <li class="single-list">
                                                            <a href="index.html" class="single">Home 01</a>
                                                        </li>
                                                        <li class="single-list">
                                                            <a href="index-two.html" class="single">Home 02</a>
                                                        </li>
                                                        <li class="single-list">
                                                            <a href="index-three.html" class="single">Home 03</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="single-list">
                                                    <a href="about.html" class="single">About</a>
                                                </li>
                                                <li class="single-list">
                                                    <a href="destination.html" class="single">Destination</a>
                                                </li>
                                                <li class="single-list">
                                                    <a href="tour-list.html" class="single">Tour Package</a>
                                                </li>
                                                
                                                <li class="single-list">
                                                    <a href="javascript:void(0)" class="single">Pages <i
                                                            class="ri-arrow-down-s-line"></i></a>
                                                    <ul class="submenu">
                                                        <li class="single-list">
                                                            <a href="tour-details.html" class="single">Tour
                                                                Details</a>
                                                        </li>
                                                        <li class="single-list">
                                                            <a href="news-details.html" class="single">News
                                                                Details</a>
                                                        </li>
                                                        <li class="single-list">
                                                            <a href="destination-details.html"
                                                                class="single">Destination Details</a>
                                                        </li>
                                                        <li class="single-list">
                                                            <a href="payment.html" class="single">payment</a>
                                                        </li>
                                                        <li class="single-list">
                                                            <a href="javascript:void(0)" class="single">Login<i
                                                                    class="ri-arrow-right-s-line"></i></a>
                                                            <ul class="submenu">
                                                                <li class="single-list">
                                                                    <a href="login.html" class="single">Login</a>
                                                                </li>
                                                                <li class="single-list">
                                                                    <a href="register.html"
                                                                        class="single">Registration</a>
                                                                </li>
                                                                <li class="single-list">
                                                                    <a href="forgot-pass.html" class="single">Forgot
                                                                        Password</a>
                                                                </li>
                                                                <li class="single-list">
                                                                    <a href="verification.html"
                                                                        class="single">Verification</a>
                                                                </li>
                                                                <li class="single-list">
                                                                    <a href="new-password.html" class="single">New
                                                                        Password</a>
                                                                </li>
                                                            </ul>
                                                        </li>
    
                                                        <li class="single-list">
                                                            <a href="faq.html" class="single">FAQs</a>
                                                        </li>
                                                        <li class="single-list">
                                                            <a href="privacy-policy.html" class="single">privacy
                                                                policy</a>
                                                        </li>
                                                        <li class="single-list">
                                                            <a href="terms-condition.html"
                                                                class="single">terms-condition</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="single-list">
                                                    <a href="news.html" class="single">News</a>
                                                </li>
                                                <li class="single-list">
                                                    <a href="contact.html" class="single">Contact</a>
                                                </li>
                                                <li class="d-block d-lg-none">
                                                    <div class="header-right-three pl-15 mt-10">
                                                        <div class="sign-btn">
                                                            <a href="login.html" class="btn-secondary-sm m-0">Sign In</a>
                                                        </div>
                                                        <div class="d-flex align-items-center gap-12">
                                                            <div class="lang">
                                                                <i class="ri-global-line"></i>
                                                                <p class="pera">English</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <!-- search box -->
                                            <div class="search-box search-bar d-none d-lg-block">
                                                <div class="header-search">
                                                    <span class="pera">Destination, attraction</span>
                                                    <div class="search-icon">
                                                        <i class="ri-search-line"></i>
                                                    </div>
                                                    <kbd class="light-text">
                                                        <abbr title="Ctrl">Ctrl +</abbr> k
                                                    </kbd>
                                                </div>
                                            </div>
                                        </div>
                                    </nav>
                                </div>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="div">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Search box -->
        <div class="search-container">
            <div class="top-section">
                <div class="search-icon">
                    <i class="ri-search-line"></i>
                </div>
                <div class="modal-search-box">
                    <input type="text" id="searchField" class="search-field"
                        placeholder="Destination, Agency, Country">
                    <button id="closeSearch" class="close-search-btn">
                        <kbd class="light-text"> ESC </kbd>
                    </button>
                </div>
            </div>
            <div class="body-section">
                <div class="row">
                    <div class="col-md-8">
                        <ul class="listing">
                            <li>
                                <h4 class="search-label">Recent</h4>
                            </li>
                            <li class="single-list">
                                <a href="tour-details.html">
                                    <div class="search-flex">
                                        <div class="content-img">
                                            <img src="{{asset('frontend/assets/images/gallery/search-img-1.jpeg')}}" alt="travello">
                                        </div>
                                        <div class="content">
                                            <h4 class="title line-clamp-1">
                                                Dubai by Night City Tour with Fountain show
                                            </h4>
                                            <p class="pera line-clamp-2">
                                                Wonderful evening escapade starting at Madinat
                                                Jumeirah to the musical fountains to see another.
                                                Wonderful evening escapade starting at Madinat
                                                Jumeirah to the musical fountains to see another
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="single-list">
                                <a href="tour-details.html">
                                    <div class="search-flex">
                                        <div class="content-img">
                                            <img src="{{asset('frontend/assets/images/gallery/search-img-2.jpeg')}}" alt="travello">
                                        </div>
                                        <div class="content">
                                            <h4 class="title line-clamp-1">
                                                Dubai: Premium Red Dunes, Camels, Stargazing & 5*
                                                BBQ at Al Khayma Camp™️
                                            </h4>
                                            <p class="pera line-clamp-2">
                                                Give a great end to your day in Dubai with our
                                                premium evening Red Dune Desert Safari. Give a great
                                                end to your day in Dubai with our premium evening
                                                Red Dune Desert Safari.
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="single-list">
                                <a href="tour-details.html">
                                    <div class="search-flex">
                                        <div class="content-img">
                                            <img src="{{asset('frontend/assets/images/gallery/search-img-3.jpeg')}}" alt="travello">
                                        </div>
                                        <div class="content">
                                            <h4 class="title line-clamp-1">
                                                Admission to Global Village in Dubai
                                            </h4>
                                            <p class="pera line-clamp-2">
                                                Admission to Dubai’s biggest, multicultural festival
                                                park with replicas of iconic landmarks. Admission to
                                                Dubai’s biggest, multicultural festival park with
                                                replicas of iconic landmarks
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <h4 class="search-label">Recent</h4>
                            </li>
                            <li class="single-list">
                                <a href="tour-details.html">
                                    <div class="search-flex">
                                        <div class="content-img">
                                            <img src="{{asset('frontend/assets/images/gallery/search-img-1.jpeg')}}" alt="travello">
                                        </div>
                                        <div class="content">
                                            <h4 class="title line-clamp-1">
                                                Dubai by Night City Tour with Fountain show
                                            </h4>
                                            <p class="pera line-clamp-2">
                                                Wonderful evening escapade starting at Madinat
                                                Jumeirah to the musical fountains to see another.
                                                Wonderful evening escapade starting at Madinat
                                                Jumeirah to the musical fountains to see another
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="single-list">
                                <a href="tour-details.html">
                                    <div class="search-flex">
                                        <div class="content-img">
                                            <img src="{{asset('frontend/assets/images/gallery/search-img-2.jpeg')}}" alt="travello">
                                        </div>
                                        <div class="content">
                                            <h4 class="title line-clamp-1">
                                                Dubai: Premium Red Dunes, Camels, Stargazing & 5*
                                                BBQ at Al Khayma Camp™️
                                            </h4>
                                            <p class="pera line-clamp-2">
                                                Give a great end to your day in Dubai with our
                                                premium evening Red Dune Desert Safari. Give a great
                                                end to your day in Dubai with our premium evening
                                                Red Dune Desert Safari.
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="single-list">
                                <a href="tour-details.html">
                                    <div class="search-flex">
                                        <div class="content-img">
                                            <img src="{{asset('frontend/assets/images/gallery/search-img-3.jpeg')}}" alt="travello">
                                        </div>
                                        <div class="content">
                                            <h4 class="title line-clamp-1">
                                                Admission to Global Village in Dubai
                                            </h4>
                                            <p class="pera line-clamp-2">
                                                Admission to Dubai’s biggest, multicultural festival
                                                park with replicas of iconic landmarks. Admission to
                                                Dubai’s biggest, multicultural festival park with
                                                replicas of iconic landmarks
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <div class="right-section" id="filterMenu">
                            <h4 class="title">Filter Options</h4>
                            <!-- List of Filter -->
                            <ul class="listing">
                                <li>
                                    <h4 class="search-label">Post Type</h4>
                                </li>
                                <li class="single-list">
                                    <div class="d-flex align-items-center gap-8">
                                        <label class="checkbox-label">
                                            <input class="checkbox-style" type="checkbox" value="remember"
                                                name="remember">
                                            <span class="checkmark-style"></span>
                                        </label>
                                        <div class="content">
                                            <p class="pera">Posts (3)</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="single-list">
                                    <div class="d-flex align-items-center gap-8">
                                        <label class="checkbox-label">
                                            <input class="checkbox-style" type="checkbox" value="remember"
                                                name="remember">
                                            <span class="checkmark-style"></span>
                                        </label>
                                        <div class="content">
                                            <p class="pera">Posts (3)</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="single-list">
                                    <div class="d-flex align-items-center gap-8">
                                        <label class="checkbox-label">
                                            <input class="checkbox-style" type="checkbox" value="remember"
                                                name="remember">
                                            <span class="checkmark-style"></span>
                                        </label>
                                        <div class="content">
                                            <p class="pera">Links (44)</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="single-list">
                                    <div class="d-flex align-items-center gap-8">
                                        <label class="checkbox-label">
                                            <input class="checkbox-style" type="checkbox" value="remember"
                                                name="remember">
                                            <span class="checkmark-style"></span>
                                        </label>
                                        <div class="content">
                                            <p class="pera">Blogs (23)</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <!-- List of Filter -->
                            <ul class="listing">
                                <li>
                                    <h4 class="search-label">Categories</h4>
                                </li>
                                <li class="single-list">
                                    <div class="d-flex align-items-center gap-8">
                                        <label class="checkbox-label">
                                            <input class="checkbox-style" type="checkbox" value="remember"
                                                name="remember">
                                            <span class="checkmark-style"></span>
                                        </label>
                                        <div class="content">
                                            <p class="pera">Articles (3)</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="single-list">
                                    <div class="d-flex align-items-center gap-8">
                                        <label class="checkbox-label">
                                            <input class="checkbox-style" type="checkbox" value="remember"
                                                name="remember">
                                            <span class="checkmark-style"></span>
                                        </label>
                                        <div class="content">
                                            <p class="pera">Poll (3)</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="single-list">
                                    <div class="d-flex align-items-center gap-8">
                                        <label class="checkbox-label">
                                            <input class="checkbox-style" type="checkbox" value="remember"
                                                name="remember">
                                            <span class="checkmark-style"></span>
                                        </label>
                                        <div class="content">
                                            <p class="pera">Article (44)</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="single-list">
                                    <div class="d-flex align-items-center gap-8">
                                        <label class="checkbox-label">
                                            <input class="checkbox-style" type="checkbox" value="remember"
                                                name="remember">
                                            <span class="checkmark-style"></span>
                                        </label>
                                        <div class="content">
                                            <p class="pera">Blogs (23)</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <!-- List of Filter -->
                            <ul class="listing">
                                <li>
                                    <h4 class="search-label">Travel</h4>
                                </li>
                                <li class="single-list">
                                    <div class="d-flex align-items-center gap-8">
                                        <label class="checkbox-label">
                                            <input class="checkbox-style" type="checkbox" value="remember"
                                                name="remember">
                                            <span class="checkmark-style"></span>
                                        </label>
                                        <div class="content">
                                            <p class="pera">Articles (3)</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="single-list">
                                    <div class="d-flex align-items-center gap-8">
                                        <label class="checkbox-label">
                                            <input class="checkbox-style" type="checkbox" value="remember"
                                                name="remember">
                                            <span class="checkmark-style"></span>
                                        </label>
                                        <div class="content">
                                            <p class="pera">Poll (3)</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="single-list">
                                    <div class="d-flex align-items-center gap-8">
                                        <label class="checkbox-label">
                                            <input class="checkbox-style" type="checkbox" value="remember"
                                                name="remember">
                                            <span class="checkmark-style"></span>
                                        </label>
                                        <div class="content">
                                            <p class="pera">Article (44)</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="single-list">
                                    <div class="d-flex align-items-center gap-8">
                                        <label class="checkbox-label">
                                            <input class="checkbox-style" type="checkbox" value="remember"
                                                name="remember">
                                            <span class="checkmark-style"></span>
                                        </label>
                                        <div class="content">
                                            <p class="pera">Blogs (23)</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="div">
                        <div class="filter_menu"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- / End-Search -->
    </header>
    <main>
        <!-- Hero area S t a r t-->
        <section class="hero-padding-for-three video-overlay position-relative">
            <!-- Video -->
            <div class="hero-bg-video">
                <video class="hero-slider-video video-cover" 
                    poster="{{asset('frontend/assets/images/hero/hero-three-banner.png')}}" loop autoplay muted>
                    <source src="{{asset('frontend/assets/images/videos/travel1.mp4')}}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
            <div class="container">
                <div class="row align-items-center justify-content-between g-4">
                    <div class="col-xl-12">
                        <div class="hero-caption-three position-relative z-3">
                            <h4 class="title wow fadeInUp" data-wow-delay="0.0s">
                                Plan  with atravllersepisodes to dream locations in just a click!
                            </h4>
                            <p class="pera wow fadeInUp" data-wow-delay="0.1s">
                                Travel is a transformative and enriching experience that
                                allows individuals to explore new destinations, cultures, and
                                landscapes
                            </p>
                        </div>
                        <div class="hero-footer position-relative z-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="all-user">
                                <div class="happy-user">
                                    <img src="{{asset('frontend/assets/images/hero/user-1.jpeg')}}" alt="travello">
                                    
                                </div>
                                <div class="happy-user">
                                    <img src="{{asset('frontend/assets/images/hero/user-2.png')}}" alt="travello">
                                </div>
                                <div class="happy-user">
                                    <img src="{{asset('frontend/assets/images/hero/user-3.png')}}" alt="travello">
                                </div>
                                <div class="happy-user">
                                    <img src="{{asset('frontend/assets/images/hero/user-4.jpeg')}}" alt="travello">
                                </div>
                                <div class="happy-user-count">
                                    <p class="user-count">5k+</p>
                                </div>
                                <p class="pera">Happy Customer</p>
                                <span class="wave-emoji">
                                    <img src="{{asset('frontend/assets/images/icon/hand.png')}}" alt="travello">
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/ End-of Hero-->

        <!-- Plan area S t a r t -->
        <section class="plan-area-three">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="plan-section-three plan-shadow">
                            <div class="choose-plan-nav">

                                <!-- Buttons Type Select -->
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="plan-link active" id="tour-tab" data-bs-toggle="tab"
                                            data-bs-target="#tour" type="button" role="tab" aria-controls="tour"
                                            aria-selected="true">
                                            <i class="ri-ship-line"></i> Tour
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="plan-link" id="book-tab" data-bs-toggle="tab" data-bs-target="#book"
                                            type="button" role="tab" aria-controls="book" aria-selected="false">
                                            <i class="ri-flight-takeoff-fill"></i> Book
                                        </button>
                                    </li>
                                </ul>
                                <!-- / End-of Buttons -->

                                <!-- Tab Search Contents -->
                                <div class="tab-content" id="tourTab">
                                    <div class="tab-pane fade show active" id="tour" role="tabpanel" aria-labelledby="tour-tab">
                                        <div class="d-flex gap-16 flex-wrap mb-26">
                                            <label class="one-way-label">
                                                <input class="one-way-input" type="radio" name="radio">
                                                <span class="circle"></span>
                                                <span class="radio-text">One Way</span>
                                            </label>
                                            <label class="round-trip-label">
                                                <input class="round-trip-input" type="radio" name="radio" checked>
                                                <span class="circle"></span>
                                                <span class="radio-text">Round Trip</span>
                                            </label>
                                        </div>
                                        <div class="row g-4 justify-content-end">
                                            <div class="col-xl-5 col-lg-12">
                                                <div class="destination-flex">
                                                    <div class="select-dropdown-section">
                                                        <div class="d-flex gap-10 align-items-center">
                                                            <div class="destination-dropdown-two"></div>
                                                        </div>
                                                        <div class="destination-result line-clamp-1">
                                                            Istanbul Airport...
                                                        </div>
                                                    </div>
                                                    <div class="select-dropdown-section">
                                                        <div class="d-flex gap-10 align-items-center">
                                                            <div class="destination-dropdown-three"></div>
                                                        </div>
                                                        <div class="destination-result-three line-clamp-1">
                                                            Istanbul Airport...
                                                        </div>
                                                    </div>
                                                    <div class="swap-icon">
                                                        <i class="ri-arrow-left-right-line"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-5 col-lg-12">
                                                <div class="destination-flex">
                                                    <div class="dropdown-section">
                                                        <div class="d-flex gap-10 align-items-center">
                                                            <div class="custom-date-three">
                                                                <h4 class="month-title month-result">February</h4>
                                                                <div class="year-title year-result">
                                                                    Tuesday, 6, 2023
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown-section">
                                                        <div class="d-flex gap-10 align-items-center">
                                                            <div class="custom-date-three">
                                                                <h4 class="month-title text-right month-result-two">
                                                                    March
                                                                </h4>
                                                                <div class="year-title text-right year-result-two">
                                                                    Tuesday, 6, 2023
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swap-icon">
                                                        <i class="ri-calendar-2-line"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 col-lg-3">
                                                <div class="sign-btn text-right">
                                                    <a href="tour-list.html" class="btn-secondary-lg w-100 text-center">
                                                        <i   class="ri-search-line mr-10 font-20"></i> Search Plan
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="book" role="tabpanel" aria-labelledby="book-tab">
                                        <div class="d-flex gap-16 flex-wrap mb-26">
                                            <label class="one-way-label">
                                                <input class="one-way-input" type="radio" name="radio">
                                                <span class="circle"></span>
                                                <span class="radio-text">One Way</span>
                                            </label>
                                            <label class="round-trip-label">
                                                <input class="round-trip-input" type="radio" name="radio">
                                                <span class="circle"></span>
                                                <span class="radio-text">Round Trip</span>
                                            </label>
                                        </div>
                                        <div class="row g-4 justify-content-end">
                                            <div class="col-xl-5 col-lg-12">
                                                <div class="destination-flex">
                                                    <div class="select-dropdown-section">
                                                        <div class="d-flex gap-10 align-items-center">
                                                            <div class="destination-dropdown-two"></div>
                                                        </div>
                                                        <div class="destination-result line-clamp-1">
                                                            Istanbul Airport...
                                                        </div>
                                                    </div>
                                                    <div class="select-dropdown-section">
                                                        <div class="d-flex gap-10 align-items-center">
                                                            <div class="destination-dropdown-three"></div>
                                                        </div>
                                                        <div class="destination-result-three line-clamp-1">
                                                            Istanbul Airport...
                                                        </div>
                                                    </div>
                                                    <div class="swap-icon">
                                                        <i class="ri-arrow-left-right-line"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-5 col-lg-12">
                                                <div class="destination-flex">
                                                    <div class="dropdown-section">
                                                        <div class="d-flex gap-10 align-items-center">
                                                            <div class="custom-date-three">
                                                                <h4 class="month-title month-result">February</h4>
                                                                <div class="year-title year-result">
                                                                    Tuesday, 6, 2023
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown-section">
                                                        <div class="d-flex gap-10 align-items-center">
                                                            <div class="custom-date-three">
                                                                <h4 class="month-title text-right month-result-two">
                                                                    March
                                                                </h4>
                                                                <div class="year-title text-right year-result-two">
                                                                    Tuesday, 6, 2023
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swap-icon">
                                                        <i class="ri-calendar-2-line"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-2 col-lg-3">
                                                <div class="sign-btn">
                                                    <a href="tour-list.html" class="btn-secondary-lg w-100 text-center">
                                                        <i class="ri-search-line mr-10 font-20"></i> Search Plan
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- / End-of Search Contents -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/ End-of Plan-->

        <!-- Special area S t a r t -->
        <section class="special-area section-padding2">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-7">
                        <div class="section-title mx-430 mx-auto text-center">
                            <span class="highlights fancy-font font-400">special offers</span>
                            <h4 class="title">
                                Winter Our Big Offers to Inspire You
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-lg-6 col-md-6">
                        <a href="tour-list.html" class="offer-banner imgEffect4 wow fadeInLeft" data-wow-delay="0.0s">
                            <img src="{{asset('frontend/assets/images/gallery/offercard-1.jpg')}}" alt="travello">
                            <div class="offer-content">
                                <p class="highlights-text">Save up to</p>
                                <h4 class="title">50%</h4>
                                <p class="pera">Let’s Explore The World</p>
                                <div class="location">
                                    <i class="ri-map-pin-line"></i>
                                    <p class="name">Bangkok, Thailand</p>
                                </div>
                                <div class="btn-secondary-sm radius-30"> Booking Now </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <a href="tour-list.html" class="offer-banner imgEffect4 wow fadeInRight" data-wow-delay="0.0s">
                            <img src="{{asset('frontend/assets/images/gallery/offercard-2.jpg')}}" alt="travello">
                            <div class="offer-content-two">
                                <h4 class="title">Nearby Hotel</h4>
                                <p class="pera">
                                    Up to <span class="highlights-text">50%</span> Off The Best
                                    Hotels Near
                                </p>
                                <div class="location">
                                    <i class="ri-map-pin-line"></i>
                                    <p class="name">Bangkok, Thailand</p>
                                </div>
                                <div class="btn-secondary-sm radius-30"> Booking Now </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!--/ End-of special-->

        <!-- Trip area S t a r t -->
        <section class="special-area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-7">
                        <div class="section-title mx-430 mx-auto text-center">
                            <span class="highlights fancy-font font-400">Enjoy Trip</span>
                            <h4 class="title">
                                Top Domestic & International Tour
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">

                        <!-- Trip Buttons -->
                        <ul class="nav nav-pills trip-pills" id="pills-tab" role="tablist">
                            <li class="nav-item trip-item" role="presentation">
                                <button class="nav-link trip-nav active" id="pills-domestic-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-domestic" type="button" role="tab" aria-controls="pills-domestic"
                                    aria-selected="true">
                                    Domestic
                                </button>
                            </li>
                            <li class="nav-item trip-item" role="presentation">
                                <button class="nav-link trip-nav" id="pills-international-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-international" type="button" role="tab"
                                    aria-controls="pills-international" aria-selected="false">
                                    International
                                </button>
                            </li>
                        </ul>
                        <!-- / End-of Trip Buttons -->

                        <!-- Tab Contents -->
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-domestic" role="tabpanel"
                                aria-labelledby="pills-domestic-tab">
                                <div class="row g-4">
                                    <div class="col-xl-4 col-md-6">
                                        <a href="tour-details.html" class="trip-card">
                                            <div class="from-flex">
                                                <h4 class="from-title">USA</h4>
                                                <p class="from-pera line-clamp-1">Istanbul Airport...</p>
                                            </div>
                                            <div class="trip-icon-flex">
                                                <div class="trip-icon"><i class="ri-flight-takeoff-fill"></i></div>
                                            </div>
                                            <div class="from-flex">
                                                <h4 class="from-title">Sylhet</h4>
                                                <p class="from-pera line-clamp-1">Osman Internatin...</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-xl-4 col-md-6">
                                        <a href="tour-details.html" class="trip-card">
                                            <div class="from-flex">
                                                <h4 class="from-title">USA</h4>
                                                <p class="from-pera line-clamp-1">Istanbul Airport...</p>
                                            </div>
                                            <div class="trip-icon-flex">
                                                <div class="trip-icon"><i class="ri-flight-takeoff-fill"></i></div>
                                            </div>
                                            <div class="from-flex">
                                                <h4 class="from-title">kolkata</h4>
                                                <p class="from-pera line-clamp-1">kolkata Airport</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-xl-4 col-md-6">
                                        <a href="tour-details.html" class="trip-card">
                                            <div class="from-flex">
                                                <h4 class="from-title">USA</h4>
                                                <p class="from-pera line-clamp-1">Istanbul Airport...</p>
                                            </div>
                                            <div class="trip-icon-flex">
                                                <div class="trip-icon"><i class="ri-flight-takeoff-fill"></i></div>
                                            </div>
                                            <div class="from-flex">
                                                <h4 class="from-title">india</h4>
                                                <p class="from-pera line-clamp-1">Shah Amanat Inter...</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-xl-4 col-md-6">
                                        <a href="tour-details.html" class="trip-card">
                                            <div class="from-flex">
                                                <h4 class="from-title">USA</h4>
                                                <p class="from-pera line-clamp-1">Istanbul Airport...</p>
                                            </div>
                                            <div class="trip-icon-flex">
                                                <div class="trip-icon"><i class="ri-flight-takeoff-fill"></i></div>
                                            </div>
                                            <div class="from-flex">
                                                <h4 class="from-title">india</h4>
                                                <p class="from-pera line-clamp-1">Shah Amanat Inter...</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-xl-4 col-md-6">
                                        <a href="tour-details.html" class="trip-card">
                                            <div class="from-flex">
                                                <h4 class="from-title">USA</h4>
                                                <p class="from-pera line-clamp-1">Istanbul Airport...</p>
                                            </div>
                                            <div class="trip-icon-flex">
                                                <div class="trip-icon"><i class="ri-flight-takeoff-fill"></i></div>
                                            </div>
                                            <div class="from-flex">
                                                <h4 class="from-title">canada</h4>
                                                <p class="from-pera line-clamp-1">canada Airport</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-xl-4 col-md-6">
                                        <a href="tour-details.html" class="trip-card">
                                            <div class="from-flex">
                                                <h4 class="from-title">USA</h4>
                                                <p class="from-pera line-clamp-1">Istanbul Airport...</p>
                                            </div>
                                            <div class="trip-icon-flex">
                                                <div class="trip-icon"><i class="ri-flight-takeoff-fill"></i></div>
                                            </div>
                                            <div class="from-flex">
                                                <h4 class="from-title">kolkata</h4>
                                                <p class="from-pera line-clamp-1">kolkata Airport</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-international" role="tabpanel"
                                aria-labelledby="pills-international-tab">
                                <div class="row g-4">
                                    <div class="col-xl-4 col-md-6">
                                        <a href="tour-details.html" class="trip-card">
                                            <div class="from-flex">
                                                <h4 class="from-title">USA</h4>
                                                <p class="from-pera line-clamp-1">Istanbul Airport...</p>
                                            </div>
                                            <div class="trip-icon-flex">
                                                <div class="trip-icon"><i class="ri-flight-takeoff-fill"></i></div>
                                            </div>
                                            <div class="from-flex">
                                                <h4 class="from-title">Australia</h4>
                                                <p class="from-pera line-clamp-1">
                                                    Australia Internatin...
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-xl-4 col-md-6">
                                        <a href="tour-details.html" class="trip-card">
                                            <div class="from-flex">
                                                <h4 class="from-title">USA</h4>
                                                <p class="from-pera line-clamp-1">Istanbul Airport...</p>
                                            </div>
                                            <div class="trip-icon-flex">
                                                <div class="trip-icon"><i class="ri-flight-takeoff-fill"></i></div>
                                            </div>
                                            <div class="from-flex">
                                                <h4 class="from-title">Usa</h4>
                                                <p class="from-pera line-clamp-1">Usa Airport</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-xl-4 col-md-6">
                                        <a href="tour-details.html" class="trip-card">
                                            <div class="from-flex">
                                                <h4 class="from-title">USA</h4>
                                                <p class="from-pera line-clamp-1">Istanbul Airport...</p>
                                            </div>
                                            <div class="trip-icon-flex">
                                                <div class="trip-icon"><i class="ri-flight-takeoff-fill"></i></div>
                                            </div>
                                            <div class="from-flex">
                                                <h4 class="from-title">Japan</h4>
                                                <p class="from-pera line-clamp-1">Narita Inter...</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-xl-4 col-md-6">
                                        <a href="tour-details.html" class="trip-card">
                                            <div class="from-flex">
                                                <h4 class="from-title">USA</h4>
                                                <p class="from-pera line-clamp-1">Istanbul Airport...</p>
                                            </div>
                                            <div class="trip-icon-flex">
                                                <div class="trip-icon"><i class="ri-flight-takeoff-fill"></i></div>
                                            </div>
                                            <div class="from-flex">
                                                <h4 class="from-title">Hongkok</h4>
                                                <p class="from-pera line-clamp-1">Hongkok Inter...</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-xl-4 col-md-6">
                                        <a href="tour-details.html" class="trip-card">
                                            <div class="from-flex">
                                                <h4 class="from-title">USA</h4>
                                                <p class="from-pera line-clamp-1">Istanbul Airport...</p>
                                            </div>
                                            <div class="trip-icon-flex">
                                                <div class="trip-icon"><i class="ri-flight-takeoff-fill"></i></div>
                                            </div>
                                            <div class="from-flex">
                                                <h4 class="from-title">Japan</h4>
                                                <p class="from-pera line-clamp-1">Narita Inter...</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-xl-4 col-md-6">
                                        <a href="tour-details.html" class="trip-card">
                                            <div class="from-flex">
                                                <h4 class="from-title">USA</h4>
                                                <p class="from-pera line-clamp-1">Istanbul Airport...</p>
                                            </div>
                                            <div class="trip-icon-flex">
                                                <div class="trip-icon"><i class="ri-flight-takeoff-fill"></i></div>
                                            </div>
                                            <div class="from-flex">
                                                <h4 class="from-title">Canada</h4>
                                                <p class="from-pera line-clamp-1">Canada Airport</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- / End-of Tab contents -->
                    </div>
                </div>
            </div>
        </section>
        <!--/ End-of trip-->

        <!-- About Us area S t a r t -->
        <section class="about-area">
            <div class="container">
                <div class="row g-4">
                    <div class="col-xl-5 col-lg-6">
                        <div class="section-title mx-430 mb-30 w-md-100">
                            <span class="highlights fancy-font font-400">About Us</span>
                            <h4 class="title">
                                Get The Best Travel Experience With Travello
                            </h4>
                            <p class="pera">
                                Travel is a transformative and enriching experience that
                                allows individuals to explore new destinations, cultures, and
                                landscapes. It is a fundamental human activity that has been
                                practiced for centuries and continues to be a source of joy,
                                learning, and personal growth.
                            </p>
                            <p class="pera">
                                Travel is a transformative and enriching experience that
                                allows individuals to explore new destinations, cultures.
                            </p>
                            <div class="section-button mt-27 d-inline-block">
                                <a href="about.html" class="btn-primary-icon-sm radius-20">
                                    <p class="pera mt-0">Learn More</p>
                                    <i class="ri-arrow-right-up-line"></i>
                                </a>
                            </div>
                            <div class="about-imp-link mt-40">
                                <div class="icon">
                                    <i class="ri-user-line"></i>
                                </div>
                                <div class="content">
                                    <p class="pera font-16">
                                        <span class="font-700">2,500</span> People Booked Tomorrow
                                        Land Event in the Last 24 hours
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-6">
                        <div class="about-count-section about-count-before-bg">
                            <div class="banner">
                                <img src="{{asset('frontend/assets/images/gallery/about-banner-three.png')}}" alt="travello">
                            </div>
                            <div class="all-count-list">
                                <div class="details">
                                    <h4 class="count">150k</h4>
                                    <p class="pera">Happy Traveler</p>
                                </div>
                                <div class="divider"></div>
                                <div class="details">
                                    <h4 class="count">95.7%</h4>
                                    <p class="pera">Satisfaction Rate</p>
                                </div>
                                <div class="divider"></div>
                                <div class="details">
                                    <h4 class="count">5000+</h4>
                                    <p class="pera">Tour Completed</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/ End-of About US-->

        <!-- Feature S t a r t -->
        <section class="feature-area feature-area-bg section-padding2">
            <div class="container">
                <div class="row justify-content-center position-relative z-10">
                    <div class="col-xl-7 col-lg-7">
                        <div class="section-title mx-430 mx-auto text-center">
                            <span class="highlights fancy-font font-400">Features Tour</span>
                            <h4 class="title">
                                Most Favorite Tour Place in The World
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="row g-4 position-relative z-10">
                    <div class="swiper favSwiper-active">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="package-card">
                                    <div class="package-img imgEffect4">
                                        <a href="tour-details.html">
                                            <img src="{{asset('frontend/assets/images/package/package-4.png')}}" alt="travello">
                                        </a>
                                        <div class="image-badge">
                                            <p class="pera">Featured</p>
                                        </div>
                                        <div class="fav-badge">
                                            <i class="ri-heart-fill"></i>
                                        </div>
                                    </div>
                                    <div class="package-content">
                                        <div class="location">
                                            <i class="ri-map-pin-line"></i>
                                            <div class="name">Bangkok, Thailand</div>
                                        </div>
                                        <h4 class="area-name">
                                            <a href="tour-details.html">Dusitd2 Samyan Bangkok</a>
                                        </h4>
                                        <div class="packages-person mb-16">
                                            <div class="count">
                                                <i class="ri-time-line"></i>
                                                <p class="pera">3 Days 2 Night</p>
                                            </div>
                                            <div class="count">
                                                <i class="ri-user-line"></i>
                                                <p class="pera">2 Person</p>
                                            </div>
                                        </div>
                                        <div class="price-review mb-0">
                                            <div class="d-flex gap-10">
                                                <p class="light-pera">From</p>
                                                <p class="pera">$95</p>
                                            </div>
                                            <div class="rating">
                                                <i class="ri-star-s-fill"></i>
                                                <p class="pera">4.7 (20 Reviews)</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="package-card">
                                    <div class="package-img imgEffect4">
                                        <a href="tour-details.html">
                                            <img src="{{asset('frontend/assets/images/package/package-3.png')}}" alt="travello">
                                        </a>
                                        <div class="image-badge">
                                            <p class="pera">Featured</p>
                                        </div>
                                        <div class="fav-badge">
                                            <i class="ri-heart-fill"></i>
                                        </div>
                                    </div>
                                    <div class="package-content">
                                        <div class="location">
                                            <i class="ri-map-pin-line"></i>
                                            <div class="name">Bangkok, Thailand</div>
                                        </div>
                                        <h4 class="area-name">
                                            <a href="tour-details.html">Dusitd2 Samyan Bangkok</a>
                                        </h4>
                                        <div class="packages-person mb-16">
                                            <div class="count">
                                                <i class="ri-time-line"></i>
                                                <p class="pera">3 Days 2 Night</p>
                                            </div>
                                            <div class="count">
                                                <i class="ri-user-line"></i>
                                                <p class="pera">2 Person</p>
                                            </div>
                                        </div>
                                        <div class="price-review mb-0">
                                            <div class="d-flex gap-10">
                                                <p class="light-pera">From</p>
                                                <p class="pera">$95</p>
                                            </div>
                                            <div class="rating">
                                                <i class="ri-star-s-fill"></i>
                                                <p class="pera">4.7 (20 Reviews)</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="package-card">
                                    <div class="package-img imgEffect4">
                                        <a href="tour-details.html">
                                            <img src="{{asset('frontend/assets/images/package/package-2.png')}}" alt="travello">
                                        </a>
                                        <div class="image-badge">
                                            <p class="pera">Featured</p>
                                        </div>
                                        <div class="fav-badge">
                                            <i class="ri-heart-fill"></i>
                                        </div>
                                    </div>
                                    <div class="package-content">
                                        <div class="location">
                                            <i class="ri-map-pin-line"></i>
                                            <div class="name">Bangkok, Thailand</div>
                                        </div>
                                        <h4 class="area-name">
                                            <a href="tour-details.html">Dusitd2 Samyan Bangkok</a>
                                        </h4>
                                        <div class="packages-person mb-16">
                                            <div class="count">
                                                <i class="ri-time-line"></i>
                                                <p class="pera">3 Days 2 Night</p>
                                            </div>
                                            <div class="count">
                                                <i class="ri-user-line"></i>
                                                <p class="pera">2 Person</p>
                                            </div>
                                        </div>
                                        <div class="price-review mb-0">
                                            <div class="d-flex gap-10">
                                                <p class="light-pera">From</p>
                                                <p class="pera">$95</p>
                                            </div>
                                            <div class="rating">
                                                <i class="ri-star-s-fill"></i>
                                                <p class="pera">4.7 (20 Reviews)</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="package-card">
                                    <div class="package-img imgEffect4">
                                        <a href="tour-details.html">
                                            <img src="{{asset('frontend/assets/images/package/package-10.jpg')}}" alt="travello">
                                        </a>
                                        <div class="image-badge">
                                            <p class="pera">Featured</p>
                                        </div>
                                        <div class="fav-badge">
                                            <i class="ri-heart-fill"></i>
                                        </div>
                                    </div>
                                    <div class="package-content">
                                        <div class="location">
                                            <i class="ri-map-pin-line"></i>
                                            <div class="name">Bangkok, Thailand</div>
                                        </div>
                                        <h4 class="area-name">
                                            <a href="tour-details.html">Dusitd2 Samyan Bangkok</a>
                                        </h4>
                                        <div class="packages-person mb-16">
                                            <div class="count">
                                                <i class="ri-time-line"></i>
                                                <p class="pera">3 Days 2 Night</p>
                                            </div>
                                            <div class="count">
                                                <i class="ri-user-line"></i>
                                                <p class="pera">2 Person</p>
                                            </div>
                                        </div>
                                        <div class="price-review mb-0">
                                            <div class="d-flex gap-10">
                                                <p class="light-pera">From</p>
                                                <p class="pera">$95</p>
                                            </div>
                                            <div class="rating">
                                                <i class="ri-star-s-fill"></i>
                                                <p class="pera">4.7 (20 Reviews)</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="package-card">
                                    <div class="package-img imgEffect4">
                                        <a href="tour-details.html">
                                            <img src="{{asset('frontend/assets/images/package/package-4.png')}}" alt="travello">
                                        </a>
                                        <div class="image-badge">
                                            <p class="pera">Featured</p>
                                        </div>
                                        <div class="fav-badge">
                                            <i class="ri-heart-fill"></i>
                                        </div>
                                    </div>
                                    <div class="package-content">
                                        <div class="location">
                                            <i class="ri-map-pin-line"></i>
                                            <div class="name">Bangkok, Thailand</div>
                                        </div>
                                        <h4 class="area-name">
                                            <a href="tour-details.html">Dusitd2 Samyan Bangkok</a>
                                        </h4>
                                        <div class="packages-person mb-16">
                                            <div class="count">
                                                <i class="ri-time-line"></i>
                                                <p class="pera">3 Days 2 Night</p>
                                            </div>
                                            <div class="count">
                                                <i class="ri-user-line"></i>
                                                <p class="pera">2 Person</p>
                                            </div>
                                        </div>
                                        <div class="price-review mb-0">
                                            <div class="d-flex gap-10">
                                                <p class="light-pera">From</p>
                                                <p class="pera">$95</p>
                                            </div>
                                            <div class="rating">
                                                <i class="ri-star-s-fill"></i>
                                                <p class="pera">4.7 (20 Reviews)</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="package-card">
                                    <div class="package-img imgEffect4">
                                        <a href="tour-details.html">
                                            <img src="{{asset('frontend/assets/images/package/package-3.png')}}" alt="travello">
                                        </a>
                                        <div class="image-badge">
                                            <p class="pera">Featured</p>
                                        </div>
                                        <div class="fav-badge">
                                            <i class="ri-heart-fill"></i>
                                        </div>
                                    </div>
                                    <div class="package-content">
                                        <div class="location">
                                            <i class="ri-map-pin-line"></i>
                                            <div class="name">Bangkok, Thailand</div>
                                        </div>
                                        <h4 class="area-name">
                                            <a href="tour-details.html">Dusitd2 Samyan Bangkok</a>
                                        </h4>
                                        <div class="packages-person mb-16">
                                            <div class="count">
                                                <i class="ri-time-line"></i>
                                                <p class="pera">3 Days 2 Night</p>
                                            </div>
                                            <div class="count">
                                                <i class="ri-user-line"></i>
                                                <p class="pera">2 Person</p>
                                            </div>
                                        </div>
                                        <div class="price-review mb-0">
                                            <div class="d-flex gap-10">
                                                <p class="light-pera">From</p>
                                                <p class="pera">$95</p>
                                            </div>
                                            <div class="rating">
                                                <i class="ri-star-s-fill"></i>
                                                <p class="pera">4.7 (20 Reviews)</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="package-card">
                                    <div class="package-img imgEffect4">
                                        <a href="tour-details.html">
                                            <img src="{{asset('frontend/assets/images/package/package-2.png')}}" alt="travello">
                                        </a>
                                        <div class="image-badge">
                                            <p class="pera">Featured</p>
                                        </div>
                                        <div class="fav-badge">
                                            <i class="ri-heart-fill"></i>
                                        </div>
                                    </div>
                                    <div class="package-content">
                                        <div class="location">
                                            <i class="ri-map-pin-line"></i>
                                            <div class="name">Bangkok, Thailand</div>
                                        </div>
                                        <h4 class="area-name">
                                            <a href="tour-details.html">Dusitd2 Samyan Bangkok</a>
                                        </h4>
                                        <div class="packages-person mb-16">
                                            <div class="count">
                                                <i class="ri-time-line"></i>
                                                <p class="pera">3 Days 2 Night</p>
                                            </div>
                                            <div class="count">
                                                <i class="ri-user-line"></i>
                                                <p class="pera">2 Person</p>
                                            </div>
                                        </div>
                                        <div class="price-review mb-0">
                                            <div class="d-flex gap-10">
                                                <p class="light-pera">From</p>
                                                <p class="pera">$95</p>
                                            </div>
                                            <div class="rating">
                                                <i class="ri-star-s-fill"></i>
                                                <p class="pera">4.7 (20 Reviews)</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="package-card">
                                    <div class="package-img imgEffect4">
                                        <a href="tour-details.html">
                                            <img src="{{asset('frontend/assets/images/package/package-10.jpg')}}" alt="travello">
                                        </a>
                                        <div class="image-badge">
                                            <p class="pera">Featured</p>
                                        </div>
                                        <div class="fav-badge">
                                            <i class="ri-heart-fill"></i>
                                        </div>
                                    </div>
                                    <div class="package-content">
                                        <div class="location">
                                            <i class="ri-map-pin-line"></i>
                                            <div class="name">Bangkok, Thailand</div>
                                        </div>
                                        <h4 class="area-name">
                                            <a href="tour-details.html">Dusitd2 Samyan Bangkok</a>
                                        </h4>
                                        <div class="packages-person mb-16">
                                            <div class="count">
                                                <i class="ri-time-line"></i>
                                                <p class="pera">3 Days 2 Night</p>
                                            </div>
                                            <div class="count">
                                                <i class="ri-user-line"></i>
                                                <p class="pera">2 Person</p>
                                            </div>
                                        </div>
                                        <div class="price-review mb-0">
                                            <div class="d-flex gap-10">
                                                <p class="light-pera">From</p>
                                                <p class="pera">$95</p>
                                            </div>
                                            <div class="rating">
                                                <i class="ri-star-s-fill"></i>
                                                <p class="pera">4.7 (20 Reviews)</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-next">
                            <i class="ri-arrow-right-s-line"></i>
                        </div>
                        <div class="swiper-button-prev">
                            <i class="ri-arrow-left-s-line"></i>
                        </div>
                    </div>
                </div>
                <div class="row position-relative z-10">
                    <div class="col-12 text-center">
                        <div class="section-button d-inline-block">
                            <a href="tour-list.html">
                                <div class="btn-primary-icon-sm border-radius-20">
                                    <p class="pera">View All Tour</p>
                                    <i class="ri-arrow-right-up-line"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/ End of Feature -->

        <!-- Destination area S t a r t -->
        <section class="destination-area destination-bg-before">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-7">
                        <div class="section-title text-center mx-430 mx-auto position-relative">
                            <span class="highlights">Destination List</span>
                            <h4 class="title">
                                Explore The Beautiful Places Around World
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-xl-4 col-lg-7 col-md-7">
                        <a href="destination-details.html" class="destination-banner">
                            <img src="{{asset('frontend/assets/images/destination/destination-01.png')}}" alt="travello">
                            <div class="destination-content">
                                <div class="ratting-badge">
                                    <i class="ri-star-s-fill"></i>
                                    <span>4.5</span>
                                </div>
                                <div class="destination-info">
                                    <div class="destination-name">
                                        <p class="pera">Spain</p>
                                        <div class="location">
                                            <i class="ri-map-pin-line"></i>
                                            <p class="name">Malaga View</p>
                                        </div>
                                    </div>
                                    <div class="button-section">
                                        <div class="arrow-btn">
                                            <i  class="ri-arrow-right-line"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-4 col-lg-7 col-md-7">
                        <a href="destination-details.html" class="destination-banner">
                            <img src="{{asset('frontend/assets/images/destination/destination-1.png')}}" alt="travello">
                            <div class="destination-content">
                                <div class="ratting-badge">
                                    <i class="ri-star-s-fill"></i>
                                    <span>4.5</span>
                                </div>
                                <div class="destination-info">
                                    <div class="destination-name">
                                        <p class="pera">Spain</p>
                                        <div class="location">
                                            <i class="ri-map-pin-line"></i>
                                            <p class="name">Malaga View</p>
                                        </div>
                                    </div>
                                    <div class="button-section">
                                        <div class="arrow-btn">
                                            <i  class="ri-arrow-right-line"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-4 col-lg-7 col-md-7">
                        <a href="destination-details.html" class="destination-banner">
                            <img src="{{asset('frontend/assets/images/destination/destination-001.jpg')}}" alt="travello">
                            <div class="destination-content">
                                <div class="ratting-badge">
                                    <i class="ri-star-s-fill"></i>
                                    <span>4.5</span>
                                </div>
                                <div class="destination-info">
                                    <div class="destination-name">
                                        <p class="pera">Spain</p>
                                        <div class="location">
                                            <i class="ri-map-pin-line"></i>
                                            <p class="name">Malaga View</p>
                                        </div>
                                    </div>
                                    <div class="button-section">
                                        <div class="arrow-btn">
                                            <i  class="ri-arrow-right-line"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="destination-gallery">
                        <div class="row g-4">
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <a href="destination-details.html" class="destination-banner">
                                    <img src="{{asset('frontend/assets/images/destination/destination-3.png')}}" alt="travello">
                                    <div class="destination-content">
                                        <div class="ratting-badge">
                                            <i class="ri-star-s-fill"></i>
                                            <span>4.5</span>
                                        </div>
                                        <div class="destination-info">
                                            <div class="destination-name">
                                                <p class="pera">Switzerland</p>
                                                <div class="location">
                                                    <i class="ri-map-pin-line"></i>
                                                    <p class="name">Zürich View</p>
                                                </div>
                                            </div>
                                            <div class="button-section">
                                                <div class="arrow-btn">
                                                    <i  class="ri-arrow-right-line"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <a href="destination-details.html" class="destination-banner">
                                    <img src="{{asset('frontend/assets/images/destination/destination-4.png')}}" alt="travello">
                                    <div class="destination-content">
                                        <div class="ratting-badge">
                                            <i class="ri-star-s-fill"></i>
                                            <span>4.5</span>
                                        </div>
                                        <div class="destination-info">
                                            <div class="destination-name">
                                                <p class="pera">Australia</p>
                                                <div class="location">
                                                    <i class="ri-map-pin-line"></i>
                                                    <p class="name">Melbourne View</p>
                                                </div>
                                            </div>
                                            <div class="button-section">
                                                <div class="arrow-btn">
                                                    <i  class="ri-arrow-right-line"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <a href="destination-details.html" class="destination-banner">
                                        <img src="{{asset('frontend/assets/images/destination/destination-5.png')}}" alt="travello">
                                    <div class="destination-content">
                                        <div class="ratting-badge">
                                            <i class="ri-star-s-fill"></i>
                                            <span>4.5</span>
                                        </div>
                                        <div class="destination-info">
                                            <div class="destination-name">
                                                <p class="pera">Canada</p>
                                                <div class="location">
                                                    <i class="ri-map-pin-line"></i>
                                                    <p class="name">Toronto View</p>
                                                </div>
                                            </div>
                                            <div class="button-section">
                                                <div class="arrow-btn">
                                                    <i  class="ri-arrow-right-line"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <a href="destination-details.html" class="destination-banner">
                                        <img src="{{asset('frontend/assets/images/destination/destination-02.png')}}" alt="travello">
                                    <div class="destination-content">
                                        <div class="ratting-badge">
                                            <i class="ri-star-s-fill"></i>
                                            <span>4.5</span>
                                        </div>
                                        <div class="destination-info">
                                            <div class="destination-name">
                                                <p class="pera">Canada</p>
                                                <div class="location">
                                                    <i class="ri-map-pin-line"></i>
                                                    <p class="name">Toronto View</p>
                                                </div>
                                            </div>
                                            <div class="button-section">
                                                <div class="arrow-btn">
                                                    <i  class="ri-arrow-right-line"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- shape -->
            <div class="shape">
                <img src="{{asset('frontend/assets/images/icon/shape.png')}}" alt="travello">
            </div>
        </section>
        <!--/ End-of Destination -->
        
        <!-- Explore S t a r t -->
        <section class="explore-area section-padding2">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-7">
                        <div class="section-title text-center mx-430 mx-auto position-relative mb-60">
                            <span class="highlights">Explore The Word</span>
                            <h4 class="title">
                                Our Best Offer Package For You
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-xl-5 col-lg-5 col-md-6">
                        <div class="all-explore" id="v-pills-tab-three" role="tablist" aria-orientation="vertical">
                            <div class="explore-btn active" id="pills-explore-one-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-explore-one" role="tab" aria-controls="pills-explore-one"
                                aria-selected="true">
                                <div class="d-flex gap-16 align-items-center">
                                    <div class="explore-icon">
                                        <img src="{{asset('frontend/assets/images/icon/explore-1.svg')}}" alt="travello">
                                    </div>
                                    <h4 class="name">Fishing & Swimming</h4>
                                </div>
                            </div>
                            <div class="explore-btn" id="pills-explore-two-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-explore-two" role="tab" aria-controls="pills-explore-two"
                                aria-selected="true">
                                <div class="d-flex gap-16 align-items-center">
                                    <div class="explore-icon">
                                        <img src="{{asset('frontend/assets/images/icon/explore-2.svg')}}" alt="travello">
                                    </div>
                                    <h4 class="name">Music & Relaxing</h4>
                                </div>
                            </div>
                            <div class="explore-btn" id="pills-explore-three-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-explore-three" role="tab" aria-controls="pills-explore-three"
                                aria-selected="true">
                                <div class="d-flex gap-16 align-items-center">
                                    <div class="explore-icon">
                                        <img src="{{asset('frontend/assets/images/icon/explore-3.svg')}}" alt="travello">
                                    </div>
                                    <h4 class="name">Trailers & Sports</h4>
                                </div>
                            </div>
                            <div class="explore-btn" id="pills-explore-four-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-explore-four" role="tab" aria-controls="pills-explore-four"
                                aria-selected="true">
                                <div class="d-flex gap-16 align-items-center">
                                    <div class="explore-icon">
                                        <img src="{{asset('frontend/assets/images/icon/explore-4.svg')}}" alt="travello">
                                    </div>
                                    <h4 class="name">Mountain & Hill Hiking</h4>
                                </div>
                            </div>
                            <div class="explore-btn" id="pills-explore-five-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-explore-five" role="tab" aria-controls="pills-explore-five"
                                aria-selected="true">
                                <div class="d-flex gap-16 align-items-center">
                                    <div class="explore-icon">
                                        <img src="{{asset('frontend/assets/images/icon/explore-5.svg')}}" alt="travello">
                                    </div>
                                    <h4 class="name">Paragliding Tours</h4>
                                </div>
                            </div>
                            <div class="explore-btn" id="pills-explore-six-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-explore-six" role="tab" aria-controls="pills-explore-six"
                                aria-selected="true">
                                <div class="d-flex gap-16 align-items-center">
                                    <div class="explore-icon">
                                        <img src="{{asset('frontend/assets/images/icon/explore-1.svg')}}" alt="travello">
                                    </div>
                                    <h4 class="name">Music & Relaxing</h4>
                                </div>
                            </div>
                            <div class="explore-btn" id="pills-explore-seven-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-explore-seven" role="tab" aria-controls="pills-explore-seven"
                                aria-selected="true">
                                <div class="d-flex gap-16 align-items-center">
                                    <div class="explore-icon">
                                        <img src="{{asset('frontend/assets/images/icon/explore-2.svg')}}" alt="travello">
                                    </div>
                                    <h4 class="name">Mountain & Hill Hiking</h4>
                                </div>
                            </div>
                            <div class="explore-btn" id="pills-explore-eight-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-explore-eight" role="tab" aria-controls="pills-explore-eight"
                                aria-selected="true">
                                <div class="d-flex gap-16 align-items-center">
                                    <div class="explore-icon">
                                        <img src="{{asset('frontend/assets/images/icon/explore-1.svg')}}" alt="travello">
                                    </div>
                                    <h4 class="name">Fishing & Swimming</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7 col-md-6">
                        <div class="tab-content" id="v-pills-tabContent-three">
                            <div class="tab-pane fade show active" id="pills-explore-one" role="tabpanel"
                                aria-labelledby="pills-explore-one">
                                <div class="explore-conntent">
                                    <h4 class="title">Trailers & Sports</h4>
                                    <p class="pera">
                                        Lorem ipsum dolor sit amet consectetur. Nullam amet at sed
                                        dui tellus tempor pretium tincidunt. Id amet sit viverra
                                        dolor consectetur elementum. Non at volutpat aliquam ac ac
                                        at amet. Ut semper semper sit aliquam penatibus dolor
                                        tortor nisl.
                                    </p>
                                    <ul class="expect-list">
                                        <li class="list">
                                            Lorem ipsum dolor sit amet consectetur. Platea urna
                                            hendrerit dui eget velit sollicitudin orci. Non sit
                                            lorem dolor placerat faucibus.
                                        </li>
                                        <li class="list">
                                            Lorem ipsum dolor sit amet consectetur. Platea urna
                                            hendrerit dui eget velit sollicitudin orci.
                                        </li>
                                    </ul>
                                </div>
                                <div class="explore-banner">
                                    <img src="{{asset('frontend/assets/images/gallery/about.png')}}" alt="travello">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-explore-two" role="tabpanel"
                                aria-labelledby="pills-explore-two">
                                <div class="explore-conntent">
                                    <h4 class="title">Trailers & Sports</h4>
                                    <p class="pera">
                                        Lorem ipsum dolor sit amet consectetur. Nullam amet at sed
                                        dui tellus tempor pretium tincidunt. Id amet sit viverra
                                        dolor consectetur elementum. Non at volutpat aliquam ac ac
                                        at amet. Ut semper semper sit aliquam penatibus dolor
                                        tortor nisl.
                                    </p>
                                    <ul class="expect-list">
                                        <li class="list">
                                            Lorem ipsum dolor sit amet consectetur. Platea urna
                                            hendrerit dui eget velit sollicitudin orci. Non sit
                                            lorem dolor placerat faucibus.
                                        </li>
                                        <li class="list">
                                            Lorem ipsum dolor sit amet consectetur. Platea urna
                                            hendrerit dui eget velit sollicitudin orci.
                                        </li>
                                    </ul>
                                </div>
                                <div class="explore-banner">
                                    <img src="{{asset('frontend/assets/images/gallery/music.png')}}" alt="travello">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-explore-three" role="tabpanel"
                                aria-labelledby="pills-explore-three">
                                <div class="explore-conntent">
                                    <h4 class="title">Trailers & Sports</h4>
                                    <p class="pera">
                                        Lorem ipsum dolor sit amet consectetur. Nullam amet at sed
                                        dui tellus tempor pretium tincidunt. Id amet sit viverra
                                        dolor consectetur elementum. Non at volutpat aliquam ac ac
                                        at amet. Ut semper semper sit aliquam penatibus dolor
                                        tortor nisl.
                                    </p>
                                    <ul class="expect-list">
                                        <li class="list">
                                            Lorem ipsum dolor sit amet consectetur. Platea urna
                                            hendrerit dui eget velit sollicitudin orci. Non sit
                                            lorem dolor placerat faucibus.
                                        </li>
                                        <li class="list">
                                            Lorem ipsum dolor sit amet consectetur. Platea urna
                                            hendrerit dui eget velit sollicitudin orci.
                                        </li>
                                    </ul>
                                </div>
                                <div class="explore-banner">
                                    <img src="{{asset('frontend/assets/images/gallery/sports.png')}}" alt="travello">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-explore-four" role="tabpanel"
                                aria-labelledby="pills-explore-four">
                                <div class="explore-conntent">
                                    <h4 class="title">Trailers & Sports</h4>
                                    <p class="pera">
                                        Lorem ipsum dolor sit amet consectetur. Nullam amet at sed
                                        dui tellus tempor pretium tincidunt. Id amet sit viverra
                                        dolor consectetur elementum. Non at volutpat aliquam ac ac
                                        at amet. Ut semper semper sit aliquam penatibus dolor
                                        tortor nisl.
                                    </p>
                                    <ul class="expect-list">
                                        <li class="list">
                                            Lorem ipsum dolor sit amet consectetur. Platea urna
                                            hendrerit dui eget velit sollicitudin orci. Non sit
                                            lorem dolor placerat faucibus.
                                        </li>
                                        <li class="list">
                                            Lorem ipsum dolor sit amet consectetur. Platea urna
                                            hendrerit dui eget velit sollicitudin orci.
                                        </li>
                                    </ul>
                                </div>
                                <div class="explore-banner">
                                    <img src="{{asset('frontend/assets/images/gallery/hiking.png')}}" alt="travello">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-explore-five" role="tabpanel"
                                aria-labelledby="pills-explore-five">
                                <div class="explore-conntent">
                                    <h4 class="title">Trailers & Sports</h4>
                                    <p class="pera">
                                        Lorem ipsum dolor sit amet consectetur. Nullam amet at sed
                                        dui tellus tempor pretium tincidunt. Id amet sit viverra
                                        dolor consectetur elementum. Non at volutpat aliquam ac ac
                                        at amet. Ut semper semper sit aliquam penatibus dolor
                                        tortor nisl.
                                    </p>
                                    <ul class="expect-list">
                                        <li class="list">
                                            Lorem ipsum dolor sit amet consectetur. Platea urna
                                            hendrerit dui eget velit sollicitudin orci. Non sit
                                            lorem dolor placerat faucibus.
                                        </li>
                                        <li class="list">
                                            Lorem ipsum dolor sit amet consectetur. Platea urna
                                            hendrerit dui eget velit sollicitudin orci.
                                        </li>
                                    </ul>
                                </div>
                                <div class="explore-banner">
                                    <img src="{{asset('frontend/assets/images/gallery/paragliding.pn')}}g" alt="travello">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-explore-six" role="tabpanel"
                                aria-labelledby="pills-explore-six">
                                <div class="explore-conntent">
                                    <h4 class="title">Trailers & Sports</h4>
                                    <p class="pera">
                                        Lorem ipsum dolor sit amet consectetur. Nullam amet at sed
                                        dui tellus tempor pretium tincidunt. Id amet sit viverra
                                        dolor consectetur elementum. Non at volutpat aliquam ac ac
                                        at amet. Ut semper semper sit aliquam penatibus dolor
                                        tortor nisl.
                                    </p>
                                    <ul class="expect-list">
                                        <li class="list">
                                            Lorem ipsum dolor sit amet consectetur. Platea urna
                                            hendrerit dui eget velit sollicitudin orci. Non sit
                                            lorem dolor placerat faucibus.
                                        </li>
                                        <li class="list">
                                            Lorem ipsum dolor sit amet consectetur. Platea urna
                                            hendrerit dui eget velit sollicitudin orci.
                                        </li>
                                    </ul>
                                </div>
                                <div class="explore-banner">
                                    <img src="{{asset('frontend/assets/images/gallery/music.png')}}" alt="travello">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-explore-seven" role="tabpanel"
                                aria-labelledby="pills-explore-seven">
                                <div class="explore-conntent">
                                    <h4 class="title">Trailers & Sports</h4>
                                    <p class="pera">
                                        Lorem ipsum dolor sit amet consectetur. Nullam amet at sed
                                        dui tellus tempor pretium tincidunt. Id amet sit viverra
                                        dolor consectetur elementum. Non at volutpat aliquam ac ac
                                        at amet. Ut semper semper sit aliquam penatibus dolor
                                        tortor nisl.
                                    </p>
                                    <ul class="expect-list">
                                        <li class="list">
                                            Lorem ipsum dolor sit amet consectetur. Platea urna
                                            hendrerit dui eget velit sollicitudin orci. Non sit
                                            lorem dolor placerat faucibus.
                                        </li>
                                        <li class="list">
                                            Lorem ipsum dolor sit amet consectetur. Platea urna
                                            hendrerit dui eget velit sollicitudin orci.
                                        </li>
                                    </ul>
                                </div>
                                <div class="explore-banner">
                                    <img src="{{asset('frontend/assets/images/gallery/hiking.png')}}" alt="travello">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-explore-eight" role="tabpanel"
                                aria-labelledby="pills-explore-eight">
                                <div class="explore-conntent">
                                    <h4 class="title">Trailers & Sports</h4>
                                    <p class="pera">
                                        Lorem ipsum dolor sit amet consectetur. Nullam amet at sed
                                        dui tellus tempor pretium tincidunt. Id amet sit viverra
                                        dolor consectetur elementum. Non at volutpat aliquam ac ac
                                        at amet. Ut semper semper sit aliquam penatibus dolor
                                        tortor nisl.
                                    </p>
                                    <ul class="expect-list">
                                        <li class="list">
                                            Lorem ipsum dolor sit amet consectetur. Platea urna
                                            hendrerit dui eget velit sollicitudin orci. Non sit
                                            lorem dolor placerat faucibus.
                                        </li>
                                        <li class="list">
                                            Lorem ipsum dolor sit amet consectetur. Platea urna
                                            hendrerit dui eget velit sollicitudin orci.
                                        </li>
                                    </ul>
                                </div>
                                <div class="explore-banner">
                                    <img src="{{asset('frontend/assets/images/gallery/about.png')}}" alt="travello">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/ End of Explore -->

        <!-- Testimonial S t a r t -->
        <section class="testimonial-area-three position-relative section-bg-before-two top-padding">
            <div class="container">
                <div class="row justify-content-center position-relative">
                    <div class="col-xl-7 col-lg-7">
                        <div class="section-title mx-430 mx-auto text-center">
                            <span class="highlights fancy-font font-400">Testimonial</span>
                            <h4 class="title">
                                What People Have Said About Our Service
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="row g-4 align-items-center">
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="swiper testimonialThree-active">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide testimonial-card">
                                    <div class="testimonial-header">
                                        <div class="user-img">
                                            <img src="{{asset('frontend/assets/images/testimonial/testimonial-1.jpeg')}}" alt="travello">
                                        </div>
                                        <div class="user-info">
                                            <p class="name">David Malan</p>
                                            <p class="designation">Traveler</p>
                                        </div>
                                    </div>
                                    <div class="rattings">
                                        <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i
                                            class="ri-star-fill"></i><i class="ri-star-fill"></i><i
                                            class="ri-star-fill"></i>
                                    </div>
                                    <div class="testimonial-body">
                                        <p class="pera line-clamp-3">
                                            Lorem ipsum dolor sit amet consectetur. Et amet nulla in
                                            adipiscing. Donec tincidunt dui vel adipiscing sit
                                            turpis neque at cursus. Dignissim scelerisque mattis
                                            ultricies vitae.
                                        </p>
                                    </div>
                                    <div class="testimonial-footer">
                                        <div class="logo">
                                            <img src="{{asset('frontend/assets/images/logo/logo.png')}}" alt="travello" class="changeLogo">
                                        </div>
                                        <p class="date">Jan 20, 2025</p>
                                    </div>
                                </div>
                                <div class="swiper-slide testimonial-card">
                                    <div class="testimonial-header">
                                        <div class="user-img">
                                            <img src="{{asset('frontend/assets/images/testimonial/testimonial-1.jpeg')}}" alt="travello">
                                        </div>
                                        <div class="user-info">
                                            <p class="name">David Malan</p>
                                            <p class="designation">Traveler</p>
                                        </div>
                                    </div>
                                    <div class="rattings">
                                        <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i
                                            class="ri-star-fill"></i><i class="ri-star-fill"></i><i
                                            class="ri-star-fill"></i>
                                    </div>
                                    <div class="testimonial-body">
                                        <p class="pera line-clamp-3">
                                            Lorem ipsum dolor sit amet consectetur. Et amet nulla in
                                            adipiscing. Donec tincidunt dui vel adipiscing sit
                                            turpis neque at cursus. Dignissim scelerisque mattis
                                            ultricies vitae.
                                        </p>
                                    </div>
                                    <div class="testimonial-footer">
                                        <div class="logo">
                                            <img src="{{asset('frontend/assets/images/logo/logo.png')}}" alt="travello" class="changeLogo">
                                        </div>
                                        <p class="date">Jan 20, 2025</p>
                                    </div>
                                </div>
                                <div class="swiper-slide testimonial-card">
                                    <div class="testimonial-header">
                                        <div class="user-img">
                                            <img src="{{asset('frontend/assets/images/testimonial/testimonial-1.jpeg')}}" alt="travello">
                                        </div>
                                        <div class="user-info">
                                            <p class="name">David Malan</p>
                                            <p class="designation">Traveler</p>
                                        </div>
                                    </div>
                                    <div class="rattings">
                                        <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i
                                            class="ri-star-fill"></i><i class="ri-star-fill"></i><i
                                            class="ri-star-fill"></i>
                                    </div>
                                    <div class="testimonial-body">
                                        <p class="pera line-clamp-3">
                                            Lorem ipsum dolor sit amet consectetur. Et amet nulla in
                                            adipiscing. Donec tincidunt dui vel adipiscing sit
                                            turpis neque at cursus. Dignissim scelerisque mattis
                                            ultricies vitae.
                                        </p>
                                    </div>
                                    <div class="testimonial-footer">
                                        <div class="logo">
                                            <img src="{{asset('frontend/assets/images/logo/logo.png')}}" alt="travello" class="changeLogo">
                                        </div>
                                        <p class="date">Jan 20, 2025</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="hero-banner imgEffect2 o-hidden radius-20">
                            <img src="{{asset('frontend/assets/images/hero/testimonial-three-banner.png')}}" alt="travello">
                            <!-- shape 01 -->
                            <div class="shape">
                                <img src="{{asset('frontend/assets/images/icon/feature-shape.png')}}" alt="travello">
                            </div>
                            <a href="https://www.youtube.com/watch?v=Cn4G2lZ_g2I" data-fancybox="video-gallery" class="wow bounceIn" data-wow-delay=".2s">
                                <div class="video-player">
                                    <i class="ri-play-fill"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- / End Slider -->
                </div>
            </div>
            <div class="shape-testimonial">
                <img src="{{asset('frontend/assets/images/icon/graphic.png')}}" alt="travello">
            </div>
        </section>
        <!--/ End of Testimonial -->

        <!-- Brand S t a r t -->
        <div class="brand-area">
            <div class="container">
                <div class="swiper brandSwiper-active">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="{{asset('frontend/assets/images/brand/brand-1.jpeg')}}" alt="travello">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{asset('frontend/assets/images/brand/brand-2.jpg')}}" alt="travello">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{asset('frontend/assets/images/brand/brand-3.jpg')}}" alt="travello">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{asset('frontend/assets/images/brand/brand-4.png')}}" alt="travello">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{asset('frontend/assets/images/brand/brand-5.png')}}" alt="travello">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{asset('frontend/assets/images/brand/brand-1.jpeg')}}" alt="travello">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{asset('frontend/assets/images/brand/brand-2.jpg')}}" alt="travello">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ End of Brand -->

        <!-- News S t a r t -->
        <section class="news-area section-padding2">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-7">
                        <div class="section-title text-center mx-605 mx-auto position-relative mb-60">
                            <span class="highlights">News & Article</span>
                            <h4 class="title">
                                Latest News & Articles From The Blog Posts
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-xl-4 col-lg-4 col-sm-6">
                        <article class="news-card-two">
                            <figure class="news-banner-two imgEffect">
                                <a href="news-details.html"><img src="{{asset('frontend/assets/images/news/news-4.png')}}"
                                        alt="travello"></a>
                            </figure>
                            <div class="news-content">
                                <div class="heading">
                                    <span class="heading-pera">Tour Guide</span>
                                </div>
                                <h4 class="title">
                                    <a href="news-details.html">The World is a Book and Those Who do not Travel Read
                                        Only
                                        One Page.</a>
                                </h4>
                                <div class="news-info">
                                    <div class="d-flex gap-10 align-items-center">
                                        <div class="all-user">
                                            <div class="happy-user">
                                                <img src="{{asset('frontend/assets/images/portfolio/feedback-1.html')}}" alt="travello">
                                            </div>
                                            <div class="happy-user">
                                                <img src="{{asset('frontend/assets/images/portfolio/feedback-2.html')}}" alt="travello">
                                            </div>
                                            <div class="happy-user">
                                                <img src="{{asset('frontend/assets/images/portfolio/feedback-4.html')}}" alt="travello">
                                            </div>
                                            <div class="happy-user">
                                                <img src="{{asset('frontend/assets/images/portfolio/feedback-5.html')}}" alt="travello">
                                            </div>
                                        </div>
                                    </div>
                                    <p class="time">10 min read</p>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-sm-6">
                        <article class="news-card-two">
                            <figure class="news-banner-two imgEffect">
                                <a href="news-details.html"><img src="{{asset('frontend/assets/images/news/news-5.png')}}"
                                        alt="travello"></a>
                            </figure>
                            <div class="news-content">
                                <div class="heading">
                                    <span class="heading-pera">Tour Guide</span>
                                </div>
                                <h4 class="title">
                                    <a href="news-details.html">The World is a Book and Those Who do not Travel Read
                                        Only
                                        One Page.</a>
                                </h4>
                                <div class="news-info">
                                    <div class="d-flex gap-10 align-items-center">
                                        <div class="all-user">
                                            <div class="happy-user">
                                                <img src="{{asset('frontend/assets/images/portfolio/feedback-1.html')}}" alt="travello">
                                            </div>
                                            <div class="happy-user">
                                                <img src="{{asset('frontend/assets/images/portfolio/feedback-2.html')}}" alt="travello">
                                            </div>
                                            <div class="happy-user">
                                                <img src="{{asset('frontend/assets/images/portfolio/feedback-4.html')}}" alt="travello">
                                            </div>
                                            <div class="happy-user">
                                                <img src="{{asset('frontend/assets/images/portfolio/feedback-5.html')}}" alt="travello">
                                            </div>
                                        </div>
                                    </div>
                                    <p class="time">10 min read</p>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-sm-6">
                        <article class="news-card-two">
                            <figure class="news-banner-two imgEffect">
                                <a href="news-details.html"><img src="{{asset('frontend/assets/images/news/news-6.png')}}"
                                        alt="travello"></a>
                            </figure>
                            <div class="news-content">
                                <div class="heading">
                                    <span class="heading-pera">Tour Guide</span>
                                </div>
                                <h4 class="title">
                                    <a href="news-details.html">The World is a Book and Those Who do not Travel Read
                                        Only
                                        One Page.</a>
                                </h4>
                                <div class="news-info">
                                    <div class="d-flex gap-10 align-items-center">
                                        <div class="all-user">
                                            <div class="happy-user">
                                                <img src="{{asset('frontend/assets/images/portfolio/feedback-1.html')}}" alt="travello">
                                            </div>
                                            <div class="happy-user">
                                                <img src="{{asset('frontend/assets/images/portfolio/feedback-2.html')}}" alt="travello">
                                            </div>
                                            <div class="happy-user">
                                                <img src="{{asset('frontend/assets/images/portfolio/feedback-4.html')}}" alt="travello">
                                            </div>
                                            <div class="happy-user">
                                                <img src="{{asset('frontend/assets/images/portfolio/feedback-5.html')}}" alt="travello">
                                            </div>
                                        </div>
                                    </div>
                                    <p class="time">10 min read</p>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="col-12 text-center">
                    <div class="section-button d-inline-block">
                        <a href="news.html">
                            <div class="btn-primary-icon-sm">
                                <p class="pera">View All News</p>
                                <i class="ri-arrow-right-up-line"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!--/ End of News -->

        <!-- Pricing S t a r t -->
        <section class="pricing-area bottom-padding section-bg-before-two">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-7">
                        <div class="section-title text-center mx-605 mx-auto position-relative">
                            <span class="highlights-primary">Package Pricing Plan</span>
                            <h4 class=" title">
                                Simply Choose The Pricing Plan That Fits You Best
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="position-relative">
                    <div class="row g-4">
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="price-card h-calc wow fadeInUp" data-wow-delay="0.0s">
                                <div class="price-header">
                                    <div class="d-flex gap-7 mb-2">
                                        <h4 class="title">Basic</h4>
                                        <div class="price-badge d-none">popular</div>
                                    </div>
                                    <p class="pera">Best for personal and basic needs</p>
                                </div>
                                <div class="price-tag-section">
                                    <div class="price-tag">
                                        <h4 class="title">$10</h4>
                                        <p class="pera">One-time payment</p>
                                    </div>
                                </div>
                                <ul class="feature-points">
                                    <li class="feature-point">
                                        <div class="tick-icon">
                                            <i class="ri-check-line"></i>
                                        </div>
                                        <p class="pera">20+ Partners</p>
                                    </li>
                                    <li class="feature-point">
                                        <div class="tick-icon">
                                            <i class="ri-check-line"></i>
                                        </div>
                                        <p class="pera">Mass Messaging</p>
                                    </li>
                                    <li class="feature-point">
                                        <div class="tick-icon">
                                            <i class="ri-check-line"></i>
                                        </div>
                                        <p class="pera">Lorem ipsum dolor sit amet</p>
                                    </li>
                                    <li class="feature-point disable">
                                        <div class="tick-icon">
                                            <i class="ri-check-line"></i>
                                        </div>
                                        <p class="pera">Lorem ipsum dolor</p>
                                    </li>
                                    <li class="feature-point disable">
                                        <div class="tick-icon">
                                            <i class="ri-check-line"></i>
                                        </div>
                                        <p class="pera">Online booking engine</p>
                                    </li>
                                    <li class="feature-point disable">
                                        <div class="tick-icon">
                                            <i class="ri-check-line"></i>
                                        </div>
                                        <p class="pera">Business Card Scanner</p>
                                    </li>
                                </ul>
                                <div class="button-section">
                                    <a href="payment.html">
                                        <div class="btn-primary-icon-outline">
                                            <span class="pera">Try Now</span>
                                            <i class="ri-arrow-right-up-line"></i>
                                        </div>
                                    </a>
                                </div>
                                <div class="imp-note">
                                    <p class="pera">Per month +2% per online Booking</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="price-card h-calc wow fadeInUp" data-wow-delay="0.1s">
                                <div class="price-header">
                                    <div class="d-flex gap-7 mb-2">
                                        <h4 class="title">Pro</h4>
                                        <div class="price-badge">popular</div>
                                    </div>
                                    <p class="pera">Best for personal and basic needs</p>
                                </div>
                                <div class="price-tag-section">
                                    <div class="price-tag">
                                        <h4 class="title">$77</h4>
                                        <p class="pera">One-time payment</p>
                                    </div>
                                </div>
                                <ul class="feature-points">
                                    <li class="feature-point">
                                        <div class="tick-icon">
                                            <i class="ri-check-line"></i>
                                        </div>
                                        <p class="pera">20+ Partners</p>
                                    </li>
                                    <li class="feature-point">
                                        <div class="tick-icon">
                                            <i class="ri-check-line"></i>
                                        </div>
                                        <p class="pera">Mass Messaging</p>
                                    </li>
                                    <li class="feature-point">
                                        <div class="tick-icon">
                                            <i class="ri-check-line"></i>
                                        </div>
                                        <p class="pera">Lorem ipsum dolor sit amet</p>
                                    </li>
                                    <li class="feature-point">
                                        <div class="tick-icon">
                                            <i class="ri-check-line"></i>
                                        </div>
                                        <p class="pera">Lorem ipsum dolor</p>
                                    </li>
                                    <li class="feature-point">
                                        <div class="tick-icon">
                                            <i class="ri-check-line"></i>
                                        </div>
                                        <p class="pera">Online booking engine</p>
                                    </li>
                                    <li class="feature-point disable">
                                        <div class="tick-icon">
                                            <i class="ri-check-line"></i>
                                        </div>
                                        <p class="pera">Business Card Scanner</p>
                                    </li>
                                </ul>
                                <div class="button-section">
                                    <a href="payment.html">
                                        <div class="btn-primary-icon-outline">
                                            <span class="pera">Try Now</span>
                                            <i class="ri-arrow-right-up-line"></i>
                                        </div>
                                    </a>
                                </div>
                                <div class="imp-note">
                                    <p class="pera">Per month +1.9% per online Booking</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="price-card h-calc wow fadeInUp" data-wow-delay="0.2s">
                                <div class="price-header">
                                    <div class="d-flex gap-7 mb-2">
                                        <h4 class="title">Custom</h4>
                                        <div class="price-badge d-none">popular</div>
                                    </div>
                                    <p class="pera">Best for personal and basic needs</p>
                                </div>
                                <ul class="feature-points">
                                    <li class="feature-point">
                                        <div class="tick-icon">
                                            <i class="ri-check-line"></i>
                                        </div>
                                        <p class="pera">Mass Messaging</p>
                                    </li>
                                    <li class="feature-point">
                                        <div class="tick-icon">
                                            <i class="ri-check-line"></i>
                                        </div>
                                        <p class="pera">Lorem ipsum dolor sit amet</p>
                                    </li>
                                    <li class="feature-point">
                                        <div class="tick-icon">
                                            <i class="ri-check-line"></i>
                                        </div>
                                        <p class="pera">Unlimited Everything</p>
                                    </li>
                                    <li class="feature-point">
                                        <div class="tick-icon">
                                            <i class="ri-check-line"></i>
                                        </div>
                                        <p class="pera">Lorem ipsum dolor</p>
                                    </li>
                                    <li class="feature-point">
                                        <div class="tick-icon">
                                            <i class="ri-check-line"></i>
                                        </div>
                                        <p class="pera">Lorem ipsum dolor</p>
                                    </li>
                                    <li class="feature-point">
                                        <div class="tick-icon">
                                            <i class="ri-check-line"></i>
                                        </div>
                                        <p class="pera">Lorem ipsum dolor</p>
                                    </li>
                                    <li class="feature-point">
                                        <div class="tick-icon">
                                            <i class="ri-check-line"></i>
                                        </div>
                                        <p class="pera">Online booking engine</p>
                                    </li>
                                    <li class="feature-point">
                                        <div class="tick-icon">
                                            <i class="ri-check-line"></i>
                                        </div>
                                        <p class="pera">Business Card Scanner</p>
                                    </li>
                                </ul>
                                <div class="button-section">
                                    <a href="payment.html">
                                        <div class="btn-primary-icon-outline">
                                            <span class="pera">Contact</span>
                                            <i class="ri-arrow-right-up-line"></i>
                                        </div>
                                    </a>
                                </div>
                                <div class="imp-note">
                                    <p class="pera">Please contact anytime</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/ End of Pricing -->
    </main>

    <!-- Footer S t a r t -->
    <footer>
        <div class="footer-wrapper footer-bg">
            <div class="container">
                <div class="footer-area">
                    <div class="row g-4">
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="single-footer-caption">
                                <div class="footer-tittle">
                                    <h4 class="title">Company</h4>
                                    <ul class="listing">
                                        <li class="single-lsit">
                                            <a href="about.html">About Us</a>
                                        </li>
                                        <li class="single-lsit">
                                            <a href="news.html">News</a>
                                        </li>
                                        <li class="single-lsit"><a href="faq.html">Faq</a></li>
                                        <li class="single-lsit">
                                            <a href="contact.html">Contact</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="single-footer-caption">
                                <div class="footer-tittle">
                                    <h4 class="title">Explore</h4>
                                    <ul class="listing">
                                        <li class="single-lsit"><a href="faq.html">Faq</a></li>
                                        <li class="single-lsit">
                                            <a href="tour-list.html">Tour Listings</a>
                                        </li>
                                        <li class="single-lsit">
                                            <a href="destination.html">Destination</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="single-footer-caption">
                                <div class="footer-tittle">
                                    <h4 class="title">Quick Links</h4>
                                    <ul class="listing">
                                        <li class="single-lsit"><a href="index.html">Home</a></li>
                                        <li class="single-lsit">
                                            <a href="about.html">About Us</a>
                                        </li>
                                        <li class="single-lsit">
                                            <a href="contact.html">Contact Us</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="single-footer-caption">
                                <div class="footer-tittle">
                                    <h4 class="title">Contact</h4>
                                    <ul class="listing">
                                        <li class="single-lsit">
                                            <a href="#" class="mb-20 d-block">70/A Floor Divo Tower Melbourne,
                                                Australia</a>
                                        </li>
                                        <li class="single-lsit">
                                            <a href="#">
                                                <div class="d-flex gap-12">
                                                    <i class="ri-phone-line"></i> (00) +888 123456 789
                                                </div>
                                            </a>
                                        </li>
                                        <li class="single-lsit">
                                            <a href="#">
                                                <div class="d-flex gap-12">
                                                    <i class="ri-mail-line"></i> example@gmail.com
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-middle-area">
                    <div class="footer-body">
                        <div class="footer-content">
                            <div class="d-flex flex-column gap-20">
                                <div class="logo">
                                    <img src="{{asset('frontend/assets/images/logo/logo.png')}}" alt="travello" style="height: 43px; width: 104px;" class="changeLogo">
                                </div>
                                <p class="pera">
                                    Travel is a transformative and enriching experience that
                                    allows individuals to explore new destinations, cultures,
                                    and landscapes.
                                </p>
                            </div>
                            <div class="footer-right">
                                <h4 class="title">Subscribe Our Newsletter</h4>
                                <div class="subscribe-wraper">
                                    <input class="footer-search" type="search" name="footer"
                                        placeholder="Enter Your Email">
                                    <button class="subscribe-btn">Subscribe</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer-bottom">
                        <ul class="listing">
                            <li class="single-list">
                                <a href="terms-condition.html" class="single">Terms of usa</a>
                            </li>
                            <li class="single-list">
                                <a href="privacy-policy.html" class="single">Privacy and Cookies Statement</a>
                            </li>
                            <li class="single-list">
                                <a href="contact.html" class="single">How the site works</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- footer-bottom area -->
            <div class="footer-bottom-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="d-flex justify-content-between gap-14 flex-wrap">
                                <p class="pera">
                                    © <span class="current-year"> {{ now()->year }} </span> AtravellersEpisode. All rights
                                    reserved
                                </p>
                                <p class="pera">Powered by @AtravellersEpisode</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/ End-of Footer -->

    <!-- Scroll Up  -->
    <div class="progressParent" id="back-top">
        <svg class="backCircle svg-inner" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- Add an search-overlay element -->
    <div class="search-overlay"></div>
    <!-- jquery-->
    <script src="{{asset('frontend/assets/js/jquery-3.7.0.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/popper.min.j')}}s"></script>
    <script src="{{asset('frontend/assets/js/bootstrap-5.3.0.min.js')}}"></script>
    <!-- Plugin -->
    <script src="{{asset('frontend/assets/js/plugin.js')}}"></script>
    <!-- Main js-->
    <script src="{{asset('frontend/assets/js/main.js')}}"></script>
</body>

</html>