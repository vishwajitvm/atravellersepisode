@extends('website.websitemaster')
@section('websitespages')
<!--META DATA-->
@php
        //meta keywords
        $title = "Dashboard" ;
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
            <h1 class="title wow fadeInUp" data-wow-delay="0.0s">Dashboard</h1>
            <div class="breadcrumb-text">
                <nav aria-label="breadcrumb" class="breadcrumb-nav wow fadeInUp" data-wow-delay="0.1s">
                    <ul class="breadcrumb listing">
                        <li class="breadcrumb-item single-list"><a href="{{ route('homepage') }}" class="single">Home</a></li>
                        <li class="breadcrumb-item single-list" aria-current="page"><a href="javascript:void(0)"
                                class="single active">Dashboard</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>
    <!--/ End-of Breadcrumbs-->

    <!-- Dashboard area S t a r t -->
    <section class="destination-section bottom-padding1">
        <div class="destination-area">
            <div class="container">
                <div class="row g-4">
                    

                    
                    <div class="col-lg-4 col-sm-6">
                        <div class="destination-offer-three h-calc">
                            <div class="destination-content-offer">
                                <span class="highlights"></span>
                                <h4 class="title">Total Booking Count</h4>
                                <a href="payment.html" class="btn-secondary-sm radius-30">Check Booking</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="destination-offer-three h-calc">
                            <div class="destination-content-offer">
                                <span class="highlights"></span>
                                <h4 class="title">Total Tout <br> Type</h4>
                                <a href="payment.html" class="btn-secondary-sm radius-30">Check Tour Type</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="destination-offer-three h-calc">
                            <div class="destination-content-offer">
                                <span class="highlights"></span>
                                <h4 class="title">Total Packages <br> count</h4>
                                <a href="payment.html" class="btn-secondary-sm radius-30">Check Total Package</a>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

    <!--/ End-of Dashboard-->

    <!-- Map -->
    <iframe class="map-frame"
        src="https://www.google.com/maps/embed/v1/place?q=USA,+Turkish%20&amp;key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"
        height="500" style="border: 15px" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade">
    </iframe>
    <!-- / Map -->
</main>

@endsection