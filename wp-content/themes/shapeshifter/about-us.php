<?php

/* 
 * Template Name: About Us
 */
 
?>

<?php get_header(); ?>

<?php

if( $terms = get_terms( array(
    'taxonomy' => 'departments',
    'orderby' => 'name'
) ) ) : 
  foreach ( $terms as $term ) : 
      var_dump($term);
	endforeach;

endif;

?>

<!-- Content here -->
<div class="about-us page">
    <section class="container px-4 py-5">
        <div class="row">
            <div class="content col-md-12 mb-xs-4 mb-lg-0 py-lg-4 content">
                <?php the_content() ?>
            </div>
        </div>
    </section>
    <section class="container-fluid px-0 team-images-container">
        <img src="<?php bloginfo('template_url'); ?>/assets/about-us/temp-team.jpg" alt="team images">
    </section>
    <section class="container px-4 py-5">
        <div class="row">
            <div class="content col-md-12 mb-xs-4 mb-lg-0 py-lg-4 content">
                <?php the_field('team_intro'); ?>
            </div>
        </div>
    </section>
    <section class="container py-2 mt-2 mb-4">
        <?php get_template_part( 'inc/partials/filters', $terms ); ?>
    </section>
</div>

<?php get_footer(); ?>