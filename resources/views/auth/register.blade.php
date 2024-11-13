@extends('website.websitemaster')
@section('websitespages')
<!--META DATA-->
@php
        //meta keywords
        $title = "Register" ;
        $metakeywordname = "AtravellersEpisode Keywords" ;
        $metakeywordContent = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quo consequatur cum sapiente recusandae fugiat a, error veniam quis? Quos, assumenda." ;

        //meta descriptions
       $metaDescriptionName = "AtravellersEpisode Description" ;
       $metaDescriptionContent = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quo consequatur cum sapiente recusandae fugiat a, error veniam quis? Quos, assumenda." ;
@endphp
<!--META DATA END-->

<main>
    <!-- Login area S t a r t  -->
    <div class="login-area section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10">
                    <div class="login-card">
                        <!-- Logo -->
                        <div class="logo mb-40">
                            <a href="index.html" class="mb-30 d-block">
                                <img src="frontend/assets/images/logo/logo.png" alt="logo" class="changeLogo">
                            </a>
                        </div>
                        <!-- Form -->
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="contact-form mb-24">
                                <label class="contact-label">Name </label>
                                <input class="form-control contact-input" type="text" placeholder="Enter Your Name" id="name" name="name" :value="old('name')" required autofocus autocomplete="name">
                            </div>

                            <div class="contact-form mb-24">
                                <label class="contact-label">Email </label>
                                <input class="form-control contact-input" type="email" placeholder="Email" id="email" name="email" :value="old('email')" required autocomplete="username">
                            </div>

                            <!-- Password -->
                            <div class="position-relative contact-form mb-24">
                                <label class="contact-label">Enter Password</label>
                                <input type="password" class="form-control contact-input password-input"
                                    placeholder="Enter Password" id="password" name="password" required autocomplete="new-password">
                                <i class="toggle-password ri-eye-line"></i>
                            </div>

                            <!-- Password -->
                            <div class="position-relative contact-form mb-24">
                                <label class="contact-label">Confirm Password</label>
                                <input type="password" class="form-control contact-input password-input"
                                id="password_confirmation" placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password">
                                <i class="toggle-password ri-eye-line"></i>
                            </div>

                            {{-- <a href="javascript:void(0)" class="btn-primary-fill justify-content-center w-100">
                                <span class="d-flex justify-content-center gap-6">
                                    <span >Register</span>
                                </span>
                            </a> --}}

                            <button type="submit" class="btn-primary-fill justify-content-center w-100">
                                <span class="d-flex justify-content-center gap-6">
                                    <span >Register</span>
                                </span>
                            </button>
                        </form>

                        <div class="login-footer mb-20">
                            <div class="create-account">
                                <p>
                                    Already have an account?
                                    <a href="{{ route('login') }}">
                                        <span class="text-primary">Login</span>
                                    </a>
                                </p>
                            </div>
                        </div>

                        <div class="sign-with">
                            <p class="text-paragraph">Or Sign in with</p>
                            <ul class="icon-login-section">
                                <li class="icon-login">
                                    <a href="#"><i class="ri-mail-line"></i></a>
                                </li>
                                <li class="icon-login">
                                    <a href="#"><i class="ri-facebook-fill"></i></a>
                                </li>
                                <li class="icon-login">
                                    <a href="#"><i class="ri-twitter-fill"></i></a>
                                </li>
                                <li class="icon-login">
                                    <a href="#"> <i class="ri-linkedin-fill"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End-of Login -->
</main>

@endsection