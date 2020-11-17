/* Theme Name: Marg - Bootsrap Landing Page Template
   Author: ScriptEden
   Version: 1.0.0
   Created: May 2019
*/

( function( $ ) {

    "use strict";

    // Scroll script
    $('.smooth-scroll').click(function(){
        $('html, body').animate({
            scrollTop: $( $(this).attr('href') ).offset().top - 50
        }, 1000);
        return false;
    });

    // Sticky Navbar
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();

        if (scroll >= 50) {
            $(".sticky").addClass("nav-sticky");
        } else {
            $(".sticky").removeClass("nav-sticky");
        }

        // Back to top
        if ($(this).scrollTop() > 80) {
            $('.back-to-top').fadeIn();
        } else {
            $('.back-to-top').fadeOut();
        }
    });
    if (scroll > 50) {
        $(".sticky").addClass("nav-sticky");
    }

    // // Back to top
    // $('.back-to-top').click(function(){
    //     $("html, body").animate({ scrollTop: 0 }, 1000);
    //     return false;
    // });


}( jQuery ) );