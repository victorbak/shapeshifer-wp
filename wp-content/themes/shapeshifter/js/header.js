jQuery(document).ready(function ($) {

    $(".mobile-menu-btn" ).click(function() {
        if( $(".header-nav").hasClass("nav-open") ) {
            $(".header-nav").removeClass("nav-open");
            console.log('no class');
        } else {
            $(".header-nav").addClass("nav-open");
            console.log('class');
        }
    });

    $( window ).resize(function() {
        $(".header-nav").removeClass("nav-open");
    });
});