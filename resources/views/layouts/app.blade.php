<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>She Collection - Fashion & Cosmetics</title>
    <link rel="icon" type="image/png" href="images/media/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Style CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    @livewireStyles
</head>
<body class="cms-index-index index-opt-1">
    <div class="wrapper">
        <!-- HEADER -->
        <header class="site-header header-opt-1 cate-show">
            <!-- header-top -->
            <div class="header-top mobile-hide" style="background-color:#e23737;color:white !important;">
                @livewire('layouts.pc-header-top')
            </div>
            <div class="header-top pc-hide" style="background-color:#e23737;color:white !important;">
                @livewire('layouts.mobile-header')
            </div>
            <!-- header-top -->
            <!-- header-content -->
            <div class="header-content" style="background-color:#F05454;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 nav-left">
                            <!-- logo -->
                            <strong class="logo">
                                <a href="/"><img src="images/media/15.png" height="90" alt="logo"></a>
                            </strong>
                        </div>
                        @livewire('home.search-bar-category')
                        <div class="col-md-3 mobile-hide" style="padding-top:20px">
                            <div class="row">
                                @livewire('layouts.wish-and-cart-counter')
                                @if(auth()->user())
                                <div class="col-md-4" style="padding-top:5px;padding-left: 0px;padding-right: 0px;">
                                    <div style="color:white;font-size:24px;float:left;margin-top:3px;padding-left:5px">
                                        <div style="font-size:14px;margin-top:-3px">Hello, {{ explode(' ', trim(auth()->user()->name))[0] }}!</div>
                                        @livewire('layouts.logout')
                                    </div>
                                </div>
                                @else
                                <div class="col-md-4" style="padding-top:5px;padding-left: 0px;padding-right: 0px;">
                                    <div style="color:white;font-size:24px;float:left;margin-top:3px;padding-left:5px">
                                        <div style="font-size:14px;margin-top:-3px">Hello, Guest!</div>
                                        <div style="font-size:14px;"><a href="login" style="color:white">Login</a> / <a href="register" style="color:white">Register</a></div>
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @livewire('layouts.header-nav')
        </header>
        <main class="site-main">
            {{ $slot }}
        </main>
        
        @livewire('layouts.footer')

        <a href="#" class="back-to-top">
            <i aria-hidden="true" class="fa fa-angle-up"></i>
        </a>
    </div>

    @livewireScripts
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <x-livewire-alert::scripts />
    <!-- jQuery -->    
    <script type="text/javascript" src="{{asset('js/jquery.min.js') }}"></script>
    <!-- sticky -->
    <script type="text/javascript" src="{{asset('js/jquery.sticky.js') }}"></script>
    <!-- OWL CAROUSEL Slider -->    
    <script type="text/javascript" src="{{asset('js/owl.carousel.min.js') }}"></script>
    <!-- Boostrap --> 
    <script type="text/javascript" src="{{asset('js/bootstrap.min.js') }}"></script>
    <!-- Countdown --> 
    <script type="text/javascript" src="{{asset('js/jquery.countdown.min.js') }}"></script>
    <!--jquery Bxslider  -->
    <script type="text/javascript" src="{{asset('js/jquery.bxslider.min.js') }}"></script>
    <!-- actual --> 
    <script type="text/javascript" src="{{asset('js/jquery.actual.min.js') }}"></script>
    <!-- jQuery UI -->
    <script type="text/javascript" src="{{asset('js/jquery-ui.min.js') }}"></script>
    <!-- Chosen jquery-->    
    <script type="text/javascript" src="{{asset('js/chosen.jquery.min.js') }}"></script>
    <!-- parallax jquery--> 
    <script type="text/javascript" src="{{asset('js/jquery.parallax-1.1.3.js') }}"></script>
    <!-- elevatezoom --> 
    <script type="text/javascript" src="{{asset('js/jquery.elevateZoom.min.js') }}"></script>
    <!-- fancybox -->
    <script src="{{asset('js/fancybox/source/jquery.fancybox.pack.js') }}"></script>
    <script src="{{asset('js/fancybox/source/helpers/jquery.fancybox-media.js') }}"></script>
    <script src="{{asset('js/fancybox/source/helpers/jquery.fancybox-thumbs.js') }}"></script>
    <!-- arcticmodal -->
    <script src="{{asset('js/arcticmodal/jquery.arcticmodal.js') }}"></script>
    <!-- Main -->  
    <script type="text/javascript" src="{{asset('js/main.js') }}"></script>
</body>
</html>