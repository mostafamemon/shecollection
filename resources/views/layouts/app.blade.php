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
                <div class="container">
                    <!-- nav-left -->
                    <ul class="nav-left">
                        <li><span><i class="fa fa-envelope-o" style="font-weight:bold" aria-hidden="true"></i> 
                            <span class="header-top-text">Email: support@banglashoppers.com</span>
                        </span></li>
                        <li><span><i class="fa fa-phone" aria-hidden="true"></i>
                            <span class="header-top-text">Hotline: 09666 787 787</span>
                        </span></li>
                    </ul><!-- nav-left -->
                    <!-- nav-right -->
                    <ul class=" nav-right">
                        <li><a href="" class="header-top-text">My Orders</a></li>
                        <li><a href="" class="header-top-text">My Profile</a></li>
                        <li><a href="" class="header-top-text">Contact Us</a></li>
                        <li><a href="" class="header-top-text">
                            <i class="fa fa-facebook-f" style="font-size:16px"></i>&nbsp;&nbsp;
                            <i class="fa fa-youtube-play" style="font-size:14px"></i>&nbsp;&nbsp;
                            <i class="fa fa-instagram" style="font-size:16px"></i>
                        </a></li>
                    </ul><!-- nav-right -->
                </div>
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
        
        <footer class="site-footer footer-opt-3" style="padding-top:20px;text-align:left">
            <div class="footer-content" style="background-image: url(images/media/bg-footer.jpeg);">
                <div class="block-newletter">
                    <div class="container">
                        <div class="block-title">Sign up below for early updates</div>
                        <div class="block-content">
                            <p class="note">You a Client , large or small, and want to participate in this adventure, please
                                send us an email to support@kuteshop.com</p>
                            <form>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Enter Your E-mail Address">
                                    <span class="input-group-btn">
                                            <button class="btn btn-subcribe" type="button"><span>Subcribe</span></button>
                                        </span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="footer-column">
                    <div class="container">
                        <div class="footer-column1">
                            <div class="row">
                                <div class="col-md-3 col-lg-3 col-sm-6">
                                    <h3 class="title">INFORMATION</h3>
                                    <table class="address">
                                        <tr>
                                            <td><i class="fa fa-map-marker" aria-hidden="true"></i></td>
                                            <td>House # 1018 (3rd floor), Road # 09, Avenue # 09, Mirpur DOHS, Dhaka-1216</td>
                                        </tr>
                                        <tr>
                                            <td><i class="fa fa-phone" aria-hidden="true"></i></td>
                                            <td>+880 17223 20532</td>
                                        </tr>
                                        <tr>
                                            <td><i class="fa fa-envelope" aria-hidden="true"></i></td>
                                            <td>support@shecollectionbd.com</td>
                                        </tr>
                                        <tr>
                                            <td><i class="fa fa-mobile" aria-hidden="true"></i></td>
                                            <td>Hotline: +880 17268 76206</td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col-md-3 col-lg-3 col-sm-6">
                                    <h3 class="title">FOLLOW US</h3>
                                    <ul class="links">
                                        <li><a href="">Facebook</a></li>
                                        <li><a href="">Youtube</a></li>
                                        <li><a href="">Instagram</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-3 col-lg-3 col-sm-6">
                                    <h3 class="title">QUICK LINKS</h3>
                                    <ul class="links">
                                        <li><a href="">Login</a></li>
                                        <li><a href="">Register</a></li>
                                        <li><a href="">My Profile</a></li>
                                        <li><a href="">My Orders</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-3 col-lg-3 col-sm-6">
                                    <h3 class="title">INFORMATION</h3>
                                    <ul class="links">
                                        <li><a href="">Privacy Policy</a></li>
                                        <li><a href="">Terms & Conditions</a></li>
                                        <li><a href="">Cancellation & Returns</a></li>
                                        <li><a href="">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="footer-column2">
                            <div class="copyright">
                                Copyright © SheCollection. All Rights Reserved. Developed by <a href="http://3wdevs.com" target="_blank" style="color:#F05454">3wDevs Solution</a>
                            </div>
                            <div class="payment">
                                <img src="images/media/payment-methods/visa-card.png" alt="payment">
                                <img src="images/media/payment-methods/master-card.png" alt="payment">
                                <img src="images/media/payment-methods/american-express.png" alt="payment">
                                <img src="images/media/payment-methods/bkash-payment.png" alt="payment">
                                <img src="images/media/payment-methods/nagad-payment.png" alt="payment">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

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