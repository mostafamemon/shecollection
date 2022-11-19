<div class="columns container">
    <div class="page-content">
        <div class="row">
            <div class="col-sm-6">
                <form wire:submit.prevent="login">
                <div class="box-authentication">
                    <h3>Already registered?</h3>
                    <label for="login_username">Username *</label>
                    <input type="text" wire:model.lazy="login_username" class="form-control" id="login_username">
                    <label for="login_pass">Password *</label>
                    <input type="password" wire:model.lazy="login_password" class="form-control" id="login_pass">
                    <button class="button"><i class="fa fa-lock"></i> Sign in</button>
                </div>
                </form>
            </div>
            <div class="col-sm-6">
                <form wire:submit.prevent="register">
                    <div class="box-authentication">
                        <h3>Create an account</h3>
                        <label for="username">Username *</label>
                        <input type="text" wire:model.lazy="username" required class="form-control" id="username">
                        @error('username')
                            <span class="text-danger">{{ $message }}</span><br>
                        @enderror

                        <label for="password">Password *</label>
                        <input type="password" wire:model.lazy="password" required class="form-control" id="password">

                        <label for="name">Name *</label>
                        <input type="text" wire:model.lazy="name" required class="form-control" id="name">

                        <label for="phone">Phone *</label>
                        <input type="phone" wire:model.lazy="phone" required class="form-control" id="phone">
                        @error('phone')
                            <span class="text-danger">{{ $message }}</span><br>
                        @enderror

                        <label for="email">Email</label>
                        <input type="text" wire:model.lazy="email" class="form-control" id="email">
                        @error('email')
                            <span class="text-danger">{{ $message }}</span><br>
                        @enderror

                        <label for="address">Address *</label>
                        <input type="text" wire:model.lazy="address" required placeholder="delivery address" class="form-control" id="address">

                        <label for="address">Delivery Location *</label>
                        <select class="form-control" wire:model="delivery_location">
                            <option value="outside_dhaka">Outside Dhaka</option>
                            <option value="inside_dhaka">Inside Dhaka</option>
                        </select>

                        <button class="button"><i class="fa fa-user"></i> Create an account</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>