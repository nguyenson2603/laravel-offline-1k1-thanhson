$(document).ready(function () {
    $('.btn-delete').click(function (e) {
        e.preventDefault();
        let text = "Bạn có chắc muốn xóa!";
        if (confirm(text) == true) {
            $('.form-delete').submit();
        }
    });
});
