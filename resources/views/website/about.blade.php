@extends('website.websitemaster')
@section('websitespages')
<!--META DATA-->
@php
        //meta keywords
        $title = "About" ;
        $metakeywordname = "AtravellersEpisode Keywords" ;
        $metakeywordContent = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quo consequatur cum sapiente recusandae fugiat a, error veniam quis? Quos, assumenda." ;

        //meta descriptions
       $metaDescriptionName = "AtravellersEpisode Description" ;
       $metaDescriptionContent = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quo consequatur cum sapiente recusandae fugiat a, error veniam quis? Quos, assumenda." ;
@endphp
<!--META DATA END-->

<main>
    <!-- Breadcrumbs S t a r t -->
    <section class="breadcrumbs-area breadcrumb-bg">
        <div class="container">
            <h1 class="title wow fadeInUp" data-wow-delay="0.0s">About Us</h1>
            <div class="breadcrumb-text">
                <nav aria-label="breadcrumb" class="breadcrumb-nav wow fadeInUp" data-wow-delay="0.1s">
                    <ul class="breadcrumb listing">
                        <li class="breadcrumb-item single-list"><a href="{{ route('homepage') }}" class="single">Home</a></li>
                        <li class="breadcrumb-item single-list" aria-current="page">
                            <a href="javascript:void(0)" class="single active">About Us</a></li>
                    </ul>
                </nav>
            </div>
        </div>

    </section>
    <!--/ End-of Breadcrumbs-->

    <!-- About Us area S t a r t -->
    <section class="about-area">
        <div class="container">
            <div class="row g-4">
                <div class="col-xl-5 col-lg-6">
                    <div class="section-title mx-430 mb-30 w-md-100">
                        <span class="highlights fancy-font font-400">About Us</span>
                        <h4 class="title">
                            ATravellersEpisode, We Turn Your Adventures into Unforgettable Journeys!
                        </h4>
                        <p class="pera">
                            Welcome to ATravellersEpisode, where every adventure is crafted with passion and precision. Our team lives and breathes travel, driven by years of experience, a network of trusted partners, and a love for creating extraordinary journeys. Whether it’s the thrill of a rugged mountain trek, the peace of a remote nature escape, or the excitement of exploring hidden trails, we’re here to make your travel dreams a reality.
                        </p>
                        <p class="pera">
                            From helping you choose the perfect destination to managing every detail with care, we’re dedicated to ensuring that your journey is as seamless as it is memorable. At ATravellersEpisode, we handle everything—so you can immerse yourself in the experience. Connect with us today for a free consultation and let’s start crafting your next unforgettable adventure!
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
                            <img src="frontend/assets/images/gallery/about-banner-three.png" alt="travello">
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





    <!-- Testimonial S t a r t -->
    <section class="testimonial-area section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-7">
                    <div class="section-title mx-430 mx-auto text-center">
                        <span class="highlights">Testimonial</span>
                        <h4 class="title">
                            What People Have Said About Our Service
                        </h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex flex-wrap gap-24">
            <div class="swiper bulletLeftSwiper-active">
                <div class="swiper-wrapper">
                    <div class="swiper-slide testimonial-card">
                        <div class="testimonial-header">
                            <div class="user-img">
                                <img src="frontend/assets/images/testimonial/testimonial-1.jpeg" alt="travello">
                            </div>
                            <div class="user-info">
                                <p class="name">David Malan</p>
                                <p class="designation">Traveler</p>
                            </div>
                        </div>
                        <div class="testimonial-body">
                            <p class="pera">
                                Lorem ipsum dolor sit amet consectetur. Et amet nulla in
                                adipiscing. Donec tincidunt dui vel adipiscing sit turpis
                                neque at cursus. Dignissim scelerisque mattis ultricies
                                vitae.
                            </p>
                        </div>
                        <div class="testimonial-footer">
                            <div class="logo">
                                <img src="frontend/assets/images/logo/logo.png" alt="travello" class="changeLogo">
                            </div>
                            <p class="date">Jan 20, 2025</p>
                        </div>
                    </div>
                    <div class="swiper-slide testimonial-card">
                        <div class="testimonial-header">
                            <div class="user-img">
                                <img src="frontend/assets/images/testimonial/testimonial-1.jpeg" alt="travello">
                            </div>
                            <div class="user-info">
                                <p class="name">David Malan</p>
                                <p class="designation">Traveler</p>
                            </div>
                        </div>
                        <div class="testimonial-body">
                            <p class="pera">
                                Lorem ipsum dolor sit amet consectetur. Et amet nulla in
                                adipiscing. Donec tincidunt dui vel adipiscing sit turpis
                                neque at cursus. Dignissim scelerisque mattis ultricies
                                vitae.
                            </p>
                        </div>
                        <div class="testimonial-footer">
                            <div class="logo">
                                <img src="frontend/assets/images/logo/logo.png" alt="travello" class="changeLogo">
                            </div>
                            <p class="date">Jan 20, 2025</p>
                        </div>
                    </div>
                    <div class="swiper-slide testimonial-card">
                        <div class="testimonial-header">
                            <div class="user-img">
                                <img src="frontend/assets/images/testimonial/testimonial-1.jpeg" alt="travello">
                            </div>
                            <div class="user-info">
                                <p class="name">David Malan</p>
                                <p class="designation">Traveler</p>
                            </div>
                        </div>
                        <div class="testimonial-body">
                            <p class="pera">
                                Lorem ipsum dolor sit amet consectetur. Et amet nulla in
                                adipiscing. Donec tincidunt dui vel adipiscing sit turpis
                                neque at cursus. Dignissim scelerisque mattis ultricies
                                vitae.
                            </p>
                        </div>
                        <div class="testimonial-footer">
                            <div class="logo">
                                <img src="frontend/assets/images/logo/logo.png" alt="travello" class="changeLogo">
                            </div>
                            <p class="date">Jan 20, 2025</p>
                        </div>
                    </div>
                    <div class="swiper-slide testimonial-card">
                        <div class="testimonial-header">
                            <div class="user-img">
                                <img src="frontend/assets/images/testimonial/testimonial-1.jpeg" alt="travello">
                            </div>
                            <div class="user-info">
                                <p class="name">David Malan</p>
                                <p class="designation">Traveler</p>
                            </div>
                        </div>
                        <div class="testimonial-body">
                            <p class="pera">
                                Lorem ipsum dolor sit amet consectetur. Et amet nulla in
                                adipiscing. Donec tincidunt dui vel adipiscing sit turpis
                                neque at cursus. Dignissim scelerisque mattis ultricies
                                vitae.
                            </p>
                        </div>
                        <div class="testimonial-footer">
                            <div class="logo">
                                <img src="frontend/assets/images/logo/logo.png" alt="travello" class="changeLogo">
                            </div>
                            <p class="date">Jan 20, 2025</p>
                        </div>
                    </div>
                    <div class="swiper-slide testimonial-card">
                        <div class="testimonial-header">
                            <div class="user-img">
                                <img src="frontend/assets/images/testimonial/testimonial-1.jpeg" alt="travello">
                            </div>
                            <div class="user-info">
                                <p class="name">David Malan</p>
                                <p class="designation">Traveler</p>
                            </div>
                        </div>
                        <div class="testimonial-body">
                            <p class="pera">
                                Lorem ipsum dolor sit amet consectetur. Et amet nulla in
                                adipiscing. Donec tincidunt dui vel adipiscing sit turpis
                                neque at cursus. Dignissim scelerisque mattis ultricies
                                vitae.
                            </p>
                        </div>
                        <div class="testimonial-footer">
                            <div class="logo">
                                <img src="frontend/assets/images/logo/logo.png" alt="travello" class="changeLogo">
                            </div>
                            <p class="date">Jan 20, 2025</p>
                        </div>
                    </div>
                    <div class="swiper-slide testimonial-card">
                        <div class="testimonial-header">
                            <div class="user-img">
                                <img src="frontend/assets/images/testimonial/testimonial-1.jpeg" alt="travello">
                            </div>
                            <div class="user-info">
                                <p class="name">David Malan</p>
                                <p class="designation">Traveler</p>
                            </div>
                        </div>
                        <div class="testimonial-body">
                            <p class="pera">
                                Lorem ipsum dolor sit amet consectetur. Et amet nulla in
                                adipiscing. Donec tincidunt dui vel adipiscing sit turpis
                                neque at cursus. Dignissim scelerisque mattis ultricies
                                vitae.
                            </p>
                        </div>
                        <div class="testimonial-footer">
                            <div class="logo">
                                <img src="frontend/assets/images/logo/logo.png" alt="travello" class="changeLogo">
                            </div>
                            <p class="date">Jan 20, 2025</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper bulletRightSwiper-active">
                <div class="swiper-wrapper">
                    <div class="swiper-slide testimonial-card">
                        <div class="testimonial-header">
                            <div class="user-img">
                                <img src="frontend/assets/images/testimonial/testimonial-1.jpeg" alt="travello">
                            </div>
                            <div class="user-info">
                                <p class="name">David Malan</p>
                                <p class="designation">Traveler</p>
                            </div>
                        </div>
                        <div class="testimonial-body">
                            <p class="pera">
                                Lorem ipsum dolor sit amet consectetur. Et amet nulla in
                                adipiscing. Donec tincidunt dui vel adipiscing sit turpis
                                neque at cursus. Dignissim scelerisque mattis ultricies
                                vitae.
                            </p>
                        </div>
                        <div class="testimonial-footer">
                            <div class="logo">
                                <img src="frontend/assets/images/logo/logo.png" alt="travello" class="changeLogo">
                            </div>
                            <p class="date">Jan 20, 2025</p>
                        </div>
                    </div>
                    <div class="swiper-slide testimonial-card">
                        <div class="testimonial-header">
                            <div class="user-img">
                                <img src="frontend/assets/images/testimonial/testimonial-1.jpeg" alt="travello">
                            </div>
                            <div class="user-info">
                                <p class="name">David Malan</p>
                                <p class="designation">Traveler</p>
                            </div>
                        </div>
                        <div class="testimonial-body">
                            <p class="pera">
                                Lorem ipsum dolor sit amet consectetur. Et amet nulla in
                                adipiscing. Donec tincidunt dui vel adipiscing sit turpis
                                neque at cursus. Dignissim scelerisque mattis ultricies
                                vitae.
                            </p>
                        </div>
                        <div class="testimonial-footer">
                            <div class="logo">
                                <img src="frontend/assets/images/logo/logo.png" alt="travello" class="changeLogo">
                            </div>
                            <p class="date">Jan 20, 2025</p>
                        </div>
                    </div>
                    <div class="swiper-slide testimonial-card">
                        <div class="testimonial-header">
                            <div class="user-img">
                                <img src="frontend/assets/images/testimonial/testimonial-1.jpeg" alt="travello">
                            </div>
                            <div class="user-info">
                                <p class="name">David Malan</p>
                                <p class="designation">Traveler</p>
                            </div>
                        </div>
                        <div class="testimonial-body">
                            <p class="pera">
                                Lorem ipsum dolor sit amet consectetur. Et amet nulla in
                                adipiscing. Donec tincidunt dui vel adipiscing sit turpis
                                neque at cursus. Dignissim scelerisque mattis ultricies
                                vitae.
                            </p>
                        </div>
                        <div class="testimonial-footer">
                            <div class="logo">
                                <img src="frontend/assets/images/logo/logo.png" alt="travello" class="changeLogo">
                            </div>
                            <p class="date">Jan 20, 2025</p>
                        </div>
                    </div>
                    <div class="swiper-slide testimonial-card">
                        <div class="testimonial-header">
                            <div class="user-img">
                                <img src="frontend/assets/images/testimonial/testimonial-1.jpeg" alt="travello">
                            </div>
                            <div class="user-info">
                                <p class="name">David Malan</p>
                                <p class="designation">Traveler</p>
                            </div>
                        </div>
                        <div class="testimonial-body">
                            <p class="pera">
                                Lorem ipsum dolor sit amet consectetur. Et amet nulla in
                                adipiscing. Donec tincidunt dui vel adipiscing sit turpis
                                neque at cursus. Dignissim scelerisque mattis ultricies
                                vitae.
                            </p>
                        </div>
                        <div class="testimonial-footer">
                            <div class="logo">
                                <img src="frontend/assets/images/logo/logo.png" alt="travello" class="changeLogo">
                            </div>
                            <p class="date">Jan 20, 2025</p>
                        </div>
                    </div>
                    <div class="swiper-slide testimonial-card">
                        <div class="testimonial-header">
                            <div class="user-img">
                                <img src="frontend/assets/images/testimonial/testimonial-1.jpeg" alt="travello">
                            </div>
                            <div class="user-info">
                                <p class="name">David Malan</p>
                                <p class="designation">Traveler</p>
                            </div>
                        </div>
                        <div class="testimonial-body">
                            <p class="pera">
                                Lorem ipsum dolor sit amet consectetur. Et amet nulla in
                                adipiscing. Donec tincidunt dui vel adipiscing sit turpis
                                neque at cursus. Dignissim scelerisque mattis ultricies
                                vitae.
                            </p>
                        </div>
                        <div class="testimonial-footer">
                            <div class="logo">
                                <img src="frontend/assets/images/logo/logo.png" alt="travello" class="changeLogo">
                            </div>
                            <p class="date">Jan 20, 2025</p>
                        </div>
                    </div>
                    <div class="swiper-slide testimonial-card">
                        <div class="testimonial-header">
                            <div class="user-img">
                                <img src="frontend/assets/images/testimonial/testimonial-1.jpeg" alt="travello">
                            </div>
                            <div class="user-info">
                                <p class="name">David Malan</p>
                                <p class="designation">Traveler</p>
                            </div>
                        </div>
                        <div class="testimonial-body">
                            <p class="pera">
                                Lorem ipsum dolor sit amet consectetur. Et amet nulla in
                                adipiscing. Donec tincidunt dui vel adipiscing sit turpis
                                neque at cursus. Dignissim scelerisque mattis ultricies
                                vitae.
                            </p>
                        </div>
                        <div class="testimonial-footer">
                            <div class="logo">
                                <img src="frontend/assets/images/logo/logo.png" alt="travello" class="changeLogo">
                            </div>
                            <p class="date">Jan 20, 2025</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="section-button d-inline-block">
                        <a href="javascript:void(0)">
                            <div class="btn-primary-icon-sm">
                                <p class="pera">All Customers Say</p>
                                <i class="ri-arrow-right-up-line"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End of Testimonial -->

</main>

@endsection