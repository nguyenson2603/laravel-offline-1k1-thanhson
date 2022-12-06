<section class="bag-product ratio_square">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="title-basic">
                    <h2 class="title font-fraunces"><i class="ti-bolt"></i> Trending Offers</h2>
                </div>
            </div>
            <div class="col-12">
                <div class="slide-6-product product-m no-arrow">
                    @if (count($params['is_trending']) > 0)
                        @foreach ($params['is_trending'] as $item)
                            <div class="product-box product-wrap product-style-3">
                                <div class="img-wrapper">
                                    <div class="front">
                                        <a href="{{ route('frontend.home.products.detail', [$item->id]) }}"><img alt=""
                                                src="{{ asset('frontend-theme/assets/images/marketplace/pro/51.jpg') }}"
                                                class="img-fluid blur-up lazyload bg-img"></a>
                                    </div>
                                    <div class="cart-detail"><a href="javascript:void(0)" title="Add to Wishlist"><i
                                                class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                                            data-bs-toggle="modal" data-bs-target="#quick-view" title="Quick View"><i
                                                class="ti-search" aria-hidden="true"></i></a> <a href="compare.html"
                                            title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                                </div>
                                <div class="product-info">
                                    <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                            class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                            class="fa fa-star"></i>
                                    </div>
                                    <a href="{{ route('frontend.home.products.detail', [$item->id]) }}">
                                        <h6>{{ $item['name'] }}</h6>
                                    </a>
                                    <h4>{{ number_format($item['price'] * ((100 - $item['sale']) / 100)) }}</h4>
                                    <div class="add-btn">
                                        <a href="javascript:void(0)" class="">
                                            <i class="ti-shopping-cart"></i> add to cart
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <h1 class="text-center">Dữ liệu đang được cập nhật!!</h1>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
