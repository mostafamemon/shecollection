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
                            <a href="product-list?category={{ $category->id }}">
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
                                            <li style="padding-top:10px"><a href="product-list?subcategory={{ $sub_category->id }}">{{ $sub_category->sub_category_name }}</a></li>
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
                    <li><a href="product-list?filter=new_arrival"> NEW ARRIVAL </a></li>
                    <li><a href="product-list?filter=top_selling"> TOP SELLING </a></li>
                    <li><a href="product-list?filter=best_rated"> BEST RATED </a></li>
                    <li><a href="product-list?filter=hot_product"> HOT PRODUCTS </a></li>
                    <li><a href="product-list?filter=clearense"> CLEARENSE </a></li>
                </ul>
            </div>
        </div>
    </div>
</div>