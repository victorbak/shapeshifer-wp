    <?php

    /* 
    * Template Name: Contact Us
    */
    ?>

    <?php get_header(); ?>
<!-- TODO: ADD ICONS -->

    <!-- Content here -->
        <div class="page">
            <div class="gradient-background">
                <section class="container py-md-6">
                    <div class="row">
                        <div class="p-md-4 col-sm-12 col-xl-7">
                            <h2 class="mb-5"><?php the_title(); ?></h2>
                            <p class="mb-5"><?php the_content() ?></p>
                            <button class="button">Contact Us</button>
                        </div>
                        <!-- <div class="col-xl-1"></div> -->
                        <div class="col-sm-12 col-lg-5 col-xl-4 offset-xl-1">    
                            <?php get_template_part( 'inc/partials/contact-info' ); ?>
                        </div>
                    </div>
                </section>
                <section class="container-fluid py-md-6">
                    <div class="map-banner">
                        <div class="overlay">
                            <div class="row">
                                <div class="col-md-4">
                                </div>
                                <div class="col-md-4 text-center">
						            <h6 class="cta">GET DIRECTIONS</h6>
                                </div>
                                <div class="col-md-4">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
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