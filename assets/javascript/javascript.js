/**
 * Created by Tim van der Slik on 11/18/2015.
 */
$(document).ready(function(){
    /*
    |-------------------------------------------------------------------------------------------------------------------
    |   Set Slider Height to 100%
    |-------------------------------------------------------------------------------------------------------------------
    */
    $windowHeight = $(window).height();

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
    $('.go-to-top').hide();

    // Scroll to top fadeIn/fadeOut
    $(window).scroll(function(){
        if ($(this).scrollTop() > 400) {
            $('.go-to-top').show();
            $('.go-to-top').css('display', 'table !important');
            $('.go-to-top').addClass('animated bounceInDown');
            $('.go-to-top').removeClass('bounceOutDown');
        } else {
            $('.go-to-top').addClass('bounceOutDown');
            $('.go-to-top').removeClass('bounceInDown');
        }
    });

    // Scroll to top
    $('.go-to-top').click(function(){
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
    $('.call-back-form').hide();
    $('.button-callback').hide();

    /*
    |----------------------------------------------------------------
    |   Show the callback form.
    |----------------------------------------------------------------
    */
    $('#call-back-activate').click(function(){
        // Start the animation to slide the intro out
        $('.call-back-inner').addClass('bounceOutRight');

        setTimeout(function(){
            // After the intro animation is stopped hide and remove the element's class
            $('.call-back-inner').hide();
            $('.call-back-inner').removeClass('bounceOutRight');

            // Show the form and add the animation class
            $('.call-back-form').show();
            $('.call-back-form').addClass('bounceInLeft');
            $('.button-callback').show();
            $('.button-callback').addClass('bounceInRight');
        }, 300);

        return false;
    });

    /*
    |----------------------------------------------------------------
    |   Hide the callback form.
    |----------------------------------------------------------------
    */
    $('.button-callback').click(function(){
        // Remove the animation class from the form
        $('.call-back-form').removeClass('bounceInLeft');
        $('.button-callback').removeClass('bounceInRight');

        // Add the new animation class to the form
        $('.call-back-form').addClass('bounceOutLeft');
        $('.button-callback').addClass('bounceOutRight');

        setTimeout(function(){
            // After the intro animation is stopped hide and remove the element's class
            $('.call-back-form').hide();
            $('.call-back-form').removeClass('bounceOutLeft');
            $('.button-callback').hide();
            $('.button-callback').removeClass('bounceOutRight');

            // Add the new animation class to the element and show it
            $('.call-back-inner').show();
            $('.call-back-inner').addClass('bounceInRight');
        }, 300);

        return false;
    });
});
