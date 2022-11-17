@if($home_page_ctg_2 != "")
    <div class="block-floor-products block-floor-products-opt2 floor-products1" id="floor0-1">
        <div class="container">
            <div class="block-title" style="border: 1px solid #EEE;">
                <span class="title" style="background-color: #7F091C !important">
                    <span class="text text-center">{{ $home_page_ctg_2->category_name}}</span>
                </span>
                <div class="links dropdown mobile-hide">
                    <button class="dropdown-toggle"  type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-bars" aria-hidden="true"></i>
                    </button>
                    <div class="dropdown-menu">
                        <ul  >
                            <li role="presentation" @if($filter_by_type_2 == "new_arrival") class="active" @endif><a wire:click="changeFilterByType('new_arrival')">New Arrivals</a></a></li>
                            <li role="presentation" @if($filter_by_type_2 == "top_selling") class="active" @endif><a wire:click="changeFilterByType('top_selling')">Top Selling</a></li>
                            <li role="presentation" @if($filter_by_type_2 == "best_rated") class="active" @endif><a wire:click="changeFilterByType('best_rated')">Best Rated</a></li>
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
                        @php $sub_categories = get_sub_category($home_page_ctg_2->id); @endphp
                        @foreach($sub_categories as $sub)
                        @php if($loop->iteration > 18) break; @endphp
                        <li><a wire:click="chageSubCategory({{$sub->id}})" style="cursor:pointer; @if($sub_category_id_2 == $sub->id) color:#F05454;font-size:15px; @endif">{{ $sub->sub_category_name}}</a></li>
                        @endforeach
                    </ul>
                    <a class="btn-show-cat btn-cat">All categories <i aria-hidden="true" class="fa fa-angle-double-right"></i></a>
                </div>
                <div class="col-banner">
                    <a href="" class="box-img">
                        @if($home_page_ctg_2->category_banner !="")
                            <img src="{{ asset('images/demo/430x632.jpg') }}" alt="baner-floor">
                        @else
                            <img src="{{ asset('images/demo/430x632.jpg') }}" alt="baner-floor">
                        @endif
                    </a>
                </div>
                <div class="col-products tab-content">
                    <!-- tab 1 -->
                    <div class="" id="floor1-1" role="tabpanel">
                        <div>
                        @php 
                            $total_product = count($products_2);
                            $total_row = ceil($total_product / 2); 
                            $sl = 0;
                        @endphp
                        @foreach($products_2 as $product)
                        @php
                            if($loop->iteration == 1) { $sl = 0; }
                            elseif($loop->iteration == 2) { $sl = 2; }
                            elseif($loop->iteration == 3) { $sl = 4; }
                            elseif($loop->iteration == 4) { $sl = 6; }
                            elseif($loop->iteration == 5) { $sl = 8; }
                            if($loop->iteration > $total_row) break;
                        @endphp
                            <div class="col-product">
                                <div class="product-item product-item-opt-2" style="float:left">
                                    <div class="product-item-info">
                                        <div class="product-item-photo">
                                            @if($products_2[$sl]->product_page_main_image !="")
                                                <img alt="product name" src="{{$backend_url_2}}/storage/{{ str_replace('public/', '', $products_2[$sl]->product_page_main_image) }}">
                                            @else
                                                <img alt="product name" src="{{ asset('images/demo/420x512.jpg') }}">
                                            @endif
                                            <div class="product-item-actions">
                                                <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                                <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                            </div>
                                            <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                        </div>
                                        <div class="product-item-detail">
                                            <strong class="product-item-name"><a href="">{{ $products_2[$sl]->product_name }}</a></strong>
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
                                @if(isset($products_2[$sl + 1]))
                                <div class="product-item product-item-opt-2" style="float:left">
                                    <div class="product-item-info">
                                        <div class="product-item-photo">
                                            @if($products_2[$sl + 1]->product_page_main_image !="")
                                                <img alt="product name" src="{{$backend_url_2}}/storage/{{ str_replace('public/', '', $products_2[$sl + 1]->product_page_main_image) }}">
                                            @else
                                                <img alt="product name" src="{{ asset('images/demo/420x512.jpg') }}">
                                            @endif
                                            <div class="product-item-actions">
                                                <a class="btn btn-wishlist" href=""><span>wishlist</span></a>
                                                <a class="btn btn-quickview" href=""><span>quickview</span></a>
                                            </div>
                                            <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                        </div>
                                        <div class="product-item-detail">
                                            <strong class="product-item-name"><a href="">{{ $products_2[$sl + 1]->product_name }}</a></strong>
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
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif 