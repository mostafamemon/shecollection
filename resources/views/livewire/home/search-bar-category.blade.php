<div class="col-md-6">
    <div class="block-search">
        <div class="form-search">
            <form>
                <div class="box-group">
                    <input type="text" class="form-control" placeholder="i'm Searching for...">
                    <button class="btn btn-search" type="button"><span>search</span></button>
                </div>
                @php $total_search_bar_category = count($search_bar_categories); $sl = 0; @endphp
                @foreach($search_bar_categories as $search_bar_category)
                    @php $sl = $sl + 1 @endphp
                    <div class="@if($sl == 1) search-bottom-text @else search-bottom-text-left @endif mobile-hide">{{ $search_bar_category->category_name }}</div>
                    @if($sl < $total_search_bar_category)
                    <div class="search-bottom-text-border mobile-hide">&nbsp;</div>
                    @endif
                @endforeach
            </form>
        </div>
    </div>
</div>