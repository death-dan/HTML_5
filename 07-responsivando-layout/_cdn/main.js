$(function () {
    $('.main_header_mobile_obj').on('click', function() {
        $('.main_header_mobile_sub').toggleClass('ds_none');
        $(this).toggleClass('active');
    });
});