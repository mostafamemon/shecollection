<div class="container">
    <div class="row" style="padding-top:5px;padding-bottom:5px">
        <div style="float:left;padding-top:5px;padding-left: 15px;padding-right: 0px;">
            <div style="color:white;font-size:18px;">
                <i class="fa fa-home"></i>
            </div>
            <a href="/">
            <div style="float:left;color:white;float:left;margin-top:-20px;font-size:18px;padding-left:25px">
                <div style="font-size:13px;margin-top:-3px">Home</div>
            </div>
            </a>
        </div>

        <div style="float:left;padding-top:5px;padding-left: 10px;padding-right: 0px;">
            <div style="color:white;font-size:18px;">
                <i class="fa fa-heart-o"></i>
            </div>
            <a href="/wishlist">
            <div style="float:left;color:white;float:left;font-size:18px;margin-top:-35px;padding-left:25px">
                <div class="badge" style="background-color: yellow;font-size:14px;color:black">{{ $wishlist }}</div>
                <div style="font-size:13px;margin-top:-3px">Wishlist</div>
            </div>
            </a>
        </div>

        <div style="float:left;padding-top:5px;padding-left: 10px;padding-right: 0px;">
            <div style="color:white;font-size:18px;">
                <i class="fa fa-opencart"></i>
            </div>
            <a href="/cart">
            <div style="float:left;color:white;float:left;font-size:18px;margin-top:-35px;padding-left:30px">
                <div class="badge" style="background-color: yellow;font-size:14px;color:black">{{ $carts }}</div>
                <div style="font-size:13px;margin-top:-3px">My Cart</div>
            </div>
            </a>
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
                    <a class="dropdown-item" href="/my-profile"><div style="padding-top:20px">My Profile</div></a>
                    <hr style="padding-bottom:0px"/>
                    <a class="dropdown-item" href="/my-orders"><div style="padding-top:2px">My Orders</div></a>
                    <hr style="padding-bottom:0px"/>
                    <span wire:click="logout" class="dropdown-item" style="color:black"><div style="padding-bottom:20px;">Logout</div></span>
                </div>
            </div>
        </div>
        
    </div>
</div>