<div class="block-banner-opt1 effect-banner3">
    <div class="container">
        <div class="row">
            @if($banners != "" && $banners->first_triple_banner_1 != "")
            <div class="col-sm-4"> 
                <a href="" class="box-img"><img src="{{$backend_url}}/storage/{{ str_replace('public/', '', $banners->first_triple_banner_1) }}" alt="banner"></a>
            </div>
            @endif
            @if($banners != "" && $banners->first_triple_banner_2 != "")
            <div class="col-sm-4"> 
                <a href="" class="box-img"><img src="{{$backend_url}}/storage/{{ str_replace('public/', '', $banners->first_triple_banner_2) }}" alt="banner"></a>
            </div>
            @endif
            @if($banners != "" && $banners->first_triple_banner_3 != "")
            <div class="col-sm-4"> 
                <a href="" class="box-img"><img src="{{$backend_url}}/storage/{{ str_replace('public/', '', $banners->first_triple_banner_3) }}" alt="banner"></a>
            </div>
            @endif
        </div>
    </div>
</div>