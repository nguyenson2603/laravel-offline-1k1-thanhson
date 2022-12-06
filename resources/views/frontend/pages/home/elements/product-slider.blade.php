<section class="section-b-space">
    <div class="container">
        <div class="row multiple-slider">
            <div class="col-lg-3 col-sm-6">
                <div class="theme-card">
                    <h5 class="title-border">new product</h5>
                    <div class="offer-slider slide-1">
                        @if (count($newProducts) > 0)
                            @foreach ($newProducts as $items)
                                <div>
                                    @if (count($items) > 0)
                                        @foreach ($items as $item)
                                            <div class="media">
                                                <a href="{{ route('frontend.home.products.detail', $item->id) }}"><img
                                                        class="img-fluid blur-up lazyload"
                                                        src="{{ asset('frontend-theme/assets/images/fashion/product/79.jpg') }}"
                                                        alt=""></a>
                                                <div class="media-body align-self-center">
                                                    <div class="rating"><i class="fa fa-star"></i> <i
                                                            class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                            class="fa fa-star"></i>
                                                    </div>
                                                    <a href="{{ route('frontend.home.products.detail', $item->id) }}">
                                                        <h6>{{ $item->name }}</h6>
                                                    </a>
                                                    <h4>{{ number_format($item->price * ((100 - $item->sale) / 100)) }}</h4>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="theme-card">
                    <h5 class="title-border">feature product</h5>
                    <div class="offer-slider slide-1">
                        @if (count($featureProducts) > 0)
                            @foreach ($featureProducts as $items)
                                <div>
                                    @if (count($items) > 0)
                                        @foreach ($items as $item)
                                            <div class="media">
                                                <a href="{{ route('frontend.home.products.detail', $item->id) }}"><img
                                                        class="img-fluid blur-up lazyload"
                                                        src="{{ asset('frontend-theme/assets/images/fashion/product/80.jpg') }}"
                                                        alt=""></a>
                                                <div class="media-body align-self-center">
                                                    <div class="rating"><i class="fa fa-star"></i> <i
                                                            class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                            class="fa fa-star"></i>
                                                    </div>
                                                    <a href="{{ route('frontend.home.products.detail', $item->id) }}">
                                                        <h6>{{ $item->name }}</h6>
                                                    </a>
                                                    <h4>{{ number_format($item->price * ((100 - $item->sale) / 100)) }}</h4>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="theme-card">
                    <h5 class="title-border">best seller</h5>
                    <div class="offer-slider slide-1">
                        @if (count($bestSellerProducts) > 0)
                            @foreach ($bestSellerProducts as $items)
                                <div>
                                    @if (count($items) > 0)
                                        @foreach ($items as $item)
                                            <div class="media">
                                                <a href="{{ route('frontend.home.products.detail', $item->id) }}"><img
                                                        class="img-fluid blur-up lazyload"
                                                        src="{{ asset('frontend-theme/assets/images/fashion/product/81.jpg') }}"
                                                        alt=""></a>
                                                <div class="media-body align-self-center">
                                                    <div class="rating"><i class="fa fa-star"></i> <i
                                                            class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                            class="fa fa-star"></i>
                                                    </div>
                                                    <a href="{{ route('frontend.home.products.detail', $item->id) }}">
                                                        <h6>{{ $item->name }}</h6>
                                                    </a>
                                                    <h4>{{ number_format($item->price * ((100 - $item->sale) / 100)) }}</h4>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="theme-card">
                    <h5 class="title-border">on sale</h5>
                    <div class="offer-slider slide-1">
                        @if (count($onSaleProducts) > 0)
                            @foreach ($onSaleProducts as $items)
                                <div>
                                    @if (count($items) > 0)
                                        @foreach ($items as $item)
                                            <div class="media">
                                                <a href="{{ route('frontend.home.products.detail', $item->id) }}"><img
                                                        class="img-fluid blur-up lazyload"
                                                        src="{{ asset('frontend-theme/assets/images/fashion/product/82.jpg') }}"
                                                        alt=""></a>
                                                <div class="media-body align-self-center">
                                                    <div class="rating"><i class="fa fa-star"></i> <i
                                                            class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                            class="fa fa-star"></i>
                                                    </div>
                                                    <a href="{{ route('frontend.home.products.detail', $item->id) }}">
                                                        <h6>{{ $item->name }}</h6>
                                                    </a>
                                                    <h4>{{ number_format($item->price * ((100 - $item->sale) / 100)) }}</h4>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
