<section>
    @foreach($stores as $store)
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <img src="{{ $store->store_avatar }}" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">{{ $store->store_name }}</h5>
                <h6 class="card-text text-muted">{{'Owner: '.$store->user->name }}</h6>
                <p class="card-text">{{'Contact No.'.$store->contact_no }}</p>
                <p class="card-text">{{ $store->address }}</p>
                <p class="card-text">
                {{ 'Published ' .$store->store_date }}
                </p>
                <div class="d-flex justify-content-end">
                    <a href="#" class="btn btn-light mr-2">
                        <i class="bi bi-plus"> </i>
                    </a>
                    <a href="#" class="btn btn-light">
                        <i class="bi bi-eye-fill"> </i>
                    </a>
                </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</section>
