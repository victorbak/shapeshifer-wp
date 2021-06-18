<?php 
function project_scripts() {
    wp_enqueue_script('project-js', get_template_directory_uri() . '/js/single/project.js', array('jquery'));
}
add_action( 'wp_enqueue_scripts', 'project_scripts' );
?>
<?php get_header();?>
<?php $fields = get_fields(); ?>
<?php
    $post = get_post();
    $id = ! empty( $post ) ? $post->ID : false;
    $gallery = acf_photo_gallery('image_gallery', $id);  // params: field name, post id
    // var_dump(get_fields($id)['featured_image']['sizes']);
    $currently_viewing_img_lg = $fields['featured_image']['sizes']['large'];
    $currently_viewing_img_mdlg = $fields['featured_image']['sizes']['medium_large'];

    // Gets last post for `previous` button if on the first post
    if( get_previous_post() ) { 
      $prev_post_id = get_previous_post()->ID;
    } else { 
        $last = new WP_Query('posts_per_page=1&post_type=project-post&order=DESC');
        if ( ! empty( $last->posts ) ) {
          $prev_post_id = $last->posts[0]->ID;
        } else {
          $prev_post_id = $id;
        }
        wp_reset_query();
    }; 

    // Gets first post for `next` button if next if on the last post
    if( get_next_post() ) { 
      $next_post_id = get_next_post()->ID;
    } else { 
        $first = new WP_Query('posts_per_page=1&post_type=project-post&order=ASC');
        if ( ! empty( $first->posts ) ) {
          $next_post_id = $first->posts[0]->ID;
        } else {
          $next_post_id = $id;
        }
        wp_reset_query();
    }; 

    $prev_post = get_adjacent_post_data($prev_post_id);
    $next_post = get_adjacent_post_data($next_post_id);

    function get_adjacent_post_data($post_id) {
      $data = array();
      $post_fields = get_fields($post_id);
      $img = $post_fields['featured_image']['sizes']['medium'];
      $data['id'] = $post_id;
      $data['image'] = $img;
      return $data;
    }
?>

<?php 
  $image = get_field( 'featured_image' );
  $video = get_field( 'vimeo_code' );
?>

<div class="project post">
  <section class="container-fluid px-0 project-container">
    <div class="parallax-slide">
      <div class="parallax-clip">
        <div class="poster-image" style="background-image: url('<?php echo esc_url($image['url']); ?>');"></div>
        <?php if($video): ?>
          <!-- Vimeo player -->
          <div class="fixed-parallax d-none d-lg-block">
            <div class="video-el vimeo-video" 
                data-vimeo-url="https://player.vimeo.com/video/<?php echo $video ?>"
                data-vimeo-background="true"
                data-vimeo-autopause="false"
                data-vimeo-loop="true"
                data-vimeo-responsive="true"
                data-vimeo-dnt="true"
                id="project-video">
            </div>
          </div>
        <?php endif; ?>
      </div>
    </div>
    <div class="project-bg-color"></div>
    <div class="project-content">
      <div class="project-title">
        <h1 class="title"><span><?php echo $fields['project_name']; ?></span></h1>
        <?php if($fields['project_subtitle_link']) { ?>
          <a href="<?php echo $fields['project_subtitle_link']; ?>" target="_blank" rel="noopener noreferrer">
            <h5 class="subtitle"><span><?php echo $fields['project_subtitle']; ?></span></h5>
          </a>
        <?php } else { ?>
          <h5 class="subtitle"><span><?php echo $fields['project_subtitle']; ?></span></h5>
        <?php } ?>
      </div>
      <a href="/" class="project-release-banner">
        <i class="fas fa-chevron-left icon"></i>Back to Projects
      </a>
      <a href="#content" class="project-next-scroll">Learn more <i class="fas fa-arrow-down icon"></i></a>
    </div>
  </section>
  
  <div class="content-container">
    <a class="content-anchor" id="content"></a>
    <section class="container px-4 py-5">
      <div class="row">
        <div class="col-md-12 col-lg-7 mb-xs-4 mb-lg-0 py-lg-4 content">
          <p><?php echo $fields['project_description']; ?></p>
        </div>
        <div class="col-md-12 col-lg-5 col-xl-4 offset-xl-1 py-4 content">
          <?php get_template_part( 'inc/partials/project-info-card' ); ?>
        </div>
      </div>
    </section>

    <!-- Image gallery -->
    <?php if ( count( $gallery ) > 0): ?>
      <div class="full-divider"></div>

      <section class="project-gallery container-fluid">
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
    <?php endif ?>
  
    <div class="full-divider"></div>

    <section class="pagination-buttons">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 d-lg-none current-mobile current project-pagination">
            <div class="image-button" style="background-image: url('<?php echo esc_url( $currently_viewing_img_mdlg ); ?>');" alt="currently viewing" >
              <div class="arrow"></div>
              <div class="static-overlay">
                <div class="label">
                  <span class="icon"><em class="far fa-eye"></em></span><p class="ml-3 text">Currently Viewing</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xs-6 col-lg-2 prev project-pagination">
          <?php echo "<a href='" . esc_url(get_permalink( $prev_post['id'] ) ) . "' />" ?>
            <div class="image-button" style="background-image: url('<?php echo esc_url( $prev_post['image'] ); ?>');" alt="previous project" >
              <div class="overlay">
                <div class="label prev-label">
                  <span class="icon"><em class="fas fa-chevron-left"></em></span><p class="ml-3 text">Previous</p>
                </div>
              </div>
            </div>
            </a>
          </div>
          <div class="d-none d-lg-block col-lg-8 current-desktop current project-pagination">
            <div class="image-button" style="background-image: url('<?php echo esc_url( $currently_viewing_img_lg ); ?>');" alt="currently viewing" >
              <div class="static-overlay">
                <div class="label">
                  <span class="icon"><em class="far fa-eye"></em></span><p class="ml-3 text">Currently Viewing</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xs-6 col-lg-2 next project-pagination">
              <?php echo "<a href='" . esc_url(get_permalink( $next_post['id'] ) ) . "' />" ?>
                <div class="image-button" style="background-image: url('<?php echo esc_url( $next_post['image'] ); ?>');" alt="next project" >
                  <div class="overlay">
                    <div class="label next-label">
                      <p class="mr-3 text">Next</p><span class="icon"><em class="fas fa-chevron-right"></em></span>
                    </div>
                  </div>
                </div>
              </a>
          </div>
        </div>
      </div>
    </section>
  </div>
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

<?php get_footer();?>

