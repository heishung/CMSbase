$(document).ready(function () {
    $('.all').click(function () {
        $('.all').removeClass('kind_color');
        $(this).addClass('kind_color');
    });
    $('#2').click(function () {
        $('.detail_dau_nguyenchat').show();
        $('.detail_vol').show();
        $('.detail_dau_masage').hide();
        $('.detail_dau_treoxe').hide();
        $('.detail_den').hide();

    });
    $('#3').click(function () {
        $('.detail_den').show();
        $('.detail_vol').hide();
        $('.detail_dau_nguyenchat').hide();
        $('.detail_dau_masage').hide();
        $('.detail_dau_treoxe').hide();
    });
    $('#4').click(function () {
        $('.detail_dau_masage').show();
        $('.detail_vol').hide();
        $('.detail_den').hide();
        $('.detail_vol').hide();
        $('.detail_dau_nguyenchat').hide();

        $('.detail_dau_treoxe').hide();
    });
    $('#5').click(function () {
        $('.detail_dau_treoxe').show();
        $('.detail_dau_masage').hide();
        $('.detail_vol').hide();
        $('.detail_den').hide();
        $('.detail_vol').hide();
        $('.detail_dau_nguyenchat').hide();

    });

    $(document).ready(function ($) {
        $(window).on('load', (function () {
            if ($('.content_menu').length > 0) {
                var _top = 200;
                $(window).scroll(function () {
                    var _y = $(this).scrollTop();
                    if (_y > _top) {
                        $('.content_menu').addClass('fixed');
                    } else {
                        $('.content_menu').removeClass('fixed');

                    }
                })
            }
        }));
    });

});
