jQuery(document).ready(function ($) {

    $(".mobile-menu-btn" ).click(function() {
        if( $(".header-nav").hasClass("nav-open") ) {
            $(".header-nav").removeClass("nav-open");
            $(".mobile-menu-btn").removeClass("active");
        } else {
            $(".header-nav").addClass("nav-open");
            $(".mobile-menu-btn").addClass("active");
        }
    });

    $( window ).resize(function() {
        $(".header-nav").removeClass("nav-open");
        $(".mobile-menu-btn").removeClass("active");
    });

});