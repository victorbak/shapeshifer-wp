<!DOCTYPE html>
<html>
  <head>
    <?php wp_head();?>
</head>
  <body <?php body_class();?>>
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
</html>