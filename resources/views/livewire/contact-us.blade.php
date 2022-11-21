<div class="columns container">
    <div class="page-content" id="contact">
        <form wire:submit.prevent="send">
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="page-subheading" style="color:black">CONTACT FORM</h3>
                    <div class="contact-form-box">
                        <div>
                            <label>Name</label>
                            <input type="text" wire:model.lazy="name" class="form-control" required>
                        </div>
                        <div style="padding-top:10px">
                            <label>Contact</label>
                            <input type="text" wire:model.lazy="contact" class="form-control" required>
                        </div>
                        <div style="padding-top:10px">
                            <label>Subject</label>
                            <input type="text" wire:model.lazy="subject" class="form-control" required>
                        </div>
                        <div style="padding-top:10px">
                            <label>Message</label>
                            <textarea wire:model.lazy="text" rows="10" class="form-control" required></textarea>
                        </div>
                        <div style="padding-top:10px">
                            <button class="btn" id="btn-send-contact">Send</button>
                            <div wire:loading>
                                <img src="{{ asset('images/loader.gif') }}"/> Sending ...
                            </div>
                        </div>
                    </div>
                </div>
                <div id="contact_form_map" class="col-xs-12 col-sm-6">
                    <h3 class="page-subheading" style="color:black">DIRECT CONTACT</h3>

                    <ul class="store_info">
                        <li><i class="fa fa-home"></i>House # 1018 (3rd floor), Road # 09, Avenue # 09, Mirpur DOHS, Dhaka-1216</li>
                        <li><i class="fa fa-phone"></i><span>+880 17223 20532</span></li>
                        <li><i class="fa fa-phone"></i><span>Hotline: +880 17268 76206</span></li>
                        <li><i class="fa fa-envelope"></i>Email: support@shecollectionbd.com</span></li>
                    </ul>                
                    </div>
            </div>
        </form>
    </div>
</div>