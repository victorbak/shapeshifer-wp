<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head();?>
</head>
<script>
  $(document).ready(function() {
    function fadePreloader() {
      let preloaderFadeOutTime = 600;
      var preloader = $('.loading');
      var text = $('.loading-content .text');
      preloader.show().delay(700).fadeOut(preloaderFadeOutTime);
      text.addClass("text-load");
  }
  fadePreloader();
  });
</script>
  <body <?php body_class();?>>  
  <div class="loading" 
    style="
        visibility: hidden;
        height: 100vh;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #111;
        z-index: 999999;">
    <div class="loading-container container" 
    style="height: 100%;
        display: flex;
        justify-content: center;">
        <div class="loading-content" 
        style="width: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;">
            <div class="logo" style="text-align: center;">
              <img class="image mr-2 skip-lazy" onload="this.style.opacity=1"  src="<?php bloginfo('template_url'); ?>/assets/Logo_Vector.svg" alt="Shapeshifter">
            </div>
            <div class="container-fluid">
                <div class="full-divider"></div>
            </div>
            <h1 class="text" style="text-align: center;">LOADING</h1>
        </div>
    </div>
  </div>
    <?php
      $subtitle  = get_option('navbar_text');
    ?>
    <section class="header py-2">
      <div class="container-fluid header-container">
        <div class="row header-row">
          <div class="col-md-2 col-lg-4 logo-col">
            <div class="header-logo">
              <a role="link" href="/">
                <img src="<?php bloginfo('template_url'); ?>/assets/Logo_Text_Lockup-v3.svg" alt="Shapeshifter">
              </a>
            </div>
            <button role="button" class="mobile-menu-btn" aria-label="Mobile menu button">
              <i class="fas fa-bars"></i>
              <i class="fas fa-times"></i>
            </button>
          </div>
          <div class="col-md-10 col-lg-8 header-nav-container">
            <nav id="header-navigation" class="site-navigation header-nav" role="navigation">
              <?php wp_nav_menu( array( 'theme_location' => 'header', 'menu_class' => 'nav-menu', 'fallback_cb' => false ) ); ?>
            </nav>
          </div>
        </div>
      </div>
    </section>
  </body>

  <script>  
  var currentLocation = window.location.pathname;
  if(currentLocation == "/") {
    $('.loading').css('visibility', '');
    // console.log($('.loading'));
  }
  </script>

</html>