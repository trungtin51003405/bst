jQuery(function($) {
    "use strict";

    var MoToTCL = window.MoToTCL || {};

    /*=======================================
    =             MAIN FUNCTION             =
    =======================================*/
    MoToTCL.fancybox = function() {
        if($('[data-fancybox]').length) {
            $('[data-fancybox]').fancybox({
                protect: true
            });
        }
            
    }
    MoToTCL.toggleMenu = function() {

        if( $(".tcl-menu").length ) {
            if( $(window).width() < 768 ) {
                $( ".tcl-menu" ).click(function(e) {
                    e.preventDefault();
                    $(this).toggleClass("tcl-menu-mobile-open")
                });
            }  
        } 
    }

    MoToTCL.isotope_grid = function() {
        if($(".tcl-grid-gallery-items").length) {
            $('.tcl-grid-gallery-items').isotope({
                itemSelector: '.grid-item',
                percentPosition: true,
            });
        }
            
    }
    MoToTCL.backToTop = function() { 
        // console.log( $(window).scrollTop() );
        $(window).scroll(function() {
            var scrollVal = $(window).scrollTop();
            if( scrollVal == 0 ) {
                $(".tcl-back-to-top-button").removeClass("tcl-back-to-top-button_visible");
            } else if ( scrollVal > $(window).height() ) {
                $(".tcl-back-to-top-button").addClass("tcl-back-to-top-button_visible");
            }
        });
        $(".tcl-back-to-top-button").click(function(){
            $('html,body').animate({
                scrollTop: 0
            }, 500);
        });
    }
    /*======================================
    =            INIT FUNCTIONS            =
    ======================================*/

    $(document).ready(function() {
        MoToTCL.fancybox();
        MoToTCL.isotope_grid();
        MoToTCL.backToTop();
        MoToTCL.toggleMenu();
    });

    /*=====  End of INIT FUNCTIONS  ======*/

    $(window).on('load', function() {
    });

    $(window).on('resize', function() {
    });

});
