@extends('website.websitemaster')
@section('websitespages')
<!--META DATA-->
@php
        //meta keywords
        $title = "Tour & Travel" ;
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
            <h1 class="title wow fadeInUp" data-wow-delay="0.0s">Tour List</h1>
            <div class="breadcrumb-text">
                <nav aria-label="breadcrumb" class="breadcrumb-nav wow fadeInUp" data-wow-delay="0.1s">
                    <ul class="breadcrumb listing">
                        <li class="breadcrumb-item single-list"><a href="{{ route('homepage') }}" class="single">Home</a></li>
                        <li class="breadcrumb-item single-list" aria-current="page"><a href="javascript:void(0)"
                                class="single active">Tour List</a></li>
                    </ul>
                </nav>
            </div>
        </div>

    </section>
    <!--/ End-of Breadcrumbs-->

    <!-- Destination area S t a r t -->
    <section class="tour-list-section section-padding2">
        <div class="container">
            <div class="row g-4">
                <div class="col-xl-3">
                    <div class="search-filter-section">
                        <div class="expand-icon close-btn block d-xl-none">
                            <i class="ri-arrow-left-double-line"></i>
                        </div>
                        <div class="heading">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <path
                                    d="M3 7H10M10 7C10 8.65685 11.3431 10 13 10H14C15.6569 10 17 8.65685 17 7C17 5.34315 15.6569 4 14 4H13C11.3431 4 10 5.34315 10 7ZM16 17H21M20 7H21M3 17H6M6 17C6 18.6569 7.34315 20 9 20H10C11.6569 20 13 18.6569 13 17C13 15.3431 11.6569 14 10 14H9C7.34315 14 6 15.3431 6 17Z"
                                    stroke="#071516" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                            <h4 class="title">Search By Filter</h4>
                        </div>
                        <div class="tour-search">
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
                            <div class="dropdown-section">
                                <div class="d-flex gap-10 align-items-center">
                                    <i class="dropdown-icon ri-time-line"></i>
                                    <div class="custom-dropdown custom-date">
                                        <h4 class="title">Date From</h4>
                                        <div class="arrow">
                                            <i class="ri-arrow-down-s-line"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="date-result">01/12/2023</div>
                            </div>
                            <div class="dropdown-section position-relative user-picker-dropdown">
                                <div class="d-flex gap-10 align-items-center">
                                    <i class="dropdown-icon ri-user-line"></i>
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
                                            <button class="qty-btn-plus ml-1" type="button">
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
                                            <button class="qty-btn-plus ml-1" type="button">
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
                        </div>
                        <div class="heading">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <path
                                    d="M13.656 5.33333C14.3532 5.334 15.0217 5.60357 15.5147 6.08289C16.0078 6.56222 16.285 7.21213 16.2857 7.89C16.2857 8.11101 16.376 8.32298 16.5368 8.47926C16.6975 8.63554 16.9155 8.72333 17.1429 8.72333C17.3702 8.72333 17.5882 8.63554 17.7489 8.47926C17.9097 8.32298 18 8.11101 18 7.89V7.83333C18 7.8175 18 7.80333 18 7.7875C17.9714 6.68561 17.5013 5.63815 16.6898 4.86838C15.8783 4.09861 14.7897 3.6674 13.656 3.66667H12.8571V2.83333C12.8571 2.61232 12.7668 2.40036 12.6061 2.24408C12.4453 2.0878 12.2273 2 12 2C11.7727 2 11.5547 2.0878 11.3939 2.24408C11.2332 2.40036 11.1429 2.61232 11.1429 2.83333V3.66667H10.344C9.31313 3.66774 8.31625 4.02519 7.53154 4.67515C6.74683 5.3251 6.22544 6.22519 6.06056 7.21452C5.89568 8.20385 6.09807 9.21795 6.63154 10.0755C7.16501 10.9331 7.99479 11.5784 8.97257 11.8958L11.1429 12.6V18.6667H10.344C9.64677 18.666 8.97828 18.3964 8.48526 17.9171C7.99224 17.4378 7.71497 16.7879 7.71429 16.11C7.71429 15.889 7.62398 15.677 7.46323 15.5207C7.30249 15.3645 7.08447 15.2767 6.85714 15.2767C6.62981 15.2767 6.4118 15.3645 6.25105 15.5207C6.09031 15.677 6 15.889 6 16.11V16.1667C6 16.1825 6 16.1967 6 16.2125C6.02861 17.3144 6.49874 18.3618 7.3102 19.1316C8.12166 19.9014 9.21026 20.3326 10.344 20.3333H11.1429V21.1667C11.1429 21.3877 11.2332 21.5996 11.3939 21.7559C11.5547 21.9122 11.7727 22 12 22C12.2273 22 12.4453 21.9122 12.6061 21.7559C12.7668 21.5996 12.8571 21.3877 12.8571 21.1667V20.3333H13.656C14.6869 20.3323 15.6838 19.9748 16.4685 19.3249C17.2532 18.6749 17.7746 17.7748 17.9394 16.7855C18.1043 15.7961 17.9019 14.7821 17.3685 13.9245C16.835 13.0669 16.0052 12.4216 15.0274 12.1042L12.8571 11.4V5.33333H13.656ZM14.4874 13.6842C15.0801 13.8759 15.5832 14.2665 15.9066 14.786C16.2301 15.3055 16.3528 15.92 16.2527 16.5194C16.1527 17.1189 15.8365 17.6641 15.3607 18.0575C14.8849 18.451 14.2806 18.6669 13.656 18.6667H12.8571V13.1558L14.4874 13.6842ZM11.1429 10.8442L9.51429 10.3158C8.92178 10.1241 8.41878 9.73364 8.09532 9.21432C7.77185 8.695 7.64903 8.08071 7.74883 7.4814C7.84863 6.88208 8.16454 6.33685 8.64003 5.94329C9.11551 5.54972 9.71953 5.3335 10.344 5.33333H11.1429V10.8442Z"
                                    fill="#071516" />
                            </svg>
                            <h4 class="title">Filter By Price</h4>
                        </div>
                        <div class="price-range-slider">
                            <div id="slider-range" class="range-bar"></div>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="range-value">
                                    <p class="pera">price: </p> <input type="text" id="amount" readonly>
                                    <div class="button-section">
                                        <a href="javascript:void(0)" class="apply-btn">Apply</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="heading">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                                fill="none">
                                <path
                                    d="M19.8598 7.40725C19.6893 6.84671 19.3487 6.35773 18.8883 6.01261C18.4279 5.66749 17.8723 5.48456 17.3035 5.49087H13.662L12.5559 1.93016C12.382 1.36968 12.0402 0.88073 11.5799 0.533829C11.1196 0.186928 10.5645 0 9.99465 0C9.42482 0 8.86972 0.186928 8.40939 0.533829C7.94905 0.88073 7.60728 1.36968 7.43335 1.93016L6.32732 5.49087H2.68582C2.11884 5.49171 1.56661 5.67759 1.10802 6.02197C0.649428 6.36635 0.307926 6.85161 0.132295 7.40845C-0.0433363 7.96528 -0.0441136 8.5652 0.130074 9.12251C0.304262 9.67983 0.644504 10.166 1.1022 10.5117L4.06607 12.75L2.9392 16.3547C2.7571 16.9137 2.75479 17.5186 2.93263 18.0791C3.11046 18.6397 3.45892 19.1258 3.92605 19.4651C4.38517 19.8153 4.94156 20.0029 5.5123 20C6.08303 19.997 6.63757 19.8037 7.09329 19.4488L9.99465 17.2431L12.8968 19.4462C13.3551 19.7944 13.9085 19.9835 14.4774 19.9863C15.0464 19.9892 15.6015 19.8057 16.0631 19.4621C16.5246 19.1185 16.8688 18.6326 17.0462 18.0743C17.2235 17.5159 17.2249 16.9139 17.0501 16.3547L15.9232 12.75L18.8904 10.5117C19.3534 10.1704 19.6976 9.68417 19.8722 9.12506C20.0468 8.56594 20.0424 7.96362 19.8598 7.40725ZM17.9069 9.12132L14.453 11.729C14.3111 11.8359 14.2055 11.9863 14.1513 12.1589C14.0972 12.3314 14.0971 12.5172 14.1512 12.6898L15.464 16.8824C15.5304 17.095 15.5298 17.324 15.4624 17.5363C15.3949 17.7486 15.264 17.9333 15.0884 18.0639C14.9129 18.1945 14.7018 18.2642 14.4855 18.2631C14.2691 18.2619 14.0587 18.19 13.8845 18.0575L10.4881 15.4748C10.345 15.3663 10.1721 15.3077 9.99465 15.3077C9.81715 15.3077 9.64428 15.3663 9.50122 15.4748L6.10478 18.0575C5.93065 18.1918 5.71965 18.2652 5.50239 18.2672C5.28512 18.2693 5.07287 18.1998 4.89641 18.0688C4.71996 17.9379 4.58846 17.7523 4.52099 17.539C4.45351 17.3257 4.45357 17.0957 4.52116 16.8824L5.83806 12.6898C5.89217 12.5172 5.89213 12.3314 5.83795 12.1589C5.78376 11.9863 5.67821 11.8359 5.53634 11.729L2.08238 9.12132C1.90844 8.98977 1.77919 8.8048 1.7131 8.59284C1.64701 8.38089 1.64746 8.15277 1.71438 7.9411C1.78131 7.72942 1.91129 7.545 2.08575 7.41418C2.26021 7.28337 2.47024 7.21284 2.68582 7.21269H6.93659C7.11306 7.21268 7.28496 7.15483 7.42756 7.04746C7.57015 6.94009 7.67607 6.78874 7.73007 6.61522L9.02197 2.45618C9.08829 2.24335 9.21827 2.05774 9.39321 1.92607C9.56815 1.7944 9.77902 1.72346 9.99548 1.72346C10.2119 1.72346 10.4228 1.7944 10.5978 1.92607C10.7727 2.05774 10.9027 2.24335 10.969 2.45618L12.2609 6.61522C12.3149 6.78874 12.4208 6.94009 12.5634 7.04746C12.706 7.15483 12.8779 7.21268 13.0544 7.21269H17.3051C17.5207 7.21284 17.7308 7.28337 17.9052 7.41418C18.0797 7.545 18.2097 7.72942 18.2766 7.9411C18.3435 8.15277 18.344 8.38089 18.2779 8.59284C18.2118 8.8048 18.0825 8.98977 17.9086 9.12132H17.9069Z"
                                    fill="#071516" />
                            </svg>
                            <h4 class="title">Traveler Rating</h4>
                        </div>
                        <div class="ratting-section">
                            <div class="ratting-checkbox">
                                <input type="checkbox" id="1">
                                <div>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="13"
                                            viewBox="0 0 14 13" fill="none">
                                            <path
                                                d="M6.09749 0.891366C6.45972 0.132244 7.54028 0.132244 7.90251 0.891366L9.07038 3.33882C9.21616 3.64433 9.5066 3.85534 9.84221 3.89958L12.5308 4.25399C13.3647 4.36391 13.6986 5.39158 13.0885 5.97067L11.1218 7.83768C10.8763 8.07073 10.7653 8.41217 10.827 8.74502L11.3207 11.4115C11.4739 12.2386 10.5997 12.8737 9.86041 12.4725L7.47702 11.1789C7.1795 11.0174 6.8205 11.0174 6.52298 11.1789L4.13959 12.4725C3.40033 12.8737 2.52614 12.2386 2.67929 11.4115L3.17304 8.74502C3.23467 8.41217 3.12373 8.07073 2.87823 7.83768L0.911452 5.97067C0.301421 5.39158 0.635332 4.36391 1.46924 4.25399L4.15779 3.89958C4.4934 3.85534 4.78384 3.64433 4.92962 3.33882L6.09749 0.891366Z"
                                                fill="#FFB400" />
                                        </svg>
                                        1
                                    </span>
                                </div>
                            </div>
                            <div class="ratting-checkbox">
                                <input type="checkbox" id="2">
                                <div>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="13"
                                            viewBox="0 0 14 13" fill="none">
                                            <path
                                                d="M6.09749 0.891366C6.45972 0.132244 7.54028 0.132244 7.90251 0.891366L9.07038 3.33882C9.21616 3.64433 9.5066 3.85534 9.84221 3.89958L12.5308 4.25399C13.3647 4.36391 13.6986 5.39158 13.0885 5.97067L11.1218 7.83768C10.8763 8.07073 10.7653 8.41217 10.827 8.74502L11.3207 11.4115C11.4739 12.2386 10.5997 12.8737 9.86041 12.4725L7.47702 11.1789C7.1795 11.0174 6.8205 11.0174 6.52298 11.1789L4.13959 12.4725C3.40033 12.8737 2.52614 12.2386 2.67929 11.4115L3.17304 8.74502C3.23467 8.41217 3.12373 8.07073 2.87823 7.83768L0.911452 5.97067C0.301421 5.39158 0.635332 4.36391 1.46924 4.25399L4.15779 3.89958C4.4934 3.85534 4.78384 3.64433 4.92962 3.33882L6.09749 0.891366Z"
                                                fill="#FFB400" />
                                        </svg>
                                        2
                                    </span>
                                </div>
                            </div>
                            <div class="ratting-checkbox">
                                <input type="checkbox" id="3">
                                <div>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="13"
                                            viewBox="0 0 14 13" fill="none">
                                            <path
                                                d="M6.09749 0.891366C6.45972 0.132244 7.54028 0.132244 7.90251 0.891366L9.07038 3.33882C9.21616 3.64433 9.5066 3.85534 9.84221 3.89958L12.5308 4.25399C13.3647 4.36391 13.6986 5.39158 13.0885 5.97067L11.1218 7.83768C10.8763 8.07073 10.7653 8.41217 10.827 8.74502L11.3207 11.4115C11.4739 12.2386 10.5997 12.8737 9.86041 12.4725L7.47702 11.1789C7.1795 11.0174 6.8205 11.0174 6.52298 11.1789L4.13959 12.4725C3.40033 12.8737 2.52614 12.2386 2.67929 11.4115L3.17304 8.74502C3.23467 8.41217 3.12373 8.07073 2.87823 7.83768L0.911452 5.97067C0.301421 5.39158 0.635332 4.36391 1.46924 4.25399L4.15779 3.89958C4.4934 3.85534 4.78384 3.64433 4.92962 3.33882L6.09749 0.891366Z"
                                                fill="#FFB400" />
                                        </svg>
                                        3
                                    </span>
                                </div>
                            </div>
                            <div class="ratting-checkbox">
                                <input type="checkbox" id="4" checked>
                                <div>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="13"
                                            viewBox="0 0 14 13" fill="none">
                                            <path
                                                d="M6.09749 0.891366C6.45972 0.132244 7.54028 0.132244 7.90251 0.891366L9.07038 3.33882C9.21616 3.64433 9.5066 3.85534 9.84221 3.89958L12.5308 4.25399C13.3647 4.36391 13.6986 5.39158 13.0885 5.97067L11.1218 7.83768C10.8763 8.07073 10.7653 8.41217 10.827 8.74502L11.3207 11.4115C11.4739 12.2386 10.5997 12.8737 9.86041 12.4725L7.47702 11.1789C7.1795 11.0174 6.8205 11.0174 6.52298 11.1789L4.13959 12.4725C3.40033 12.8737 2.52614 12.2386 2.67929 11.4115L3.17304 8.74502C3.23467 8.41217 3.12373 8.07073 2.87823 7.83768L0.911452 5.97067C0.301421 5.39158 0.635332 4.36391 1.46924 4.25399L4.15779 3.89958C4.4934 3.85534 4.78384 3.64433 4.92962 3.33882L6.09749 0.891366Z"
                                                fill="#FFB400" />
                                        </svg>
                                        4
                                    </span>
                                </div>
                            </div>
                            <div class="ratting-checkbox">
                                <input type="checkbox" id="5">
                                <div>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="13"
                                            viewBox="0 0 14 13" fill="none">
                                            <path
                                                d="M6.09749 0.891366C6.45972 0.132244 7.54028 0.132244 7.90251 0.891366L9.07038 3.33882C9.21616 3.64433 9.5066 3.85534 9.84221 3.89958L12.5308 4.25399C13.3647 4.36391 13.6986 5.39158 13.0885 5.97067L11.1218 7.83768C10.8763 8.07073 10.7653 8.41217 10.827 8.74502L11.3207 11.4115C11.4739 12.2386 10.5997 12.8737 9.86041 12.4725L7.47702 11.1789C7.1795 11.0174 6.8205 11.0174 6.52298 11.1789L4.13959 12.4725C3.40033 12.8737 2.52614 12.2386 2.67929 11.4115L3.17304 8.74502C3.23467 8.41217 3.12373 8.07073 2.87823 7.83768L0.911452 5.97067C0.301421 5.39158 0.635332 4.36391 1.46924 4.25399L4.15779 3.89958C4.4934 3.85534 4.78384 3.64433 4.92962 3.33882L6.09749 0.891366Z"
                                                fill="#FFB400" />
                                        </svg>
                                        5
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="heading">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <path
                                    d="M15.5556 2H15.44C15.0422 2.00354 14.6569 2.13084 14.3446 2.36192C14.0323 2.59299 13.8108 2.91474 13.7147 3.27667C13.6118 3.62903 13.3882 3.93994 13.0784 4.16155C12.7686 4.38316 12.3897 4.5032 12 4.5032C11.6103 4.5032 11.2314 4.38316 10.9216 4.16155C10.6118 3.93994 10.3882 3.62903 10.2853 3.27667C10.1892 2.91474 9.96766 2.59299 9.65538 2.36192C9.3431 2.13084 8.95781 2.00354 8.56 2H8.44444C7.26614 2.00132 6.1365 2.44073 5.30331 3.22185C4.47012 4.00296 4.00141 5.062 4 6.16667V19.5C4 20.163 4.28095 20.7989 4.78105 21.2678C5.28115 21.7366 5.95942 22 6.66667 22H8.56C8.95781 21.9965 9.3431 21.8692 9.65538 21.6381C9.96766 21.407 10.1892 21.0853 10.2853 20.7233C10.3882 20.371 10.6118 20.0601 10.9216 19.8385C11.2314 19.6168 11.6103 19.4968 12 19.4968C12.3897 19.4968 12.7686 19.6168 13.0784 19.8385C13.3882 20.0601 13.6118 20.371 13.7147 20.7233C13.8108 21.0853 14.0323 21.407 14.3446 21.6381C14.6569 21.8692 15.0422 21.9965 15.44 22H17.3333C18.0406 22 18.7189 21.7366 19.219 21.2678C19.719 20.7989 20 20.163 20 19.5V6.16667C19.9986 5.062 19.5299 4.00296 18.6967 3.22185C17.8635 2.44073 16.7339 2.00132 15.5556 2V2ZM17.3333 20.3333L15.4284 20.2808C15.2197 19.5737 14.7678 18.9509 14.143 18.509C13.5182 18.0671 12.7554 17.8308 11.9727 17.8368C11.1901 17.8428 10.4315 18.0907 9.81442 18.5421C9.19738 18.9934 8.75645 19.6231 8.56 20.3333H6.66667C6.43092 20.3333 6.20483 20.2455 6.03813 20.0893C5.87143 19.933 5.77778 19.721 5.77778 19.5V16.1667H7.55556C7.7913 16.1667 8.0174 16.0789 8.18409 15.9226C8.35079 15.7663 8.44444 15.5543 8.44444 15.3333C8.44444 15.1123 8.35079 14.9004 8.18409 14.7441C8.0174 14.5878 7.7913 14.5 7.55556 14.5H5.77778V6.16667C5.77778 5.50363 6.05873 4.86774 6.55883 4.3989C7.05892 3.93006 7.7372 3.66667 8.44444 3.66667L8.57156 3.71917C8.77975 4.42202 9.22755 5.0417 9.84659 5.48363C10.4656 5.92555 11.2219 6.16543 12 6.16667C12.7886 6.16038 13.5534 5.91275 14.178 5.46147C14.8027 5.01019 15.253 4.37995 15.4604 3.66667H15.5556C16.2628 3.66667 16.9411 3.93006 17.4412 4.3989C17.9413 4.86774 18.2222 5.50363 18.2222 6.16667V14.5H16.4444C16.2087 14.5 15.9826 14.5878 15.8159 14.7441C15.6492 14.9004 15.5556 15.1123 15.5556 15.3333C15.5556 15.5543 15.6492 15.7663 15.8159 15.9226C15.9826 16.0789 16.2087 16.1667 16.4444 16.1667H18.2222V19.5C18.2222 19.721 18.1286 19.933 17.9619 20.0893C17.7952 20.2455 17.5691 20.3333 17.3333 20.3333Z"
                                    fill="#071516" />
                            </svg>
                            <h4 class="title">Special Offers</h4>
                        </div>
                        <div class="offer-list">
                            <div class="d-flex align-items-center gap-12 mb-12">
                                <label class="checkbox-label">
                                    <input class="checkbox-style" type="checkbox" value="remember" name="remember">
                                    <span class="checkmark-style"></span>
                                </label>
                                <div class="content">
                                    <p class="pera">Likely to Sell Out</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-12">
                                <label class="checkbox-label">
                                    <input class="checkbox-style" type="checkbox" value="remember" name="remember">
                                    <span class="checkmark-style"></span>
                                </label>
                                <div class="content">
                                    <p class="pera">Winter discount</p>
                                </div>
                            </div>
                        </div>
                        <div class="heading">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <path
                                    d="M15.5556 2H15.44C15.0422 2.00354 14.6569 2.13084 14.3446 2.36192C14.0323 2.59299 13.8108 2.91474 13.7147 3.27667C13.6118 3.62903 13.3882 3.93994 13.0784 4.16155C12.7686 4.38316 12.3897 4.5032 12 4.5032C11.6103 4.5032 11.2314 4.38316 10.9216 4.16155C10.6118 3.93994 10.3882 3.62903 10.2853 3.27667C10.1892 2.91474 9.96766 2.59299 9.65538 2.36192C9.3431 2.13084 8.95781 2.00354 8.56 2H8.44444C7.26614 2.00132 6.1365 2.44073 5.30331 3.22185C4.47012 4.00296 4.00141 5.062 4 6.16667V19.5C4 20.163 4.28095 20.7989 4.78105 21.2678C5.28115 21.7366 5.95942 22 6.66667 22H8.56C8.95781 21.9965 9.3431 21.8692 9.65538 21.6381C9.96766 21.407 10.1892 21.0853 10.2853 20.7233C10.3882 20.371 10.6118 20.0601 10.9216 19.8385C11.2314 19.6168 11.6103 19.4968 12 19.4968C12.3897 19.4968 12.7686 19.6168 13.0784 19.8385C13.3882 20.0601 13.6118 20.371 13.7147 20.7233C13.8108 21.0853 14.0323 21.407 14.3446 21.6381C14.6569 21.8692 15.0422 21.9965 15.44 22H17.3333C18.0406 22 18.7189 21.7366 19.219 21.2678C19.719 20.7989 20 20.163 20 19.5V6.16667C19.9986 5.062 19.5299 4.00296 18.6967 3.22185C17.8635 2.44073 16.7339 2.00132 15.5556 2V2ZM17.3333 20.3333L15.4284 20.2808C15.2197 19.5737 14.7678 18.9509 14.143 18.509C13.5182 18.0671 12.7554 17.8308 11.9727 17.8368C11.1901 17.8428 10.4315 18.0907 9.81442 18.5421C9.19738 18.9934 8.75645 19.6231 8.56 20.3333H6.66667C6.43092 20.3333 6.20483 20.2455 6.03813 20.0893C5.87143 19.933 5.77778 19.721 5.77778 19.5V16.1667H7.55556C7.7913 16.1667 8.0174 16.0789 8.18409 15.9226C8.35079 15.7663 8.44444 15.5543 8.44444 15.3333C8.44444 15.1123 8.35079 14.9004 8.18409 14.7441C8.0174 14.5878 7.7913 14.5 7.55556 14.5H5.77778V6.16667C5.77778 5.50363 6.05873 4.86774 6.55883 4.3989C7.05892 3.93006 7.7372 3.66667 8.44444 3.66667L8.57156 3.71917C8.77975 4.42202 9.22755 5.0417 9.84659 5.48363C10.4656 5.92555 11.2219 6.16543 12 6.16667C12.7886 6.16038 13.5534 5.91275 14.178 5.46147C14.8027 5.01019 15.253 4.37995 15.4604 3.66667H15.5556C16.2628 3.66667 16.9411 3.93006 17.4412 4.3989C17.9413 4.86774 18.2222 5.50363 18.2222 6.16667V14.5H16.4444C16.2087 14.5 15.9826 14.5878 15.8159 14.7441C15.6492 14.9004 15.5556 15.1123 15.5556 15.3333C15.5556 15.5543 15.6492 15.7663 15.8159 15.9226C15.9826 16.0789 16.2087 16.1667 16.4444 16.1667H18.2222V19.5C18.2222 19.721 18.1286 19.933 17.9619 20.0893C17.7952 20.2455 17.5691 20.3333 17.3333 20.3333Z"
                                    fill="#071516" />
                            </svg>
                            <h4 class="title">Languages</h4>
                        </div>
                        <div class="offer-list">
                            <div class="d-flex align-items-center gap-12 mb-12">
                                <label class="checkbox-label">
                                    <input class="checkbox-style" type="checkbox" value="remember" name="remember">
                                    <span class="checkmark-style"></span>
                                </label>
                                <div class="content">
                                    <p class="pera">English</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-12 mb-12">
                                <label class="checkbox-label">
                                    <input class="checkbox-style" type="checkbox" value="remember" name="remember">
                                    <span class="checkmark-style"></span>
                                </label>
                                <div class="content">
                                    <p class="pera">Spanish</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-12 mb-12">
                                <label class="checkbox-label">
                                    <input class="checkbox-style" type="checkbox" value="remember" name="remember">
                                    <span class="checkmark-style"></span>
                                </label>
                                <div class="content">
                                    <p class="pera">French</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-12">
                                <label class="checkbox-label">
                                    <input class="checkbox-style" type="checkbox" value="remember" name="remember">
                                    <span class="checkmark-style"></span>
                                </label>
                                <div class="content">
                                    <p class="pera">Bangla</p>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="cover"></div>
                </div>
                <div class="col-xl-9">
                    <div class="showing-result">
                        <h4 class="title">Showing 6 of 10 Results</h4>
                        <div class="d-flex gap-10 align-items-center">
                            <div class="expand-icon hamburger block d-xl-none" id="hamburger">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <path
                                        d="M3 7H10M10 7C10 8.65685 11.3431 10 13 10H14C15.6569 10 17 8.65685 17 7C17 5.34315 15.6569 4 14 4H13C11.3431 4 10 5.34315 10 7ZM16 17H21M20 7H21M3 17H6M6 17C6 18.6569 7.34315 20 9 20H10C11.6569 20 13 18.6569 13 17C13 15.3431 11.6569 14 10 14H9C7.34315 14 6 15.3431 6 17Z"
                                        stroke="#071516" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div class="sorting-dropdown">
                                <select class="select2">
                                    <option value="popular"> Sort by Popular</option>
                                    <option value="low">Price low to high</option>
                                    <option value="high">Price high to low</option>
                                    <option value="new">Sort by Newset</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="all-tour-list">
                        <div class="row g-4">
                            <div class="col-xl-4 col-lg-4 col-sm-6">
                                <div class="package-card">
                                    <div class="package-img imgEffect4">
                                        <a href="{{ route('tour.kedarnath') }}">
                                            <img src="frontend/assets/images/package/package-4.png" alt="travello">
                                        </a>
                                        <div class="image-badge">
                                            <p class="pera">Featured</p>
                                        </div>
                                    </div>
                                    <div class="package-content">
                                        <h4 class="area-name">
                                            <a href="{{ route('tour.kedarnath') }}">Kedarnath Yatra</a>
                                        </h4>
                                        <div class="location">
                                            <i class="ri-map-pin-line"></i>
                                            <div class="name">Rudrapryag, Uttrakhand</div>
                                        </div>
                                        <div class="packages-person">
                                            <div class="count">
                                                <i class="ri-time-line"></i>
                                                <p class="pera">5 Days 4 Night</p>
                                            </div>
                                            <div class="count">
                                                <i class="ri-user-line"></i>
                                                <p class="pera">1 Person</p>
                                            </div>
                                        </div>
                                        <div class="price-review">
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
                            <div class="col-xl-4 col-lg-4 col-sm-6">
                                <div class="package-card">
                                    <div class="package-img imgEffect4">
                                        <a href="{{ route('tour.kuari-pass') }}">
                                            <img src="frontend/assets/images/package/package-3.png" alt="travello">
                                        </a>
                                        <div class="image-badge">
                                            <p class="pera">Featured</p>
                                        </div>
                                    </div>
                                    <div class="package-content">
                                        <h4 class="area-name">
                                            <a href="{{ route('tour.kuari-pass') }}">Kuari Pass, Uttrakahand</a>
                                        </h4>
                                        <div class="location">
                                            <i class="ri-map-pin-line"></i>
                                            <div class="name">Uttrakahand, India</div>
                                        </div>
                                        <div class="packages-person">
                                            <div class="count">
                                                <i class="ri-time-line"></i>
                                                <p class="pera">6 Days 5 Night</p>
                                            </div>
                                            <div class="count">
                                                <i class="ri-user-line"></i>
                                                <p class="pera">1 Person</p>
                                            </div>
                                        </div>
                                        <div class="price-review">
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
                            <div class="col-xl-4 col-lg-4 col-sm-6">
                                <div class="package-card">
                                    <div class="package-img imgEffect4">
                                        <a href="{{ route('tour.kedarkantha') }}">
                                            <img src="frontend/assets/images/package/package-2.png" alt="travello">
                                        </a>
                                        <div class="image-badge">
                                            <p class="pera">Featured</p>
                                        </div>
                                    </div>
                                    <div class="package-content">
                                        <h4 class="area-name">
                                            <a href="{{ route('tour.kedarkantha') }}">Kedarkantha, Uttrakahand</a>
                                        </h4>
                                        <div class="location">
                                            <i class="ri-map-pin-line"></i>
                                            <div class="name">Sankri, Uttrakahand</div>
                                        </div>
                                        <div class="packages-person">
                                            <div class="count">
                                                <i class="ri-time-line"></i>
                                                <p class="pera">5 Days 4 Night</p>
                                            </div>
                                            <div class="count">
                                                <i class="ri-user-line"></i>
                                                <p class="pera">1 Person</p>
                                            </div>
                                        </div>
                                        <div class="price-review">
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
                            <div class="col-xl-4 col-lg-4 col-sm-6">
                                <div class="package-card">
                                    <div class="package-img imgEffect4">
                                        <a href="{{ route('tour.har-ki-dun') }}">
                                            <img src="frontend/assets/images/package/package-10.jpg" alt="travello">
                                        </a>
                                        <div class="image-badge">
                                            <p class="pera">Featured</p>
                                        </div>
                                    </div>
                                    <div class="package-content">
                                        <h4 class="area-name">
                                            <a href="{{ route('tour.har-ki-dun') }}">Har Ki Dun, Uttrakahand</a>
                                        </h4>
                                        <div class="location">
                                            <i class="ri-map-pin-line"></i>
                                            <div class="name">Sankri, Uttrakahand</div>
                                        </div>
                                        <div class="packages-person">
                                            <div class="count">
                                                <i class="ri-time-line"></i>
                                                <p class="pera">7 Days 6 Night</p>
                                            </div>
                                            <div class="count">
                                                <i class="ri-user-line"></i>
                                                <p class="pera">1 Person</p>
                                            </div>
                                        </div>
                                        <div class="price-review">
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
                            <div class="col-xl-4 col-lg-4 col-sm-6">
                                <div class="package-card">
                                    <div class="package-img imgEffect4">
                                        <a href="{{ route('tour.rupin-pass') }}">
                                            <img src="frontend/assets/images/package/package-5.jpg" alt="travello">
                                        </a>
                                        <div class="image-badge">
                                            <p class="pera">Featured</p>
                                        </div>
                                    </div>
                                    <div class="package-content">
                                        <h4 class="area-name">
                                            <a href="{{ route('tour.rupin-pass') }}">Rupin Pass, Uttrakahand</a>
                                        </h4>
                                        <div class="location">
                                            <i class="ri-map-pin-line"></i>
                                            <div class="name">Uttrakahand, India</div>
                                        </div>
                                        <div class="packages-person">
                                            <div class="count">
                                                <i class="ri-time-line"></i>
                                                <p class="pera">6 Days 5 Night</p>
                                            </div>
                                            <div class="count">
                                                <i class="ri-user-line"></i>
                                                <p class="pera">1 Person</p>
                                            </div>
                                        </div>
                                        <div class="price-review">
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
                            <div class="col-xl-4 col-lg-4 col-sm-6">
                                <div class="package-card">
                                    <div class="package-img imgEffect4">
                                        <a href="{{ route('tour.dyara-bugyal') }}">
                                            <img src="frontend/assets/images/package/package-6.jpg" alt="travello">
                                        </a>
                                        <div class="image-badge">
                                            <p class="pera">Featured</p>
                                        </div>
                                    </div>
                                    <div class="package-content">
                                        <h4 class="area-name">
                                            <a href="{{ route('tour.dyara-bugyal') }}">Dyara Bugyal ,Uttrakahand</a>
                                        </h4>
                                        <div class="location">
                                            <i class="ri-map-pin-line"></i>
                                            <div class="name">Dyara Bugyal, Uttrakahand</div>
                                        </div>
                                        <div class="packages-person">
                                            <div class="count">
                                                <i class="ri-time-line"></i>
                                                <p class="pera">3 Days 2 Night</p>
                                            </div>
                                            <div class="count">
                                                <i class="ri-user-line"></i>
                                                <p class="pera">1 Person</p>
                                            </div>
                                        </div>
                                        <div class="price-review">
                                            <div class="d-flex gap-10">
                                                <p class="light-pera">From</p>
                                                <p class="pera">12700</p>
                                            </div>
                                            <div class="rating">
                                                <i class="ri-star-s-fill"></i>
                                                <p class="pera">4.7 (20 Reviews)</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-sm-6">
                                <div class="package-card">
                                    <div class="package-img imgEffect4">
                                        <a href="{{ route('tour.nag-tibba') }}">
                                            <img src="frontend/assets/images/package/package-7.jpg" alt="travello">
                                        </a>
                                        <div class="image-badge">
                                            <p class="pera">Featured</p>
                                        </div>
                                    </div>
                                    <div class="package-content">
                                        <h4 class="area-name">
                                            <a href="{{ route('tour.nag-tibba') }}">nag-tibba</a>
                                        </h4>
                                        <div class="location">
                                            <i class="ri-map-pin-line"></i>
                                            <div class="name">nag-tibba</div>
                                        </div>
                                        <div class="packages-person">
                                            <div class="count">
                                                <i class="ri-time-line"></i>
                                                <p class="pera">3 Days 2 Night</p>
                                            </div>
                                            <div class="count">
                                                <i class="ri-user-line"></i>
                                                <p class="pera">1 Person</p>
                                            </div>
                                        </div>
                                        <div class="price-review">
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
                            <div class="col-xl-4 col-lg-4 col-sm-6">
                                <div class="package-card">
                                    <div class="package-img imgEffect4">
                                        <a href="{{ route('tour.bali-pass') }}">
                                            <img src="frontend/assets/images/package/package-8.jpg" alt="travello">
                                        </a>
                                        <div class="image-badge">
                                            <p class="pera">Featured</p>
                                        </div>
                                    </div>
                                    <div class="package-content">
                                        <h4 class="area-name">
                                            <a href="{{ route('tour.bali-pass') }}">bali-pass</a>
                                        </h4>
                                        <div class="location">
                                            <i class="ri-map-pin-line"></i>
                                            <div class="name">bali-pass</div>
                                        </div>
                                        <div class="packages-person">
                                            <div class="count">
                                                <i class="ri-time-line"></i>
                                                <p class="pera">6 Days 5 Night</p>
                                            </div>
                                            <div class="count">
                                                <i class="ri-user-line"></i>
                                                <p class="pera">1 Person</p>
                                            </div>
                                        </div>
                                        <div class="price-review">
                                            <div class="d-flex gap-10">
                                                <p class="light-pera">From</p>
                                                <p class="pera">22,499</p>
                                            </div>
                                            <div class="rating">
                                                <i class="ri-star-s-fill"></i>
                                                <p class="pera">4.7 (20 Reviews)</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-sm-6">
                                <div class="package-card">
                                    <div class="package-img imgEffect4">
                                        <a href="{{ route('tour.bramha-tal') }}">
                                            <img src="frontend/assets/images/package/package-9.jpg" alt="travello">
                                        </a>
                                        <div class="image-badge">
                                            <p class="pera">Featured</p>
                                        </div>
                                    </div>
                                    <div class="package-content">
                                        <h4 class="area-name">
                                            <a href="{{ route('tour.bramha-tal') }}">bramha-tal</a>
                                        </h4>
                                        <div class="location">
                                            <i class="ri-map-pin-line"></i>
                                            <div class="name">bramha-tal</div>
                                        </div>
                                        <div class="packages-person">
                                            <div class="count">
                                                <i class="ri-time-line"></i>
                                                <p class="pera">6 Days 5 Night</p>
                                            </div>
                                            <div class="count">
                                                <i class="ri-user-line"></i>
                                                <p class="pera">1 Person</p>
                                            </div>
                                        </div>
                                        <div class="price-review">
                                            <div class="d-flex gap-10">
                                                <p class="light-pera">From</p>
                                                <p class="pera">11500</p>
                                            </div>
                                            <div class="rating">
                                                <i class="ri-star-s-fill"></i>
                                                <p class="pera">4.7 (20 Reviews)</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-sm-6">
                                <div class="package-card">
                                    <div class="package-img imgEffect4">
                                        <a href="tour-details.html">
                                            <img src="frontend/assets/images/package/package-10.jpg" alt="travello">
                                        </a>
                                        <div class="image-badge">
                                            <p class="pera">Featured</p>
                                        </div>
                                    </div>
                                    <div class="package-content">
                                        <h4 class="area-name">
                                            <a href="tour-details.html">Dusitd2 Samyan Bangkok</a>
                                        </h4>
                                        <div class="location">
                                            <i class="ri-map-pin-line"></i>
                                            <div class="name">Bangkok, Thailand</div>
                                        </div>
                                        <div class="packages-person">
                                            <div class="count">
                                                <i class="ri-time-line"></i>
                                                <p class="pera">3 Days 2 Night</p>
                                            </div>
                                            <div class="count">
                                                <i class="ri-user-line"></i>
                                                <p class="pera">2 Person</p>
                                            </div>
                                        </div>
                                        <div class="price-review">
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
                            <div class="col-xl-4 col-lg-4 col-sm-6">
                                <div class="package-card">
                                    <div class="package-img imgEffect4">
                                        <a href="tour-details.html">
                                            <img src="frontend/assets/images/package/package-11.jpg" alt="travello">
                                        </a>
                                        <div class="image-badge">
                                            <p class="pera">Featured</p>
                                        </div>
                                    </div>
                                    <div class="package-content">
                                        <h4 class="area-name">
                                            <a href="tour-details.html">Dusitd2 Samyan Bangkok</a>
                                        </h4>
                                        <div class="location">
                                            <i class="ri-map-pin-line"></i>
                                            <div class="name">Bangkok, Thailand</div>
                                        </div>
                                        <div class="packages-person">
                                            <div class="count">
                                                <i class="ri-time-line"></i>
                                                <p class="pera">3 Days 2 Night</p>
                                            </div>
                                            <div class="count">
                                                <i class="ri-user-line"></i>
                                                <p class="pera">2 Person</p>
                                            </div>
                                        </div>
                                        <div class="price-review">
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
                            <div class="col-xl-4 col-lg-4 col-sm-6">
                                <div class="package-card">
                                    <div class="package-img imgEffect4">
                                        <a href="tour-details.html">
                                            <img src="frontend/assets/images/package/package-12.jpg" alt="travello">
                                        </a>
                                        <div class="image-badge">
                                            <p class="pera">Featured</p>
                                        </div>
                                    </div>
                                    <div class="package-content">
                                        <h4 class="area-name">
                                            <a href="tour-details.html">Dusitd2 Samyan Bangkok</a>
                                        </h4>
                                        <div class="location">
                                            <i class="ri-map-pin-line"></i>
                                            <div class="name">Bangkok, Thailand</div>
                                        </div>
                                        <div class="packages-person">
                                            <div class="count">
                                                <i class="ri-time-line"></i>
                                                <p class="pera">3 Days 2 Night</p>
                                            </div>
                                            <div class="count">
                                                <i class="ri-user-line"></i>
                                                <p class="pera">2 Person</p>
                                            </div>
                                        </div>
                                        <div class="price-review">
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
                            <div class="col-xl-4 col-lg-4 col-sm-6">
                                <div class="package-card">
                                    <div class="package-img imgEffect4">
                                        <a href="tour-details.html">
                                            <img src="frontend/assets/images/package/package-13.jpg" alt="travello">
                                        </a>
                                        <div class="image-badge">
                                            <p class="pera">Featured</p>
                                        </div>
                                    </div>
                                    <div class="package-content">
                                        <h4 class="area-name">
                                            <a href="tour-details.html">Dusitd2 Samyan Bangkok</a>
                                        </h4>
                                        <div class="location">
                                            <i class="ri-map-pin-line"></i>
                                            <div class="name">Bangkok, Thailand</div>
                                        </div>
                                        <div class="packages-person">
                                            <div class="count">
                                                <i class="ri-time-line"></i>
                                                <p class="pera">3 Days 2 Night</p>
                                            </div>
                                            <div class="count">
                                                <i class="ri-user-line"></i>
                                                <p class="pera">2 Person</p>
                                            </div>
                                        </div>
                                        <div class="price-review">
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
                            <div class="col-xl-4 col-lg-4 col-sm-6">
                                <div class="package-card">
                                    <div class="package-img imgEffect4">
                                        <a href="tour-details.html">
                                            <img src="frontend/assets/images/package/package-14.jpg" alt="travello">
                                        </a>
                                        <div class="image-badge">
                                            <p class="pera">Featured</p>
                                        </div>
                                    </div>
                                    <div class="package-content">
                                        <h4 class="area-name">
                                            <a href="tour-details.html">Dusitd2 Samyan Bangkok</a>
                                        </h4>
                                        <div class="location">
                                            <i class="ri-map-pin-line"></i>
                                            <div class="name">Bangkok, Thailand</div>
                                        </div>
                                        <div class="packages-person">
                                            <div class="count">
                                                <i class="ri-time-line"></i>
                                                <p class="pera">3 Days 2 Night</p>
                                            </div>
                                            <div class="count">
                                                <i class="ri-user-line"></i>
                                                <p class="pera">2 Person</p>
                                            </div>
                                        </div>
                                        <div class="price-review">
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
                            <div class="col-xl-4 col-lg-4 col-sm-6">
                                <div class="package-card">
                                    <div class="package-img imgEffect4">
                                        <a href="tour-details.html">
                                            <img src="frontend/assets/images/package/package-15.jpg" alt="travello">
                                        </a>
                                        <div class="image-badge">
                                            <p class="pera">Featured</p>
                                        </div>
                                    </div>
                                    <div class="package-content">
                                        <h4 class="area-name">
                                            <a href="tour-details.html">Dusitd2 Samyan Bangkok</a>
                                        </h4>
                                        <div class="location">
                                            <i class="ri-map-pin-line"></i>
                                            <div class="name">Bangkok, Thailand</div>
                                        </div>
                                        <div class="packages-person">
                                            <div class="count">
                                                <i class="ri-time-line"></i>
                                                <p class="pera">3 Days 2 Night</p>
                                            </div>
                                            <div class="count">
                                                <i class="ri-user-line"></i>
                                                <p class="pera">2 Person</p>
                                            </div>
                                        </div>
                                        <div class="price-review">
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
                        <div class="row">
                            <div class="col-12 text-center">
                                <div class="section-button d-inline-block">
                                    <a href="javascript:void(0)">
                                        <div class="btn-primary-icon-sm">
                                            <i class="ri-loader-2-line"></i>
                                            <p class="pera">Loading</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End-of Destination -->
</main>

@endsection