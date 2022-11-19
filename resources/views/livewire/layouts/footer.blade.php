<footer class="site-footer footer-opt-3" style="padding-top:20px;text-align:left">
    <div class="footer-content" style="background-image: url(images/media/bg-footer.jpeg);">
        <div class="block-newletter">
            <div class="container">
                <div class="block-title">Sign up below for early updates</div>
                <div class="block-content">
                    <p class="note">You a Client , large or small, and want to participate in this adventure, please
                        send us an email to support@kuteshop.com</p>
                    <form>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Enter Your E-mail Address">
                            <span class="input-group-btn">
                                    <button class="btn btn-subcribe" type="button"><span>Subcribe</span></button>
                                </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="footer-column">
            <div class="container">
                <div class="footer-column1">
                    <div class="row">
                        <div class="col-md-3 col-lg-3 col-sm-6">
                            <h3 class="title">INFORMATION</h3>
                            <table class="address">
                                <tr>
                                    <td><i class="fa fa-map-marker" aria-hidden="true"></i></td>
                                    <td>{{ $address }}</td>
                                </tr>
                                <tr>
                                    <td><i class="fa fa-phone" aria-hidden="true"></i></td>
                                    <td>{{ $phone }}</td>
                                </tr>
                                <tr>
                                    <td><i class="fa fa-envelope" aria-hidden="true"></i></td>
                                    <td>{{ $support_email }}</td>
                                </tr>
                                <tr>
                                    <td><i class="fa fa-mobile" aria-hidden="true"></i></td>
                                    <td>Hotline: {{ $hotline }}</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-3 col-lg-3 col-sm-6">
                            <h3 class="title">FOLLOW US</h3>
                            <ul class="links">
                                <li><a href="{{ $facebook_link }}" target="_blank">Facebook</a></li>
                                <li><a href="{{ $youtube_link }}" target="_blank">Youtube</a></li>
                                <li><a href="{{ $instagram_link }}" target="_blank">Instagram</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-lg-3 col-sm-6">
                            <h3 class="title">QUICK LINKS</h3>
                            <ul class="links">
                                <li><a href="">Login</a></li>
                                <li><a href="">Register</a></li>
                                <li><a href="">My Profile</a></li>
                                <li><a href="">My Orders</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-lg-3 col-sm-6">
                            <h3 class="title">INFORMATION</h3>
                            <ul class="links">
                                <li><a href="">Privacy Policy</a></li>
                                <li><a href="">Terms & Conditions</a></li>
                                <li><a href="">Cancellation & Returns</a></li>
                                <li><a href="/contact-us">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="footer-column2">
                    <div class="copyright">
                        Copyright © SheCollection. All Rights Reserved. Developed by <a href="http://3wdevs.com" target="_blank" style="color:#F05454">3wDevs Solution</a>
                    </div>
                    <div class="payment">
                        <img src="images/media/payment-methods/visa-card.png" alt="payment">
                        <img src="images/media/payment-methods/master-card.png" alt="payment">
                        <img src="images/media/payment-methods/american-express.png" alt="payment">
                        <img src="images/media/payment-methods/bkash-payment.png" alt="payment">
                        <img src="images/media/payment-methods/nagad-payment.png" alt="payment">
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>