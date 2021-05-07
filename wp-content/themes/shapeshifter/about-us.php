<?php

/* 
 * Template Name: About Us
 */
 
?>

<?php 
function about_scripts() {
    // wp_register_script( 'jobs-js', get_template_directory_uri() . '/js/page/jobs.js' );
    // wp_enqueue_script( 'jobs-js' );
    wp_enqueue_script('about-js', get_template_directory_uri() . '/js/page/about.js', array('jquery'));
    wp_enqueue_script('filters-js', get_template_directory_uri() . '/js/filters.js', array('jquery'));
}
add_action( 'wp_enqueue_scripts', 'about_scripts' );
?>

<?php get_header(); ?>

<?php

if( $terms = get_terms( array(
    'taxonomy' => 'departments',
    'orderby' => 'name'
) ) ) : 
  foreach ( $terms as $term ) : 
      // var_dump($term);
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
            <div class="content col-md-12 mb-xs-4 mb-lg-0 py-lg-4">
                <?php the_field('team_intro'); ?>
            </div>
        </div>
    </section>

    <section class="container py-2 mt-2 mb-4">
        <?php get_template_part( 'inc/partials/filters', '', $terms ); ?>
    </section> 

    <section class="container team-posts py-4">
        <div class="overlay"></div>
        <?php foreach ( $terms as $term ) : ?>
        <div data-category="<?php echo $term->slug ?>" class="postings is-animated my-4 py-2">
            <?php get_template_part( 'inc/partials/category-header', '', $term->name); ?>
            <div class="row team-cards mt-5 mb-4 no-gutters">

                    <?php 
                        $q = array('post_type' => 'team-member-post',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'departments',
                                    'field' => 'slug',
                                    'terms' => $term->slug,
                                ),
                            ),
                        );
                    $loop = new WP_Query($q);
                    if ($loop->have_posts()) {
                        while($loop->have_posts()) : $loop->the_post();
                        echo "<div class='col-xs-12 col-md-4'>";
                            get_template_part( 'inc/partials/team-member-card' );
                        echo "</div>";
                        endwhile;
                    } ?>
                
            </div>

        </div>
        <?php endforeach; ?>
    </section>
</div>

<?php get_footer(); ?>