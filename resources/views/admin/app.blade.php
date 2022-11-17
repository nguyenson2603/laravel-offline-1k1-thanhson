<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
@include('admin.elements.head')

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        @include('admin.elements.navbar')
        @include('admin.elements.sidebar')
        <div class="content-wrapper">
            <div class="content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
        </div>
        @include('admin.elements.footer')
    </div>
    @include('admin.elements.script')
</body>

</html>
