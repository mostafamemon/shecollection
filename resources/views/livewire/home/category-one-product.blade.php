
@php 
                            echo $total_product = count($products);
                            $total_row = ceil($total_product / 2); 
                            $sl = 0;
                        @endphp
                        @foreach($products as $product)
                        @php
                            if($loop->iteration == 1) { $sl = 0; }
                            elseif($loop->iteration == 2) { $sl = 2; }
                            elseif($loop->iteration == 3) { $sl = 4; }
                            elseif($loop->iteration == 4) { $sl = 6; }
                            elseif($loop->iteration == 5) { $sl = 8; }
                            if($loop->iteration > $total_row) break;
                        @endphp
                            <div class="item">
                                <div class=" product-item product-item-opt-2">
                                    <div class="product-item-info">
                                        <div class="product-item-photo">
                                            @if($products[$sl]->product_page_main_image !="")
                                                <img alt="product name" src="{{$backend_url}}/storage/{{ str_replace('public/', '', $products[$sl]->product_page_main_image) }}">
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
                                            <strong class="product-item-name"><a href="">{{ $products[$sl]->product_name }}</a></strong>
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
                                @if(isset($products[$sl + 1]))
                                <div class="product-item product-item-opt-2">
                                    <div class="product-item-info">
                                        <div class="product-item-photo">
                                            @if($products[$sl + 1]->product_page_main_image !="")
                                                <img alt="product name" src="{{$backend_url}}/storage/{{ str_replace('public/', '', $products[$sl + 1]->product_page_main_image) }}">
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
                                            <strong class="product-item-name"><a href="">{{ $products[$sl + 1]->product_name }}</a></strong>
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