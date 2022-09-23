$(document).ready(function () {
    $('.btn-delete').click(function () {
        const ele = $(this);
        let text = "Bạn có chắc muốn xóa!";
        if (confirm(text)) ele.parent().submit();
    });
});
