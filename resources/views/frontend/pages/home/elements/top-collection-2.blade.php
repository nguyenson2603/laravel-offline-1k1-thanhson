<section class="p-0 product-vertical overflow-hidden">
    <div class="full-banner parallax text-center p-left bg-theme">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="title6">
                        <h2 class="font-fraunces text-white">top collection</h2>
                    </div>
                    <div class="product-para">
                        <p class="text-center text-white">Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="slide-3 no-arrow slick-default-margin full-box">
                        @if (count($params['is_top_collection']) > 0)
                            @foreach ($params['is_top_collection'] as $item)
                                <div class="theme-card center-align">
                                    <div class="offer-slider">
                                        <div class="sec-1">
                                            <div class="product-box2">
                                                <div class="media">
                                                    <a
                                                        href="{{ route('frontend.home.products.detail', ['id' => $item->id]) }}">
                                                        <img class="img-fluid blur-up lazyload"
                                                            src="{{ asset('frontend-theme/assets/images/pro2/43.jpg') }}"
                                                            alt="">
                                                    </a>
                                                    <div class="media-body align-self-center">
                                                        <div class="rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <a
                                                            href="{{ route('frontend.home.products.detail', ['id' => $item->id]) }}">
                                                            <h6>{{ $item->name }}</h6>
                                                        </a>
                                                        {{-- <h4>$500.00 <del>$600.00</del></h4> --}}
                                                        {{-- <h4 class="text-lowercase">
                                                            @if ($item->sale > 0)
                                                                {{ number_format($item->price * ((100 - $item->sale) / 100)) }} đ
                                                                <del>{{ number_format($item->price) }} đ</del>
                                                            @else
                                                                {{ number_format($item->price) }} đ
                                                            @endif
                                                        </h4> --}}
                                                        <h4 class="text-lowercase">
                                                            @if ($item->sale > 0)
                                                                {{ $item->sale_price }}
                                                                <del>{{ $item->price_formatted }}</del>
                                                            @else
                                                                {{ $item->price_formatted }}
                                                            @endif
                                                        </h4>
                                                        <ul class="color-variant">
                                                            <li class="bg-light0"></li>
                                                            <li class="bg-light1"></li>
                                                            <li class="bg-light2"></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
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
    </div>
</section>
