<?php

/* 
 * Template Name: About Us
 */
 
?>

<?php 
function about_scripts() {
    wp_enqueue_script('about-js', get_template_directory_uri() . '/js/page/about.js', array('jquery'));
    // wp_enqueue_script('filters-js', get_template_directory_uri() . '/js/filters.js', array('jquery'));
}
add_action( 'wp_enqueue_scripts', 'about_scripts' );

$id = ! empty( $post ) ? $post->ID : false;
$gallery = acf_photo_gallery('image_gallery', $id);  // params: field name, post id
?>

<?php get_header(); ?>
<?php
// Commenting out until departments are enabled 
// if( $terms = get_terms( array(
//     'taxonomy' => 'departments',
//     'orderby' => 'name'
// ) ) ) : 
//     foreach ( $terms as $term ) : 
//       // var_dump($term);
// 	endforeach;

// endif;

$args = array(
  'post_type' => 'team-member-post',
  // 'orderby'   => 'menu_order',
  // 'order'     => 'ASC',
  'posts_per_page' => -1
)
?>

<!-- Content here -->
<div class="about-us page">
    <!-- <section class="container px-4 py-5">
        <div class="row">
            <div class="content col-md-12 mb-xs-4 mb-lg-0 py-lg-4 content">
                <?php the_field('about_intro'); ?>
            </div>
        </div>
    </section> -->

