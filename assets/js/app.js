(function ($) {
    'use strict'

    new WOW().init();

    $(window).on('scroll', function (event) {
        var y = $(window).scrollTop();

        if (y > 50) {
            $('.da-navbar').addClass('fixed');
        } else {
            $('.da-navbar').removeClass('fixed');
        }
    })


})(jQuery);