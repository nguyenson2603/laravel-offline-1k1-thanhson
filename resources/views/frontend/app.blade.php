<!DOCTYPE html>
<html lang="en">

@include('frontend.elements.head')

<body class="theme-color-27">
    <!-- header start -->
    @include('frontend.elements.header')
    <!-- header end -->

    @yield('content')

    <!-- footer section start -->
    @include('frontend.elements.footer')
    <!-- footer section end -->

    <!-- tap to top -->
    <div class="tap-top top-cls">
        <div>
            <i class="fa fa-angle-double-up"></i>
        </div>
    </div>
    <!-- tap to top end -->


    @include('frontend.elements.script')

</body>

</html>
