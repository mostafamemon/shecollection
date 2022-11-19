<div class="columns container">
    <div class="page-content page-order">
        <div class="heading-counter warning"><h4>Delivery Information</h4>
            <div class="row">
                <div class="col-md-3">
                    <label>Name</label>
                    <input type="text" wire:model="name" class="form-control" required/>
                </div>
                <div class="col-md-3">
                    <label>Phone</label>
                    <input type="text" wire:model="phone" class="form-control" required/>
                </div>
                <div class="col-md-3">
                    <label>Email</label>
                    <input type="text" wire:model="email" class="form-control" required/>
                </div>
                <div class="col-md-3">
                    <label>Location</label>
                    <select wire:change="onchange_delivery_location" wire:model="delivery_location" class="form-control" required>
                        <option value="outside_dhaka">Outside Dhaka</option>
                        <option value="inside_dhaka">Inside Dhaka</option>
                    </select>
                </div>
            </div>
            <div class="row" style="padding-top:10px">
                <div class="col-md-12">
                    <label>Address</label>
                    <input type="text" wire:model="address" class="form-control" required/>
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
                        @php $total = 0; @endphp
                        @foreach($carts as $cart)
                        @php 
                            if($cart->in_stock == 1) {
                                $price = $cart->quantity * $cart->price; 
                                $total = $total + $price;
                            }
                        @endphp
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
                                <label>Delivery Charge
                                    <small style="color:#F05454"><i>@if($delivery_location == "inside_dhaka")Inside Dhaka @else Outside Dhaka @endif</i></small>
                                </label>
                            </td>
                            <td colspan="2">Tk. {{ $delivery_charge }}</td>
                        </tr>
                        <tr>
                            <td colspan="3"><strong>Total</strong></td>
                            <td colspan="2"><strong>Tk. {{ $total + $delivery_charge }}</strong></td>
                        </tr>
                    </tfoot>    
                </table>
            </div>
            <div class="cart_navigation">
                <a href="/" class="prev-btn">Continue shopping</a>
                @if($total > 0)
                <a href="/checkout" wire:click="checkout({{$total}})" class="next-btn">Checkout</a>
                @else
                <a href="#" wire:click="checkout({{$total}})" class="next-btn">Checkout</a>
                @endif
            </div>
        </div>
    </div>
    <br>
</div>