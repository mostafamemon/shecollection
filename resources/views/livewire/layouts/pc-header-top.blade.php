<div class="container">
    <!-- nav-left -->
    <ul class="nav-left">
        <li><span><i class="fa fa-envelope-o" style="font-weight:bold" aria-hidden="true"></i> 
            <span class="header-top-text">Email: {{ $support_email }}</span>
        </span></li>
        <li><span><i class="fa fa-phone" aria-hidden="true"></i>
            <span class="header-top-text">Hotline: {{ $hotline }}</span>
        </span></li>
    </ul><!-- nav-left -->
    <!-- nav-right -->
    <ul class=" nav-right">
        <li><a href="" class="header-top-text">My Orders</a></li>
        <li><a href="" class="header-top-text">My Profile</a></li>
        <li><a href="/contact-us" class="header-top-text">Contact Us</a></li>
        <li>
            <a href="{{ $facebook_link }}" target="_blank" class="header-top-text">
                <i class="fa fa-facebook-f" style="font-size:16px"></i>&nbsp;&nbsp;
            </a>
            <a href="{{ $youtube_link }}" target="_blank" class="header-top-text">
                <i class="fa fa-youtube-play" style="font-size:14px"></i>&nbsp;&nbsp;
            </a>
            <a href="{{ $instagram_link }}" target="_blank" class="header-top-text">
                <i class="fa fa-instagram" style="font-size:16px"></i>
            </a>
        </li>
    </ul><!-- nav-right -->
</div>