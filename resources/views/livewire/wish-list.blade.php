<div class="columns container">
    <div class="page-content page-order">
        <div class="order-detail-content">
            <div class="table-responsive">
                <table class="table table-bordered  cart_summary">
                    <thead>
                        <tr>
                            <th class="cart_product" style="text-align:center">Product</th>
                            <th>Description</th>
                            <th class="action">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($wishlist as $wish)
                        <tr>
                            <td class="cart_product" style="padding:5px;text-align:center">
                                <a href="/product?id={{ $wish->product_id }}">
                                    @if($wish->product_page_main_image != "")
                                    <img alt="Product" src="{{$backend_url}}/storage/{{ str_replace('public/', '', $wish->product_page_main_image) }}" height="70">
                                    @else
                                    <img alt="Product" src="images/demo/420x512.jpg" height="70">
                                    @endif
                                </a>
                            </td>
                            <td class="cart_description" style="width:60%">
                                <a href="/product?id={{ $wish->product_id }}" >{{ $wish->product_name }}</a>
                            </td>
                            <td class="action">
                                <button wire:click="add_to_cart({{$wish->wish_list_id}})" class="btn btn-success"><i class="fa fa-shopping-cart"></i> Add to Cart</button>&nbsp;&nbsp;
                                <button wire:click="removeItem({{$wish->wish_list_id}})" class="btn btn-danger"><i class="fa fa-trash-o"></i> Remove</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>  
                </table>
            </div>
        </div>
    </div>
    <br>
</div>