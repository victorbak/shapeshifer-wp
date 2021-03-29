<?php

/* 
 * Template Name: Contact Us
 */
 
?>

<?php get_header(); ?>



  <!-- Content here -->
    <section class="container">
        <div class="row">
            <div class="col-lg-6">
                <?php the_title(); ?>
                <?php the_content(); ?>
                <button class="button">Contact Us</button>
            </div>
            <div class="col-lg-6">
                <?php get_template_part( 'inc/partials/contact' ); ?>
            </div>
        </div>
    </section>
    <section class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <p><em>Google Maps banner goes here</em></p>
            </div>
        </div>
    </section>
    
  
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