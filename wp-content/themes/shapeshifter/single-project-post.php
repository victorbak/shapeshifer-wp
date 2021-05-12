<?php get_header();?>
<?php $fields = get_fields(); ?>
<?php
    $post = get_post();
    $id = ! empty( $post ) ? $post->ID : false;
    $gallery = acf_photo_gallery('image_gallery', $id);  // params: field name, post id
    // var_dump($gallery);
?>
<?php $image = get_field('gallery'); ?>

<div class="project post">
    <section class="container-fluid px-0 project-container">
      <div class="parallax-slide">
        <div class="parallax-clip">
          <div class="fixed-parallax" style="background-image: url('<?php echo esc_url($image['url']); ?>');"></div>
        </div>
      </div>
      <div class="project-bg-color"></div>
      <div class="project-content">
        <div class="project-title">
          <h2 class="title"><span><?php echo $fields['project_name']; ?></span></h2>
          <h4 class="subtitle"><span><?php echo $fields['project_subtitle']; ?></span></h4>
        </div>
        <a href="/" class="project-release-banner">Back to Projects</a>
      </div>
    </section>

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

    <div class="full-divider"></div>

    <!-- Image gallery -->
    <?php if ( count( $gallery ) > 0): ?>

      <section class="project-gallery container-fluid py-5 my-3 px-0">
        <div class="row no-gutters">
          <!-- if 5 images -->
          <?php if ( count( $gallery ) == 5): ?>
            <div class="col-lg-6">
              <div class="row no-gutters">
                <div data-toggle="modal" data-target="<?php echo '#image-1'?>" data-image="<?php echo esc_url($gallery[0]['full_image_url']); ?>" class="col-lg-6 project-gallery-image gallery-image-small" style="background-image: url('<?php echo esc_url($gallery[0]['full_image_url']); ?>');"></div>
                <div data-toggle="modal" data-target="<?php echo '#image-2'?>" data-image="<?php echo esc_url($gallery[1]['full_image_url']); ?>" class="col-lg-6 project-gallery-image gallery-image-small" style="background-image: url('<?php echo esc_url($gallery[1]['full_image_url']); ?>');"></div>
              </div>
              <div class="row no-gutters">
              <div data-toggle="modal" data-target="<?php echo '#image-3'?>" data-image="<?php echo esc_url($gallery[2]['full_image_url']); ?>" class="col-lg-6 project-gallery-image gallery-image-small" style="background-image: url('<?php echo esc_url($gallery[2]['full_image_url']); ?>');"></div>
                <div data-toggle="modal" data-target="<?php echo '#image-4'?>" data-image="<?php echo esc_url($gallery[3]['full_image_url']); ?>" class="col-lg-6 project-gallery-image gallery-image-small" style="background-image: url('<?php echo esc_url($gallery[3]['full_image_url']); ?>');"></div>
              </div>
            </div>
            <div class="row col-lg-6 no-gutters">              
              <div data-toggle="modal" data-target="<?php echo '#image-5'?>" data-image="<?php echo esc_url($gallery[4]['full_image_url']); ?>" class="col-lg-12 project-gallery-image gallery-image-big" style="background-image: url('<?php echo esc_url($gallery[4]['full_image_url']); ?>');"></div>
            </div>
          <?php endif ?>
          <!-- if 4 images -->
          <?php if ( count( $gallery ) == 4): ?>
            <div class="col-lg-6">
              <div class="row no-gutters">
                <div data-toggle="modal" data-target="<?php echo '#image-1'?>" data-image="<?php echo esc_url($gallery[0]['full_image_url']); ?>" class="col-lg-12 project-gallery-image gallery-image-small" style="background-image: url('<?php echo esc_url($gallery[0]['full_image_url']); ?>');"></div>
              </div>
              <div class="row no-gutters">
              <div data-toggle="modal" data-target="<?php echo '#image-2'?>" data-image="<?php echo esc_url($gallery[1]['full_image_url']); ?>" class="col-lg-6 project-gallery-image gallery-image-small" style="background-image: url('<?php echo esc_url($gallery[1]['full_image_url']); ?>');"></div>
                <div data-toggle="modal" data-target="<?php echo '#image-3'?>" data-image="<?php echo esc_url($gallery[2]['full_image_url']); ?>" class="col-lg-6 project-gallery-image gallery-image-small" style="background-image: url('<?php echo esc_url($gallery[2]['full_image_url']); ?>');"></div>
              </div>
            </div>
            <div class="row col-lg-6 no-gutters">              
              <div data-toggle="modal" data-target="<?php echo '#image-4'?>" data-image="<?php echo esc_url($gallery[3]['full_image_url']); ?>" class="col-lg-12 project-gallery-image gallery-image-big" style="background-image: url('<?php echo esc_url($gallery[3]['full_image_url']); ?>');"></div>
            </div>
          <?php endif ?>
          <!-- If 3 images -->
          <?php if ( count( $gallery ) == 3): ?>
            <div class="col-lg-6">
              <div class="row no-gutters">
                <div data-toggle="modal" data-target="<?php echo '#image-1'?>" data-image="<?php echo esc_url($gallery[0]['full_image_url']); ?>" class="col-lg-12 project-gallery-image gallery-image-small" style="background-image: url('<?php echo esc_url($gallery[0]['full_image_url']); ?>');"></div>
              </div>
              <div class="row no-gutters">
              <div data-toggle="modal" data-target="<?php echo '#image-2'?>" data-image="<?php echo esc_url($gallery[1]['full_image_url']); ?>" class="col-lg-12 project-gallery-image gallery-image-small" style="background-image: url('<?php echo esc_url($gallery[1]['full_image_url']); ?>');"></div>
              </div>
            </div>
            <div class="row col-lg-6 no-gutters">              
              <div data-toggle="modal" data-target="<?php echo '#image-3'?>" data-image="<?php echo esc_url($gallery[2]['full_image_url']); ?>" class="col-lg-12 project-gallery-image gallery-image-big" style="background-image: url('<?php echo esc_url($gallery[2]['full_image_url']); ?>');"></div>
            </div>
          <?php endif ?>
          <!-- If 2 images -->
          <?php if ( count( $gallery ) == 2): ?>
            <div class="row col-lg-12 no-gutters">  
              <div data-toggle="modal" data-target="<?php echo '#image-1'?>" data-image="<?php echo esc_url($gallery[0]['full_image_url']); ?>" class="col-lg-12 project-gallery-image gallery-image-big" style="background-image: url('<?php echo esc_url($gallery[0]['full_image_url']); ?>');"></div>
            </div>
            <div class="row col-lg-12 no-gutters">              
              <div data-toggle="modal" data-target="<?php echo '#image-2'?>" data-image="<?php echo esc_url($gallery[1]['full_image_url']); ?>" class="col-lg-12 project-gallery-image gallery-image-big" style="background-image: url('<?php echo esc_url($gallery[1]['full_image_url']); ?>');"></div>
            </div>
          <?php endif ?>
          <!-- If 1 image -->
          <?php if ( count( $gallery ) == 1): ?>
            <div class="row col-lg-12 no-gutters">  
              <div data-toggle="modal" data-target="<?php echo '#image-1'?>" data-image="<?php echo esc_url($gallery[0]['full_image_url']); ?>" class="col-lg-12 project-gallery-image gallery-image-big" style="background-image: url('<?php echo esc_url($gallery[0]['full_image_url']); ?>');"></div>
            </div>
          <?php endif ?>
        </div>
      </section>
    <?php endif ?>
   

    <!-- <section class="pagination-buttons">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 d-lg-none current-mobile">
          <a href="#">
            <p class="text">Currenly Viewing</p>
            <img class="image-button" src="<?php bloginfo('template_url'); ?>/assets/projects/current-mobile.png" alt="currently viewing">
          </a>
          </div>
          <div class="col-xs-6 col-lg-3 prev">
            <a href="#">
              <p class="text">Previous</p>
              <img class="image-button" src="<?php bloginfo('template_url'); ?>/assets/projects/prev-image.png" alt="previous project">
            </a>
          </div>
          <div class="d-none d-lg-block col-lg-6 current-desktop">
            <a href="#">
              <p class="text">Currenly Viewing</p>
              <img class="image-button" src="<?php bloginfo('template_url'); ?>/assets/projects/current-desktop.png" alt="currently viewing">
            </a>
          </div>
          <div class="col-xs-6 col-lg-3 next">
            <a href="#">
              <p class="text">Next</p>
              <img class="image-button" src="<?php bloginfo('template_url'); ?>/assets/projects/next-image.png" alt="next project">
            </a>
          </div>
        </div>
      </div>
    </section> -->
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

