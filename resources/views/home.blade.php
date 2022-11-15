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
                        <li><a href="" class="header-top-text">Contact Us</a></li>
                        <li><a href="" class="header-top-text">
                            <i class="fa fa-facebook-f" style="font-size:16px"></i>&nbsp;&nbsp;
                            <i class="fa fa-youtube-play" style="font-size:14px"></i>&nbsp;&nbsp;
                            <i class="fa fa-instagram" style="font-size:16px"></i>
                        </a></li>
                    </ul><!-- nav-right -->
                </div>
            </div>
            <div class="header-top pc-hide">
                <div class="container">
                    <div class="row" style="padding-top:5px;padding-bottom:5px">
                        <div style="float:left;padding-top:5px;padding-left: 15px;padding-right: 0px;">
                            <div style="color:white;font-size:18px;">
                                <i class="fa fa-heart-o"></i>
                            </div>
                            <div style="float:left;color:white;float:left;font-size:18px;margin-top:-35px;padding-left:25px">
                                <div class="badge" style="background-color: #F05454">0</div>
                                <div style="font-size:12px;margin-top:-3px">Wishlist</div>
                            </div>
                        </div>

                        <div style="float:left;padding-top:5px;padding-left: 15px;padding-right: 0px;">
                            <div style="color:white;font-size:18px;">
                                <i class="fa fa-opencart"></i>
                            </div>
                            <div style="float:left;color:white;float:left;font-size:18px;margin-top:-35px;padding-left:25px">
                                <div class="badge" style="background-color: #F05454">0</div>
                                <div style="font-size:12px;margin-top:-3px">My Cart</div>
                            </div>
                        </div>

                        <div style="float:right">
                            <div class="dropdown">
                                <div style="color:white;padding-right:10px;padding-top:10px" class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-user"></i> Mostafa Emon
                                </div>

                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="background-color:#fff;line-height:0px;padding-left:10px">
                                    <div style="padding-top:20px"><a class="dropdown-item" href="#">My Profile</a></div>
                                    <hr/>
                                    <div><a class="dropdown-item" href="#">My Orders</a></div>
                                    <hr/>
                                    <div style="padding-bottom:20px"><a class="dropdown-item" href="#">Logout</a></div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- header-top -->
            <!-- header-content -->
            <div class="header-content" style="background-color:#F05454;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 nav-left">
                            <!-- logo -->
                            <strong class="logo">
                                <a href=""><img src="images/media/15.png" height="90" alt="logo"></a>
                            </strong>
                        </div>
                        <div class="col-md-6">
                            <div class="block-search">
                                <div class="form-search">
                                    <form>
                                        <div class="box-group">
                                            <input type="text" class="form-control" placeholder="i'm Searching for...">
                                            <button class="btn btn-search" type="button"><span>search</span></button>
                                        </div>
                                        @php $total_search_bar_category = count($search_bar_categories); $sl = 0; @endphp
                                        @foreach($search_bar_categories as $search_bar_category)
                                            @php $sl = $sl + 1 @endphp
                                            <div class="@if($sl == 1) search-bottom-text @else search-bottom-text-left @endif mobile-hide">{{ $search_bar_category->category_name }}</div>
                                            @if($sl < $total_search_bar_category)
                                            <div class="search-bottom-text-border mobile-hide">&nbsp;</div>
                                            @endif
                                        @endforeach
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mobile-hide">
                            <div class="row">
                                <div class="col-md-4" style="padding-top:5px;padding-left: 15px;padding-right: 0px;">
                                    <div style="color:white;font-size:24px;float:left">
                                        <i class="fa fa-heart-o"></i>
                                    </div>
                                    <div style="color:white;font-size:24px;float:left;margin-top:-15px;padding-left:5px">
                                        <div class="badge" style="background-color: #F05454">0</div>
                                        <div style="font-size:12px;margin-top:-3px">Wishlist</div>
                                    </div>
                                </div>
                                <div class="col-md-4" style="padding-top:5px;padding-left: 0px;padding-right: 0px;">
                                    <div style="color:white;font-size:24px;float:left">
                                        <i class="fa fa-opencart"></i>
                                    </div>
                                    <div style="color:white;font-size:24px;float:left;margin-top:-15px;padding-left:5px">
                                        <div class="badge" style="background-color: #F05454">0</div>
                                        <div style="font-size:12px;margin-top:-3px">My Cart</div>
                                    </div>
                                </div>
                                <div class="col-md-4" style="display:none;padding-top:5px;padding-left: 0px;padding-right: 0px;">
                                    <div style="color:white;font-size:24px;float:left;margin-top:3px;padding-left:5px">
                                        <div style="font-size:11px;margin-top:-3px">Hello Guest!</div>
                                        <div style="font-size:13px;">Login / Register</div>
                                    </div>
                                </div>
                                <div class="col-md-4" style="padding-top:5px;padding-left: 0px;padding-right: 0px;">
                                    <div style="color:white;font-size:24px;float:left;margin-top:3px;padding-left:5px">
                                        <div style="font-size:11px;margin-top:-3px">Hello Mostafa!</div>
                                        <div style="font-size:13px;">My Profile</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- header-content -->
            <!-- header-nav -->
            <div class="header-nav mid-header">
                <div class="container">
                    <div class="box-header-nav">
                        <!-- btn categori mobile -->
                        <span data-action="toggle-nav-cat" class="nav-toggle-menu nav-toggle-cat"><span>Categories</span></span>
                        <!-- btn menu mobile -->
                        <!--categori  -->
                        <div class="block-nav-categori">
                            <div class="block-title">
                                <span><i class="fa fa-th-large" style="font-size:px"></i> Categories</span>
                            </div>
                            <div class="block-content">
                                <div class="clearfix"><span data-action="close-cat" class="close-cate"><span>Categories</span></span></div>
                                <!-- mobile categories -->
                                <ul class="ui-categori">
                                    @php $sl = 0; @endphp
                                    @foreach($categories as $category)
                                    @php 
                                        $sub_categories = get_sub_category($category->id); 
                                        $sl = $sl + 1;
                                    @endphp
                                    <li class="@if(count($sub_categories) > 0) parent @endif @if($sl > 11) cat-link-orther @endif">
                                        <a href="">
                                            <span class="ctg-icon"><i class="fa fa-th-large"></i></span>
                                            <span class="text">&nbsp;&nbsp;{{ $category->category_name }}</span>
                                        </a>
                                        @if(count($sub_categories) > 1)
                                        <span class="toggle-submenu"></span>
                                        <div class="submenu">
                                            <ul class="categori-list clearfix">
                                                <li class="col-sm-3">
                                                    <ul>
                                                    @foreach($sub_categories as $sub_category)
                                                        <li style="padding-top:10px"><a href="">{{ $sub_category->sub_category_name }}</a></li>
                                                    @endforeach
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                        @endif
                                    </li>
                                    @endforeach
                                </ul>
                                <div class="view-all-categori">
                                    <a  class="open-cate btn-view-all">All Categories</a>
                                </div>
                            </div>
                        </div><!--categori  -->
                        <!-- menu -->
                        <div class="block-nav-menu">
                            <div class="clearfix"><span data-action="close-nav" class="close-nav"><span>close</span></span></div>
                            <ul class="ui-menu">
                                <li><a href="#">MAKEUP SHOP</a></li>
                                <li class="parent parent-submenu">
                                    <a > HAIR CARE SHOP  </a>
                                </li>
                                <li class="parent parent-megamenu">
                                    <a >MENS PRODUCT  <span class="label-menu">New</span></a>
                                </li>
                                <li class="parent parent-megamenu">
                                    <a >HOT OFFERS </a>
                                    <span class="toggle-submenu"></span>
                                    <div class="megamenu drop-menu">
                                        <ul>
                                            <li class="col-md-4">
                                                <strong class="title"><a href=""><span>Women's </span></a></strong>
                                                <ul class="list-submenu">
                                                    <li><a href="">Shoes</a></li>
                                                    <li><a href="">Clothing</a></li>
                                                    <li><a href="">Accessories</a></li>
                                                    <li><a href="">Sunglasses</a></li>
                                                </ul>
                                                <strong class="title"><a href=""><span>Women's </span></a></strong>
                                                <ul class="list-submenu">
                                                    <li><a href="">Shoes</a></li>
                                                    <li><a href="">Clothing</a></li>
                                                    <li><a href="">Accessories</a></li>
                                                    <li><a href="">Sunglasses</a></li>
                                                </ul>
                                            </li>
                                            <li class="col-md-4">
                                                <strong class="title"><a href=""><span>Women's </span></a></strong>
                                                <ul class="list-submenu">
                                                    <li><a href="">Shoes</a></li>
                                                    <li><a href="">Clothing</a></li>
                                                    <li><a href="">Accessories</a></li>
                                                    <li><a href="">Sunglasses</a></li>
                                                </ul>
                                                <strong class="title"><a href=""><span>Women's </span></a></strong>
                                                <ul class="list-submenu">
                                                    <li><a href="">Shoes</a></li>
                                                    <li><a href="">Clothing</a></li>
                                                    <li><a href="">Accessories</a></li>
                                                    <li><a href="">Sunglasses</a></li>
                                                </ul>
                                            </li>
                                            <li class="col-md-4">
                                                <strong class="title"><a href=""> <span>Kid's</span></a></strong>
                                                <ul class="list-submenu">
                                                    <li><a href="">Shoes</a></li>
                                                    <li><a href="">Clothing</a></li>
                                                    <li><a href="">Accessories</a></li>
                                                    <li><a href="">Sunglasses</a></li>
                                                </ul>
                                                <strong class="title"><a href=""><span>Women's </span></a></strong>
                                                <ul class="list-submenu">
                                                    <li><a href="">Shoes</a></li>
                                                    <li><a href="">Clothing</a></li>
                                                    <li><a href="">Accessories</a></li>
                                                    <li><a href="">Sunglasses</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="#"> CLEARENSE </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div><!-- header-nav -->
        </header><!-- end HEADER -->        
        <!-- MAIN -->
        <main class="site-main">
            <!--  

            <div class="modal fade popup-newsletter" id="popup-newsletter" tabindex="-1" role="dialog" >
                <div class="modal-dialog" role="document">
                    <div class="modal-content" style="background-image: url(images/media/index1/Popup.jpg);">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <div class="block-newletter">
                            <div class="block-title">signup for our newsletter & promotions</div>
                            <div class="block-content">
                                <p class="text-title">GET <span>50% <span>off</span></span></p>
                                <form>
                                    <label>on your next purchase</label>
                                    <div class="input-group">
                                        <input type="text" placeholder="Enter your email..." class="form-control">
                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-subcribe"><span>Subscribe</span></button>
                                        </span>
                                    </div>
                                </form>
                            </div>
                            <div class="checkbox btn-checkbox">
                                <label>
                                    <input type="checkbox"><span>Dont’s show this popup again!</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
            -->
            <!-- Ctg -->
            <div class="block-section-top block-section-top1">
                <div class="container">
                    <div class="box-section-top">
                        <!-- categori -->
                        <div class="block-nav-categori">
                            <div class="block-title">
                                <span>Categories</span>
                            </div>
                            <div class="block-content">
                                <ul class="ui-categori">
                                    @php $sl = 0; @endphp
                                    @foreach($categories as $category)
                                    @php 
                                        $sub_categories = get_sub_category($category->id); 
                                        $sl = $sl + 1;
                                    @endphp
                                    <li class="@if(count($sub_categories) > 0) parent @endif @if($sl > 11) cat-link-orther @endif">
                                        <a href="">
                                            <span class="ctg-icon"><i class="fa fa-th-large"></i></span>
                                            <span class="text">{{ $category->category_name }}</span>
                                        </a>
                                        <span class="toggle-submenu"></span>
                                        <div class="submenu">
                                            <ul class="categori-list clearfix">
                                                <li class="col-sm-12">
                                                    @foreach($sub_categories as $sub_category)
                                                    <strong class="title"><a href="">{{ $sub_category->sub_category_name }}</a></strong>
                                                    @endforeach
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                                <div class="view-all-categori">
                                    <a  class="open-cate btn-view-all" style="font-weight: bold;">All Categories</a>
                                </div>
                            </div>
                        </div><!-- categori -->
                        <!-- block slide top -->
                        <div class="block-slide-main slide-opt-1">
                            <!-- slide -->
                            <div class="owl-carousel dotsData"
                                data-nav="true" 
                                data-dots="true" 
                                data-margin="0" 
                                data-items='1' 
                                data-autoplayTimeout="700" 
                                data-autoplay="true" 
                                data-loop="true">
                                <div class="item item2" style="background-image: url(images/media/index1/owl-banner/banner-1.jpg);" data-dot="1"></div>
                                <div class="item item1" style="background-image: url(images/media/index1/owl-banner/banner-2.jpg);" data-dot="2"></div>
                                <div class="item item3" style="background-image: url(images/media/index1/owl-banner/banner-3.jpg);" data-dot="3"></div>
                            </div> <!-- slide -->
                        </div><!-- block slide top -->
                        <!-- banner -->
                        <div class="banner-slide">
                            <a href="" class="box-img"><img src="images/media/index1/right-banner-top/right-banner-1.jpg" alt="banner-slide"></a>
                            <a href="" class="box-img"><img src="images/media/index1/right-banner-top/right-banner-2.jpg" alt="banner-slide"></a>
                            <a href="" class="box-img"><img src="images/media/index1/right-banner-top/right-banner-3.jpg" alt="banner-slide"></a>
                        </div><!-- banner -->
                    </div>
                </div>
            </div>
            <!-- block  service-->
            <div class="container ">
                <div class="block-service-opt1">
                    <div class="clearfix">
                        <div class="col-md-3 col-sm-6">
                            <div class="item">
                                <span class="icon">
                                    <img src="images/media/index1/service1.png" alt="service">
                                </span>
                                <strong class="title">Free Shipping </strong>
                                <span>Order over BDT 5000</span>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="item">
                                <span class="icon">
                                    <img src="images/media/index1/service2.png" alt="service">
                                </span>
                                <strong class="title">30-day return</strong>
                                <span style="font-family: Roboto;">Moneyback guarantee</span>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="item">
                                <span class="icon">
                                    <img src="images/media/index1/service3.png" alt="service">
                                </span>
                                <strong class="title">24/7 support</strong>
                                <span>Online consultations</span>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="item">
                                <span class="icon">
                                    <img src="images/media/index1/service4.png" alt="service">
                                </span>
                                <strong class="title">SAFE SHOPPING </strong>
                                <span>Safe Shopping Guarantee</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- block  service-->
            <div class="block-banner-opt1 effect-banner3">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <a href="" class="box-img"><img src="images/media/3-banner-1/banner-1.jpeg" alt="banner"></a>
                        </div>
                        <div class="col-sm-4">
                            <a href="" class="box-img"><img src="images/media/3-banner-1/banner-2.jpeg" alt="banner"></a>
                        </div>
                        <div class="col-sm-4">
                            <a href="" class="box-img"><img src="images/media/3-banner-1/banner-3.jpeg" alt="banner"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block-hot-categories-opt1">
                <div class="container">
                    <div class="block-title ">
                        <span class="title">Hot Products</span>
                    </div>
                    <div class="block-content">
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <div class="item">
                                    <div class="description" style="background-image: url(images/media/hot-products/hot-product-1.png)">
                                        <div class="title"><span style="width:130px;">Micro Sculping Cream</span></div>
                                        <a href="" class="btn">buy now</a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="description" style="background-image: url(images/media/hot-products/hot-product-2.png)">
                                        <div class="title"><span style="width:130px;">Ponds Bright Beauty</span></div>
                                        <a href="" class="btn">buy now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="item">
                                    <div class="description" style="background-image: url(images/media/hot-products/hot-product-3.png)">
                                        <div class="title"><span style="width:130px;">Magic Beauty Lipglose</span></div>
                                        <a href="" class="btn">buy now</a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="description" style="background-image: url(images/media/hot-products/hot-product-4.png)">
                                        <div class="title"><span style="width:130px;">Magic Pro Lipstick</span></div>
                                        <a href="" class="btn">buy now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="item">
                                    <div class="description" style="background-image: url(images/media/hot-products/hot-product-5.png)">
                                        <div class="title"><span style="width:130px;">Tressme Smooth & Silky</span></div>
                                        <a href="" class="btn">buy now</a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="description" style="background-image: url(images/media/hot-products/hot-product-6.png)">
                                        <div class="title"><span style="width:130px;">LA Girl Foundation</span></div>
                                        <a href="" class="btn">buy now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="item">
                                    <div class="description" style="background-image: url(images/media/hot-products/hot-product-7.png)">
                                        <div class="title"><span style="width:130px;">Garnier Vitamin Cream</span></div>
                                        <a href="" class="btn">buy now</a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="description" style="background-image: url(images/media/hot-products/hot-product-8.png)">
                                        <div class="title"><span style="width:130px;">Korean Face Cream</span></div>
                                        <a href="" class="btn">buy now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block-banner-opt1 effect-banner3">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <a href="" class="box-img"><img src="images/media/3-banner-2/banner-1.jpeg" alt="banner"></a>
                        </div>
                        <div class="col-sm-4">
                            <a href="" class="box-img"><img src="images/media/3-banner-2/banner-2.jpeg" alt="banner"></a>
                        </div>
                        <div class="col-sm-4">
                            <a href="" class="box-img"><img src="images/media/3-banner-2/banner-3.jpeg" alt="banner"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix" style="background-color: #fff;padding-top:10px;">
                <!-- block -floor -products / floor 1 :Fashion-->
                <div class="block-floor-products block-floor-products-opt2 floor-products1" id="floor0-1">
                    <div class="container">
                        <div class="block-title" style="border: 1px solid #EEE;">
                            <span class="title" style="background-color: #7F091C !important">
                                <span class="text text-center">Fashion</span>
                            </span>
                            <div class="links dropdown mobile-hide">
                                <button class="dropdown-toggle"  type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-bars" aria-hidden="true"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <ul  >
                                        <li role="presentation" class="active"><a href="#floor1-1"  role="tab" data-toggle="tab">New Arrivals <span class="label-cat">12</span></a></a></li>
                                        <li role="presentation"><a href="#floor1-2"  role="tab" data-toggle="tab">Top Selling</a></li>
                                        <li role="presentation"><a href="#floor1-2"  role="tab" data-toggle="tab">Best Rated</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="actions">
                                <a href="" class="action action-up"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
                                <a href="#floor0-2" class="action action-down"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="block-content">
                            <div class="col-categori" style="border: 1px solid #EEE;">
                                <ul>
                                    <li><a href="">Girf Sets</a></li>
                                    <li><a href="">Shirt For Man</a></li>
                                    <li><a href="">Maecenas</a></li>
                                    <li><a href="">Accessories</a></li>
                                    <li><a href="">Manicure & Pedicure</a></li>
                                    <li><a href="">Bath & Spa</a></li>
                                    <li><a href="">Hair Care</a></li>
                                    <li class="cat-orther"><a href="">Girf Sets</a></li>
                                    <li class="cat-orther"><a href="">ARM</a></li>
                                    <li class="cat-orther"><a href="">Accessories</a></li>
                                    <li class="cat-orther"><a href="">Hair Care</a></li>
                                </ul>
                                <a class="btn-show-cat btn-cat">All categories <i aria-hidden="true" class="fa fa-angle-double-right"></i></a>
                            </div>
                            <div class="col-banner">
                                <a href="" class="box-img"><img src="images/media/main-display/banner-1.jpg" alt="baner-floor"></a>
                            </div>
                            <div class="col-products tab-content">
                                <!-- tab 1 -->
                                <div class="tab-pane active in  fade " id="floor1-1" role="tabpanel">
                                    <div class="owl-carousel" 
                                        data-nav="true" 
                                        data-dots="false" 
                                        data-margin="0" 
                                        data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":3}
                                    }'>
                                        <div class="item">
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <img alt="product name" src="images/media/product-images/product-1.jpeg">
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                                            <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                        <span class="product-item-label label-price">30% <span>off</span></span>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="">Vitamin C Face Cream</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">Tk. 420</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <img alt="product name" src="images/media/product-images/product-2.jpg">
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                                            <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="">Active Day Cream</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">Tk. 650</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <img alt="product name" src="images/media/product-images/product-3.jpeg">
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                                            <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="">Active Miracle Cream</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">Tk. 460</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <img alt="product name" src="images/media/product-images/product-4.jpg">
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                                            <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="">Multi-Vitamin Face Cream</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">Tk. 600</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <img alt="product name" src="images/media/product-images/product-5.jpeg">
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                                            <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="">Micro Sculping Cream</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">Tk. 320</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <img alt="product name" src="images/media/product-images/product-6.jpg">
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                                            <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="">Ponds Bright Beauty</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">Tk. 240</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <img alt="product name" src="images/media/product-images/product-7.jpg">
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                                            <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="">Olay Collagen Peptide</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">Tk. 360</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <img alt="product name" src="images/media/product-images/product-8.jpg">
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                                            <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="">Lotus White Glow</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">Tk. 550</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>

                <div class="block-floor-products block-floor-products-opt2 floor-products1" id="floor0-1">
                    <div class="container">
                        <div class="block-title" style="border: 1px solid #EEE;">
                            <span class="title" style="background-color: #A1497A !important">
                                <span class="text text-center">Fashion</span>
                            </span>
                            <div class="links dropdown mobile-hide">
                                <button class="dropdown-toggle"  type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-bars" aria-hidden="true"></i>
                                </button>
                                <div class="dropdown-menu" >
                                    <ul  >
                                        <li role="presentation" class="active"><a href="#floor1-1"  role="tab" data-toggle="tab">New Arrivals <span class="label-cat">12</span></a></a></li>
                                        <li role="presentation"><a href="#floor1-2"  role="tab" data-toggle="tab">Top Selling</a></li>
                                        <li role="presentation"><a href="#floor1-2"  role="tab" data-toggle="tab">Best Rated</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="actions">
                                <a href="" class="action action-up"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
                                <a href="#floor0-2" class="action action-down"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="block-content">
                            <div class="col-categori" style="border: 1px solid #EEE;">
                                <ul>
                                    <li><a href="">Girf Sets</a></li>
                                    <li><a href="">Shirt For Man</a></li>
                                    <li><a href="">Maecenas</a></li>
                                    <li><a href="">Accessories</a></li>
                                    <li><a href="">Manicure & Pedicure</a></li>
                                    <li><a href="">Bath & Spa</a></li>
                                    <li><a href="">Hair Care</a></li>
                                    <li class="cat-orther"><a href="">Girf Sets</a></li>
                                    <li class="cat-orther"><a href="">ARM</a></li>
                                    <li class="cat-orther"><a href="">Accessories</a></li>
                                    <li class="cat-orther"><a href="">Hair Care</a></li>
                                </ul>
                                <a class="btn-show-cat btn-cat">All categories <i aria-hidden="true" class="fa fa-angle-double-right"></i></a>
                            </div>
                            <div class="col-banner">
                                <a href="" class="box-img"><img src="images/media/main-display/banner-2.jpg" alt="baner-floor"></a>
                            </div>
                            <div class="col-products tab-content">
                                <!-- tab 1 -->
                                <div class="tab-pane active in  fade " id="floor1-1" role="tabpanel">
                                    <div class="owl-carousel" 
                                        data-nav="true" 
                                        data-dots="false" 
                                        data-margin="0" 
                                        data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":3}
                                    }'>
                                        <div class="item">
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <img alt="product name" src="images/media/product-images/product-9.jpeg">
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                                            <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                        <span class="product-item-label label-price">30% <span>off</span></span>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="">Magic Beauty Lipglose</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">Tk. 420</span>
                                                                <span class="old-price">$52.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <img alt="product name" src="images/media/product-images/product-10.jpeg">
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                                            <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="">Magic Pro Lipstick</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">Tk. 700</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <img alt="product name" src="images/media/product-images/product-11.jpeg">
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                                            <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="">Miss Rose Lipglose</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">Tk. 200</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <img alt="product name" src="images/media/product-images/product-12.jpeg">
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                                            <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="">Miss Rose Pro Makeup</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">Tk. 430</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        ]<img alt="product name" src="images/media/product-images/product-13.jpeg">
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                                            <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="">Skin Evaluation Foundation</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">Tk. 580</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <img alt="product name" src="images/media/product-images/product-14.jpeg">
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                                            <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="">LA Girl Foundation</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">Tk. 600</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <img alt="product name" src="images/media/product-images/product-15.jpg">
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                                            <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="">Dusty Rose Mattle Lipstick</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">Tk. 350</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <img alt="product name" src="images/media/product-images/product-16.jpg">
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                                            <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="">Color Rich Lipstick</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">Tk. 400</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>

                <div class="block-floor-products block-floor-products-opt2 floor-products1" id="floor0-1">
                    <div class="container">
                        <div class="block-title" style="border: 1px solid #EEE;">
                            <span class="title" style="background-color: #d17824 !important">
                                <span class="text text-center">Fashion</span>
                            </span>
                            <div class="links dropdown mobile-hide">
                                <button class="dropdown-toggle"  type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-bars" aria-hidden="true"></i>
                                </button>
                                <div class="dropdown-menu" >
                                    <ul  >
                                        <li role="presentation" class="active"><a href="#floor1-1"  role="tab" data-toggle="tab">New Arrivals <span class="label-cat">12</span></a></a></li>
                                        <li role="presentation"><a href="#floor1-2"  role="tab" data-toggle="tab">Top Selling</a></li>
                                        <li role="presentation"><a href="#floor1-2"  role="tab" data-toggle="tab">Best Rated</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="actions">
                                <a href="" class="action action-up"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
                                <a href="#floor0-2" class="action action-down"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="block-content">
                            <div class="col-categori" style="border: 1px solid #EEE;">
                                <ul>
                                    <li><a href="">Girf Sets</a></li>
                                    <li><a href="">Shirt For Man</a></li>
                                    <li><a href="">Maecenas</a></li>
                                    <li><a href="">Accessories</a></li>
                                    <li><a href="">Manicure & Pedicure</a></li>
                                    <li><a href="">Bath & Spa</a></li>
                                    <li><a href="">Hair Care</a></li>
                                    <li class="cat-orther"><a href="">Girf Sets</a></li>
                                    <li class="cat-orther"><a href="">ARM</a></li>
                                    <li class="cat-orther"><a href="">Accessories</a></li>
                                    <li class="cat-orther"><a href="">Hair Care</a></li>
                                </ul>
                                <a class="btn-show-cat btn-cat">All categories <i aria-hidden="true" class="fa fa-angle-double-right"></i></a>
                            </div>
                            <div class="col-banner">
                                <a href="" class="box-img"><img src="images/media/main-display/banner-3.jpeg" alt="baner-floor"></a>
                            </div>
                            <div class="col-products tab-content">
                                <!-- tab 1 -->
                                <div class="tab-pane active in  fade " id="floor1-1" role="tabpanel">
                                    <div class="owl-carousel" 
                                        data-nav="true" 
                                        data-dots="false" 
                                        data-margin="0" 
                                        data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":3}
                                    }'>
                                        <div class="item">
                                            <div class=" product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <img alt="product name" src="images/media/product-images/product-17.jpg">
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                                            <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                        <span class="product-item-label label-price">30% <span>off</span></span>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="">Clear Anti-Dandruff Shampoo</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">Tk. 230</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <img alt="product name" src="images/media/product-images/product-18.jpg">
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                                            <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="">Biotin & Collagen</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">Tk. 560</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href=""><img alt="product name" src="images/media/product-images/product-19.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                                            <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="">Sunsilk Smooth Shampoo</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">Tk. 700</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href=""><img alt="product name" src="images/media/product-images/product-20.jpg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                                            <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="">Suave Charcole Shampoo</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">Tk. 300</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href=""><img alt="product name" src="images/media/product-images/product-21.jpeg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                                            <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="">Pro Keratin Shampoo</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">Tk. 350</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href=""><img alt="product name" src="images/media/product-images/product-22.jpeg"></a>
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                                            <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="">Tressme Smooth & Silky</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">Tk. 950</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <img alt="product name" src="images/media/product-images/product-23.jpeg">
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                                            <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="">Head & Shoulders Shampoo</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">Tk. 760</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item product-item-opt-2">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <img alt="product name" src="images/media/product-images/product-24.jpeg">
                                                        <div class="product-item-actions">
                                                            <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                                            <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                                        </div>
                                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="">Johnson Baby Shampoo</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">Tk. 220</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                        <span style="width:80%">
                                                                            <span><span>80</span>% of <span>100</span></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main><!-- end MAIN -->
        
        <footer class="site-footer footer-opt-3" style="padding-top:20px;">
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
                                        <li><a href="">Twitter</a></li>
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