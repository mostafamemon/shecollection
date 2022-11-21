<div class="columns container">
    <div class="page-content page-order">
        <div class="order-detail-content">
            <div class="table-responsive">
                <table class="table table-bordered  cart_summary">
                    @if(count($order_details) == 0)
                    <thead>
                        <tr>
                            <th class="cart_product" style="text-align:center">Order No</th>
                            <th class="text-center">Order Date</th>
                            <th class="text-center">Total</th>
                            <th class="text-center">Delivery Charge</th>
                            <th class="text-center">Grand Total</th>
                            <th class="text-center">Status</th>
                            <th class="action text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($orders as $order)
                        <tr>
                            <td class="cart_product text-center">{{ str_pad($order->id, 8, '0', STR_PAD_LEFT); }}</td>
                            <td class="cart_description text-center">{{ date('d M, Y',strtotime($order->order_date_time)) }}</td>
                            <td class="cart_description text-center">{{ $order->total }}</td>
                            <td class="cart_description text-center">{{ $order->delivery_charge }}</td>
                            <td class="cart_description text-center">{{ $order->grand_total }}</td>
                            <td class="cart_description text-center">
                                @if($order->status == "PENDING")
                                <span class="badge" style="padding:5px 10px;background-color:yellow;color:black">PENDING</span>
                                @elseif($order->status == "PAID")
                                <span class="badge" style="padding:5px 10px;background-color:green;color:white">PAID</span>
                                @endif
                            </td>
                            <td class="action">
                                <button wire:click="order_details({{ $order->id }})" class="btn btn-success">Details</button> 
                            </td>
                        </tr>
                        @endforeach
                    </tbody>  
                    @else
                    <thead>
                        <tr>
                            <th class="cart_product" style="text-align:center">Product</th>
                            <th class="text-center">Name</th>
                            <th class="text-center">Unit Price</th>
                            <th class="text-center">Quantity</th>
                            <th class="text-center">Total Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($order_details as $detail)
                        <tr>
                            <td class="cart_product text-center" style="padding:5px">
                                @if($detail->product_page_main_image != "")
                                <img alt="Product" src="{{$backend_url}}/storage/{{ str_replace('public/', '', $detail->product_page_main_image) }}" height="70">
                                @else
                                <img alt="Product" src="images/demo/420x512.jpg" height="70">
                                @endif
                            </td>
                            <td class="cart_description">{{ $detail->product_name }}</td>
                            <td class="cart_description text-center">{{ $detail->unit_price }}</td>
                            <td class="cart_description text-center">{{ $detail->quantity }}</td>
                            <td class="cart_description text-center">{{ $detail->grand_total }}</td>
                        </tr>
                        @endforeach
                    </tbody>  
                    @endif
                </table>
            </div>

            @if(count($order_details) > 0)
            <div class="cart_navigation">
                <a href="/my-orders" class="prev-btn">Back</a>
            </div>
            @endif
        </div>
    </div>
    <br>
</div>