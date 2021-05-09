<?php get_header();?>
<?php $fields = get_fields(); ?>
<?php
    $post = get_post();
    $id = ! empty( $post ) ? $post->ID : false;
    $gallery = acf_photo_gallery('image_gallery_test', $id);  // params: field name, post id
    var_dump($gallery);
?>

<div class="project post">
    <?php $image = get_field('gallery'); ?>
    <section class="container-fluid px-0 project-container" style="background-image: url('<?php echo esc_url($image['url']); ?>');">
        <div class="project-bg-color"></div>
        <div class="project-content">
          <div class="project-title">
            <h2 class="title"><span><?php echo $fields['project_name']; ?></span></h2>
            <h4 class="subtitle"><span><?php echo $fields['project_subtitle']; ?></span></h4>
          </div>
          <a href="/" class="project-release-banner">
            Back to Projects
          </a>
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

    <!-- Replace with image gallery -->
    <section class="project-gallery container-fluid py-5 my-3 px-0">
      <div class="row no-gutters"> 
        <?php for ( $i = 0; $i < count( $gallery ); $i++ ): ?> 
          <?php if ( $i == 0): ?>
            <div class="col-lg-6">
              <div class="row no-gutters">
                <?php echo "<img class='col-lg-6 project-gallery-image small-image' src='{$gallery[$i]['full_image_url']}' alt='{$gallery[$i]['title']}'>"; ?>
                <?php echo "<img class='col-lg-6 project-gallery-image small-image' src='{$gallery[$i + 1]['full_image_url']}' alt='{$gallery[$i + 1]['title']}'>"; ?>
              </div>
          <?php endif ?>
          <?php if ( $i == 2): ?>
              <div class="row no-gutters">
                <?php echo "<img class='col-lg-6 project-gallery-image small-image' src='{$gallery[$i]['full_image_url']}' alt='{$gallery[$i]['title']}'>"; ?>
                <?php echo "<img class='col-lg-6 project-gallery-image small-image' src='{$gallery[$i + 1]['full_image_url']}' alt='{$gallery[$i + 1]['title']}'>"; ?>
              </div>
            </div>
          <?php endif ?>
          <?php if ( $i == 4): ?>
            <div class="row col-lg-6 no-gutters">
              <?php echo "<img class='col-lg-12 project-gallery-image big-image' src='{$gallery[$i]['full_image_url']}' alt='{$gallery[$i]['title']}'>"; ?>
            </div>
          <?php endif ?>
        <?php endfor ?>
      </div>
    </section>
   

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

<?php get_footer();?>

