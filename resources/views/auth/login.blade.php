@extends('website.websitemaster')
@section('websitespages')
<!--META DATA-->
@php
        //meta keywords
        $title = "Login" ;
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
                                <img src="assets/images/logo/logo.png" alt="logo" class="changeLogo">
                            </a>
                        </div>
                        <!-- Form -->
                        @session('status')
                            <div class="mb-4 font-medium text-sm text-green-600">
                                {{ $value }}
                            </div>
                        @endsession
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="position-relative contact-form mb-24">
                                <label class="contact-label">Email </label>
                                <input id="email" class="form-control contact-input" type="text"
                                    placeholder="Enter Your Email" name="email" :value="old('email')" required autofocus autocomplete="username">
                            </div>

                            <div class="contact-form mb-24">
                                <div class="position-relative ">
                                    <div class="d-flex justify-content-between aligin-items-center">
                                        <label class="contact-label">Password</label>
                                        {{-- <a href="forgot-pass.html"><span class="text-primary text-15"> Forgot password? </span></a> --}}
                                    </div>
                                    <input type="password" class="form-control contact-input password-input"
                                    id="password" placeholder="Enter Password"  name="password" required autocomplete="current-password">
                                    <i class="toggle-password ri-eye-line"></i>
                                </div>
                            </div>

                            @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <button type="submit" class="btn-primary-fill justify-content-center w-100">
                    <span class="d-flex justify-content-center gap-6">
                        <span>Login</span>
                    </span>
                </button>

                            {{-- <a href="javascript:void(0)" class="btn-primary-fill justify-content-center w-100">
                                <span class="d-flex justify-content-center gap-6">
                                    <span>Login</span>
                                </span>
                            </a> --}}
                        </form>

                        <div class="login-footer">
                            <div class="create-account">
                                <p>
                                    Don’t have an account?
                                    <a href="{{ route('register') }}">
                                        <span class="text-primary">Register</span>
                                    </a>
                                </p>
                            </div>
                            <a href="javascript:void(0)"
                                class="login-btn d-flex align-items-center justify-content-center gap-10">
                                <img src="frontend/assets/images/icon/google-icon.png" alt="img" class="m-0">
                                <span> login with Google</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End-of Login -->
</main>

@endsection