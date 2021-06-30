<?php get_header();?>
<?php $fields = get_fields(); ?>
<?php
    $blog_title    = $fields['blog_title'];
    $blog_subtitle = $fields['blog_subtitle'];
    $blog_content  = $fields['blog_content'];
    $image         = $fields['featured_image'];
    $post = get_post();
    $id = ! empty( $post ) ? $post->ID : false;

    $currently_viewing_img_lg = $image['sizes']['large'];
    $currently_viewing_img_mdlg = $image['sizes']['medium_large'];

    // Gets last post for `previous` button if on the first post
    if( get_previous_post() ) { 
      $prev_post_id = get_previous_post()->ID;
    } else { 
        $last = new WP_Query('posts_per_page=1&post_type=blog&order=DESC');
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
        $first = new WP_Query('posts_per_page=1&post_type=blog&order=ASC');
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

<div class="project post">
  <section class="container-fluid px-0 project-container">
    <div class="parallax-slide">
      <div class="parallax-clip">
        <div class="poster-image" style="background-image: url('<?php echo esc_url($image['url']); ?>');"></div>
      </div>
    </div>
    <div class="project-bg-color"></div>
    <div class="project-content">
      <div class="project-title">
        <h1 class="title"><span><?php echo $blog_title ?></span></h1>
        <h5 class="subtitle"><span><?php echo $blog_subtitle ?></span></h5>
      </div>
      <!-- <a role="link" href="/" class="project-release-banner">
        <i class="fas fa-chevron-left icon"></i>Back to Projects
      </a> -->
      <a role="link" href="#content" class="project-next-scroll">Read more <i class="fas fa-arrow-down icon"></i></a>
    </div>
  </section>
  
  <div class="content-container">
    <a role="link" class="content-anchor" id="content"></a>
    <section class="container px-4 py-5">
      <div class="content-row row">
        <div class="project-description col-xs-12 mb-xs-4 mb-lg-0 content">
          <p><?php echo $blog_content ?></p>
        </div>
      </div>
    </section>

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
          <?php echo "<a role='link' href='" . esc_url(get_permalink( $prev_post['id'] ) ) . "' />" ?>
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
              <?php echo "<a role='link' href='" . esc_url(get_permalink( $next_post['id'] ) ) . "' />" ?>
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

<?php get_footer();?>

