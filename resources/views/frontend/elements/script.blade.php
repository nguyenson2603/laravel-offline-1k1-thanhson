<!-- latest jquery-->
<script src="{{ asset('frontend-theme/assets/js/jquery-3.3.1.min.js') }}"></script>
<!-- menu js-->
<script src="{{ asset('frontend-theme/assets/js/menu.js') }}"></script>
<!-- lazyload js-->
<script src="{{ asset('frontend-theme/assets/js/lazysizes.min.js') }}"></script>
<!-- slick js-->
<script src="{{ asset('frontend-theme/assets/js/slick.js') }}"></script>
<!-- Bootstrap js-->
<script src="{{ asset('frontend-theme/assets/js/bootstrap.bundle.min.js') }}"></script>
<!-- Bootstrap Notification js-->
<script src="{{ asset('frontend-theme/assets/js/bootstrap-notify.min.js') }}"></script>
<!-- Theme js-->
<script src="{{ asset('frontend-theme/assets/js/script.js') }}"></script>

<script>
    $(window).on('load', function() {
        setTimeout(function() {
            $('#exampleModal').modal('show');
        }, 2500);
    });

    function openSearch() {
        document.getElementById("search-overlay").style.display = "block";
    }

    function closeSearch() {
        document.getElementById("search-overlay").style.display = "none";
    }
</script>
