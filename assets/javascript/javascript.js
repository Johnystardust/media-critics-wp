/**
 * Created by Tim van der Slik on 11/18/2015.
 */
/*
|-------------------------------------------------------------------------------------------------------------------
|   Run this function once whole page is loaded
|-------------------------------------------------------------------------------------------------------------------
*/
$(window).bind("load", function() {
    $('.preload-overlay').fadeOut(300);

    setTimeout(function(){
        $('.preload-left').addClass('loaded-left');
        $('.preload-right').addClass('loaded-right');
    }, 300);

    // After the intro animation is stopped hide the element
    setTimeout(function(){
        $('#preloader').hide();
    }, 600);
});

$(document).ready(function(){
    /*
    |-------------------------------------------------------------------------------------------------------------------
    |   Adds custom scroll-bars via niceScroll.
    |-------------------------------------------------------------------------------------------------------------------
    */
    $(document).ready(function() {
        $("html").niceScroll({zindex: 30000000000});
    });

    /*
    |-------------------------------------------------------------------------------------------------------------------
    |   Add classes to html if mobile device is used.
    |-------------------------------------------------------------------------------------------------------------------
    */
    var deviceAgent = navigator.userAgent.toLowerCase();
    var $html       = $('html');

    if (deviceAgent.match(/(iphone|ipod|ipad)/)) {
        $html.addClass('ios');
        $html.addClass('mobile');
    }

    if (deviceAgent.match(/android/)) {
        $html.addClass('android');
        $html.addClass('mobile');
    }

    if (deviceAgent.match(/blackberry/)) {
        $html.addClass('blackberry');
        $html.addClass('mobile');
    }

    if (deviceAgent.match(/(symbianos|^sonyericsson|^nokia|^samsung|^lg)/)) {
        $html.addClass('mobile');
    }

    /*
    |-------------------------------------------------------------------------------------------------------------------
    |   Animate preloader on link click.
    |-------------------------------------------------------------------------------------------------------------------
    */
    $('a').click(function(){
        if($(this).attr('target') != '_blank' && $(this).attr('href') != '#' && $(this).attr('href') != 'mailto:info@media-critics.nl'){

            $('#preloader').show();

            setTimeout(function(){
                $('.preload-left').removeClass('loaded-left');
                $('.preload-right').removeClass('loaded-right');
            }, 300);

            setTimeout(function(){
                $('.preload-overlay').fadeIn(300);
            }, 600);
        }
    });

    /*
    |-------------------------------------------------------------------------------------------------------------------
    |   Set Slider Height to 100%
    |-------------------------------------------------------------------------------------------------------------------
    */
    var $windowHeight = $(window).height();

    $('#header').css('height', $windowHeight);

    /*
    |-------------------------------------------------------------------------------------------------------------------
    |   Strategy Points Hover Function
    |-------------------------------------------------------------------------------------------------------------------
    */
    $('.strategy-point').hover(function(){
        $(this).find('.icon-wrapper').addClass('animated flip');
    }, function(){
        $(this).find('.icon-wrapper').removeClass('animated flip');
    });

    //$('.strategy-point').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
    //    $(this).find('.icon-wrapper').removeClass('animated flip');
    //});

    $('.service').hover(function(){
        $(this).find('.small-icon-wrapper').addClass('animated flip');
    }, function(){
        $(this).find('.small-icon-wrapper').removeClass('animated flip');
    });

    //$('.service').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
    //    $(this).find('.small-icon-wrapper').removeClass('animated flip');
    //});

    /*
    |-------------------------------------------------------------------------------------------------------------------
    |   Go to top Function
    |-------------------------------------------------------------------------------------------------------------------
    */
    var $scroll_top = $('.go-to-top');
    $scroll_top.hide();

    // Scroll to top fadeIn/fadeOut
    $(window).scroll(function(){
        if ($(this).scrollTop() > 400) {
            $scroll_top.show();
            $scroll_top.css('display', 'table !important');
            $scroll_top.addClass('animated bounceInDown');
            $scroll_top.removeClass('bounceOutDown');
        } else {
            $scroll_top.addClass('bounceOutDown');
            $scroll_top.removeClass('bounceInDown');
        }
    });

    // Scroll to top
    $scroll_top.click(function(){
        $("html, body").animate({ scrollTop: 0 },600);
        return false
    });

    /*
    |-------------------------------------------------------------------------------------------------------------------
    |   Maps Hover Function
    |-------------------------------------------------------------------------------------------------------------------
    */
    $('#maps').hover(function(){
        $('.gm-style div:last-child a div').css('opacity', 1);
        $('.gmnoprint').css('opacity', 1);
    }, function(){
        $('.gm-style div:last-child a div').css('opacity', 0);
        $('.gmnoprint').css('opacity', 0);
    });

    /*
    |-------------------------------------------------------------------------------------------------------------------
    |   Call Back Function
    |-------------------------------------------------------------------------------------------------------------------
    */
    var $form_callback      = $('.call-back-form');
    var $button_callback    = $('.button-callback');
    var $inner_callback     = $('.call-back-inner');
    
    $form_callback.hide();
    $button_callback.hide();

    /*
    |----------------------------------------------------------------
    |   Show the callback form.
    |----------------------------------------------------------------
    */
    $('#call-back-activate').click(function(){
        // Start the animation to slide the intro out
        $inner_callback.addClass('bounceOutRight');

        setTimeout(function(){
            // After the intro animation is stopped hide and remove the element's class
            $inner_callback.hide();
            $inner_callback.removeClass('bounceOutRight');

            // Show the form and add the animation class
            $form_callback.show();
            $form_callback.addClass('bounceInLeft');
            $button_callback.show();
            $button_callback.addClass('bounceInRight');
        }, 300);

        return false;
    });

    /*
    |----------------------------------------------------------------
    |   Hide the callback form.
    |----------------------------------------------------------------
    */
    $button_callback.click(function(){
        // Remove the animation class from the form
        $form_callback.removeClass('bounceInLeft');
        $button_callback.removeClass('bounceInRight');

        // Add the new animation class to the form
        $form_callback.addClass('bounceOutLeft');
        $button_callback.addClass('bounceOutRight');

        setTimeout(function(){
            // After the intro animation is stopped hide and remove the element's class
            $form_callback.hide();
            $form_callback.removeClass('bounceOutLeft');
            $button_callback.hide();
            $button_callback.removeClass('bounceOutRight');

            // Add the new animation class to the element and show it
            $inner_callback.show();
            $inner_callback.addClass('bounceInRight');
        }, 300);

        return false;
    });
});
