<div class="block-hot-categories-opt1">
    <div class="container">
        <div class="block-title ">
            <span class="title">Hot Products</span>
        </div>
        <div class="block-content">
            <div class="row">
                @php 
                    $total_product = count($hot_products);
                    $total_row = ceil($total_product / 2); 
                    $sl = 0;
                @endphp
                @foreach($hot_products as $hot_product)
                @php
                    if($loop->iteration == 1) { $sl = 0; }
                    elseif($loop->iteration == 2) { $sl = 2; }
                    elseif($loop->iteration == 3) { $sl = 4; }
                    elseif($loop->iteration == 4) { $sl = 6; }
                    if($loop->iteration > $total_row) break;
                @endphp
                <div class="col-md-3 col-sm-6">
                    <div class="item">
                        <div class="description"
                            @if($hot_products[$sl]->hot_product_image !="")
                            style="background-image: url('{{$backend_url}}/storage/{{ str_replace('public/', '', $hot_products[$sl]->hot_product_image) }}')"
                            @else
                            style="background-image: url('{{ asset('images/demo/120x107.png') }}')"
                            @endif
                        >
                            <div class="title"><span style="width:130px;">{{ $hot_products[$sl]->product_name }}</span></div>
                            <a href="/preview/{{ $hot_products[$sl]->id }}" class="btn">buy now</a>
                        </div>
                    </div>
                    @if(isset($hot_products[$sl + 1]))
                    <div class="item">
                        <div class="description"
                            @if($hot_products[$sl + 1]->hot_product_image !="")
                            style="background-image: url('{{$backend_url}}/storage/{{ str_replace('public/', '', $hot_products[$sl + 1]->hot_product_image) }}')"
                            @else
                            style="background-image: url('{{ asset('images/demo/120x107.png') }}')"
                            @endif
                        >
                            <div class="title"><span style="width:130px;">{{ $hot_products[$sl + 1]->product_name }}</span></div>
                            <a href="/preview/{{ $hot_products[$sl + 1]->id }}" class="btn">buy now</a>
                        </div>
                    </div>
                    @endif
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>