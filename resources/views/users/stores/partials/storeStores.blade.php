<section>
    <form method="post" action="{{ route('stores.store') }}" autocomplete="off" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col-sm-12">
                <div class="form-floating mb-3">
                    <input
                        type="text"
                        class="form-control"
                        name="store_name"
                        placeholder="Text"
                    />
                    <label for="floatingInput">Your store name</label>
                    @error('store_name')
                        <div class="text text-danger" role="alert">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <textarea
                        class="form-control"
                        placeholder="Item Description"
                        name="store_description"
                        style="height: 100px"
                    ></textarea>
                    <label for="floatingTextarea">Store Description</label>
                    @error('store_description')
                        <div class="text text-danger" role="alert">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input
                        class="form-control"
                        placeholder="Address"
                        name="address"
                    >
                    <label for="floatingTextarea">Address</label>
                    @error('address')
                        <div class="text text-danger" role="alert">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input
                        type="number"
                        class="form-control"
                        name="contact_no"
                        placeholder="Text" />
                    <label for="floatingPassword">Contact No.</label>
                    @error('contact_no')
                        <div class="text text-danger" role="alert">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <input class="form-control" type="file" name="store_avatar" multiple/>
                    @error('store_avatar')
                        <div class="text text-danger" role="alert">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-check form-switch mb-3">
                    <input
                        class="form-check-input"
                        type="checkbox"
                        name="is_company"
                    />
                    <label class="form-check-label" for="flexSwitchCheckChecked"
                        >Can invite other sellers on your store?</label
                    >
                </div>

                <x-buttons.submit-button> Create Store </x-buttons.submit-button>
            </div>
        </div>
    </form>
</section>
