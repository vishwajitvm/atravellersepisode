@extends('website.websitemaster')
@section('websitespages')
<!--META DATA-->
@php
        //meta keywords
        $title = "Home" ;
        $metakeywordname = "AtravellersEpisode Keywords" ;
        $metakeywordContent = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quo consequatur cum sapiente recusandae fugiat a, error veniam quis? Quos, assumenda." ;

        //meta descriptions
       $metaDescriptionName = "AtravellersEpisode Description" ;
       $metaDescriptionContent = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quo consequatur cum sapiente recusandae fugiat a, error veniam quis? Quos, assumenda." ;
@endphp
<!--META DATA END-->

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
                            Welcome to <b>ATravellersEpisode</b> <br>
                            Pack your bags and check that trek off your bucket list today!
                        </h4>
                        <p class="pera wow fadeInUp" data-wow-delay="0.1s">
                            <b> Winter  are here and so is the trekking season.❄️ </b> <br>
                            Treks ranging from the beautiful valleys of Kashmir to the magnificent mountains of Himachal to the land of gods Uttrakhand and the mesmerizing sights of the East.

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
    <section class="plan-area">
        <div class="container">
            <div class="plan-section plan-shadow">
                <div class="select-dropdown-section">
                    <div class="d-flex gap-10 align-items-center">
                        <i class="ri-map-pin-line"></i>
                        <h4 class="select2-title">Destination</h4>
                    </div>
                    <select class="destination-dropdown">
                        <option value="1">Sydney, Australia</option>
                        <option value="2">USA, Turkish </option>
                        <option value="3">Chittagong, Turkish </option>
                    </select>
                </div>
                <div class="divider plan-divider d-none d-lg-block"></div>
                <div class="select-dropdown-section">
                    <div class="d-flex gap-10 align-items-center">
                        <i class="ri-flight-takeoff-fill"></i>
                        <h4 class="select2-title">Tour Type</h4>
                    </div>
                    <select class="destination-dropdown">
                        <option value="1">Booking Type</option>
                        <option value="2">Advance Type</option>
                        <option value="3">Pre-book Type</option>
                    </select>
                </div>
                <div class="divider plan-divider d-none d-lg-block"></div>
                <div class="dropdown-section">
                    <div class="d-flex gap-10 align-items-center">
                        <i class="ri-time-line"></i>
                        <div class="custom-dropdown custom-date">
                            <h4 class="title">Date From</h4>
                            <div class="arrow">
                                <i class="ri-arrow-down-s-line"></i>
                            </div>
                        </div>
                    </div>
                    <div class="date-result">01/12/2023</div>
                </div>
                <div class="divider plan-divider d-none d-lg-block"></div>
                <div class="dropdown-section position-relative user-picker-dropdown">
                    <div class="d-flex gap-10 align-items-center">
                        <i class="ri-user-line"></i>
                        <div class="custom-dropdown">
                            <h4 class="title">Guests</h4>
                            <div class="arrow">
                                <i class="ri-arrow-down-s-line"></i>
                            </div>
                        </div>
                    </div>
                    <div class="user-result">02</div>
                    <div class="user-picker dropdown-shadow">
                        <div class="user-category">
                            <div class="category-name">
                                <h4 class="title">Adults</h4>
                                <p class="pera">12years and above</p>
                            </div>
                            <div class="qty-container">
                                <button class="qty-btn-minus mr-1" type="button">
                                    <i class="ri-subtract-fill"></i>
                                </button>
                                <input type="text" name="qty" value="0" class="input-qty input-rounded">
                                <button class="qty-btn-plus ml-1">
                                    <i class="ri-add-fill"></i>
                                </button>
                            </div>
                        </div>
                        <div class="user-category">
                            <div class="category-name">
                                <h4 class="title">Children</h4>
                                <p class="pera">2-11 years</p>
                            </div>
                            <div class="qty-container">
                                <button class="qty-btn-minus mr-1" type="button">
                                    <i class="ri-subtract-fill"></i>
                                </button>
                                <input type="text" name="qty" value="0" class="input-qty input-rounded">
                                <button class="qty-btn-plus ml-1">
                                    <i class="ri-add-fill"></i>
                                </button>
                            </div>
                        </div>
                        <div class="user-category">
                            <div class="category-name">
                                <h4 class="title">infant</h4>
                                <p class="pera">belwo 2 years</p>
                            </div>
                            <div class="qty-container">
                                <button class="qty-btn-minus mr-1" type="button">
                                    <i class="ri-subtract-fill"></i>
                                </button>
                                <input type="text" name="qty" value="0" class="input-qty input-rounded">
                                <button class="qty-btn-plus ml-1" type="button">
                                    <i class="ri-add-fill"></i>
                                </button>
                            </div>
                        </div>
                        <div class="btn-section">
                            <a href="javascript:void(0)" class="done-btn">Done</a>
                        </div>
                    </div>
                </div>
                <div class="sign-btn">
                    <a href="tour-list.html" class="btn-secondary-lg">Search Plan</a>
                </div>
            </div>
        </div>
    </section>
    <!--/ End-of Plan-->


    <!-- About Us area S t a r t -->
    <section class="about-area">
        <div class="container">
            <div class="row g-4">
                <div class="col-xl-5 col-lg-6">
                    <div class="section-title mx-430 mb-30 w-md-100">
                        <span class="highlights fancy-font font-400">About Us</span>
                        <h4 class="title">
                            Discover Unforgettable Adventures with ATravellersEpisode!
                        </h4>
                        <p class="pera">
                            At ATravellersEpisode, we’re committed to crafting personalized and memorable travel experiences. With deep industry expertise and a network of trusted partners, we handle every detail to make your journey seamless and exceptional. From mountain treks to serene escapes, we bring your travel dreams to life. Reach out today for a free consultation, and let us take you on an adventure beyond expectations!
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
                            Most Favorite Tour Place in The India
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
                                        <div class="name">Kuari Pass Trek, Uttrakhand</div>
                                    </div>
                                    <h4 class="area-name">
                                        <a href="tour-details.html">Kuari Pass Trek</a>
                                    </h4>
                                    <div class="packages-person mb-16">
                                        <div class="count">
                                            <i class="ri-time-line"></i>
                                            <p class="pera">6 Days 5 Night</p>
                                        </div>
                                        <div class="count">
                                            <i class="ri-user-line"></i>
                                            <p class="pera">1 Person</p>
                                        </div>
                                    </div>
                                    <div class="price-review mb-0">
                                        <div class="d-flex gap-10">
                                            <p class="light-pera">From</p>
                                            <p class="pera">9999</p>
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
                                        <div class="name">Kedarnath Ji Yatra, Uttrakhand</div>
                                    </div>
                                    <h4 class="area-name">
                                        <a href="tour-details.html">Kedarnath Ji Yatra</a>
                                    </h4>
                                    <div class="packages-person mb-16">
                                        <div class="count">
                                            <i class="ri-time-line"></i>
                                            <p class="pera">5 Days 4 Night</p>
                                        </div>
                                        <div class="count">
                                            <i class="ri-user-line"></i>
                                            <p class="pera">1 Person</p>
                                        </div>
                                    </div>
                                    <div class="price-review mb-0">
                                        <div class="d-flex gap-10">
                                            <p class="light-pera">From</p>
                                            <p class="pera">9999</p>
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
                                        <div class="name">Kedarkantha Trek, Sankri</div>
                                    </div>
                                    <h4 class="area-name">
                                        <a href="tour-details.html">
                                            Kedarkantha Trek</a>
                                    </h4>
                                    <div class="packages-person mb-16">
                                        <div class="count">
                                            <i class="ri-time-line"></i>
                                            <p class="pera">5 Days 4 Night</p>
                                        </div>
                                        <div class="count">
                                            <i class="ri-user-line"></i>
                                            <p class="pera">1 Person</p>
                                        </div>
                                    </div>
                                    <div class="price-review mb-0">
                                        <div class="d-flex gap-10">
                                            <p class="light-pera">From</p>
                                            <p class="pera">10000</p>
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
                                        <div class="name">Har Ki Dhun Trek,Sankri</div>
                                    </div>
                                    <h4 class="area-name">
                                        <a href="tour-details.html">Har Ki Dhun Trek</a>
                                    </h4>
                                    <div class="packages-person mb-16">
                                        <div class="count">
                                            <i class="ri-time-line"></i>
                                            <p class="pera">7 Days 6 Night</p>
                                        </div>
                                        <div class="count">
                                            <i class="ri-user-line"></i>
                                            <p class="pera">1 Person</p>
                                        </div>
                                    </div>
                                    <div class="price-review mb-0">
                                        <div class="d-flex gap-10">
                                            <p class="light-pera">From</p>
                                            <p class="pera">12000</p>
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
                                        <div class="name">Rupin Supin Trek, Uttrakhand</div>
                                    </div>
                                    <h4 class="area-name">
                                        <a href="tour-details.html">Rupin Supin Trek</a>
                                    </h4>
                                    <div class="packages-person mb-16">
                                        <div class="count">
                                            <i class="ri-time-line"></i>
                                            <p class="pera">6 Days 5 Night</p>
                                        </div>
                                        <div class="count">
                                            <i class="ri-user-line"></i>
                                            <p class="pera">1 Person</p>
                                        </div>
                                    </div>
                                    <div class="price-review mb-0">
                                        <div class="d-flex gap-10">
                                            <p class="light-pera">From</p>
                                            <p class="pera">12500</p>
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
                                        <div class="name">Dyara Bughyal Trek, Uttrakhand</div>
                                    </div>
                                    <h4 class="area-name">
                                        <a href="tour-details.html">Dyara Bughyal Trek
                                            ​</a>
                                    </h4>
                                    <div class="packages-person mb-16">
                                        <div class="count">
                                            <i class="ri-time-line"></i>
                                            <p class="pera">3 Days 2 Night</p>
                                        </div>
                                        <div class="count">
                                            <i class="ri-user-line"></i>
                                            <p class="pera">1 Person</p>
                                        </div>
                                    </div>
                                    <div class="price-review mb-0">
                                        <div class="d-flex gap-10">
                                            <p class="light-pera">From</p>
                                            <p class="pera">12000</p>
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
                                        <div class="name">Nag Tibba Trek, Sari Village</div>
                                    </div>
                                    <h4 class="area-name">
                                        <a href="tour-details.html">Nag Tibba Trek</a>
                                    </h4>
                                    <div class="packages-person mb-16">
                                        <div class="count">
                                            <i class="ri-time-line"></i>
                                            <p class="pera">3 Days 2 Night</p>
                                        </div>
                                        <div class="count">
                                            <i class="ri-user-line"></i>
                                            <p class="pera">1 Person</p>
                                        </div>
                                    </div>
                                    <div class="price-review mb-0">
                                        <div class="d-flex gap-10">
                                            <p class="light-pera">From</p>
                                            <p class="pera">4000</p>
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
                                        <div class="name">Brahmatal Trek, Uttrakhand</div>
                                    </div>
                                    <h4 class="area-name">
                                        <a href="tour-details.html">Brahmatal Trek</a>
                                    </h4>
                                    <div class="packages-person mb-16">
                                        <div class="count">
                                            <i class="ri-time-line"></i>
                                            <p class="pera">6 Days 5 Night</p>
                                        </div>
                                        <div class="count">
                                            <i class="ri-user-line"></i>
                                            <p class="pera">1 Person</p>
                                        </div>
                                    </div>
                                    <div class="price-review mb-0">
                                        <div class="d-flex gap-10">
                                            <p class="light-pera">From</p>
                                            <p class="pera">115000</p>
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
                            Explore The Beautiful Places Around Himalya
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

  
</main>

@endsection