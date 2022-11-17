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
</div>