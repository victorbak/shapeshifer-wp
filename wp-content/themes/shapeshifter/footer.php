<?php wp_footer(); ?>
    <section class="footer">
        <div class="full-divider"></div>
        <div class="container">
            <div class="footer-content">
                <div class="footer-content-logo">
                    <!-- <p> -->
                        <img class="mr-2" src="<?php bloginfo('template_url'); ?>/assets/bw-new.png" alt="Shapeshifter">
                        <span class="text">SHAPESHIFTER VFX ®2021</span>
                    <!-- </p> -->
                </div>
                <div class="footer-content-links">
                    <nav id="footer-navigation" class="site-navigation footer-nav" role="navigation">
                        <?php wp_nav_menu( array( 'theme_location' => 'footer', 'menu_class' => 'nav-menu', 'fallback_cb' => false ) ); ?>
                    </nav>
                </div>
            </div>
        </div>
    </section>
</body>
</html>