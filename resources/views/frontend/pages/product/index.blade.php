@extends('frontend.app')

@section('content')
    @include('frontend.partials.breadcrumb')
    <section class="section-b-space ratio_asos">
        <div class="collection-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 collection-filter">
                        <!-- side-bar colleps block stat -->
                        <div class="collection-filter-block">
                            <!-- brand filter start -->
                            <div class="collection-mobile-back"><span class="filter-back"><i class="fa fa-angle-left"
                                        aria-hidden="true"></i> back</span></div>
                            <div class="collection-collapse-block open">
                                <h3 class="collapse-block-title">brand</h3>
                                <div class="collection-collapse-block-content">
                                    <div class="collection-brand-filter">
                                        <div class="form-check collection-filter-checkbox">
                                            <input type="checkbox" class="form-check-input" id="zara">
                                            <label class="form-check-label" for="zara">zara</label>
                                        </div>
                                        <div class="form-check collection-filter-checkbox">
                                            <input type="checkbox" class="form-check-input" id="vera-moda">
                                            <label class="form-check-label" for="vera-moda">vera-moda</label>
                                        </div>
                                        <div class="form-check collection-filter-checkbox">
                                            <input type="checkbox" class="form-check-input" id="forever-21">
                                            <label class="form-check-label" for="forever-21">forever-21</label>
                                        </div>
                                        <div class="form-check collection-filter-checkbox">
                                            <input type="checkbox" class="form-check-input" id="roadster">
                                            <label class="form-check-label" for="roadster">roadster</label>
                                        </div>
                                        <div class="form-check collection-filter-checkbox">
                                            <input type="checkbox" class="form-check-input" id="only">
                                            <label class="form-check-label" for="only">only</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- color filter start here -->
                            <div class="collection-collapse-block open">
                                <h3 class="collapse-block-title">colors</h3>
                                <div class="collection-collapse-block-content">
                                    <div class="color-selector">
                                        <ul>
                                            <li class="color-1 active"></li>
                                            <li class="color-2"></li>
                                            <li class="color-3"></li>
                                            <li class="color-4"></li>
                                            <li class="color-5"></li>
                                            <li class="color-6"></li>
                                            <li class="color-7"></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- size filter start here -->
                            <div class="collection-collapse-block border-0 open">
                                <h3 class="collapse-block-title">size</h3>
                                <div class="collection-collapse-block-content">
                                    <div class="collection-brand-filter">
                                        <div class="form-check collection-filter-checkbox">
                                            <input type="checkbox" class="form-check-input" id="hundred">
                                            <label class="form-check-label" for="hundred">s</label>
                                        </div>
                                        <div class="form-check collection-filter-checkbox">
                                            <input type="checkbox" class="form-check-input" id="twohundred">
                                            <label class="form-check-label" for="twohundred">m</label>
                                        </div>
                                        <div class="form-check collection-filter-checkbox">
                                            <input type="checkbox" class="form-check-input" id="threehundred">
                                            <label class="form-check-label" for="threehundred">l</label>
                                        </div>
                                        <div class="form-check collection-filter-checkbox">
                                            <input type="checkbox" class="form-check-input" id="fourhundred">
                                            <label class="form-check-label" for="fourhundred">xl</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- price filter start here -->
                            <div class="collection-collapse-block border-0 open">
                                <h3 class="collapse-block-title">price</h3>
                                <div class="collection-collapse-block-content">
                                    <div class="wrapper mt-3">
                                        <div class="range-slider">
                                            <span class="irs js-irs-0"><span class="irs"><span class="irs-line"
                                                        tabindex="-1"><span class="irs-line-left"></span><span
                                                            class="irs-line-mid"></span><span
                                                            class="irs-line-right"></span></span><span class="irs-min"
                                                        style="visibility: hidden;">$0</span><span class="irs-max"
                                                        style="visibility: hidden;">$1.500</span><span class="irs-from"
                                                        style="visibility: visible; left: 0%;">$0</span><span
                                                        class="irs-to"
                                                        style="visibility: visible; left: 80.7018%;">$1.500</span><span
                                                        class="irs-single" style="visibility: hidden; left: 34.6491%;">$0
                                                        - $1.500</span></span><span class="irs-grid"></span><span
                                                    class="irs-bar" style="left: 1.75439%; width: 96.4912%;"></span><span
                                                    class="irs-shadow shadow-from" style="display: none;"></span><span
                                                    class="irs-shadow shadow-to" style="display: none;"></span><span
                                                    class="irs-slider from" style="left: 0%;"></span><span
                                                    class="irs-slider to" style="left: 96.4912%;"></span></span><input
                                                type="text" class="js-range-slider irs-hidden-input" value=""
                                                readonly="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- silde-bar colleps block end here -->
                        <!-- side-bar single product slider start -->
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
                        <!-- side-bar single product slider end -->
                        <!-- side-bar banner start here -->
                        <div class="collection-sidebar-banner">
                            <a href="#"><img src="{{ asset('frontend-theme/assets/images/side-banner.png') }}"
                                    class="img-fluid blur-up lazyloaded" alt=""></a>
                        </div>
                        <!-- side-bar banner end here -->
                    </div>
                    <div class="collection-content col">
                        <div class="page-main-content">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="top-banner-wrapper">
                                        <a href="#"><img
                                                src="{{ asset('frontend-theme/assets/images/mega-menu/2.jpg') }}"
                                                class="img-fluid blur-up lazyloaded" alt=""></a>
                                        <div class="top-banner-content small-section">
                                            <h4>BIGGEST DEALS ON TOP BRANDS</h4>
                                            <p>The trick to choosing the best wear for yourself is to keep in mind your
                                                body type, individual style, occasion and also the time of day or
                                                weather.
                                                In addition to eye-catching products from top brands, we also offer an
                                                easy 30-day return and exchange policy, free and fast shipping across
                                                all pin codes, cash or card on delivery option, deals and discounts,
                                                among other perks. So, sign up now and shop for westarn wear to your
                                                heart’s content on Multikart. </p>
                                        </div>
                                    </div>
                                    <div class="collection-product-wrapper">
                                        <div class="product-top-filter">
                                            <div class="row">
                                                <div class="col-xl-12">
                                                    <div class="filter-main-btn"><span class="filter-btn btn btn-theme"><i
                                                                class="fa fa-filter" aria-hidden="true"></i> Filter</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="product-filter-content">
                                                        <div class="search-count">
                                                            <h5>Showing Products 1-24 of 10 Result</h5>
                                                        </div>
                                                        <div class="collection-view">
                                                            <ul>
                                                                <li><i class="fa fa-th grid-layout-view"></i></li>
                                                                <li><i class="fa fa-list-ul list-layout-view"></i></li>
                                                            </ul>
                                                        </div>
                                                        <div class="collection-grid-view">
                                                            <ul>
                                                                <li><img src="{{ asset('frontend-theme/assets/images/icon/2.png') }}" alt=""
                                                                        class="product-2-layout-view"></li>
                                                                <li><img src="{{ asset('frontend-theme/assets/images/icon/3.png') }}" alt=""
                                                                        class="product-3-layout-view"></li>
                                                                <li><img src="{{ asset('frontend-theme/assets/images/icon/4.png') }}" alt=""
                                                                        class="product-4-layout-view"></li>
                                                                <li><img src="{{ asset('frontend-theme/assets/images/icon/6.png') }}" alt=""
                                                                        class="product-6-layout-view"></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product-page-per-view">
                                                            <select>
                                                                <option value="High to low">24 Products Par Page
                                                                </option>
                                                                <option value="Low to High">50 Products Par Page
                                                                </option>
                                                                <option value="Low to High">100 Products Par Page
                                                                </option>
                                                            </select>
                                                        </div>
                                                        <div class="product-page-filter">
                                                            <select>
                                                                <option value="High to low">Sorting items</option>
                                                                <option value="Low to High">50 Products</option>
                                                                <option value="Low to High">100 Products</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-wrapper-grid">
                                            <div class="row margin-res">
                                                @if (count($products) > 0)
                                                    @foreach ($products as $item)
                                                        <div class="col-xl-3 col-6 col-grid-box">
                                                            <div class="product-box">
                                                                <div class="img-wrapper">
                                                                    <div class="front">
                                                                        <a href="#"
                                                                            class="bg-size blur-up lazyloaded"
                                                                            style="background-image: url(&quot;{{ asset('frontend-theme/assets/images/pro3/35.jpg') }}&quot;); background-size: cover; background-position: center center; display: block;"><img
                                                                                src="{{ asset('frontend-theme/assets/images/pro3/35.jpg') }}"
                                                                                class="img-fluid blur-up bg-img lazyloaded"
                                                                                alt="" style="display: none;"></a>
                                                                    </div>
                                                                    <div class="back">
                                                                        <a href="#"
                                                                            class="bg-size blur-up lazyloaded"
                                                                            style="background-image: url(&quot;{{ asset('frontend-theme/assets/images/pro3/36.jpg') }}&quot;); background-size: cover; background-position: center center; display: block;"><img
                                                                                src="{{ asset('frontend-theme/assets/images/pro3/36.jpg') }}"
                                                                                class="img-fluid blur-up lazyload bg-img"
                                                                                alt="" style="display: none;"></a>
                                                                    </div>
                                                                    <div class="cart-info cart-wrap">
                                                                        <button data-bs-toggle="modal"
                                                                            data-bs-target="#addtocart"
                                                                            title="Add to cart"><i
                                                                                class="ti-shopping-cart"></i></button> <a
                                                                            href="javascript:void(0)"
                                                                            title="Add to Wishlist"><i class="ti-heart"
                                                                                aria-hidden="true"></i></a> <a
                                                                            href="#" data-bs-toggle="modal"
                                                                            data-bs-target="#quick-view"
                                                                            title="Quick View"><i class="ti-search"
                                                                                aria-hidden="true"></i></a>
                                                                        <a href="compare.html" title="Compare"><i
                                                                                class="ti-reload"
                                                                                aria-hidden="true"></i></a>
                                                                    </div>
                                                                </div>
                                                                <div class="product-detail">
                                                                    <div>
                                                                        <div class="rating"><i class="fa fa-star"></i> <i
                                                                                class="fa fa-star"></i> <i
                                                                                class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i> <i
                                                                                class="fa fa-star"></i>
                                                                        </div>
                                                                        <a href="product-page(no-sidebar).html">
                                                                            <h6>{{ $item['name'] }}</h6>
                                                                        </a>
                                                                        <p>{{ $item['description'] }}</p>
                                                                        <h4>{{ number_format($item['price'] * ((100 - $item['sale']) / 100)) . ' VNĐ' }}
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
                                                    @endforeach
                                                @else
                                                @endif
                                            </div>
                                        </div>
                                        <div class="product-pagination">
                                            <div class="theme-paggination-block">
                                                <div class="row">
                                                    <div class="col-xl-6 col-md-6 col-sm-12">
                                                        {{-- <nav aria-label="Page navigation">
                                                            <ul class="pagination">
                                                                <li class="page-item"><a class="page-link" href="#"
                                                                        aria-label="Previous"><span aria-hidden="true"><i
                                                                                class="fa fa-chevron-left"
                                                                                aria-hidden="true"></i></span> <span
                                                                            class="sr-only">Previous</span></a></li>
                                                                <li class="page-item active"><a class="page-link"
                                                                        href="#">1</a></li>
                                                                <li class="page-item"><a class="page-link"
                                                                        href="#">2</a></li>
                                                                <li class="page-item"><a class="page-link"
                                                                        href="#">3</a></li>
                                                                <li class="page-item"><a class="page-link" href="#"
                                                                        aria-label="Next"><span aria-hidden="true"><i
                                                                                class="fa fa-chevron-right"
                                                                                aria-hidden="true"></i></span> <span
                                                                            class="sr-only">Next</span></a></li>
                                                            </ul>
                                                        </nav> --}}
                                                        {!! $products->appends(request()->input())->links() !!}
                                                    </div>
                                                    <div class="col-xl-6 col-md-6 col-sm-12">
                                                        <div class="product-search-count-bottom">
                                                            @php
                                                                $lastPage = $products->lastPage();
                                                                $totalItemsPerPage = $products->perPage();
                                                                $currentPage = $products->currentPage();
                                                            @endphp
                                                            <h5>Showing Products {{ $currentPage }}-{{ $lastPage }} of {{ $totalItemsPerPage }} Result</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
