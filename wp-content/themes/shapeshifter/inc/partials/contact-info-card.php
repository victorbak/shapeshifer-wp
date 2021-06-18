<?php 
    $post     = get_page_by_title('Contact Info', OBJECT, 'reusable_block'); 
    $fields   = get_fields();

    $phone = $fields['phone_number'];
    $email = $fields['email'];
    $address = $fields['street_address'];

    $twitter  = get_option('twitter_url');
    $facebook = get_option('facebook_url');
    $vimeo    = get_option('vimeo_url');
    $youtube  = get_option('youtube_url');
    $linkedin = get_option('linkedin_url');
    $socials = array($twitter, $facebook, $vimeo, $youtube, $linkedin);

    $hasSocialMedia = hasSocialMedia( $socials );
?>
<main class="contact-info">
    <div class="box">
        <div class="triangle"></div>
        <div>
            <h5 class="contact-info--header">CONTACT INFO</h5>
            <div class="divider"></div>
            <div class="p-2">
            <?php if ( ! empty( $phone ) ): ?>
                <p><em class="icon fas fa-phone mr-3"></em><?php echo $phone; ?></p>
            <?php endif ?>
            <?php if ( ! empty( $email ) ): ?>
                <p><em class="icon far fa-envelope mr-3"></em><?php echo $email; ?></p>
            <?php endif ?>
            <?php if ( ! empty( $address ) ): ?>
                <p><em class="icon fas fa-map-marker-alt mr-3"></em><?php echo $address; ?></p>
            <?php endif ?>
            </div>
        </div>
        <?php if( $hasSocialMedia ): ?>
          <div>
              <h5 class="contact-info--header">SOCIAL MEDIA</h5>
              <div class="divider"></div>
              <div class="row p-2">
              <?php if ( $twitter != false ): ?>
                  <a href="<?php echo esc_url( get_option( 'twitter_url' ) ) ?>" target="blank"><em class="icon col-1 fab fa-twitter"></em></a>
              <?php endif ?>
              <?php if ( $facebook != false ): ?>
                  <a href="<?php echo esc_url( get_option( 'facebook_url' ) ) ?>" target="blank"><em class="icon col-1 fab fa-facebook-f"></em></a>
              <?php endif ?>
              <?php if ( $vimeo != false ): ?>
                  <a href="<?php echo esc_url( get_option( 'vimeo_url' ) ) ?>" target="blank"><em class="icon col-1 fab fa-vimeo"></em></a>
              <?php endif ?>
              <?php if ( $youtube != false ): ?>
                  <a href="<?php echo esc_url( get_option( 'youtube_url' ) )?>" target="blank"><em class="icon col-1 fab fa-youtube"></em></a>
              <?php endif ?>
              <?php if ( $linkedin != false ): ?>
                  <a href="<?php echo esc_url( get_option( 'linkedin_url' ) ) ?>" target="blank"><em class="icon col-1 fab fa-linkedin-in"></em></a>
              <?php endif ?>
              </div>
          </div>
        <?php endif ?>
    </div>
</main>