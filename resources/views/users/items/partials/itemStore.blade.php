<section>
    <form method="post" action="{{ route('items.store') }}" autocomplete="off" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col-sm-12">
                <div class="form-floating mb-3">
                    <input
                        type="text"
                        class="form-control"
                        name="item_name"
                        placeholder="Text"
                    />
                    <label for="floatingInput">What do you want to sell?</label>
                    @error('item_name')
                        <div class="text text-danger" role="alert">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <textarea
                        class="form-control"
                        placeholder="Item Description"
                        name="item_description"
                        style="height: 100px"
                    ></textarea>
                    <label for="floatingTextarea">Item Description</label>
                    @error('item_description')
                        <div class="text text-danger" role="alert">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <select
                        class="form-select"
                        name="category_id"
                        aria-label="Floating label select example"
                    >
                        @foreach($categories as $category)
                        <option value="{{ $category->id }}">
                            {{ $category->name }}
                        </option>
                        @endforeach
                    </select>
                    <label for="floatingSelect">Category</label>
                </div>

                <div class="form-floating mb-3">
                    <select
                        class="form-select"
                        name="store_id"
                        aria-label="Floating label select example"
                    >
                        @foreach($stores as $store)
                        <option value="{{ $store->id }}">
                            {{ $store->store_name .' (Store Published '.$store->store_date.')'}}
                        </option>
                        @endforeach
                    </select>
                    <label for="floatingSelect">Store</label>
                </div>

                <div class="form-floating mb-3">
                    <input
                        type="number"
                        class="form-control"
                        name="value_price"
                        placeholder="Text" />
                    <label for="floatingPassword">Price</label>
                    @error('value_price')
                        <div class="text text-danger" role="alert">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input
                        type="number"
                        class="form-control"
                        name="old_value_price"
                        placeholder="Text" />
                    <label for="floatingPassword">Old Price (Optional)</label>
                </div>

                <div class="form-floating mb-3">
                    <input
                        type="number"
                        class="form-control"
                        name="item_quantity"
                        placeholder="Text"
                    />
                    <label for="floatingInput">Quanity</label>
                    @error('item_quantity')
                        <div class="text text-danger" role="alert">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <input class="form-control" type="file" name="item_images[]" multiple/>
                    @error('item_images')
                        <div class="text text-danger" role="alert">{{ $message }}</div>
                    @enderror
                </div>
                <x-buttons.submit-button> Post Item </x-buttons.submit-button>
            </div>
        </div>
    </form>
</section>
