<div class="columns container">
    <div class="page-content page-order">
        <div class="heading-counter warning">Delivery Information:
            <div class="row">
                <div class="col-md-3">
                    <label>Name</label>
                    <input type="text" wire:model="name"/>
                </div>
            </div>
        </div>
        <div class="order-detail-content">
            <div class="table-responsive">
                <table class="table table-bordered  cart_summary">
                    <thead>
                        <tr>
                            <th class="cart_product" style="text-align:center">Product</th>
                            <th>Description</th>
                            <th>Avail.</th>
                            <th>Unit price</th>
                            <th>Qty</th>
                            <th>Total</th>
                            <th class="action"><i class="fa fa-trash-o"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($carts as $cart)
                        <tr>
                            <td class="cart_product" style="padding:0px;text-align:center">
                                <a href="/product?id={{ $cart->product_id }}">
                                    @if($cart->product_page_main_image != "")
                                    <img alt="Product" src="images/demo/420x512.jpg" height="70">
                                    @else
                                    <img alt="Product" src="images/demo/420x512.jpg" height="70">
                                    @endif
                                </a>
                            </td>
                            <td class="cart_description">
                                <a href="/product?id={{ $cart->product_id }}" >{{ $cart->product_name }} </a>
                            </td>
                            <td class="cart_avail">
                                @if($cart->in_stock == 1)
                                <span class="label label-success" style="width:120px">In stock</span>
                                @else
                                <span class="label label-danger" style="width:120px">Out of stock</span>
                                @endif
                            </td>
                            <td class="price"><span>Tk. {{ $cart->price }}</span></td>
                            <td class="qty">
                                <input type="text" minlength="1" maxlength="12" name="qty0" id="qty0" @if($cart->in_stock == 0) readonly @endif value="@if($cart->in_stock == 0) 0 @else{{$cart->quantity}}@endif" class="form-control input-sm">
                                <span class="btn-number" @if($cart->in_stock == 1) wire:click="addQuantity({{ $cart->cart_id }})" @endif><i class="fa fa-caret-up"></i></span>
                                <span class="btn-number" @if($cart->in_stock == 1) wire:click="reduceQuantity({{ $cart->cart_id }})" @endif><i class="fa fa-caret-down"></i></span>
                            </td>
                            <td class="price">
                                <span>
                                @if($cart->in_stock == 1) 
                                    Tk. {{ $cart->quantity * $cart->price }}
                                @else <small>Stock Out</small>
                                @endif
                                </span>
                            </td>
                            <td class="action">
                                <button wire:click="removeItem({{$cart->cart_id}})"><i class="fa fa-trash-o"></i></button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <td rowspan="2" colspan="2"></td>
                            <td colspan="3">
                                <input type="radio" id="inside_dhaka" name="delivery" value="Inside Dhaka">
                                <label for="inside_dhaka">Inside Dhaka</label>&nbsp;&nbsp;&nbsp;

                                <input type="radio" name="delivery" value="Outside Dhaka">
                                <label for="outside_dhaka">Outside Dhaka</label>
                            </td>
                            <td colspan="2">Tk. </td>
                        </tr>
                        <tr>
                            <td colspan="3"><strong>Total</strong></td>
                            <td colspan="2"><strong>122.38 €</strong></td>
                        </tr>
                    </tfoot>    
                </table>
            </div>
            <div class="cart_navigation">
                <a href="/" class="prev-btn">Continue shopping</a>
                <a href="/checkout" class="next-btn">Checkout</a>
            </div>
        </div>
    </div>
    <br>
</div>