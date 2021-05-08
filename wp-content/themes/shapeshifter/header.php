<!DOCTYPE html>
<html>
  <head>
    <?php wp_head();?>
</head>
<script>
  $(document).ready(function() {
    function fadePreloader() {
      let preloaderFadeOutTime = 600;
      var preloader = $('.loading');
      preloader.show().delay(600).fadeOut(preloaderFadeOutTime);
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
    <div class="container" 
    style="height: 100%;
        display: flex;
        justify-content: center;">
        <div class="loading-content" 
        style="width: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;">
            <div class="logo" style="text-align: center;">
            <img class="mr-2" src="<?php bloginfo('template_url'); ?>/assets/Logo_Vector.svg" alt="Shapeshifter">
            </div>
            <div class="container-fluid">
                <div class="full-divider"></div>
            </div>
            <h1 class="text" style="text-align: center;">LOADING</h1>
        </div>
    </div>
  </div>
    <section class="header">
      <div class="container-fluid header-container">
        <div class="row">
          <div class="col-md-4 logo-col">
            <div class="header-logo">
              <a href="/">
                <img src="<?php bloginfo('template_url'); ?>/assets/Logo_Text_Lockup.svg" alt="Shapeshifter">
              </a>
            </div>
            <button class="mobile-menu-btn">MENU</button>
          </div>
          <div class="col-md-8 header-nav-container">
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
    console.log($('.loading'));
  }
  </script>
</html>