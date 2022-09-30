<!DOCTYPE html>
<html lang="en">

@include('frontend.elements.head')

<body class="theme-color-9">

    <!-- loader start -->
    <div class="loader_skeleton">
        <header>
            <div class="top-header top-header-dark2 d-none d-sm-block">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="header-contact">
                                <ul>
                                    <li>Welcome to Our store Multikart</li>
                                    <li><i class="fa fa-phone" aria-hidden="true"></i>Call Us: 123 - 456 - 7890</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 text-end">
                            <ul class="header-dropdown">
                                <li class="mobile-wishlist"><a href="#"><i class="fa fa-heart"
                                            aria-hidden="true"></i>
                                        wishlist</a></li>
                                <li class="onhover-dropdown mobile-account"> <i class="fa fa-user"
                                        aria-hidden="true"></i>
                                    My Account
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container layout3-menu">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="main-menu">
                            <div class="menu-left around-border">
                                <div class="navbar"> <a href="#" onclick="openNav()"><i
                                            class="fa fa-bars sidebar-bar" aria-hidden="true"></i></a>
                                    <div class="sidenav">
                                        <a href="javascript:void(0)" class="sidebar-overlay" onclick="closeNav()"></a>
                                    </div>
                                </div>
                                <div class="main-menu-right">
                                    <nav>
                                        <div class="toggle-nav"><i class="fa fa-bars sidebar-bar"></i></div>
                                        <ul class="sm pixelstrap sm-horizontal light-font-menu">
                                            <li>
                                                <div class="mobile-back text-end">Back<i class="fa fa-angle-right ps-2"
                                                        aria-hidden="true"></i></div>
                                            </li>
                                            <li>
                                                <a href="index.html">Home</a>
                                            </li>
                                            <li>
                                                <a href="#">feature<div class="lable-nav">new</div></a>
                                            </li>
                                            <li>
                                                <a href="#">shop</a>
                                            </li>
                                            <li>
                                                <a href="#">product</a>
                                            </li>
                                            <li>
                                                <a href="#">pages</a>
                                            </li>
                                            <li><a href="#">blog</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="absolute-logo">
                                <div class="brand-logo">
                                    <a href="#"><img alt="" src="{{ asset('frontend-theme/assets/images/icon/logo/5.png') }}"></a>
                                </div>
                            </div>
                            <div class="">
                                <div class="menu-right pull-right">
                                    <div>
                                        <div class="icon-nav d-none d-sm-block">
                                            <ul>
                                                <li class="onhover-div mobile-search">
                                                    <div><img alt=""
                                                            src="{{ asset('frontend-theme/assets/images/icon/layout4/search.png') }}"
                                                            onclick="openSearch()" class="img-fluid blur-up lazyload">
                                                        <i class="ti-search" onclick="openSearch()"></i>
                                                    </div>
                                                </li>
                                                <li class="onhover-div mobile-setting">
                                                    <div><img alt=""
                                                            src="{{ asset('frontend-theme/assets/images/icon/layout4/setting.png') }}"
                                                            class="img-fluid blur-up lazyload"> <i
                                                            class="ti-settings"></i></div>
                                                </li>
                                                <li class="onhover-div mobile-cart">
                                                    <div><img alt=""
                                                            src="{{ asset('frontend-theme/assets/images/icon/layout4/cart.png') }}"
                                                            class="img-fluid blur-up lazyload"> <i
                                                            class="ti-shopping-cart"></i></div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="container banner-slider">
            <div class="row">
                <div class="col-md-7">
                    <div class="home-slider">
                        <div class="home"></div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="row home-banner">
                        <div class="col-12">
                            <div class="home-slider">
                                <div class="home"></div>
                            </div>
                        </div>
                        <div class="col-12 mt-4">
                            <div class="home-slider">
                                <div class="home"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="collection-banner banner-padding">
            <div class="container">
                <div class="row partition3">
                    <div class="col-md-4">
                        <div class="ldr-bg">
                            <div class="contain-banner banner-3">
                                <div>
                                    <h4></h4>
                                    <h2></h2>
                                    <h6></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="ldr-bg">
                            <div class="contain-banner banner-3">
                                <div>
                                    <h4></h4>
                                    <h2></h2>
                                    <h6></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="ldr-bg">
                            <div class="contain-banner banner-3">
                                <div>
                                    <h4></h4>
                                    <h2></h2>
                                    <h6></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="container section-b-space">
            <div class="row section-t-space">
                <div class="col-lg-6 offset-lg-3">
                    <div class="product-para">
                        <p class="first"></p>
                        <p class="second"></p>
                    </div>
                </div>
                <div class="col-12">
                    <div class="no-slider row">
                        <div class="product-box">
                            <div class="img-wrapper"></div>
                            <div class="product-detail">
                                <h4></h4>
                                <h6></h6>
                            </div>
                        </div>
                        <div class="product-box">
                            <div class="img-wrapper"></div>
                            <div class="product-detail">
                                <h4></h4>
                                <h6></h6>
                            </div>
                        </div>
                        <div class="product-box">
                            <div class="img-wrapper"></div>
                            <div class="product-detail">
                                <h4></h4>
                                <h6></h6>
                            </div>
                        </div>
                        <div class="product-box">
                            <div class="img-wrapper"></div>
                            <div class="product-detail">
                                <h4></h4>
                                <h6></h6>
                            </div>
                        </div>
                        <div class="product-box">
                            <div class="img-wrapper"></div>
                            <div class="product-detail">
                                <h4></h4>
                                <h6></h6>
                            </div>
                        </div>
                        <div class="product-box">
                            <div class="img-wrapper"></div>
                            <div class="product-detail">
                                <h4></h4>
                                <h6></h6>
                            </div>
                        </div>
                        <div class="product-box">
                            <div class="img-wrapper"></div>
                            <div class="product-detail">
                                <h4></h4>
                                <h6></h6>
                            </div>
                        </div>
                        <div class="product-box">
                            <div class="img-wrapper"></div>
                            <div class="product-detail">
                                <h4></h4>
                                <h6></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- loader end -->


    <!-- header start -->
    <header>
        <div class="mobile-fix-option"></div>
        <div class="top-header top-header-dark2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="header-contact">
                            <ul>
                                <li>Welcome to Our store Multikart</li>
                                <li><i class="fa fa-phone" aria-hidden="true"></i>Call Us: 123 - 456 - 7890</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 text-end">
                        <ul class="header-dropdown">
                            <li class="mobile-wishlist"><a href="#"><i class="fa fa-heart"
                                        aria-hidden="true"></i>
                                    wishlist</a></li>
                            <li class="onhover-dropdown mobile-account"> <i class="fa fa-user"
                                    aria-hidden="true"></i>
                                My Account
                                <ul class="onhover-show-div">
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="register.html">register</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container layout3-menu">
            <div class="row">
                <div class="col-sm-12">
                    <div class="main-menu">
                        <div class="menu-left around-border">
                            <div class="navbar"> <a href="#" onclick="openNav()"><i
                                        class="fa fa-bars sidebar-bar" aria-hidden="true"></i></a>
                                <div id="mySidenav" class="sidenav">
                                    <a href="javascript:void(0)" class="sidebar-overlay" onclick="closeNav()"></a>
                                    <nav>
                                        <a href="javascript:void(0)" onclick="closeNav()">
                                            <div class="sidebar-back text-start"><i class="fa fa-angle-left pe-2"
                                                    aria-hidden="true"></i> Back</div>
                                        </a>
                                        <ul id="sub-menu" class="sm pixelstrap sm-vertical">
                                            <li> <a href="#">clothing</a>
                                                <ul class="mega-menu clothing-menu">
                                                    <li>
                                                        <div class="row m-0">
                                                            <div class="col-xl-4">
                                                                <div class="link-section">
                                                                    <h5>women's fashion</h5>
                                                                    <ul>
                                                                        <li><a href="#">dresses</a></li>
                                                                        <li><a href="#">skirts</a></li>
                                                                        <li><a href="#">westarn wear</a></li>
                                                                        <li><a href="#">ethic wear</a></li>
                                                                        <li><a href="#">sport wear</a></li>
                                                                    </ul>
                                                                    <h5>men's fashion</h5>
                                                                    <ul>
                                                                        <li><a href="#">sports wear</a></li>
                                                                        <li><a href="#">western wear</a></li>
                                                                        <li><a href="#">ethic wear</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-4">
                                                                <div class="link-section">
                                                                    <h5>accessories</h5>
                                                                    <ul>
                                                                        <li><a href="#">fashion jewellery</a>
                                                                        </li>
                                                                        <li><a href="#">caps and hats</a></li>
                                                                        <li><a href="#">precious jewellery</a>
                                                                        </li>
                                                                        <li><a href="#">necklaces</a></li>
                                                                        <li><a href="#">earrings</a></li>
                                                                        <li><a href="#">wrist wear</a></li>
                                                                        <li><a href="#">ties</a></li>
                                                                        <li><a href="#">cufflinks</a></li>
                                                                        <li><a href="#">pockets squares</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-4">
                                                                <a href="#" class="mega-menu-banner"><img
                                                                        src="../assets/images/mega-menu/bag.jpg"
                                                                        alt=""
                                                                        class="img-fluid blur-up lazyload"></a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li> <a href="#">bags</a>
                                                <ul>
                                                    <li><a href="#">shopper bags</a></li>
                                                    <li><a href="#">laptop bags</a></li>
                                                    <li><a href="#">clutches</a></li>
                                                    <li> <a href="#">purses</a>
                                                        <ul>
                                                            <li><a href="#">purses</a></li>
                                                            <li><a href="#">wallets</a></li>
                                                            <li><a href="#">leathers</a></li>
                                                            <li><a href="#">satchels</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li> <a href="#">footwear</a>
                                                <ul>
                                                    <li><a href="#">sport shoes</a></li>
                                                    <li><a href="#">formal shoes</a></li>
                                                    <li><a href="#">casual shoes</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">watches</a></li>
                                            <li> <a href="#">Accessories</a>
                                                <ul>
                                                    <li><a href="#">fashion jewellery</a></li>
                                                    <li><a href="#">caps and hats</a></li>
                                                    <li><a href="#">precious jewellery</a></li>
                                                    <li> <a href="#">more..</a>
                                                        <ul>
                                                            <li><a href="#">necklaces</a></li>
                                                            <li><a href="#">earrings</a></li>
                                                            <li><a href="#">wrist wear</a></li>
                                                            <li> <a href="#">accessories</a>
                                                                <ul>
                                                                    <li><a href="#">ties</a></li>
                                                                    <li><a href="#">cufflinks</a></li>
                                                                    <li><a href="#">pockets squares</a></li>
                                                                    <li><a href="#">helmets</a></li>
                                                                    <li><a href="#">scarves</a></li>
                                                                    <li> <a href="#">more...</a>
                                                                        <ul>
                                                                            <li><a href="#">accessory gift
                                                                                    sets</a></li>
                                                                            <li><a href="#">travel
                                                                                    accessories</a></li>
                                                                            <li><a href="#">phone cases</a></li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li><a href="#">belts & more</a></li>
                                                            <li><a href="#">wearable</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="#">house of design</a></li>
                                            <li> <a href="#">beauty & personal care</a>
                                                <ul>
                                                    <li><a href="#">makeup</a></li>
                                                    <li><a href="#">skincare</a></li>
                                                    <li><a href="#">premium beaty</a></li>
                                                    <li> <a href="#">more</a>
                                                        <ul>
                                                            <li><a href="#">fragrances</a></li>
                                                            <li><a href="#">luxury beauty</a></li>
                                                            <li><a href="#">hair care</a></li>
                                                            <li><a href="#">tools & brushes</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="#">home & decor</a></li>
                                            <li><a href="#">kitchen</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="main-menu-right">
                                <nav id="main-nav">
                                    <div class="toggle-nav"><i class="fa fa-bars sidebar-bar"></i></div>
                                    <ul id="main-menu" class="sm pixelstrap sm-horizontal">
                                        <li>
                                            <div class="mobile-back text-end">Back<i class="fa fa-angle-right ps-2"
                                                    aria-hidden="true"></i></div>
                                        </li>
                                        <li><a href="index.html">Home</a></li>
                                        <li class="mega" id="hover-cls">
                                            <a href="#">feature <div class="lable-nav">new</div></a>
                                            <ul class="mega-menu full-mega-menu">
                                                <li>
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title">
                                                                        <h5>invoice template</h5>
                                                                    </div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            <li><a target="_blank"
                                                                                    href="invoice-1.html">invoice
                                                                                    1</a></li>
                                                                            <li><a target="_blank"
                                                                                    href="invoice-2.html">invoice
                                                                                    2</a></li>
                                                                            <li><a target="_blank"
                                                                                    href="invoice-3.html">invoice
                                                                                    3</a></li>
                                                                            <li><a target="_blank"
                                                                                    href="invoice-4.html">invoice
                                                                                    4</a></li>
                                                                            <li><a target="_blank"
                                                                                    href="invoice-5.html">invoice
                                                                                    5</a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="menu-title mt-2">
                                                                        <h5>elements</h5>
                                                                    </div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            <li><a href="elements.html">
                                                                                    elements page<i
                                                                                        class="ms-2 fa fa-bolt icon-trend"
                                                                                        aria-hidden="true"></i>
                                                                                </a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title">
                                                                        <h5>email template</h5>
                                                                    </div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            <li><a target="_blank"
                                                                                    href="../email-template/welcome.html">welcome</a>
                                                                            </li>
                                                                            <li><a target="_blank"
                                                                                    href="../email-template/new-product-announcement.html">announcement</a>
                                                                            </li>
                                                                            <li><a target="_blank"
                                                                                    href="../email-template/abandonment-email.html">abandonment</a>
                                                                            </li>
                                                                            <li><a target="_blank"
                                                                                    href="../email-template/offer.html">offer</a>
                                                                            </li>
                                                                            <li><a target="_blank"
                                                                                    href="../email-template/offer-2.html">offer
                                                                                    2</a></li>
                                                                            <li><a target="_blank"
                                                                                    href="../email-template/product-review.html">review</a>
                                                                            </li>
                                                                            <li><a target="_blank"
                                                                                    href="../email-template/featured-products.html">featured
                                                                                    product</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title">
                                                                        <h5>email template</h5>
                                                                    </div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            <li><a target="_blank"
                                                                                    href="../email-template/black-friday.html">black
                                                                                    friday</a></li>
                                                                            <li><a target="_blank"
                                                                                    href="../email-template/christmas.html">christmas</a>
                                                                            </li>
                                                                            <li><a target="_blank"
                                                                                    href="../email-template/cyber-monday.html">cyber-monday</a>
                                                                            </li>
                                                                            <li><a target="_blank"
                                                                                    href="../email-template/flash-sale.html">flash
                                                                                    sale</a></li>
                                                                            <li><a target="_blank"
                                                                                    href="../email-template/email-order-success.html">order
                                                                                    success</a></li>
                                                                            <li><a target="_blank"
                                                                                    href="../email-template/email-order-success-two.html">order
                                                                                    success 2</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title">
                                                                        <h5>cookie bar</h5>
                                                                    </div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            <li><a href="index.html">bottom<i
                                                                                        class="ms-2 fa fa-bolt icon-trend"
                                                                                        aria-hidden="true"></i></a>
                                                                            </li>
                                                                            <li><a href="fashion-4.html">bottom
                                                                                    left</a>
                                                                            </li>
                                                                            <li><a href="bicycle.html">bottom right</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="menu-title mt-2">
                                                                        <h5>search</h5>
                                                                    </div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            <li><a href="marketplace-demo-2.html">ajax
                                                                                    search<i
                                                                                        class="ms-2 fa fa-bolt icon-trend"
                                                                                        aria-hidden="true"></i></a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title">
                                                                        <h5>model</h5>
                                                                    </div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            <li><a href="index.html">Newsletter</a>
                                                                            </li>
                                                                            <li><a href="index.html">exit<i
                                                                                        class="ms-2 fa fa-bolt icon-trend"
                                                                                        aria-hidden="true"></i></a>
                                                                            </li>
                                                                            <li><a href="christmas.html">christmas</a>
                                                                            </li>
                                                                            <li><a href="furniture-3.html">black
                                                                                    friday</a></li>
                                                                            <li><a href="fashion-4.html">cyber
                                                                                    monday</a></li>
                                                                            <li><a href="marketplace-demo-3.html">new
                                                                                    year</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title">
                                                                        <h5>add to cart</h5>
                                                                    </div>
                                                                    <div class="menu-content">
                                                                        <ul>
                                                                            <li><a href="nursery.html">cart modal
                                                                                    popup</a></li>
                                                                            <li><a href="vegetables.html">qty. counter
                                                                                    <i class="fa fa-bolt icon-trend"
                                                                                        aria-hidden="true"></i></a>
                                                                            </li>
                                                                            <li><a href="bags.html">cart top</a></li>
                                                                            <li><a href="shoes.html">cart bottom</a>
                                                                            </li>
                                                                            <li><a href="watch.html">cart left</a></li>
                                                                            <li><a href="tools.html">cart right</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <img src="../assets/images/menu-banner.jpg"
                                                                    class="img-fluid mega-img">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">shop</a>
                                            <ul>
                                                <li><a href="category-page(vegetables).html">tab style<span
                                                            class="new-tag">new</span></a></li>
                                                <li><a href="category-page(top-filter).html">top filter</a></li>
                                                <li><a href="category-page(modern).html">modern</a></li>
                                                <li><a href="category-page.html">left sidebar</a></li>
                                                <li><a href="category-page(right).html">right sidebar</a></li>
                                                <li><a href="category-page(no-sidebar).html">no sidebar</a></li>
                                                <li><a href="category-page(sidebar-popup).html">sidebar popup</a>
                                                </li>
                                                <li><a href="category-page(metro).html">metro</a></li>
                                                <li><a href="category-page(full-width).html">full width</a></li>
                                                <li><a href="category-page(infinite-scroll).html">infinite
                                                        scroll</a></li>
                                                <li><a href=category-page(3-grid).html>three grid</a></li>
                                                <li><a href="category-page(6-grid).html">six grid</a></li>
                                                <li><a href="category-page(list-view).html">list view</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">product</a>
                                            <ul>
                                                <li><a href="product-page(360-view).html">360 view <span
                                                            class="new-tag">new</span></a></li>
                                                <li><a href="product-page(video-thumbnail).html">video
                                                        thumbnail<span class="new-tag">new</span></a></li>
                                                <li>
                                                    <a href="#">sidebar</a>
                                                    <ul>
                                                        <li><a href="product-page.html">left sidebar</a></li>
                                                        <li><a href="product-page(right-sidebar).html">right
                                                                sidebar</a>
                                                        </li>
                                                        <li><a href="product-page(no-sidebar).html">no sidebar</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="#">thumbnail image</a>
                                                    <ul>
                                                        <li><a href="product-page(left-image).html">left image</a>
                                                        </li>
                                                        <li><a href="product-page(right-image).html">right image</a>
                                                        </li>
                                                        <li><a href="product-page(image-outside).html">image
                                                                outside</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="#">three column</a>
                                                    <ul>
                                                        <li><a href="product-page(3-col-left).html">thumbnail
                                                                left</a>
                                                        </li>
                                                        <li><a href="product-page(3-col-right).html">thumbnail
                                                                right</a>
                                                        </li>
                                                        <li><a href="product-page(3-column).html">thubnail
                                                                bottom</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><a href="product-page(4-image).html">four image</a></li>
                                                <li><a href="product-page(sticky).html">sticky</a></li>
                                                <li><a href="product-page(accordian).html">accordian</a></li>
                                                <li><a href="product-page(bundle).html">bundle</a></li>
                                                <li><a href="product-page(image-swatch).html">image swatch </a></li>
                                                <li><a href="product-page(vertical-tab).html">vertical tab</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">pages</a>
                                            <ul>
                                                <li>
                                                    <a href="#">vendor</a>
                                                    <ul>
                                                        <li><a href="vendor-dashboard.html">vendor dashboard</a>
                                                        </li>
                                                        <li><a href="vendor-profile.html">vendor profile</a></li>
                                                        <li><a href="become-vendor.html">become vendor</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="#">account</a>
                                                    <ul>
                                                        <li><a href="wishlist.html">wishlist</a></li>
                                                        <li><a href="cart.html">cart</a></li>
                                                        <li><a href="dashboard.html">Dashboard</a></li>
                                                        <li><a href="login.html">login</a></li>
                                                        <li><a href="register.html">register</a></li>
                                                        <li><a href="contact.html">contact</a></li>
                                                        <li><a href="forget_pwd.html">forget password</a></li>
                                                        <li><a href="profile.html">profile</a></li>
                                                        <li><a href="checkout.html">checkout</a></li>
                                                        <li><a href="order-success.html">order success</a></li>
                                                        <li><a href="order-tracking.html">order tracking<span
                                                                    class="new-tag">new</span></a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="#">portfolio</a>
                                                    <ul>
                                                        <li><a href="">grid</a>
                                                            <ul>
                                                                <li><a href="grid-2-col.html">grid
                                                                        2</a></li>
                                                                <li><a href="grid-3-col.html">grid
                                                                        3</a></li>
                                                                <li><a href="grid-4-col.html">grid
                                                                        4</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="">masonry</a>
                                                            <ul>
                                                                <li><a href="masonary-2-grid.html">grid 2</a></li>
                                                                <li><a href="masonary-3-grid.html">grid 3</a></li>
                                                                <li><a href="masonary-4-grid.html">grid 4</a></li>
                                                                <li><a href="masonary-fullwidth.html">full width</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><a href="about-page.html">about us</a></li>
                                                <li><a href="search.html">search</a></li>
                                                <li><a href="review.html">review</a>
                                                </li>
                                                <li>
                                                    <a href="#">compare</a>
                                                    <ul>
                                                        <li><a href="compare.html">compare</a></li>
                                                        <li><a href="compare-2.html">compare-2</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="collection.html">collection</a></li>
                                                <li><a href="lookbook.html">lookbook</a></li>
                                                <li><a href="sitemap.html">site map</a>
                                                </li>
                                                <li><a href="404.html">404</a></li>
                                                <li><a href="coming-soon.html">coming soon</a></li>
                                                <li><a href="faq.html">FAQ</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">blog</a>
                                            <ul>
                                                <li><a href="blog-page.html">left sidebar</a></li>
                                                <li><a href="blog(right-sidebar).html">right sidebar</a></li>
                                                <li><a href="blog(no-sidebar).html">no sidebar</a></li>
                                                <li><a href="blog-details.html">blog details</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="absolute-logo">
                            <div class="brand-logo">
                                <a href="#"><img alt="" src="{{ asset('frontend-theme/assets/images/icon/logo/5.png') }}"></a>
                            </div>
                        </div>
                        <div class="">
                            <div class="menu-right pull-right">
                                <div>
                                    <div class="icon-nav">
                                        <ul>
                                            <li class="onhover-div mobile-search">
                                                <div><img alt=""
                                                        src="{{ asset('frontend-theme/assets/images/icon/layout4/search.png') }}"
                                                        onclick="openSearch()" class="img-fluid blur-up lazyload"> <i
                                                        class="ti-search" onclick="openSearch()"></i></div>
                                                <div id="search-overlay" class="search-overlay">
                                                    <div> <span class="closebtn" onclick="closeSearch()"
                                                            title="Close Overlay">×</span>
                                                        <div class="overlay-content">
                                                            <div class="container">
                                                                <div class="row">
                                                                    <div class="col-xl-12">
                                                                        <form>
                                                                            <div class="form-group">
                                                                                <input type="text"
                                                                                    class="form-control"
                                                                                    id="exampleInputPassword1"
                                                                                    placeholder="Search a Product">
                                                                            </div>
                                                                            <button type="submit"
                                                                                class="btn btn-primary"><i
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
                                                <div><img alt=""
                                                        src="{{ asset('frontend-theme/assets/images/icon/layout4/setting.png') }}"
                                                        class="img-fluid blur-up lazyload"> <i
                                                        class="ti-settings"></i>
                                                </div>
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
                                                <div><img alt="" src="{{ asset('frontend-theme/assets/images/icon/layout4/cart.png') }}"
                                                        class="img-fluid blur-up lazyload"> <i
                                                        class="ti-shopping-cart"></i></div>
                                                <ul class="show-div shopping-cart">
                                                    <li>
                                                        <div class="media">
                                                            <a href="#"><img alt="" class="me-3"
                                                                    src="../assets/images/bags/1.jpg"></a>
                                                            <div class="media-body">
                                                                <a href="#">
                                                                    <h4>item name</h4>
                                                                </a>
                                                                <h4><span>1 x $ 299.00</span></h4>
                                                            </div>
                                                        </div>
                                                        <div class="close-circle"><a href="#"><i
                                                                    class="fa fa-times" aria-hidden="true"></i></a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="media">
                                                            <a href="#"><img alt="" class="me-3"
                                                                    src="../assets/images/bags/9.jpg"></a>
                                                            <div class="media-body">
                                                                <a href="#">
                                                                    <h4>item name</h4>
                                                                </a>
                                                                <h4><span>1 x $ 299.00</span></h4>
                                                            </div>
                                                        </div>
                                                        <div class="close-circle"><a href="#"><i
                                                                    class="fa fa-times" aria-hidden="true"></i></a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="total">
                                                            <h5>subtotal : <span>$299.00</span></h5>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="buttons"><a href="cart.html"
                                                                class="view-cart">view
                                                                cart</a> <a href="#"
                                                                class="checkout">checkout</a></div>
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
        </div>
    </header>
    <!-- header end -->


    <!-- home banner start -->
    <div class="container banner-slider">
        <div class="row">
            <div class="col-md-7"><a href="#"><img src="{{ asset('frontend-theme/assets/images/electronics/1.jpg') }}"
                        class="img-fluid blur-up lazyload height-banner" alt=""></a></div>
            <div class="col-md-5">
                <div class="row home-banner">
                    <div class="col-12">
                        <a href="#"><img src="{{ asset('frontend-theme/assets/images/electronics/2.jpg') }}"
                                class="img-fluid blur-up lazyload" alt=""></a>
                    </div>
                    <div class="col-12">
                        <a href="#"><img src="{{ asset('frontend-theme/assets/images/electronics/4.jpg') }}"
                                class="img-fluid blur-up lazyload" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- home banner end  -->


    <!-- collection banner -->
    <section class="banner-padding banner-goggles ratio2_1">
        <div class="container">
            <div class="row partition3">
                <div class="col-md-4">
                    <a href="#">
                        <div class="collection-banner p-right text-end">
                            <div class="img-part">
                                <img src="{{ asset('frontend-theme/assets/images/electronics/5.jpg') }}"
                                    class="img-fluid blur-up lazyload bg-img" alt="">
                            </div>
                            <div class="contain-banner banner-3">
                                <div>
                                    <h4>10% off</h4>
                                    <h2>speaker</h2>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#">
                        <div class="collection-banner p-right text-end">
                            <div class="img-part">
                                <img src="{{ asset('frontend-theme/assets/images/electronics/6.jpg') }}"
                                    class="img-fluid blur-up lazyload bg-img" alt="">
                            </div>
                            <div class="contain-banner banner-3">
                                <div>
                                    <h4>10% off</h4>
                                    <h2>earplug</h2>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#">
                        <div class="collection-banner p-right text-end">
                            <div class="img-part">
                                <img src="{{ asset('frontend-theme/assets/images/electronics/7.jpg') }}"
                                    class="img-fluid blur-up lazyload bg-img" alt="">
                            </div>
                            <div class="contain-banner banner-3">
                                <div>
                                    <h4>50% off</h4>
                                    <h2>best deal</h2>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- collection banner end -->


    <!-- slider tab  -->
    <section class="section-b-space ratio_asos">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="theme-tab">
                        <ul class="tabs tab-title2">
                            <li class="current"><a href="tab-1">new arrival</a></li>
                            <li class=""><a href="tab-2">top sell</a></li>
                            <li class=""><a href="tab-3">featured</a></li>
                        </ul>
                        <div class="tab-content-cls no-color-varient">
                            <div id="tab-1" class="tab-content active default">
                                <div class="row no-slider">
                                    <div class="product-box product-wrap">
                                        <div class="img-wrapper">
                                            <div class="front">
                                                <a href="product-page(no-sidebar).html"><img alt=""
                                                        src="{{ asset('frontend-theme/assets/images/electronics/product/26.jpg') }}"
                                                        class="img-fluid blur-up lazyload bg-img"></a>
                                            </div>
                                            <div class="back">
                                                <a href="product-page(no-sidebar).html"><img alt=""
                                                        src="{{ asset('frontend-theme/assets/images/electronics/product/2.jpg') }}"
                                                        class="img-fluid blur-up lazyload bg-img"></a>
                                            </div>
                                            <div class="cart-detail">
                                                <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                    title="Add to cart"><i class="ti-shopping-cart"></i></button> <a
                                                    href="javascript:void(0)" title="Add to Wishlist"><i
                                                        class="ti-heart" aria-hidden="true"></i></a> <a
                                                    href="#" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view" title="Quick View"><i
                                                        class="ti-search" aria-hidden="true"></i></a>
                                                <a href="compare.html" title="Compare"><i class="ti-reload"
                                                        aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i>
                                            </div>
                                            <a href="product-page(no-sidebar).html">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h4>$500.00</h4>
                                        </div>
                                    </div>
                                    <div class="product-box product-wrap">
                                        <div class="img-wrapper">
                                            <div class="front">
                                                <a href="product-page(no-sidebar).html"><img alt=""
                                                        src="{{ asset('frontend-theme/assets/images/electronics/product/27.jpg') }}"
                                                        class="img-fluid blur-up lazyload bg-img"></a>
                                            </div>
                                            <div class="back">
                                                <a href="product-page(no-sidebar).html"><img alt=""
                                                        src="{{ asset('frontend-theme/assets/images/electronics/product/4.jpg') }}"
                                                        class="img-fluid blur-up lazyload bg-img"></a>
                                            </div>
                                            <div class="cart-detail">
                                                <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                    title="Add to cart"><i class="ti-shopping-cart"></i></button> <a
                                                    href="javascript:void(0)" title="Add to Wishlist"><i
                                                        class="ti-heart" aria-hidden="true"></i></a> <a
                                                    href="#" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view" title="Quick View"><i
                                                        class="ti-search" aria-hidden="true"></i></a>
                                                <a href="compare.html" title="Compare"><i class="ti-reload"
                                                        aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i>
                                            </div>
                                            <a href="product-page(no-sidebar).html">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h4>$500.00 <del>$600.00</del></h4>
                                        </div>
                                    </div>
                                    <div class="product-box product-wrap">
                                        <div class="img-wrapper">
                                            <div class="front">
                                                <a href="product-page(no-sidebar).html"><img alt=""
                                                        src="{{ asset('frontend-theme/assets/images/electronics/product/28.jpg') }}"
                                                        class="img-fluid blur-up lazyload bg-img"></a>
                                            </div>
                                            <div class="back">
                                                <a href="product-page(no-sidebar).html"><img alt=""
                                                        src="{{ asset('frontend-theme/assets/images/electronics/product/6.jpg') }}"
                                                        class="img-fluid blur-up lazyload bg-img"></a>
                                            </div>
                                            <div class="cart-detail">
                                                <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                    title="Add to cart"><i class="ti-shopping-cart"></i></button> <a
                                                    href="javascript:void(0)" title="Add to Wishlist"><i
                                                        class="ti-heart" aria-hidden="true"></i></a> <a
                                                    href="#" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view" title="Quick View"><i
                                                        class="ti-search" aria-hidden="true"></i></a>
                                                <a href="compare.html" title="Compare"><i class="ti-reload"
                                                        aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i>
                                            </div>
                                            <a href="product-page(no-sidebar).html">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h4>$500.00</h4>
                                        </div>
                                    </div>
                                    <div class="product-box product-wrap">
                                        <div class="img-wrapper">
                                            <div class="lable-block"><span class="lable3">new</span></div>
                                            <div class="front">
                                                <a href="product-page(no-sidebar).html"><img alt=""
                                                        src="{{ asset('frontend-theme/assets/images/electronics/product/29.jpg') }}"
                                                        class="img-fluid blur-up lazyload bg-img"></a>
                                            </div>
                                            <div class="back">
                                                <a href="product-page(no-sidebar).html"><img alt=""
                                                        src="{{ asset('frontend-theme/assets/images/electronics/product/8.jpg') }}"
                                                        class="img-fluid blur-up lazyload bg-img"></a>
                                            </div>
                                            <div class="cart-detail">
                                                <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                    title="Add to cart"><i class="ti-shopping-cart"></i></button> <a
                                                    href="javascript:void(0)" title="Add to Wishlist"><i
                                                        class="ti-heart" aria-hidden="true"></i></a> <a
                                                    href="#" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view" title="Quick View"><i
                                                        class="ti-search" aria-hidden="true"></i></a>
                                                <a href="compare.html" title="Compare"><i class="ti-reload"
                                                        aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i>
                                            </div>
                                            <a href="product-page(no-sidebar).html">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h4>$500.00</h4>
                                        </div>
                                    </div>
                                    <div class="product-box product-wrap">
                                        <div class="img-wrapper">
                                            <div class="front">
                                                <a href="product-page(no-sidebar).html"><img alt=""
                                                        src="{{ asset('frontend-theme/assets/images/electronics/product/30.jpg') }}"
                                                        class="img-fluid blur-up lazyload bg-img"></a>
                                            </div>
                                            <div class="back">
                                                <a href="product-page(no-sidebar).html"><img alt=""
                                                        src="{{ asset('frontend-theme/assets/images/electronics/product/8.jpg') }}"
                                                        class="img-fluid blur-up lazyload bg-img"></a>
                                            </div>
                                            <div class="cart-detail">
                                                <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                    title="Add to cart"><i class="ti-shopping-cart"></i></button> <a
                                                    href="javascript:void(0)" title="Add to Wishlist"><i
                                                        class="ti-heart" aria-hidden="true"></i></a> <a
                                                    href="#" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view" title="Quick View"><i
                                                        class="ti-search" aria-hidden="true"></i></a>
                                                <a href="compare.html" title="Compare"><i class="ti-reload"
                                                        aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i>
                                            </div>
                                            <a href="product-page(no-sidebar).html">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h4>$500.00</h4>
                                        </div>
                                    </div>
                                    <div class="product-box product-wrap">
                                        <div class="img-wrapper">
                                            <div class="front">
                                                <a href="product-page(no-sidebar).html"><img alt=""
                                                        src="{{ asset('frontend-theme/assets/images/electronics/product/31.jpg') }}"
                                                        class="img-fluid blur-up lazyload bg-img"></a>
                                            </div>
                                            <div class="back">
                                                <a href="product-page(no-sidebar).html"><img alt=""
                                                        src="{{ asset('frontend-theme/assets/images/electronics/product/10.jpg') }}"
                                                        class="img-fluid blur-up lazyload bg-img"></a>
                                            </div>
                                            <div class="cart-detail">
                                                <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                    title="Add to cart"><i class="ti-shopping-cart"></i></button> <a
                                                    href="javascript:void(0)" title="Add to Wishlist"><i
                                                        class="ti-heart" aria-hidden="true"></i></a> <a
                                                    href="#" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view" title="Quick View"><i
                                                        class="ti-search" aria-hidden="true"></i></a>
                                                <a href="compare.html" title="Compare"><i class="ti-reload"
                                                        aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i>
                                            </div>
                                            <a href="product-page(no-sidebar).html">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h4>$500.00 <del>$600.00</del></h4>
                                        </div>
                                    </div>
                                    <div class="product-box product-wrap">
                                        <div class="img-wrapper">
                                            <div class="lable-block"><span class="lable3">new</span></div>
                                            <div class="front">
                                                <a href="product-page(no-sidebar).html"><img alt=""
                                                        src="{{ asset('frontend-theme/assets/images/electronics/product/32.jpg') }}"
                                                        class="img-fluid blur-up lazyload bg-img"></a>
                                            </div>
                                            <div class="back">
                                                <a href="product-page(no-sidebar).html"><img alt=""
                                                        src="{{ asset('frontend-theme/assets/images/electronics/product/2.jpg') }}"
                                                        class="img-fluid blur-up lazyload bg-img"></a>
                                            </div>
                                            <div class="cart-detail">
                                                <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                    title="Add to cart"><i class="ti-shopping-cart"></i></button> <a
                                                    href="javascript:void(0)" title="Add to Wishlist"><i
                                                        class="ti-heart" aria-hidden="true"></i></a> <a
                                                    href="#" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view" title="Quick View"><i
                                                        class="ti-search" aria-hidden="true"></i></a>
                                                <a href="compare.html" title="Compare"><i class="ti-reload"
                                                        aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i>
                                            </div>
                                            <a href="product-page(no-sidebar).html">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h4>$500.00</h4>
                                        </div>
                                    </div>
                                    <div class="product-box product-wrap">
                                        <div class="img-wrapper">
                                            <div class="front">
                                                <a href="product-page(no-sidebar).html"><img alt=""
                                                        src="{{ asset('frontend-theme/assets/images/electronics/product/33.jpg') }}"
                                                        class="img-fluid blur-up lazyload bg-img"></a>
                                            </div>
                                            <div class="back">
                                                <a href="product-page(no-sidebar).html"><img alt=""
                                                        src="{{ asset('frontend-theme/assets/images/electronics/product/4.jpg') }}"
                                                        class="img-fluid blur-up lazyload bg-img"></a>
                                            </div>
                                            <div class="cart-detail">
                                                <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                    title="Add to cart"><i class="ti-shopping-cart"></i></button> <a
                                                    href="javascript:void(0)" title="Add to Wishlist"><i
                                                        class="ti-heart" aria-hidden="true"></i></a> <a
                                                    href="#" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view" title="Quick View"><i
                                                        class="ti-search" aria-hidden="true"></i></a>
                                                <a href="compare.html" title="Compare"><i class="ti-reload"
                                                        aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i>
                                            </div>
                                            <a href="product-page(no-sidebar).html">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h4>$500.00</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tab-2" class="tab-content">
                                <div class="no-slider row">
                                    <div class="product-box product-wrap">
                                        <div class="img-wrapper">
                                            <div class="front">
                                                <a href="product-page(no-sidebar).html"><img alt=""
                                                        src="{{ asset('frontend-theme/assets/images/electronics/product/7.jpg') }}"
                                                        class="img-fluid blur-up lazyload bg-img"></a>
                                            </div>
                                            <div class="back">
                                                <a href="product-page(no-sidebar).html"><img alt=""
                                                        src="{{ asset('frontend-theme/assets/images/electronics/product/8.jpg') }}"
                                                        class="img-fluid blur-up lazyload bg-img"></a>
                                            </div>
                                            <div class="cart-detail">
                                                <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                    title="Add to cart"><i class="ti-shopping-cart"></i></button> <a
                                                    href="javascript:void(0)" title="Add to Wishlist"><i
                                                        class="ti-heart" aria-hidden="true"></i></a> <a
                                                    href="#" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view" title="Quick View"><i
                                                        class="ti-search" aria-hidden="true"></i></a>
                                                <a href="compare.html" title="Compare"><i class="ti-reload"
                                                        aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i>
                                            </div>
                                            <a href="product-page(no-sidebar).html">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h4>$500.00</h4>
                                        </div>
                                    </div>
                                    <div class="product-box product-wrap">
                                        <div class="img-wrapper">
                                            <div class="front">
                                                <a href="product-page(no-sidebar).html"><img alt=""
                                                        src="{{ asset('frontend-theme/assets/images/electronics/product/9.jpg') }}"
                                                        class="img-fluid blur-up lazyload bg-img"></a>
                                            </div>
                                            <div class="back">
                                                <a href="product-page(no-sidebar).html"><img alt=""
                                                        src="{{ asset('frontend-theme/assets/images/electronics/product/10.jpg') }}"
                                                        class="img-fluid blur-up lazyload bg-img"></a>
                                            </div>
                                            <div class="cart-detail">
                                                <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                    title="Add to cart"><i class="ti-shopping-cart"></i></button> <a
                                                    href="javascript:void(0)" title="Add to Wishlist"><i
                                                        class="ti-heart" aria-hidden="true"></i></a> <a
                                                    href="#" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view" title="Quick View"><i
                                                        class="ti-search" aria-hidden="true"></i></a>
                                                <a href="compare.html" title="Compare"><i class="ti-reload"
                                                        aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="rating"><i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i>
                                            </div>
                                            <a href="product-page(no-sidebar).html">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h4>$500.00</h4>
                                        </div>
                                    </div>
                                    <div class="product-box product-wrap">
                                        <div class="img-wrapper">
                                            <div class="lable-block"><span class="lable3">new</span></div>
                                            <div class="front">
                                                <a href="product-page(no-sidebar).html"><img alt=""
                                                        src="{{ asset('frontend-theme/assets/images/electronics/product/1.jpg') }}"
                                                        class="img-fluid blur-up lazyload bg-img"></a>
                                            </div>
                                            <div class="back">
                                                <a href="product-page(no-sidebar).html"><img alt=""
                                                        src="{{ asset('frontend-theme/assets/images/electronics/product/2.jpg') }}"
                                                        class="img-fluid blur-up lazyload bg-img"></a>
                                            </div>
                                            <div class="cart-detail">
                                                <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                    title="Add to cart"><i class="ti-shopping-cart"></i></button> <a
                                                    href="javascript:void(0)" title="Add to Wishlist"><i
                                                        class="ti-heart" aria-hidden="true"></i></a> <a
                                                    href="#" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view" title="Quick View"><i
                                                        class="ti-search" aria-hidden="true"></i></a>
                                                <a href="compare.html" title="Compare"><i class="ti-reload"
                                                        aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="rating"><i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i>
                                            </div>
                                            <a href="product-page(no-sidebar).html">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h4>$500.00</h4>
                                        </div>
                                    </div>
                                    <div class="product-box product-wrap">
                                        <div class="img-wrapper">
                                            <div class="front">
                                                <a href="product-page(no-sidebar).html"><img alt=""
                                                        src="{{ asset('frontend-theme/assets/images/electronics/product/3.jpg') }}"
                                                        class="img-fluid blur-up lazyload bg-img"></a>
                                            </div>
                                            <div class="back">
                                                <a href="product-page(no-sidebar).html"><img alt=""
                                                        src="{{ asset('frontend-theme/assets/images/electronics/product/4.jpg') }}"
                                                        class="img-fluid blur-up lazyload bg-img"></a>
                                            </div>
                                            <div class="cart-detail">
                                                <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                    title="Add to cart"><i class="ti-shopping-cart"></i></button> <a
                                                    href="javascript:void(0)" title="Add to Wishlist"><i
                                                        class="ti-heart" aria-hidden="true"></i></a> <a
                                                    href="#" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view" title="Quick View"><i
                                                        class="ti-search" aria-hidden="true"></i></a>
                                                <a href="compare.html" title="Compare"><i class="ti-reload"
                                                        aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="rating"><i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i>
                                            </div>
                                            <a href="product-page(no-sidebar).html">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h4>$500.00 <del>$600.00</del></h4>
                                        </div>
                                    </div>
                                    <div class="product-box product-wrap">
                                        <div class="img-wrapper">
                                            <div class="front">
                                                <a href="product-page(no-sidebar).html"><img alt=""
                                                        src="{{ asset('frontend-theme/assets/images/electronics/product/1.jpg') }}"
                                                        class="img-fluid blur-up lazyload bg-img"></a>
                                            </div>
                                            <div class="back">
                                                <a href="product-page(no-sidebar).html"><img alt=""
                                                        src="{{ asset('frontend-theme/assets/images/electronics/product/2.jpg') }}"
                                                        class="img-fluid blur-up lazyload bg-img"></a>
                                            </div>
                                            <div class="cart-detail">
                                                <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                    title="Add to cart"><i class="ti-shopping-cart"></i></button> <a
                                                    href="javascript:void(0)" title="Add to Wishlist"><i
                                                        class="ti-heart" aria-hidden="true"></i></a> <a
                                                    href="#" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view" title="Quick View"><i
                                                        class="ti-search" aria-hidden="true"></i></a>
                                                <a href="compare.html" title="Compare"><i class="ti-reload"
                                                        aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="rating"><i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i>
                                            </div>
                                            <a href="product-page(no-sidebar).html">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h4>$500.00</h4>
                                        </div>
                                    </div>
                                    <div class="product-box product-wrap">
                                        <div class="img-wrapper">
                                            <div class="front">
                                                <a href="product-page(no-sidebar).html"><img alt=""
                                                        src="{{ asset('frontend-theme/assets/images/electronics/product/3.jpg') }}"
                                                        class="img-fluid blur-up lazyload bg-img"></a>
                                            </div>
                                            <div class="back">
                                                <a href="product-page(no-sidebar).html"><img alt=""
                                                        src="{{ asset('frontend-theme/assets/images/electronics/product/4.jpg') }}"
                                                        class="img-fluid blur-up lazyload bg-img"></a>
                                            </div>
                                            <div class="cart-detail">
                                                <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                    title="Add to cart"><i class="ti-shopping-cart"></i></button> <a
                                                    href="javascript:void(0)" title="Add to Wishlist"><i
                                                        class="ti-heart" aria-hidden="true"></i></a> <a
                                                    href="#" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view" title="Quick View"><i
                                                        class="ti-search" aria-hidden="true"></i></a>
                                                <a href="compare.html" title="Compare"><i class="ti-reload"
                                                        aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="rating"><i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i>
                                            </div>
                                            <a href="product-page(no-sidebar).html">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h4>$500.00</h4>
                                        </div>
                                    </div>
                                    <div class="product-box product-wrap">
                                        <div class="img-wrapper">
                                            <div class="front">
                                                <a href="product-page(no-sidebar).html"><img alt=""
                                                        src="{{ asset('frontend-theme/assets/images/electronics/product/5.jpg') }}"
                                                        class="img-fluid blur-up lazyload bg-img"></a>
                                            </div>
                                            <div class="back">
                                                <a href="product-page(no-sidebar).html"><img alt=""
                                                        src="{{ asset('frontend-theme/assets/images/electronics/product/6.jpg') }}"
                                                        class="img-fluid blur-up lazyload bg-img"></a>
                                            </div>
                                            <div class="cart-detail">
                                                <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                    title="Add to cart"><i class="ti-shopping-cart"></i></button> <a
                                                    href="javascript:void(0)" title="Add to Wishlist"><i
                                                        class="ti-heart" aria-hidden="true"></i></a> <a
                                                    href="#" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view" title="Quick View"><i
                                                        class="ti-search" aria-hidden="true"></i></a>
                                                <a href="compare.html" title="Compare"><i class="ti-reload"
                                                        aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="rating"><i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i>
                                            </div>
                                            <a href="product-page(no-sidebar).html">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h4>$500.00</h4>
                                        </div>
                                    </div>
                                    <div class="product-box product-wrap">
                                        <div class="img-wrapper">
                                            <div class="lable-block"><span class="lable3">new</span></div>
                                            <div class="front">
                                                <a href="product-page(no-sidebar).html"><img alt=""
                                                        src="{{ asset('frontend-theme/assets/images/electronics/product/7.jpg') }}"
                                                        class="img-fluid blur-up lazyload bg-img"></a>
                                            </div>
                                            <div class="back">
                                                <a href="product-page(no-sidebar).html"><img alt=""
                                                        src="{{ asset('frontend-theme/assets/images/electronics/product/8.jpg') }}"
                                                        class="img-fluid blur-up lazyload bg-img"></a>
                                            </div>
                                            <div class="cart-detail">
                                                <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                    title="Add to cart"><i class="ti-shopping-cart"></i></button> <a
                                                    href="javascript:void(0)" title="Add to Wishlist"><i
                                                        class="ti-heart" aria-hidden="true"></i></a> <a
                                                    href="#" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view" title="Quick View"><i
                                                        class="ti-search" aria-hidden="true"></i></a>
                                                <a href="compare.html" title="Compare"><i class="ti-reload"
                                                        aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="rating"><i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i>
                                            </div>
                                            <a href="product-page(no-sidebar).html">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h4>$500.00</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tab-3" class="tab-content">
                                <div class="no-slider row">
                                    <div class="product-box product-wrap">
                                        <div class="img-wrapper">
                                            <div class="front">
                                                <a href="product-page(no-sidebar).html"><img alt=""
                                                        src="{{ asset('frontend-theme/assets/images/electronics/product/3.jpg') }}"
                                                        class="img-fluid blur-up lazyload bg-img"></a>
                                            </div>
                                            <div class="back">
                                                <a href="product-page(no-sidebar).html"><img alt=""
                                                        src="{{ asset('frontend-theme/assets/images/electronics/product/4.jpg') }}"
                                                        class="img-fluid blur-up lazyload bg-img"></a>
                                            </div>
                                            <div class="cart-detail">
                                                <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                    title="Add to cart"><i class="ti-shopping-cart"></i></button> <a
                                                    href="javascript:void(0)" title="Add to Wishlist"><i
                                                        class="ti-heart" aria-hidden="true"></i></a> <a
                                                    href="#" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view" title="Quick View"><i
                                                        class="ti-search" aria-hidden="true"></i></a>
                                                <a href="compare.html" title="Compare"><i class="ti-reload"
                                                        aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="rating"><i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i>
                                            </div>
                                            <a href="product-page(no-sidebar).html">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h4>$500.00</h4>
                                        </div>
                                    </div>
                                    <div class="product-box product-wrap">
                                        <div class="img-wrapper">
                                            <div class="front">
                                                <a href="product-page(no-sidebar).html"><img alt=""
                                                        src="{{ asset('frontend-theme/assets/images/electronics/product/5.jpg') }}"
                                                        class="img-fluid blur-up lazyload bg-img"></a>
                                            </div>
                                            <div class="back">
                                                <a href="product-page(no-sidebar).html"><img alt=""
                                                        src="{{ asset('frontend-theme/assets/images/electronics/product/6.jpg') }}"
                                                        class="img-fluid blur-up lazyload bg-img"></a>
                                            </div>
                                            <div class="cart-detail">
                                                <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                    title="Add to cart"><i class="ti-shopping-cart"></i></button> <a
                                                    href="javascript:void(0)" title="Add to Wishlist"><i
                                                        class="ti-heart" aria-hidden="true"></i></a> <a
                                                    href="#" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view" title="Quick View"><i
                                                        class="ti-search" aria-hidden="true"></i></a>
                                                <a href="compare.html" title="Compare"><i class="ti-reload"
                                                        aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="rating"><i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i>
                                            </div>
                                            <a href="product-page(no-sidebar).html">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h4>$500.00 <del>$600.00</del></h4>
                                        </div>
                                    </div>
                                    <div class="product-box product-wrap">
                                        <div class="img-wrapper">
                                            <div class="front">
                                                <a href="product-page(no-sidebar).html"><img alt=""
                                                        src="{{ asset('frontend-theme/assets/images/electronics/product/7.jpg') }}"
                                                        class="img-fluid blur-up lazyload bg-img"></a>
                                            </div>
                                            <div class="back">
                                                <a href="product-page(no-sidebar).html"><img alt=""
                                                        src="{{ asset('frontend-theme/assets/images/electronics/product/8.jpg') }}"
                                                        class="img-fluid blur-up lazyload bg-img"></a>
                                            </div>
                                            <div class="cart-detail">
                                                <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                    title="Add to cart"><i class="ti-shopping-cart"></i></button> <a
                                                    href="javascript:void(0)" title="Add to Wishlist"><i
                                                        class="ti-heart" aria-hidden="true"></i></a> <a
                                                    href="#" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view" title="Quick View"><i
                                                        class="ti-search" aria-hidden="true"></i></a>
                                                <a href="compare.html" title="Compare"><i class="ti-reload"
                                                        aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="rating"><i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i>
                                            </div>
                                            <a href="product-page(no-sidebar).html">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h4>$500.00</h4>
                                        </div>
                                    </div>
                                    <div class="product-box product-wrap">
                                        <div class="img-wrapper">
                                            <div class="lable-block"><span class="lable3">new</span></div>
                                            <div class="front">
                                                <a href="product-page(no-sidebar).html"><img alt=""
                                                        src="{{ asset('frontend-theme/assets/images/electronics/product/9.jpg') }}"
                                                        class="img-fluid blur-up lazyload bg-img"></a>
                                            </div>
                                            <div class="back">
                                                <a href="product-page(no-sidebar).html"><img alt=""
                                                        src="{{ asset('frontend-theme/assets/images/electronics/product/10.jpg') }}"
                                                        class="img-fluid blur-up lazyload bg-img"></a>
                                            </div>
                                            <div class="cart-detail">
                                                <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                    title="Add to cart"><i class="ti-shopping-cart"></i></button> <a
                                                    href="javascript:void(0)" title="Add to Wishlist"><i
                                                        class="ti-heart" aria-hidden="true"></i></a> <a
                                                    href="#" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view" title="Quick View"><i
                                                        class="ti-search" aria-hidden="true"></i></a>
                                                <a href="compare.html" title="Compare"><i class="ti-reload"
                                                        aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="rating"><i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i>
                                            </div>
                                            <a href="product-page(no-sidebar).html">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h4>$500.00</h4>
                                        </div>
                                    </div>
                                    <div class="product-box product-wrap">
                                        <div class="img-wrapper">
                                            <div class="front">
                                                <a href="product-page(no-sidebar).html"><img alt=""
                                                        src="{{ asset('frontend-theme/assets/images/electronics/product/7.jpg') }}"
                                                        class="img-fluid blur-up lazyload bg-img"></a>
                                            </div>
                                            <div class="back">
                                                <a href="product-page(no-sidebar).html"><img alt=""
                                                        src="{{ asset('frontend-theme/assets/images/electronics/product/8.jpg') }}"
                                                        class="img-fluid blur-up lazyload bg-img"></a>
                                            </div>
                                            <div class="cart-detail">
                                                <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                    title="Add to cart"><i class="ti-shopping-cart"></i></button> <a
                                                    href="javascript:void(0)" title="Add to Wishlist"><i
                                                        class="ti-heart" aria-hidden="true"></i></a> <a
                                                    href="#" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view" title="Quick View"><i
                                                        class="ti-search" aria-hidden="true"></i></a>
                                                <a href="compare.html" title="Compare"><i class="ti-reload"
                                                        aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="rating"><i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i>
                                            </div>
                                            <a href="product-page(no-sidebar).html">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h4>$500.00</h4>
                                        </div>
                                    </div>
                                    <div class="product-box product-wrap">
                                        <div class="img-wrapper">
                                            <div class="front">
                                                <a href="product-page(no-sidebar).html"><img alt=""
                                                        src="{{ asset('frontend-theme/assets/images/electronics/product/9.jpg') }}"
                                                        class="img-fluid blur-up lazyload bg-img"></a>
                                            </div>
                                            <div class="back">
                                                <a href="product-page(no-sidebar).html"><img alt=""
                                                        src="{{ asset('frontend-theme/assets/images/electronics/product/10.jpg') }}"
                                                        class="img-fluid blur-up lazyload bg-img"></a>
                                            </div>
                                            <div class="cart-detail">
                                                <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                    title="Add to cart"><i class="ti-shopping-cart"></i></button> <a
                                                    href="javascript:void(0)" title="Add to Wishlist"><i
                                                        class="ti-heart" aria-hidden="true"></i></a> <a
                                                    href="#" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view" title="Quick View"><i
                                                        class="ti-search" aria-hidden="true"></i></a>
                                                <a href="compare.html" title="Compare"><i class="ti-reload"
                                                        aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="rating"><i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i>
                                            </div>
                                            <a href="product-page(no-sidebar).html">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h4>$500.00 <del>$600.00</del></h4>
                                        </div>
                                    </div>
                                    <div class="product-box product-wrap">
                                        <div class="img-wrapper">
                                            <div class="lable-block"><span class="lable3">new</span></div>
                                            <div class="front">
                                                <a href="product-page(no-sidebar).html"><img alt=""
                                                        src="{{ asset('frontend-theme/assets/images/electronics/product/1.jpg') }}"
                                                        class="img-fluid blur-up lazyload bg-img"></a>
                                            </div>
                                            <div class="back">
                                                <a href="product-page(no-sidebar).html"><img alt=""
                                                        src="{{ asset('frontend-theme/assets/images/electronics/product/2.jpg') }}"
                                                        class="img-fluid blur-up lazyload bg-img"></a>
                                            </div>
                                            <div class="cart-detail">
                                                <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                    title="Add to cart"><i class="ti-shopping-cart"></i></button> <a
                                                    href="javascript:void(0)" title="Add to Wishlist"><i
                                                        class="ti-heart" aria-hidden="true"></i></a> <a
                                                    href="#" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view" title="Quick View"><i
                                                        class="ti-search" aria-hidden="true"></i></a>
                                                <a href="compare.html" title="Compare"><i class="ti-reload"
                                                        aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="rating"><i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i>
                                            </div>
                                            <a href="product-page(no-sidebar).html">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h4>$500.00</h4>
                                        </div>
                                    </div>
                                    <div class="product-box product-wrap">
                                        <div class="img-wrapper">
                                            <div class="front">
                                                <a href="product-page(no-sidebar).html"><img alt=""
                                                        src="{{ asset('frontend-theme/assets/images/electronics/product/3.jpg') }}"
                                                        class="img-fluid blur-up lazyload bg-img"></a>
                                            </div>
                                            <div class="back">
                                                <a href="product-page(no-sidebar).html"><img alt=""
                                                        src="{{ asset('frontend-theme/assets/images/electronics/product/4.jpg') }}"
                                                        class="img-fluid blur-up lazyload bg-img"></a>
                                            </div>
                                            <div class="cart-detail">
                                                <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                    title="Add to cart"><i class="ti-shopping-cart"></i></button> <a
                                                    href="javascript:void(0)" title="Add to Wishlist"><i
                                                        class="ti-heart" aria-hidden="true"></i></a> <a
                                                    href="#" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view" title="Quick View"><i
                                                        class="ti-search" aria-hidden="true"></i></a>
                                                <a href="compare.html" title="Compare"><i class="ti-reload"
                                                        aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="rating"><i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i>
                                            </div>
                                            <a href="product-page(no-sidebar).html">
                                                <h6>Slim Fit Cotton Shirt</h6>
                                            </a>
                                            <h4>$500.00</h4>
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
    <!-- slider tab end -->


    <!-- footer start -->
    <footer class="footer-light">
        <div class="light-layout">
            <div class="container">
                <section class="small-section border-section border-top-0">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="subscribe">
                                <div>
                                    <h4>KNOW IT ALL FIRST!</h4>
                                    <p>Never Miss Anything From Multikart By Signing Up To Our Newsletter.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <form
                                action="https://pixelstrap.us19.list-manage.com/subscribe/post?u=5a128856334b598b395f1fc9b&amp;id=082f74cbda"
                                class="form-inline subscribe-form auth-form needs-validation" method="post"
                                id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank">
                                <div class="form-group mx-sm-3">
                                    <input type="text" class="form-control" name="EMAIL" id="mce-EMAIL"
                                        placeholder="Enter your email" required="required">
                                </div>
                                <button type="submit" class="btn btn-solid" id="mc-submit">subscribe</button>
                            </form>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <section class="section-b-space light-layout">
            <div class="container">
                <div class="row footer-theme partition-f">
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-title footer-mobile-title">
                            <h4>about</h4>
                        </div>
                        <div class="footer-contant">
                            <div class="footer-logo"><img src="../assets/images/icon/logo/5.png" alt="">
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                            <div class="footer-social">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col offset-xl-1">
                        <div class="sub-title">
                            <div class="footer-title">
                                <h4>my account</h4>
                            </div>
                            <div class="footer-contant">
                                <ul>
                                    <li><a href="#">mens</a></li>
                                    <li><a href="#">womens</a></li>
                                    <li><a href="#">clothing</a></li>
                                    <li><a href="#">accessories</a></li>
                                    <li><a href="#">featured</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="sub-title">
                            <div class="footer-title">
                                <h4>why we choose</h4>
                            </div>
                            <div class="footer-contant">
                                <ul>
                                    <li><a href="#">shipping & return</a></li>
                                    <li><a href="#">secure shopping</a></li>
                                    <li><a href="#">gallary</a></li>
                                    <li><a href="#">affiliates</a></li>
                                    <li><a href="#">contacts</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="sub-title">
                            <div class="footer-title">
                                <h4>store information</h4>
                            </div>
                            <div class="footer-contant">
                                <ul class="contact-list">
                                    <li><i class="fa fa-map-marker"></i>Multikart Demo Store, Demo store India
                                        345-659</li>
                                    <li><i class="fa fa-phone"></i>Call Us: 123-456-7898</li>
                                    <li><i class="fa fa-envelope"></i>Email Us: Support@Multikart.com</li>
                                    <li><i class="fa fa-fax"></i>Fax: 123456</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="sub-footer">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-md-6 col-sm-12">
                        <div class="footer-end">
                            <p><i class="fa fa-copyright" aria-hidden="true"></i> 2017-18 themeforest powered by
                                pixelstrap</p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6 col-sm-12">
                        <div class="payment-card-bottom">
                            <ul>
                                <li>
                                    <a href="#"><img src="{{ asset('frontend-theme/assets/images/icon/visa.png') }}"
                                            alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="{{ asset('frontend-theme/assets/images/icon/mastercard.png') }}"
                                            alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="{{ asset('frontend-theme/assets/images/icon/paypal.png') }}"
                                            alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="{{ asset('frontend-theme/assets/images/icon/american-express.png') }}"
                                            alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="{{ asset('frontend-theme/assets/images/icon/discover.png') }}"
                                            alt=""></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer end -->


    <!--modal popup start-->
    <div class="modal fade bd-example-modal-lg theme-modal" id="exampleModal" tabindex="-1" role="dialog"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body modal9">
                    <div class="container-fluid p-0">
                        <div class="row">
                            <div class="col-12">
                                <div class="modal-bg">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <div class="offer-content"><img src="../assets/images/Offer-banner.png"
                                            class="img-fluid blur-up lazyload" alt="">
                                        <h2>newsletter</h2>
                                        <form
                                            action="https://pixelstrap.us19.list-manage.com/subscribe/post?u=5a128856334b598b395f1fc9b&amp;id=082f74cbda"
                                            class="auth-form needs-validation" method="post"
                                            id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form"
                                            target="_blank">
                                            <div class="form-group mx-sm-3">
                                                <input type="text" class="form-control" name="EMAIL"
                                                    id="mce-EMAIL" placeholder="Enter your email"
                                                    required="required">
                                                <button type="submit" class="btn btn-solid"
                                                    id="mc-submit">subscribe</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--modal popup end-->


    <!-- Quick-view modal popup start-->
    <div class="modal fade bd-example-modal-lg theme-modal" id="quick-view" tabindex="-1" role="dialog"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content quick-view-modal">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <div class="row">
                        <div class="col-lg-6 col-xs-12">
                            <div class="quick-view-img"><img src="../assets/images/pro3/1.jpg" alt=""
                                    class="img-fluid blur-up lazyload"></div>
                        </div>
                        <div class="col-lg-6 rtl-text">
                            <div class="product-right">
                                <h2>Women Pink Shirt</h2>
                                <h3>$32.96</h3>
                                <ul class="color-variant">
                                    <li class="bg-light0"></li>
                                    <li class="bg-light1"></li>
                                    <li class="bg-light2"></li>
                                </ul>
                                <div class="border-product">
                                    <h6 class="product-title">product details</h6>
                                    <p>Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium
                                        doloremque laudantium</p>
                                </div>
                                <div class="product-description border-product">
                                    <div class="size-box">
                                        <ul>
                                            <li class="active"><a href="javascript:void(0)">s</a></li>
                                            <li><a href="javascript:void(0)">m</a></li>
                                            <li><a href="javascript:void(0)">l</a></li>
                                            <li><a href="javascript:void(0)">xl</a></li>
                                        </ul>
                                    </div>
                                    <h6 class="product-title">quantity</h6>
                                    <div class="qty-box">
                                        <div class="input-group"><span class="input-group-prepend"><button
                                                    type="button" class="btn quantity-left-minus"
                                                    data-type="minus" data-field=""><i
                                                        class="ti-angle-left"></i></button> </span>
                                            <input type="text" name="quantity"
                                                class="form-control input-number" value="1"> <span
                                                class="input-group-prepend"><button type="button"
                                                    class="btn quantity-right-plus" data-type="plus"
                                                    data-field=""><i class="ti-angle-right"></i></button></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-buttons"><a href="#" class="btn btn-solid">add to
                                        cart</a> <a href="#" class="btn btn-solid">view detail</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quick-view modal popup end-->


    <!-- Add to cart modal popup start-->
    <div class="modal fade bd-example-modal-lg theme-modal cart-modal" id="addtocart" tabindex="-1"
        role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body modal1">
                    <div class="container-fluid p-0">
                        <div class="row">
                            <div class="col-12">
                                <div class="modal-bg addtocart">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <div class="media">
                                        <a href="#">
                                            <img class="img-fluid blur-up lazyload pro-img"
                                                src="{{ asset('frontend-theme/assets/images/fashion/product/43.jpg') }}" alt="">
                                        </a>
                                        <div class="media-body align-self-center text-center">
                                            <a href="#">
                                                <h6>
                                                    <i class="fa fa-check"></i>Item
                                                    <span>men full sleeves</span>
                                                    <span> successfully added to your Cart</span>
                                                </h6>
                                            </a>
                                            <div class="buttons">
                                                <a href="#" class="view-cart btn btn-solid">Your cart</a>
                                                <a href="#" class="checkout btn btn-solid">Check out</a>
                                                <a href="#" class="continue btn btn-solid">Continue
                                                    shopping</a>
                                            </div>

                                            <div class="upsell_payment">
                                                <img src="../assets/images/payment_cart.png"
                                                    class="img-fluid blur-up lazyload" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-section">
                                        <div class="col-12 product-upsell text-center">
                                            <h4>Customers who bought this item also.</h4>
                                        </div>
                                        <div class="row" id="upsell_product">
                                            <div class="product-box col-sm-3 col-6">
                                                <div class="img-wrapper">
                                                    <div class="front">
                                                        <a href="#">
                                                            <img src="{{ asset('frontend-theme/assets/images/fashion/product/1.jpg') }}"
                                                                class="img-fluid blur-up lazyload mb-1"
                                                                alt="cotton top">
                                                        </a>
                                                    </div>
                                                    <div class="product-detail">
                                                        <h6><a href="#"><span>cotton top</span></a></h6>
                                                        <h4><span>$25</span></h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-box col-sm-3 col-6">
                                                <div class="img-wrapper">
                                                    <div class="front">
                                                        <a href="#">
                                                            <img src="{{ asset('frontend-theme/assets/images/fashion/product/34.jpg') }}"
                                                                class="img-fluid blur-up lazyload mb-1"
                                                                alt="cotton top">
                                                        </a>
                                                    </div>
                                                    <div class="product-detail">
                                                        <h6><a href="#"><span>cotton top</span></a></h6>
                                                        <h4><span>$25</span></h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-box col-sm-3 col-6">
                                                <div class="img-wrapper">
                                                    <div class="front">
                                                        <a href="#">
                                                            <img src="{{ asset('frontend-theme/assets/images/fashion/product/13.jpg') }}"
                                                                class="img-fluid blur-up lazyload mb-1"
                                                                alt="cotton top">
                                                        </a>
                                                    </div>
                                                    <div class="product-detail">
                                                        <h6><a href="#"><span>cotton top</span></a></h6>
                                                        <h4><span>$25</span></h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-box col-sm-3 col-6">
                                                <div class="img-wrapper">
                                                    <div class="front">
                                                        <a href="#">
                                                            <img src="{{ asset('frontend-theme/assets/images/fashion/product/19.jpg') }}"
                                                                class="img-fluid blur-up lazyload mb-1"
                                                                alt="cotton top">
                                                        </a>
                                                    </div>
                                                    <div class="product-detail">
                                                        <h6><a href="#"><span>cotton top</span></a></h6>
                                                        <h4><span>$25</span></h4>
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
    <!-- Add to cart modal popup end-->


    <!-- tap to top start -->
    <div class="tap-top">
        <div><i class="fa fa-angle-double-up"></i></div>
    </div>
    <!-- tap to top end -->


    @include('frontend.elements.script')
</body>

</html>
