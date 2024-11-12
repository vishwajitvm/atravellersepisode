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

    <meta name="{{ empty($metakeywordname)?"AtravellersEpisode":$metakeywordname }}" content="{{ empty($metakeywordContent)?"AtravellersEpisode":$metakeywordContent }}"> <!--keywords-->
    <meta name=" {{ empty($metaDescriptionName)?"AtravellersEpisode":$metaDescriptionName }} " content="{{ empty($metaDescriptionContent)?"AtravellersEpisode":$metaDescriptionContent }} " />  

    <meta name="AtravellersEpisode" content="AtravellersEpisode">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:type" content="website">
    <meta property="og:title" content="AtravellersEpisode Multipurpose travel and tour booking">
    <meta property="og:AtravellersEpisode" content="AtravellersEpisode">
    
    <meta property="og:description" content="AtravellersEpisode Multipurpose travel and tour booking, multipurpose template">
    <meta name="twitter:AtravellersEpisode name" content="AtravellersEpisode Multipurpose travel and tour booking">
    <meta name="twitter:AtravellersEpisode description" content="Multipurpose travel and tour booking, multipurpose template">
    <meta name="twitter:image" content="https://twitter.com/inittheme/photo">
    <meta name="twitter:card" content="summary">
    <!-- Google site verification -->
    <meta name="google-site-verification" content="...">
    <meta name="facebook-domain-verification" content="...">
    <meta name="csrf-token" content="...">
    <!-- Title -->
    <title>AtravellersEpisode - {{ empty($title)? "": $title }}</title>
    <link rel="icon" type="image/x-icon" sizes="20x20" href="{{asset('frontend/assets/images/icon/logo.png')}}">
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
    
    <!--main header start-->
    @include('website.body.header')
    <!--main header end-->

     <!--yeielding data here-->
    @yield('websitespages')
    <!--yeielding data here-->

    <!-- Footer S t a r t -->
    @include('website.body.footer')
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