<?php

/* 
 * Template Name: Jobs
 */

?>
<?php 
function job_scripts() {
    wp_enqueue_script('filters-js', get_template_directory_uri() . '/js/filters.js', array('jquery'));
}
add_action( 'wp_enqueue_scripts', 'job_scripts' );
?>
<?php get_header(); ?>

<?php $jobs_intro = get_field('jobs_intro'); ?>

<?php


if( $terms = get_terms( array(
    'taxonomy' => 'job_categories',
    'orderby' => 'name'
) ) ) : 
  foreach ( $terms as $term ) : 
      // var_dump($term);
	endforeach;

endif;

?>
<!-- Content here -->
<div class="jobs page">
  <section class="container py-2 mt-4 mb-3">
      <div class="row">
          <div class="content col-12">
              <?php the_field('jobs_intro'); ?>
          </div>
      </div>
  </section>

  <section class="container py-2 mt-2 mb-4">
    <?php get_template_part( 'inc/partials/filters', '', $terms ); ?>
  </section>

  <section class="container posts py-4">
    <?php foreach ( $terms as $term ) : ?>
    <div data-category="<?php echo $term->slug ?>" class="postings is-animated my-4 py-2">
        <?php get_template_part( 'inc/partials/category-header', '', $term->name); ?>

        <div>
            <?php 
                $q = array('post_type' => 'jobs-post',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'job_categories',
                            'field' => 'slug',
                            'terms' => $term->slug,
                        ),
                    ),
                );
            $loop = new WP_Query($q);
            if ($loop->have_posts()) {
                while($loop->have_posts()) : $loop->the_post();
                    get_template_part( 'inc/partials/job-preview-card' );
                endwhile;
            } ?>
        </div>

    </div>
    <?php endforeach; ?>
  </section>
</div>


<?php get_footer(); ?>