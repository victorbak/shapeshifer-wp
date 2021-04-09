<?php

/* 
 * Template Name: Jobs
 */

?>
<?php 
function job_scripts() {
    // wp_register_script( 'jobs-js', get_template_directory_uri() . '/js/page/jobs.js' );
    // wp_enqueue_script( 'jobs-js' );
    wp_enqueue_script(
        'jobs-js', // name your script so that you can attach other scripts and de-register, etc.
        get_template_directory_uri() . '/js/page/jobs.js', // this is the location of your script file
        array('jquery') // this array lists the scripts upon which your script depends
    );
}
add_action( 'wp_enqueue_scripts', 'job_scripts' );
?>

<?php get_header(); ?>

<?php

if( $terms = get_terms( array(
    'taxonomy' => 'job_categories', // to make it simple I use default categories
    'orderby' => 'name'
) ) ) : 
	// if categories exist, display the dropdown
	// echo '<select name="categoryfilter"><option value="">Select category...</option>';
    foreach ( $terms as $term ) :
        // var_dump($term);
		// echo '<option value="' . $term->term_id . '">' . $term->n/ame . '</option>'; // ID of the category as an option value
	endforeach;
	echo '</select>';
endif;

?>
<!-- Content here -->
<div class="jobs page">
    <div class="gradient-background">
        <section class="container px-4 pt-5 pb-2 mb-2">
            <div class="row">
                <div class="col-12">
                    <h2 class="mb-5"><?php the_title(); ?></h2>
                    <p class="mb-5"><?php the_content() ?></p>
                </div>
            </div>
        </section>
        <section class="container py-2 mb-5">
            <div class="filters">
                <a data-filter="all" onclick="onFilter(this)" class="filter">All</a>           
            <?php foreach ( $terms as $term ) :?>
                <?php get_template_part( 'inc/partials/filter', '', $term); ?>
            <?php endforeach; ?>
            </div>
        </section>
        <section class="container posts py-4">
        <?php foreach ( $terms as $term ) : ?>
            <div data-category="<?php echo $term->slug ?>" class="postings my-4 py-2">
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
                        var_dump("true");
                        while($loop->have_posts()) : $loop->the_post();
                            get_template_part( 'inc/partials/job-preview' );
                        endwhile;
                    } ?>
                </div>
                
            </div>
        <?php endforeach; ?>

        </section>
    </div>
</div>


<?php get_footer(); ?>