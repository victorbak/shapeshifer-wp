jQuery(document).ready(function ($) {

    $(".mobile-menu-btn" ).click(function() {
        if( $(".header-nav").hasClass("nav-open") ) {
            $(".header-nav").removeClass("nav-open");
        } else {
            $(".header-nav").addClass("nav-open");
        }
    });

    $( window ).resize(function() {
        $(".header-nav").removeClass("nav-open");
    });

});