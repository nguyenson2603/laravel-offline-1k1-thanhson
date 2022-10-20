<section class="section-b-space">
    <div class="container">
        <div class="row multiple-slider">
            <div class="col-lg-3 col-sm-6">
                <div class="theme-card">
                    <h5 class="title-border">new products</h5>
                    <div class="offer-slider slide-1">
                        <div>
                            @if (count($params['new_products']) > 0)
                                @foreach (array_slice($params['new_products'], 0, 3) as $item)
                                    <div class="media">
                                        <a href="product-page(no-sidebar).html"><img class="img-fluid blur-up lazyload"
                                                src="{{ asset('frontend-theme/assets/images/fashion/product/42.jpg') }}"
                                                alt=""></a>
                                        <div class="media-body align-self-center">
                                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i>
                                            </div>
                                            <a href="product-page(no-sidebar).html">
                                                <h6>{{ $item['name'] }}</h6>
                                            </a>
                                            <h4>{{ number_format($item['price'] * ((100 - $item['sale']) / 100)) }}</h4>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <h1 class="text-center">Dữ liệu đang được cập nhật!!</h1>
                            @endif
                        </div>
                        <div>
                            @if (count($params['new_products']) > 0)
                                @foreach (array_slice($params['new_products'], 3, 3) as $item)
                                    <div class="media">
                                        <a href="product-page(no-sidebar).html"><img class="img-fluid blur-up lazyload"
                                                src="{{ asset('frontend-theme/assets/images/fashion/product/42.jpg') }}"
                                                alt=""></a>
                                        <div class="media-body align-self-center">
                                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i>
                                            </div>
                                            <a href="product-page(no-sidebar).html">
                                                <h6>{{ $item['name'] }}</h6>
                                            </a>
                                            <h4>{{ number_format($item['price'] * ((100 - $item['sale']) / 100)) }}</h4>
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
            <div class="col-lg-3 col-sm-6">
                <div class="theme-card">
                    <h5 class="title-border">feature product</h5>
                    <div class="offer-slider slide-1">
                        <div>
                            @if (count($params['is_feature']) > 0)
                                @foreach (array_slice($params['is_feature'], 0, 3) as $item)
                                    <div class="media">
                                        <a href="product-page(no-sidebar).html"><img class="img-fluid blur-up lazyload"
                                                src="{{ asset('frontend-theme/assets/images/fashion/product/42.jpg') }}"
                                                alt=""></a>
                                        <div class="media-body align-self-center">
                                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i>
                                            </div>
                                            <a href="product-page(no-sidebar).html">
                                                <h6>{{ $item['name'] }}</h6>
                                            </a>
                                            <h4>{{ number_format($item['price'] * ((100 - $item['sale']) / 100)) }}</h4>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <h1 class="text-center">Dữ liệu đang được cập nhật!!</h1>
                            @endif
                        </div>
                        <div>
                            @if (count($params['is_feature']) > 0)
                                @foreach (array_slice($params['is_feature'], 3, 3) as $item)
                                    <div class="media">
                                        <a href="product-page(no-sidebar).html"><img class="img-fluid blur-up lazyload"
                                                src="{{ asset('frontend-theme/assets/images/fashion/product/42.jpg') }}"
                                                alt=""></a>
                                        <div class="media-body align-self-center">
                                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i>
                                            </div>
                                            <a href="product-page(no-sidebar).html">
                                                <h6>{{ $item['name'] }}</h6>
                                            </a>
                                            <h4>{{ number_format($item['price'] * ((100 - $item['sale']) / 100)) }}</h4>
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
            <div class="col-lg-3 col-sm-6">
                <div class="theme-card">
                    <h5 class="title-border">best seller</h5>
                    <div class="offer-slider slide-1">
                        <div>
                            @if (count($params['is_best_seller']) > 0)
                                @foreach (array_slice($params['is_best_seller'], 0, 3) as $item)
                                    <div class="media">
                                        <a href="product-page(no-sidebar).html"><img class="img-fluid blur-up lazyload"
                                                src="{{ asset('frontend-theme/assets/images/fashion/product/42.jpg') }}"
                                                alt=""></a>
                                        <div class="media-body align-self-center">
                                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i>
                                            </div>
                                            <a href="product-page(no-sidebar).html">
                                                <h6>{{ $item['name'] }}</h6>
                                            </a>
                                            <h4>{{ number_format($item['price'] * ((100 - $item['sale']) / 100)) }}</h4>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <h1 class="text-center">Dữ liệu đang được cập nhật!!</h1>
                            @endif
                        </div>
                        <div>
                            @if (count($params['is_best_seller']) > 0)
                                @foreach (array_slice($params['is_best_seller'], 3, 3) as $item)
                                    <div class="media">
                                        <a href="product-page(no-sidebar).html"><img class="img-fluid blur-up lazyload"
                                                src="{{ asset('frontend-theme/assets/images/fashion/product/42.jpg') }}"
                                                alt=""></a>
                                        <div class="media-body align-self-center">
                                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i>
                                            </div>
                                            <a href="product-page(no-sidebar).html">
                                                <h6>{{ $item['name'] }}</h6>
                                            </a>
                                            <h4>{{ number_format($item['price'] * ((100 - $item['sale']) / 100)) }}</h4>
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
            <div class="col-lg-3 col-sm-6">
                <div class="theme-card">
                    <h5 class="title-border">on sale</h5>
                    <div class="offer-slider slide-1">
                        <div>
                            @if (count($params['is_on_sale']) > 0)
                                @foreach (array_slice($params['is_on_sale'], 0, 3) as $item)
                                    <div class="media">
                                        <a href="product-page(no-sidebar).html"><img
                                                class="img-fluid blur-up lazyload"
                                                src="{{ asset('frontend-theme/assets/images/fashion/product/42.jpg') }}"
                                                alt=""></a>
                                        <div class="media-body align-self-center">
                                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i>
                                            </div>
                                            <a href="product-page(no-sidebar).html">
                                                <h6>{{ $item['name'] }}</h6>
                                            </a>
                                            <h4>{{ number_format($item['price'] * ((100 - $item['sale']) / 100)) }}</h4>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <h1 class="text-center">Dữ liệu đang được cập nhật!!</h1>
                            @endif
                        </div>
                        <div>
                            @if (count($params['is_on_sale']) > 0)
                                @foreach (array_slice($params['is_on_sale'], 3, 3) as $item)
                                    <div class="media">
                                        <a href="product-page(no-sidebar).html"><img
                                                class="img-fluid blur-up lazyload"
                                                src="{{ asset('frontend-theme/assets/images/fashion/product/42.jpg') }}"
                                                alt=""></a>
                                        <div class="media-body align-self-center">
                                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i>
                                            </div>
                                            <a href="product-page(no-sidebar).html">
                                                <h6>{{ $item['name'] }}</h6>
                                            </a>
                                            <h4>{{ number_format($item['price'] * ((100 - $item['sale']) / 100)) }}</h4>
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
        </div>
    </div>
</section>
