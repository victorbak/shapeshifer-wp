<?php 
    $post = get_page_by_title('Contact Info', OBJECT, 'reusable_block'); 
    $fields = get_fields();
?>
<main class="contact-info">
    <div class="box">
        <div class="triangle"></div>
        <div>
            <h5 class="contact-info--header">CONTACT INFO</h5>
            <div class="divider"></div>
            <div class="p-2">
            <?php if ( ! empty($fields['phone_number'] ) ): ?>
                <p><em class="icon fas fa-phone mr-3"></em><?php echo $fields['phone_number']; ?></p>
            <?php endif ?>
            <?php if ( ! empty($fields['email'] ) ): ?>
                <p><em class="icon far fa-envelope mr-3"></em><?php echo $fields['email']; ?></p>
            <?php endif ?>
            <?php if ( ! empty($fields['street_address'] ) ): ?>
                <p><em class="icon fas fa-map-marker-alt mr-3"></em><?php echo $fields['street_address']; ?></p>
            <?php endif ?>
            </div>
        </div>
        <div>
            <h5 class="contact-info--header">SOCIAL MEDIA</h5>
            <div class="divider"></div>
            <div class="row p-2">
            <?php if ( get_option('twitter_url') != false ): ?>
                <a href="<?php echo esc_url( get_option( 'twitter_url' ) ) ?>" target="blank"><em class="icon col-1 fab fa-twitter"></em></a>
            <?php endif ?>
            <?php if ( get_option('facebook_url') != false ): ?>
                <a href="<?php echo esc_url( get_option( 'facebook_url' ) ) ?>" target="blank"><em class="icon col-1 fab fa-facebook-f"></em></a>
            <?php endif ?>
            <?php if ( get_option('vimeo_url') != false ): ?>
                <a href="<?php echo esc_url( get_option( 'vimeo_url' ) ) ?>" target="blank"><em class="icon col-1 fab fa-vimeo"></em></a>
            <?php endif ?>
            <?php if ( get_option('youtube_url') != false ): ?>
                <a href="<?php echo esc_url( get_option( 'youtube_url' ) )?>" target="blank"><em class="icon col-1 fab fa-youtube"></em></a>
            <?php endif ?>
            <?php if ( get_option('linkedin_url') != false ): ?>
                <a href="<?php echo esc_url( get_option( 'linkedin_url' ) ) ?>" target="blank"><em class="icon col-1 fab fa-linkedin-in"></em></a>
            <?php endif ?>
            </div>
        </div>
    </div>
</main>