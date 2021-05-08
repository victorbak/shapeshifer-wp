<?php get_header();?>
<?php $fields = get_fields(); ?>

<div class="project post">
    <?php $image = get_field('gallery'); ?>
    <section class="container-fluid px-0 project-container" style="background-image: url('<?php echo esc_url($image['url']); ?>');">
        <div class="project-bg-color"></div>
        <div class="project-content">
          <div class="project-title">
            <h2 class="title"><?php echo $fields['project_name']; ?></h2>
            <h4 class="subtitle"><?php echo $fields['project_subtitle']; ?></h4>
          </div>
          <a href="/">
              <div class="project-release-banner">
                  Back to Projects
              </div>
          </a>
        </div>
    </section>

    <section class="container px-4 py-5">
        <div class="row">
            <div class="col-md-12 col-lg-7 mb-xs-4 mb-lg-0 py-lg-4 content">
                <?php the_content() ?>
            </div>
            <div class="col-md-12 col-lg-5 col-xl-4 offset-xl-1 py-4 content">
                <?php get_template_part( 'inc/partials/project-info-card' ); ?>
            </div>
        </div>
    </section>

    <div class="full-divider"></div>

    <!-- Replace with image gallery
    <section class="container-fluid px-0 team-images-container">
        <img src="<?php bloginfo('template_url'); ?>/assets/projects/project-gallery.png" alt="project images">
    </section>
    -->

    <section class="pagination-buttons">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 d-lg-none current-mobile">
          <a href="#">
            <p class="text">Currenly Viewing</p>
            <!-- Replace with small proj image -->
            <img class="image-button" src="<?php bloginfo('template_url'); ?>/assets/projects/current-mobile.png" alt="currently viewing">
          </a>
          </div>
          <div class="col-xs-6 col-lg-3 prev">
            <!-- URL to prev proj -->
            
            <a href="#">
              <p class="text">Previous</p>
              <!-- Replace with small proj image -->
              <img class="image-button" src="<?php bloginfo('template_url'); ?>/assets/projects/prev-image.png" alt="previous project">
            </a>
          </div>
          <div class="d-none d-lg-block col-lg-6 current-desktop">
            <a href="#">
              <p class="text">Currenly Viewing</p>
              <!-- Replace with small proj image -->
              <img class="image-button" src="<?php bloginfo('template_url'); ?>/assets/projects/current-desktop.png" alt="currently viewing">
            </a>
          </div>
          <div class="col-xs-6 col-lg-3 next">
            <a href="#">
              <!-- URL to next proj -->
              <p class="text">Next</p>
              <!-- Replace with small proj image -->
              <img class="image-button" src="<?php bloginfo('template_url'); ?>/assets/projects/next-image.png" alt="next project">
            </a>
          </div>
        </div>
      </div>
    </section>
</div>

<?php get_footer();?>

