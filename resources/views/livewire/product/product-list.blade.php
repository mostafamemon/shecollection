<div class="columns container">  
    @if($search_text != "")
    <ol class="breadcrumb no-hide">
        <li>Search result for: <span style="font-size:15px;font-weight:bold">{{ $search_text }}</span></li>
    </ol>
    @endif

    @if($category_id != "")
    <ol class="breadcrumb no-hide">
        <li>Category: <span style="font-size:15px;font-weight:bold">{{ get_category_name($category_id) }}</span></li>
    </ol>
    @endif

    @if($sub_category_id != "")
    <ol class="breadcrumb no-hide">
        <li>Sub Category: <span style="font-size:15px;font-weight:bold">{{ get_sub_category_name($sub_category_id) }}</span></li>
    </ol>
    @endif

    @if($filter_by != "")
    <ol class="breadcrumb no-hide">
        <li>Filter: <span style="font-size:15px;font-weight:bold;">{{ str_replace("_"," ",$filter_by) }}</span></li>
    </ol>
    @endif

    <div class="row">

        <!-- Main Content -->
        <div class="col-md-12 col-main">
            <div class="products  products-grid">
                <ol class="product-items row">
                    @foreach($products as $product)
                    <li class="col-sm-3 product-item ">
                        <div class="product-item-opt-1">
                            <div class="product-item-info">
                                <div class="product-item-photo">
                                    <a href="product?id={{ $product->id }}" class="product-item-img">
                                        @if($product->product_page_main_image != "")
                                        <img src="{{$backend_url}}/storage/{{ str_replace('public/', '', $product->product_page_main_image) }}"/>
                                        @else
                                        <img src="{{ asset('images/demo/420x512.jpg') }}" alt="product name">
                                        @endif
                                    </a>
                                    <div class="product-item-actions">
                                        <span wire:click="add_to_wishlist({{ $product->id }})" class="btn btn-wishlist"><span>wishlist</span></span>
                                        <a href="product?id={{ $product->id }}" class="btn btn-quickview"><span>quickview</span></a>
                                    </div>
                                    @if($product->in_stock == 1)
                                    <button class="btn btn-cart" type="button" wire:click="add_to_cart({{ $product->id }})"><span>Add to Cart</span></button>
                                    @else
                                    <button class="btn btn-cart" type="button"><span>Out of Stock</span></button>
                                    @endif
                                </div>
                                <div class="product-item-detail">
                                    <strong class="product-item-name"><a href="">{{ $product->product_name }}</a></strong>
                                    <div class="clearfix">
                                        <div class="product-item-price">
                                            <span class="price">Tk. {{ $product->price }}</span>
                                        </div>
                                        <div class="product-reviews-summary">
                                            <div class="rating-summary">
                                                <div class="rating-result">
                                                    <span style="width:{{ ($product->user_rating / 5) * 100 }}%"></span>
                                                </div>
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