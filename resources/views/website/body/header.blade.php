@php
    $prefix = Request::route()->getprefix() ;
    $route = Route::current()->getName() ;
@endphp
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
                                            <a href="javascript:void(0)">+91 92052 73823</a>
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
                                    {{-- <p class="pera">
                                        <a href="{{ route('login') }}" class="signin">Sign In</a>
                                    </p>
                                    <div class="sign-btn">
                                        <a href="{{ route('register') }}" class="btn-secondary-sm radius-30">Sign Up</a>
                                    </div> --}}

                                    @if (Auth::check()) <!-- If the user is logged in -->
                                    <p class="pera">
                                        <a href="{{ route('profile.show') }}" class="signin">Profile</a>
                                    </p>
                                    <div class="sign-btn">
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <button type="submit" class="btn-secondary-sm radius-30">Logout</button>
                                        </form>
                                    </div>
                                @else <!-- If the user is not logged in -->
                                    <p class="pera">
                                        <a href="{{ route('login') }}" class="signin">Sign In</a>
                                    </p>
                                    <div class="sign-btn">
                                        <a href="{{ route('register') }}" class="btn-secondary-sm radius-30">Sign Up</a>
                                    </div>
                                @endif
                                
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
                                                <a href="{{ route('homepage') }}"
                                                    class="single {{ ($route == 'homepage')?'link-active':'' }}">Home </a>
                                                
                                            </li>
                                            <li class="single-list">
                                                <a href="{{ route('about') }}" class="single {{ ($route == 'about')?'link-active':'' }}">About</a>
                                            </li>
                                            <li class="single-list">
                                                <a href="destination.html" class="single">Destination</a>
                                            </li>
                                            <li class="single-list">
                                                <a href="{{ route('tour-package') }}" class="single {{ ($route == 'tour-package')?'link-active':'' }}">Tour Package</a>
                                            </li>
                                            
                                            @auth
                                            @if(Auth::user()->usertype === 'ADMIN')
                                            <li class="single-list">
                                                <a href="javascript:void(0)" class="single">{{ Auth::user()->usertype === "ADMIN" ? "Admin" : "User" }} Management <i
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
                                            @endif
                                            @endauth
                                            
                                            <li class="single-list">
                                                <a href="{{ route('contact') }}" class="single {{ ($route == 'contact')?'link-active':'' }}">Contact</a>
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