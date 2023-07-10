@extends('shop.layout')
@section('content')

<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            @forelse($items as $item)
            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Product image-->
                    @if($item->old_price > $item->price)
                    <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">
                        Sale
                    </div>
                    @endif

                    @foreach($item->images as $image)
                    <img class="card-img-top" src="{{ $image->file_url }}" alt="..."
                    style="
                    height: 200px;
                    " />
                    @endforeach
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">{{ $item->item_name }}</h5>
                            <div class="d-flex justify-content-center small text-warning mb-2">
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                            </div>

                            <!-- Product price-->
                            <span class="text-muted text-decoration-line-through">
                                {{ '₱'.$item->old_price ?? '0'}}
                            </span>

                            {{ '₱'.$item->price }}
                            <div class="text-xs"> {{ 'Stocks left: '. $item->item_quantity }} </div>
                            <!-- End Product price-->
                        </div>
                        <div class="text-muted">
                            <div class="fw-xs"> {{ $item->item_description }} </div>
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">View options</a></div>
                    </div>
                </div>
            </div>
            @empty
            <h3 class="text-center"> No available items </h3>
            @endforelse

        </div>
    </div>
</section>
@endsection

