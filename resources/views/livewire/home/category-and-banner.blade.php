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