<!--    
    <?php if ( count( $gallery ) > 0): ?>
      <section class="project-gallery container-fluid py-5 my-3 px-0">
        <div class="row no-gutters">
          <!-- if 5 images -->
          <?php if ( count( $gallery ) == 5): ?>
            <div class="col-lg-6">
              <div class="row no-gutters">
                <div data-toggle="modal" data-target="<?php echo '#image-1'?>" data-image="<?php echo esc_url($gallery[0]['full_image_url']); ?>" class="col-lg-6 project-gallery-image gallery-image gallery-image-small" style="background-image: url('<?php echo esc_url($gallery[0]['full_image_url']); ?>');"></div>
                <div data-toggle="modal" data-target="<?php echo '#image-2'?>" data-image="<?php echo esc_url($gallery[1]['full_image_url']); ?>" class="col-lg-6 project-gallery-image gallery-image gallery-image-small" style="background-image: url('<?php echo esc_url($gallery[1]['full_image_url']); ?>');"></div>
              </div>
              <div class="row no-gutters">
                <div data-toggle="modal" data-target="<?php echo '#image-3'?>" data-image="<?php echo esc_url($gallery[2]['full_image_url']); ?>" class="col-lg-6 project-gallery-image gallery-image gallery-image-small" style="background-image: url('<?php echo esc_url($gallery[2]['full_image_url']); ?>');"></div>
                <div data-toggle="modal" data-target="<?php echo '#image-4'?>" data-image="<?php echo esc_url($gallery[3]['full_image_url']); ?>" class="col-lg-6 project-gallery-image gallery-image gallery-image-small" style="background-image: url('<?php echo esc_url($gallery[3]['full_image_url']); ?>');"></div>
              </div>
            </div>
            <div class="row col-lg-6 no-gutters">              
              <div data-toggle="modal" data-target="<?php echo '#image-5'?>" data-image="<?php echo esc_url($gallery[4]['full_image_url']); ?>" class="col-lg-12 project-gallery-image gallery-image gallery-image-big" style="background-image: url('<?php echo esc_url($gallery[4]['full_image_url']); ?>');"></div>
            </div>
          <?php endif ?>
          <!-- if 4 images -->
          <?php if ( count( $gallery ) == 4): ?>
            <div class="col-lg-6">
              <div class="row no-gutters">
                <div data-toggle="modal" data-target="<?php echo '#image-1'?>" data-image="<?php echo esc_url($gallery[0]['full_image_url']); ?>" class="col-lg-12 project-gallery-image gallery-image gallery-image-small" style="background-image: url('<?php echo esc_url($gallery[0]['full_image_url']); ?>');"></div>
              </div>
              <div class="row no-gutters">
                <div data-toggle="modal" data-target="<?php echo '#image-2'?>" data-image="<?php echo esc_url($gallery[1]['full_image_url']); ?>" class="col-lg-6 project-gallery-image gallery-image gallery-image-small" style="background-image: url('<?php echo esc_url($gallery[1]['full_image_url']); ?>');"></div>
                <div data-toggle="modal" data-target="<?php echo '#image-3'?>" data-image="<?php echo esc_url($gallery[2]['full_image_url']); ?>" class="col-lg-6 project-gallery-image gallery-image gallery-image-small" style="background-image: url('<?php echo esc_url($gallery[2]['full_image_url']); ?>');"></div>
              </div>
            </div>
            <div class="row col-lg-6 no-gutters">              
              <div data-toggle="modal" data-target="<?php echo '#image-4'?>" data-image="<?php echo esc_url($gallery[3]['full_image_url']); ?>" class="col-lg-12 project-gallery-image gallery-image gallery-image-big" style="background-image: url('<?php echo esc_url($gallery[3]['full_image_url']); ?>');"></div>
            </div>
          <?php endif ?>
          <!-- If 3 images -->
          <?php if ( count( $gallery ) == 3): ?>
            <div class="col-lg-6">
              <div class="row no-gutters">
                <div data-toggle="modal" data-target="<?php echo '#image-1'?>" data-image="<?php echo esc_url($gallery[0]['full_image_url']); ?>" class="col-lg-12 project-gallery-image gallery-image gallery-image-small" style="background-image: url('<?php echo esc_url($gallery[0]['full_image_url']); ?>');"></div>
              </div>
              <div class="row no-gutters">
                <div data-toggle="modal" data-target="<?php echo '#image-2'?>" data-image="<?php echo esc_url($gallery[1]['full_image_url']); ?>" class="col-lg-12 project-gallery-image gallery-image gallery-image-small" style="background-image: url('<?php echo esc_url($gallery[1]['full_image_url']); ?>');"></div>
              </div>
            </div>
            <div class="row col-lg-6 no-gutters">              
              <div data-toggle="modal" data-target="<?php echo '#image-3'?>" data-image="<?php echo esc_url($gallery[2]['full_image_url']); ?>" class="col-lg-12 project-gallery-image gallery-image gallery-image-big" style="background-image: url('<?php echo esc_url($gallery[2]['full_image_url']); ?>');"></div>
            </div>
          <?php endif ?>
          <!-- If 2 images -->
          <?php if ( count( $gallery ) == 2): ?>
            <div class="row col-lg-12 no-gutters">  
              <div data-toggle="modal" data-target="<?php echo '#image-1'?>" data-image="<?php echo esc_url($gallery[0]['full_image_url']); ?>" class="col-lg-12 project-gallery-image gallery-image gallery-image-big" style="background-image: url('<?php echo esc_url($gallery[0]['full_image_url']); ?>');"></div>
            </div>
            <div class="row col-lg-12 no-gutters">              
              <div data-toggle="modal" data-target="<?php echo '#image-2'?>" data-image="<?php echo esc_url($gallery[1]['full_image_url']); ?>" class="col-lg-12 project-gallery-image gallery-image gallery-image-big" style="background-image: url('<?php echo esc_url($gallery[1]['full_image_url']); ?>');"></div>
            </div>
          <?php endif ?>
          <!-- If 1 image -->
          <?php if ( count( $gallery ) == 1): ?>
            <div class="row col-lg-12 no-gutters">  
              <div data-toggle="modal" data-target="<?php echo '#image-1'?>" data-image="<?php echo esc_url($gallery[0]['full_image_url']); ?>" class="col-lg-12 project-gallery-image gallery-image gallery-image-big" style="background-image: url('<?php echo esc_url($gallery[0]['full_image_url']); ?>');"></div>
            </div>
          <?php endif ?>
        </div>
      </section>
    <?php endif ?> -->
    
    <!-- <div class="container-fluid">
        <div class="full-divider"></div>
    </div> -->

    <section class="container px-4 py-5">
        <div class="row">
            <div class="content col-md-12 mb-xs-4 mb-lg-0 py-lg-4">
                <?php the_field('team_intro'); ?>
            </div>
        </div>
    </section>

    <!-- Commenting out until departments are enabled -->
    <!-- <section class="container py-2 mt-2 mb-4">
        <?php get_template_part( 'inc/partials/filters', '', $terms ); ?>
    </section>  -->

    <!-- Commenting out until departments are enabled  -->
    <!-- <section class="container team-posts">
        <div class="overlay"></div>
        <?php foreach ( $terms as $term ) : ?>
        <div data-category="<?php echo $term->slug ?>" class="postings is-animated my-4 py-2">
            <?php get_template_part( 'inc/partials/category-header', '', $term->name); ?>
            <div class="row team-cards mt-5 mb-2 no-gutters">

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
                        echo "<div class='col-xs-12 col-lg-6 col-xl-4 team-member-card-container'>";
                            get_template_part( 'inc/partials/team-member-card' );
                        echo "</div>";
                        endwhile;
                    } ?>
                
            </div>

        </div>
        <?php endforeach; ?>
    </section> -->

    <!-- Using this until departments are enabled -->
    <section class="container team-posts">
        <div class="overlay"></div>
        <div class="postings is-animated my-4 py-2">
        <?php get_template_part( 'inc/partials/category-header', '', 'Team Members'); ?>
        <div class="row team-cards mt-5 mb-2 no-gutters"> 
          <?php 
            $loop = new WP_Query($args);
            if ($loop->have_posts() ) : 
                // echo '<select>';
                while ( $loop->have_posts() ) : $loop->the_post();
                  echo "<div class='col-xs-12 col-lg-6 col-xl-4 team-member-card-container'>";
                    get_template_part( 'inc/partials/team-member-card' );
                  echo "</div>";
                endwhile;
                // echo '</select>';
                wp_reset_postdata();
            endif;
          ?>
        </div>
      </div>
    </section>

</div>

<!-- Modal -->
<div class="modal fade" 
    id="" 
    tabindex="-1" 
    role="dialog" 
    aria-labelledby="exampleModalCenterTitle" 
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered container" role="document">
        <div class="modal-content"> 
          <div class="image-modal">
            <span data-dismiss="modal" class="image-modal-close">
              <span class="mr-2">Close Image</span>
              <em class="icon fas fa-times"></em>
            </span>
            <img class="image-modal-content" src="">
          </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>