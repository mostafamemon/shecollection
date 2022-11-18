<div class="col-md-6">
    <div class="block-search">
        <div class="form-search pd-t-20-pc">
            <div class="box-group">
                <input type="text" style="color:black" class="form-control" wire:model.lazy="search_text" placeholder="i'm Searching for..." wire:keydown.enter="search_product">
                <button wire:click="search_product" class="btn btn-search" type="button"><span>search</span></button>
            </div>
            @php $total_search_bar_category = count($search_bar_categories); $sl = 0; @endphp
            @foreach($search_bar_categories as $search_bar_category)
                @php $sl = $sl + 1 @endphp
                <div class="@if($sl == 1) search-bottom-text @else search-bottom-text-left @endif mobile-hide"><a href="product-list?category={{ $search_bar_category->id }}" style="color:white">{{ $search_bar_category->category_name }}</a></div>
                @if($sl < $total_search_bar_category)
                <div class="search-bottom-text-border mobile-hide">&nbsp;</div>
                @endif
            @endforeach
        </div>
    </div>
</div>