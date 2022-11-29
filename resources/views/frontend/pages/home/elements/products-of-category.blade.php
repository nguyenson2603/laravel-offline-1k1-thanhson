@if (count($productsOfCategory) > 0)
    @foreach ($productsOfCategory as $item)
        <div class="col-xl-3 col-6 col-grid-box">
            <div class="product-box">
                <div class="img-wrapper">
                    <div class="front">
                        <a href="{{ route('frontend.home.products.detail', $item->id) }}"
                            class="bg-size blur-up lazyloaded"
                            style="background-image: url(&quot;{{ asset('frontend-theme/assets/images/pro3/35.jpg') }}&quot;); background-size: cover; background-position: center center; display: block;"><img
                                src="{{ asset('frontend-theme/assets/images/pro3/35.jpg') }}"
                                class="img-fluid blur-up lazyload bg-img" alt="" style="display: none;"></a>
                    </div>
                    {{-- <div class="back">
                        <a href="#" class="bg-size blur-up lazyloaded"
                            style="background-image: url(&quot;{{ asset('frontend-theme/assets/images/pro3/36.jpg') }}&quot;); background-size: cover; background-position: center center; display: block;"><img
                                src="{{ asset('frontend-theme/assets/images/pro3/36.jpg') }}" class="img-fluid blur-up lazyload bg-img"
                                alt="" style="display: none;"></a>
                    </div> --}}
                    <div class="cart-info cart-wrap">
                        <button data-bs-toggle="modal" data-bs-target="#addtocart" title="Add to cart"><i
                                class="ti-shopping-cart"></i></button> <a href="javascript:void(0)"
                            title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                            data-bs-toggle="modal" data-bs-target="#quick-view" title="Quick View"><i class="ti-search"
                                aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload"
                                aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="product-detail">
                    <div>
                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                class="fa fa-star"></i>
                            <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                        </div>
                        <a href="{{ route('frontend.home.products.detail', $item->id) }}">
                            <h6>{{ $item->name }}</h6>
                        </a>
                        <h4>{{ $item->priceSaleFormat }}</h4>
                        <ul class="color-variant">
                            <li class="bg-light0"></li>
                            <li class="bg-light1"></li>
                            <li class="bg-light2"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@else
@endif
