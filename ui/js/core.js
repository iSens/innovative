jQuery(document).ready(function($) {

    $("#year").text((new Date).getFullYear());

    $(window).on('load', function() {});
    var num = 0; //number of pixels before modifying styles

    $(window).bind('scroll', function() {
        if ($(window).scrollTop() > num) {
            $('.inn__main-header').addClass('fixed');
        } else {
            $('.inn__main-header').removeClass('fixed');
        }
    });

    //Back to Top


    (function() {

        var settings = {
                button: '#back-to-top',
                text: 'Back to Top',
                min: 200,
                fadeIn: 400,
                fadeOut: 400,
                scrollSpeed: 1000
            },
            oldiOS = false,
            oldAndroid = false;


        $('body').append('<span id="' + settings.button.substring(1) + '">' + settings.text + '</span>');

        $(settings.button).on('click', function(e) {
                $('html, body').animate({ scrollTop: 0 }, settings.scrollSpeed);

                e.preventDefault();
            })
            .on('mouseenter', function() {
                $(settings.button).addClass('hover');
            })
            .on('mouseleave', function() {
                $(settings.button).removeClass('hover');
            });

        $(window).scroll(function() {
            var position = $(window).scrollTop();


            if (position > settings.min)
                $(settings.button).fadeIn(settings.fadeIn);
            else
                $(settings.button).fadeOut(settings.fadeOut);
        });

    })();

});