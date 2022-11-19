<div class="container">
    <div class="row" style="padding-top:5px;padding-bottom:5px">
        <div style="float:left;padding-top:5px;padding-left: 15px;padding-right: 0px;">
            <div style="color:white;font-size:18px;">
                <i class="fa fa-heart-o"></i>
            </div>
            <div style="float:left;color:white;float:left;font-size:18px;margin-top:-35px;padding-left:25px">
                <div class="badge" style="background-color: yellow;font-size:15px;color:black">{{ $wishlist }}</div>
                <div style="font-size:14px;margin-top:-3px">Wishlist</div>
            </div>
        </div>

        <div style="float:left;padding-top:5px;padding-left: 15px;padding-right: 0px;">
            <div style="color:white;font-size:18px;">
                <i class="fa fa-opencart"></i>
            </div>
            <div style="float:left;color:white;float:left;font-size:18px;margin-top:-35px;padding-left:30px">
                <div class="badge" style="background-color: yellow;font-size:15px;color:black">{{ $carts }}</div>
                <div style="font-size:14px;margin-top:-3px">My Cart</div>
            </div>
        </div>

        <div style="float:right">
            <div class="dropdown">
                @if(auth()->user())
                <div style="color:white;padding-right:10px;padding-top:10px;font-size:14px" class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-user"></i> Mostafa Emon
                </div>
                @else
                <div style="color:white;padding-right:10px;padding-top:10px;font-size:14px" type="button">
                    <a href="login" style="color:white">Login</a> &nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;<a href="register"  style="color:white">Register</a>
                </div>
                @endif

                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="background-color:#fff;line-height:0px;padding-left:10px">
                    <div style="padding-top:20px"><a class="dropdown-item" href="#">My Profile</a></div>
                    <hr/>
                    <div><a class="dropdown-item" href="#">My Orders</a></div>
                    <hr/>
                    <div style="padding-bottom:20px;"><span wire:click="logout" class="dropdown-item" style="color:black">Logout</span></div>
                </div>
            </div>
        </div>
        
    </div>
</div>