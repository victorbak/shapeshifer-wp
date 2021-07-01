<?php

/* 
* Template Name: Contact Us
*/
?>

<?php get_header(); ?>

<?php 
  $contact_us     = get_field('contact-button-link');
  $google_maps1   = get_field('google-maps-url'); 
  $google_maps2   = get_field('google-maps-url-2'); 
  $location1_text = get_field('location_1_text');
  $location2_text = get_field('location_2_text');

  $address1       = get_option('street_address');
  $address2       = get_option('street_address_2');
?>

<!-- Content here -->
<div class="contact-us page">
    <section class="container px-4 py-5">
        <div class="row">
            <div class="content col-md-12 col-lg-7 mb-xs-4 mb-lg-0 py-lg-4">
                <?php the_field('contact-intro');?>
                <!-- <a <?php echo "href='" . esc_url($contact_us) . "'"; ?> class="button mt-5">Contact Us <span class="icon"><em class="fas fa-chevron-right"></em></span></a> -->
            </div>
            <div class="col-md-12 col-lg-5 col-xl-4 offset-xl-1 py-4">
                <?php get_template_part( 'inc/partials/contact-info-card' ); ?>
                
            </div>
        </div>
    </section>
    <section class="container-fluid py-md-4 py-lg-4 px-0">
      <div class="map-row row">
        <div class="map-column col-lg-6">
          <div class="column-map-banner">
              <div class="overlay">
                <a role="link" aria-labelledby="get-directions-1" href="<?php echo esc_url($google_maps1); ?>" target="_blank" rel="noopener noreferrer">
                  <?php if ( $location1_text ): ?>
                    <div class="city d-flex flex-column align-items-center">
                      <h1 class="city-text"><?php echo $location1_text ?></h1>
                    </div>
                  <?php endif ?>
                  <div class="row mx-0">
                    <div class="col-md-3">
                    </div>
                    <div class="col-md-6 text-center">
                      <?php if( $address1 ): ?>
                        <p class="cta"><?php echo $address1 ?></p>
                      <?php endif ?>
                      <h6 class="cta"><i class="pr-2 fas fa-map-marker-alt"></i> <span aria-hidden="true">GET DIRECTIONS</span></h6>
                      <span id="get-directions-1" class="visually-hidden">Get Directions</span>
                    </div>
                    <div class="col-md-3">
                    </div>
                  </div>
                </a>
              </div>
          </div>
        </div>
        <div class="map-column col-lg-6">
          <div class="map-banner">
              <div class="overlay">
                <a role="link" aria-labelledby="get-directions-1" href="<?php echo esc_url($google_maps2); ?>" target="_blank" rel="noopener noreferrer">
                  <?php if ( $location1_text ): ?>
                    <div class="city d-flex justify-content-center">
                      <h1 class="city-text"><?php echo $location2_text ?></h1>
                    </div>
                  <?php endif ?>
                  <div class="row mx-0">
                    <div class="col-md-3">
                    </div>
                    <div class="col-md-6 text-center">
                      <?php if( $address2 ): ?>
                        <p class="cta"><?php echo $address2 ?></p>
                      <?php endif ?>
                      <h6 class="cta"><i class="pr-2 fas fa-map-marker-alt"></i> GET DIRECTIONS</h6>
                      <span id="get-directions-2" class="visually-hidden">Get Directions</span>
                    </div>
                    <div class="col-md-3">
                    </div>
                  </div>
                </a>
              </div>
          </div>
        </div>
      </div>
    </section>
</div>
        
    
<?php get_footer(); ?>
