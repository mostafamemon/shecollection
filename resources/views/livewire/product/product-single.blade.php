<div class="columns container">                  
    <ol class="breadcrumb no-hide">
        <li><a href="#">Product</a></li>
        <li><a href="#">Preview</a></li>
        <li class="active">{{ $product->product_name }}</li>
    </ol>

    <div class="row">
        <div class="col-md-12 col-main">

            <div class="row">
        
                <div class="col-sm-6 col-md-4 col-lg-4">

                    <div class="product-media media-horizontal">

                        <div class="image_preview_container images-large">
                            @if($product->product_page_main_image != "")
                            <img id="img_zoom" src="{{$backend_url}}/storage/{{ str_replace('public/', '', $product->product_page_main_image) }}" alt="">
                            @else
                            <img id="img_zoom" src="{{ asset('images/demo/420x512.jpg') }}" alt="">
                            @endif
                        </div>
                        
                        <div class="product_preview images-small">

                            <div class="owl-carousel thumbnails_carousel" id="thumbnails"  data-nav="true" data-dots="false" data-margin="10" data-responsive='{"0":{"items":3},"480":{"items":4},"600":{"items":5},"768":{"items":3}}'>
                                
                                @if($product->product_page_other_image_1)
                                <a href="#" data-image="{{$backend_url}}/storage/{{ str_replace('public/', '', $product->product_page_other_image_1) }}" data-zoom-image="{{$backend_url}}/storage/{{ str_replace('public/', '', $product->product_page_other_image_1) }}">

                                    <img src="{{$backend_url}}/storage/{{ str_replace('public/', '', $product->product_page_other_image_1) }}" data-large-image="{{$backend_url}}/storage/{{ str_replace('public/', '', $product->product_page_other_image_1) }}" alt="">

                                </a>
                                @endif

                                @if($product->product_page_other_image_2)
                                <a href="#" data-image="{{$backend_url}}/storage/{{ str_replace('public/', '', $product->product_page_other_image_2) }}" data-zoom-image="{{$backend_url}}/storage/{{ str_replace('public/', '', $product->product_page_other_image_2) }}">

                                    <img src="{{$backend_url}}/storage/{{ str_replace('public/', '', $product->product_page_other_image_2) }}" data-large-image="{{$backend_url}}/storage/{{ str_replace('public/', '', $product->product_page_other_image_2) }}" alt="">

                                </a>
                                @endif

                                @if($product->product_page_other_image_3)
                                <a href="#" data-image="{{$backend_url}}/storage/{{ str_replace('public/', '', $product->product_page_other_image_3) }}" data-zoom-image="{{$backend_url}}/storage/{{ str_replace('public/', '', $product->product_page_other_image_3) }}">

                                    <img src="{{$backend_url}}/storage/{{ str_replace('public/', '', $product->product_page_other_image_3) }}" data-large-image="{{$backend_url}}/storage/{{ str_replace('public/', '', $product->product_page_other_image_3) }}" alt="">

                                </a>
                                @endif

                            </div><!--/ .owl-carousel-->

                        </div><!--/ .product_preview-->

                    </div><!-- image product -->
                </div>

                <div class="col-sm-6 col-md-8 col-lg-8"> 

                    <div class="product-info-main">

                        <h2 class="page-title">
                            {{ $product->product_name }}
                        </h2>
                        <div class="product-reviews-summary">
                            <div class="rating-summary">
                                <div class="rating-result">
                                    <span style="width:{{ ($product->user_rating / 5) * 100 }}%;"></span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="product-info-price">
                            <div class="price-box" style="padding-top:10px;padding-bottom:10px">
                                <span class="price" style="font-size:26px;color:#F05454">Tk. {{ $product->price }}</span>
                            </div>
                        </div>
                        <div class="product-info-stock">
                            <div class="stock available">
                                @if($product->in_stock == 1)
                                <span class="badge badge-success" style="background-color:green;font-size:18px">&nbsp;In Stock&nbsp;</span>
                                @else
                                <span class="badge badge-danger" style="background-color:red;font-size:18px">&nbsp;Out of Stock&nbsp;</span>
                                @endif
                            </div>
                        </div>
                        <div class="product-overview" style="padding-top:10px;font-family:Roboto;font-size:16px">
                            <div class="overview-content">
                                {!! $product->short_description !!}
                            </div>
                        </div>

                        <div class="product-add-form">
                            <form>
                                <div class="product-options-bottom clearfix">
                                    <div class="actions" style="padding-top:15px">
                                        <button type="submit" title="Add to Cart" class="add_to_cart_button">
                                            <span><i class="fa fa-shopping-cart"></i> &nbsp;Add to Cart</span>
                                        </button>
                                        <button type="submit" title="Wishlist" class="add_to_wishlist_button">
                                            <span><i class="fa fa-heart"></i> &nbsp;Wishlist</span>
                                        </button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>

                </div>

            </div>

            <!-- product tab info -->
        
            <div class="product-info-detailed" style="padding-top:20px">
                <!-- Nav tabs -->
                <ul class="nav nav-pills" role="tablist">
                    <li role="presentation" class="active"><a href="#description"  role="tab" data-toggle="tab">Product Details</a></li>
                    <li role="presentation"><a href="#reviews"  role="tab" data-toggle="tab">Reviews</a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="description" style="font-size:15px">
                        <div class="block-content">
                            {!! $product->long_description !!}
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="reviews">
                        <div class="block-content">
                            <div>
                                <figure>
                                    <blockquote cite="https://www.huxley.net/bnw/four.html">
                                        <p>Words can be like X-rays, if you use them properly—they’ll go through anything. You read and you’re pierced.</p>
                                    </blockquote>
                                    <figcaption>— <cite>Brave New World</cite></figcaption>
                                </figure>

                                <figure>
                                    <blockquote cite="https://www.huxley.net/bnw/four.html">
                                        <p>Words can be like X-rays, if you use them properly—they’ll go through anything. You read and you’re pierced.</p>
                                    </blockquote>
                                    <figcaption>— <cite>Brave New World</cite></figcaption>
                                </figure>

                                <figure>
                                    <blockquote cite="https://www.huxley.net/bnw/four.html">
                                        <p>Words can be like X-rays, if you use them properly—they’ll go through anything. You read and you’re pierced.</p>
                                    </blockquote>
                                    <figcaption>— <cite>Brave New World</cite></figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
            <!-- product tab info -->

            <!-- block-related product -->
            <div class="block-related" style="padding-top:20px">
                <div class="block-title">
                    <strong class="title">RELATED products</strong>
                </div>
                <div class="block-content ">
                    <ol class="product-items owl-carousel " data-nav="true" data-dots="false" data-margin="30" data-responsive='{"0":{"items":1},"480":{"items":2},"600":{"items":3},"992":{"items":3},"1200":{"items":4}}'>
                        
                        @foreach($related_products as $rl_product)
                        <li class="product-item product-item-opt-2">
                            <div class="product-item-info">
                                <div class="product-item-photo">
                                    @if($rl_product->product_page_main_image != "")
                                    <a href="product?id={{ $rl_product->id }}" class="product-item-img"><img src="{{$backend_url}}/storage/{{ str_replace('public/', '', $rl_product->product_page_main_image) }}" alt="product name"></a>
                                    @else
                                    <a href="" class="product-item-img"><img src="images/demo/420x512.jpg" alt="product name"></a>
                                    @endif
                                    <div class="product-item-actions">
                                        <a href="" class="btn btn-wishlist"><span>wishlist</span></a>
                                        <a href="" class="btn btn-compare"><span>compare</span></a>
                                        <a href="" class="btn btn-quickview"><span>quickview</span></a>
                                    </div>
                                    <button class="btn btn-cart" type="button"><span>Add to Cart</span></button> 
                                </div>
                                <div class="product-item-detail">
                                    <strong class="product-item-name"><a href="">{{ $rl_product->product_name }}</a></strong>
                                    <div class="clearfix">
                                        <div class="product-item-price">
                                            <span class="price">$45.00</span>
                                            <span class="old-price">$52.00</span>
                                        </div>
                                        <div class="product-reviews-summary">
                                            <div class="rating-summary">
                                                <div class="rating-result">
                                                    <span style="width:{{ $rl_product->user_rating / 5 * 100 }}%"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        @endforeach

                    </ol>
                </div>
            </div>

        </div>
        
        

    </div>
</div>