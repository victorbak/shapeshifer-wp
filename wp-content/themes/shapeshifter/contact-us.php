<?php

/* 
 * Template Name: Contact Us
 */
echo esc_url( get_template_directory_uri() . '/assets/map.png' );
?>

<?php get_header(); ?>



  <!-- Content here -->
  <div class="page container-fluid gradient-background">
        <div class="container pt-5 pb-5">
            <section class="container mb-4">
                <div class="row">
                    <div class="col-lg-6">
                        <h4 class="mb-2"><?php the_title(); ?></h4>
                        <p><?php the_content(); ?></p>
                        <button class="btn">Contact Us</button>
                    </div>
                    <div class="col-lg-6">
                        <?php get_template_part( 'inc/partials/contact' ); ?>
                    </div>
                </div>
            </section>
            <div class="map-banner mt-4 mb-4">
                <div class="row">
                    <div class="col-lg-12">
                    </div>
                </div>
            </div>
        </div>
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