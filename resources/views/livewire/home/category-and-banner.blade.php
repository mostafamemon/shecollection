<div class="block-section-top block-section-top1">
    <div class="container">
        <div class="box-section-top">
            <!-- categori -->
            @desktop
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
                            <a href="product-list?category={{ $category->id }}">
                                <span class="ctg-icon"><i class="fa fa-th-large"></i></span>
                                <span class="text" style="font-size:15px;">{{ $category->category_name }}</span>
                            </a>
                            <span class="toggle-submenu"></span>
                            <div class="submenu">
                                <ul class="categori-list clearfix">
                                    <li class="col-sm-12">
                                        @foreach($sub_categories as $sub_category)
                                        <strong class="title"><a href="product-list?subcategory={{ $sub_category->id }}">{{ $sub_category->sub_category_name }}</a></strong>
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
            </div>
            @enddesktop
            
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

                    @if($banners != "" && $banners->slider_1 != "")
                    <div class="item item1" style="background-image: url({{$backend_url}}/storage/{{ str_replace('public/', '', $banners->slider_1) }});" data-dot="1"></div>
                    @endif
                    @if($banners != "" && $banners->slider_1 != "")
                    <div class="item item1" style="background-image: url({{$backend_url}}/storage/{{ str_replace('public/', '', $banners->slider_2) }});" data-dot="2"></div>
                    @endif
                    @if($banners != "" && $banners->slider_1 != "")
                    <div class="item item1" style="background-image: url({{$backend_url}}/storage/{{ str_replace('public/', '', $banners->slider_3) }});" data-dot="3"></div>
                    @endif
                </div> <!-- slide -->
            </div><!-- block slide top -->
            <!-- banner -->
            <div class="banner-slide">
            @if($banners != "" && $banners->right_banner_1 != "")
                <a href="" class="box-img"><img src="{{$backend_url}}/storage/{{ str_replace('public/', '', $banners->right_banner_1) }}" alt="banner-slide"></a>
            @endif
            @if($banners != "" && $banners->right_banner_2 != "")
                <a href="" class="box-img"><img src="{{$backend_url}}/storage/{{ str_replace('public/', '', $banners->right_banner_2) }}" alt="banner-slide"></a>
            @endif
            @if($banners != "" && $banners->right_banner_3 != "")
                <a href="" class="box-img"><img src="{{$backend_url}}/storage/{{ str_replace('public/', '', $banners->right_banner_3) }}" alt="banner-slide"></a>
            @endif
            </div><!-- banner -->
        </div>
    </div>
</div>