<!DOCTYPE html>
<html>
  <head>
    <?php wp_head();?>
</head>
  <body <?php body_class();?>>
    <section class="header">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="header-logo">
              <h1>LOGO</h1>
            </div>
          </div>
          <div class="col-md-8">
            <nav id="header-navigation" class="site-navigation header-nav" role="navigation">
                <?php wp_nav_menu( array( 'theme_location' => 'header', 'menu_class' => 'nav-menu', 'fallback_cb' => false ) ); ?>
            </nav>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>