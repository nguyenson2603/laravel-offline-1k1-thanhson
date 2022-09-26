$(window).on('load', function () {
    setTimeout(function () {
        $('#exampleModal').modal('show');
    }, 2500);
});

function openSearch() {
    document.getElementById("search-overlay").style.display = "block";
}

function closeSearch() {
    document.getElementById("search-overlay").style.display = "none";
}
