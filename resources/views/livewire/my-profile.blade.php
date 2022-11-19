<div class="columns container">  
    <div class="row">
    <form wire:submit.prevent="update">
        <div class="col-md-12 col-main" style="font-size:15px;padding-top:20px">
            <div class="row" style="padding-top:20px">
                <div class="col-md-3">
                    <label>Name</label>
                    <input type="text" wire:model.lazy="name" class="form-control"/>
                </div>
                <div class="col-md-3">
                    <label>Phone</label>
                    <input type="text" wire:model.lazy="phone" class="form-control"/>
                    @error('phone')
                        <span class="text-danger">{{ $message }}</span><br>
                    @enderror
                </div>
                <div class="col-md-3">
                    <label>Email</label>
                    <input type="text" wire:model.lazy="email" class="form-control"/>
                    @error('email')
                        <span class="text-danger">{{ $message }}</span><br>
                    @enderror
                </div>
            </div>
            <div class="row" style="padding-top:15px">
                <div class="col-md-3">
                    <label>Location</label>
                    <select wire:model="delivery_location" class="form-control">
                        <option value="inside_dhaka">Inside Dhaka</option>
                        <option value="outside_dhaka">Outside Dhaka</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label>Address</label>
                    <input type="text" wire:model.lazy="address" class="form-control"/>
                </div>
            </div>
            <div style="text-align:left;padding-top:20px">
                <button class="btn btn-success" type="submit">Update</button>
            </div>
        </div>
    </form>
    </div>
</div>
