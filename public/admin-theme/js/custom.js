$(document).ready(function () {
    $('.btn-delete').click(function () {
        const ele = $(this);
        let text = "Bạn có chắc muốn xóa!";
        if (confirm(text)) ele.parent().submit();
    });
    $('.btn-click').click(function (e) {
        e.preventDefault();
        let data = $(this).attr('data-value');
        $('#input-group-prepend').html(data);
        $('.data-field').val(data);
        console.log(data);
    });
});
