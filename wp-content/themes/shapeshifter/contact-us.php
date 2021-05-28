<?php

/* 
* Template Name: Contact Us
*/
?>

<?php get_header(); ?>

<?php $contact_us = get_field('contact-button-link');?>
<?php $google_maps = get_field('google-maps-url'); ?>

    <!-- Content here -->
        <div class="contact-us page">
            <section class="container px-4 py-5">
                <div class="row">
                    <div class="content col-md-12 col-lg-7 mb-xs-4 mb-lg-0 py-lg-4">
                        <?php the_field('contact-intro');?>
                        <a <?php echo "href='" . esc_url($contact_us) . "'"; ?> class="button mt-5">Contact Us <span class="icon"><em class="fas fa-chevron-right"></em></span></a>
                    </div>
                    <div class="col-md-12 col-lg-5 col-xl-4 offset-xl-1 py-4">
                        <?php get_template_part( 'inc/partials/contact-info-card' ); ?>
                        
                    </div>
                </div>
            </section>
            <section class="container-fluid py-md-4 py-lg-6 px-0">
                <div class="map-banner">
                    <div class="overlay">
                    <a <?php echo "href='" . esc_url($google_maps) . "'"; ?>"target="_blank" >
                        <div class="row mx-0">
                            <div class="col-md-4">
                            </div>
                            <div class="col-md-4 text-center">
                              <h6 class="cta"><i class="pr-2 fas fa-map-marker-alt"></i> GET DIRECTIONS</h6>
                            </div>
                            <div class="col-md-4">
                            </div>
                        </div>
                    </a>
                    </div>
                </div>
            </section>
        </div>
        
    
    <?php get_footer(); ?>


    <!-- array(11) 
        { 
            ["phone_number"]=> string(7) "5555555" 
            ["email"]=> string(13) "jane@test.com" 
            ["street_address"]=> string(0) "" 
            ["city"]=> string(0) "" 
            ["province-state"]=> string(0) "" 
            ["postal_code"]=> string(0) "" 
            ["twitter_url"]=> string(0) "" 
            ["facebook_url"]=> string(0) "" 
            ["vimeo_url"]=> string(0) ""
            ["youtube_url"]=> string(0) "" 
            ["instagram_url"]=> string(0) "" 
        }  -->