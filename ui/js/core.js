jQuery(document).ready(function($) {

    $("#year").text((new Date).getFullYear());

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


        $('body').append('<a href="#" id="' + settings.button.substring(1) + '" title="' + settings.text + '">' + settings.text + '</a>');

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