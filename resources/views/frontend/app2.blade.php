<!DOCTYPE html>
<html lang="en">

@include('frontend.elements2.head')

<body class="theme-color-1">
    @include('frontend.elements2.header')

    @include('frontend.elements2.breadcrumb')

    @yield('content')

    @include('frontend.elements2.footer')

    @include('frontend.elements2.script')
</body>

</html>
