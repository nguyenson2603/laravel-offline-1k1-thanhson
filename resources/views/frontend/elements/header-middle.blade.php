<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="main-menu">
                <div class="menu-left">
                    <div class="navbar d-block d-xl-none">
                        <a href="javascript:void(0)">
                            <div class="bar-style" id="toggle-sidebar-res"><i class="fa fa-bars sidebar-bar"
                                    aria-hidden="true"></i>
                            </div>
                        </a>
                    </div>
                    <div class="brand-logo">
                        <a href="index.html"><img src="{{ asset('frontend-theme/assets/images/icon/logo/f11.png') }}"
                                class="img-fluid blur-up lazyload" alt=""></a>
                    </div>
                </div>
                <div>
                    <form class="form_search ajax-search the-basics" role="form">
                        <input type="search" placeholder="Search any Device or Gadgets..."
                            class="nav-search nav-search-field typeahead" aria-expanded="true">
                        <button type="submit" name="nav-submit-button" class="btn-search">
                            <i class="ti-search"></i>
                        </button>
                    </form>
                </div>
                <div class="menu-right pull-right">
                    <nav class="text-start">
                        <div class="toggle-nav"><i class="fa fa-bars sidebar-bar"></i></div>
                    </nav>
                    <div class="top-header d-block">
                        <ul class="header-dropdown">
                            <li class="mobile-wishlist"><a href="#"><img
                                        src="{{ asset('frontend-theme/assets/images/icon/white-icon/heart.png') }}"
                                        alt="">
                                </a>
                            </li>
                            <li class="onhover-dropdown mobile-account">
                                <a href="{{ route('frontend.home.login') }}">
                                    <img src="{{ asset('frontend-theme/assets/images/icon/white-icon/user.png') }}"
                                        alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <div class="icon-nav">
                            <ul>
                                <li class="onhover-div d-xl-none d-inline-block mobile-search">
                                    <div><img src="{{ asset('frontend-theme/assets/images/icon/search.png') }}"
                                            onclick="openSearch()" class="img-fluid blur-up lazyload" alt=""> <i
                                            class="ti-search" onclick="openSearch()"></i>
                                    </div>
                                    <div id="search-overlay" class="search-overlay">
                                        <div> <span class="closebtn" onclick="closeSearch()"
                                                title="Close Overlay">×</span>
                                            <div class="overlay-content">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-xl-12">
                                                            <form class="ajax-search">
                                                                <div class="form-group the-basics">
                                                                    <input type="text" class="form-control typeahead"
                                                                        id="exampleInputPassword1"
                                                                        placeholder="Search a Product">
                                                                </div>
                                                                <button type="submit" class="btn btn-primary"><i
                                                                        class="fa fa-search"></i></button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="onhover-div mobile-setting">
                                    <div><img src="{{ asset('frontend-theme/assets/images/icon/setting.png') }}"
                                            class="img-fluid blur-up lazyload" alt=""> <i
                                            class="ti-settings"></i></div>
                                    <div class="show-div setting">
                                        <h6>language</h6>
                                        <ul>
                                            <li><a href="#">english</a></li>
                                            <li><a href="#">french</a></li>
                                        </ul>
                                        <h6>currency</h6>
                                        <ul class="list-inline">
                                            <li><a href="#">euro</a></li>
                                            <li><a href="#">rupees</a></li>
                                            <li><a href="#">pound</a></li>
                                            <li><a href="#">doller</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="onhover-div mobile-cart">
                                    <div><img src="{{ asset('frontend-theme/assets/images/icon/cart.png') }}"
                                            class="img-fluid blur-up lazyload" alt=""> <i
                                            class="ti-shopping-cart"></i></div>
                                    <span class="cart_qty_cls">2</span>
                                    <ul class="show-div shopping-cart">
                                        <li>
                                            <div class="media">
                                                <a href="#"><img alt="" class="me-3"
                                                        src="{{ asset('frontend-theme/assets/images/fashion/product/1.jpg') }}"></a>
                                                <div class="media-body">
                                                    <a href="#">
                                                        <h4>item name</h4>
                                                    </a>
                                                    <h4><span>1 x $ 299.00</span></h4>
                                                </div>
                                            </div>
                                            <div class="close-circle"><a href="#"><i class="fa fa-times"
                                                        aria-hidden="true"></i></a></div>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <a href="#"><img alt="" class="me-3"
                                                        src="{{ asset('frontend-theme/assets/images/fashion/product/2.jpg') }}"></a>
                                                <div class="media-body">
                                                    <a href="#">
                                                        <h4>item name</h4>
                                                    </a>
                                                    <h4><span>1 x $ 299.00</span></h4>
                                                </div>
                                            </div>
                                            <div class="close-circle"><a href="#"><i class="fa fa-times"
                                                        aria-hidden="true"></i></a></div>
                                        </li>
                                        <li>
                                            <div class="total">
                                                <h5>subtotal : <span>$299.00</span></h5>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="buttons">
                                                <a href="{{ route('frontend.home.cart') }}" class="view-cart">view
                                                    cart</a>
                                                <a href="{{ route('frontend.home.checkout') }}"
                                                    class="checkout">checkout</a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
