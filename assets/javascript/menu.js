/**
 * Created by Tim on 11/19/2015.
 */
$(document).ready(function(){


    $(window).scroll(function(e) {
        var $this = $(this),
            pos = $this.scrollTop();

        if(pos > 10){
            $('#menu').addClass('menu-active');
        }
        else {
            $('#menu').removeClass('menu-active');
        }
    });

});
