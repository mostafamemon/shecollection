<div class="clearfix" style="background-color: #fff;padding-top:10px;">
    <!-- block -floor -products / floor 1 :Fashion-->
    @if($home_page_ctg_1 != "")
    <div class="block-floor-products block-floor-products-opt2 floor-products1" id="floor0-1">
        <div class="container">
            <div class="block-title" style="border: 1px solid #EEE;">
                <span class="title" style="background-color: #7F091C !important">
                    <span class="text text-center">{{ $home_page_ctg_1->category_name}}</span>
                </span>
                <div class="links dropdown mobile-hide">
                    <button class="dropdown-toggle"  type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-bars" aria-hidden="true"></i>
                    </button>
                    <div class="dropdown-menu">
                        <ul  >
                            <li role="presentation" @if($home_page_ctg_1_active_type == "new_arrival") class="active" @endif><a href="#floor1-1"  role="tab" data-toggle="tab">New Arrivals</a></a></li>
                            <li role="presentation" @if($home_page_ctg_1_active_type == "top_selling") class="active" @endif><a href="#floor1-2"  role="tab" data-toggle="tab">Top Selling</a></li>
                            <li role="presentation" @if($home_page_ctg_1_active_type == "best_rated") class="active" @endif><a href="#floor1-2"  role="tab" data-toggle="tab">Best Rated</a></li>
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
                        @php $sub_categories = get_sub_category($home_page_ctg_1->id); @endphp
                        @foreach($sub_categories as $sub)
                        @php if($loop->iteration > 18) break; @endphp
                        <li><a href="">{{ $sub->sub_category_name}}</a></li>
                        @endforeach
                    </ul>
                    <a class="btn-show-cat btn-cat">All categories <i aria-hidden="true" class="fa fa-angle-double-right"></i></a>
                </div>
                <div class="col-banner">
                    <a href="" class="box-img">
                        @if($home_page_ctg_1->category_banner !="")
                            <img src="{{$backend_url}}/storage/{{ str_replace('public/', '', $home_page_ctg_1->category_banner) }}"/>
                        @else
                            <img src="{{ asset('images/demo/430x563.jpg') }}" alt="baner-floor">
                        @endif
                    </a>
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
    @endif 

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
        