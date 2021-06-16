<?php 
function home_scripts() {
    wp_enqueue_script('front-page-js', get_template_directory_uri() . '/js/page/front-page.js', array('jquery'));
}
add_action( 'wp_enqueue_scripts', 'home_scripts' );
?>
<?php get_header();?>

<?php $fields = get_fields(); ?>
<?php
$featured_project1 = get_field('featured_project_1');
$featured_project2 = get_field('featured_project_2');
$featured_project3 = get_field('featured_project_3');
$featured_project4 = get_field('featured_project_4');
$featured_project5 = get_field('featured_project_5');
$newest = new WP_Query('posts_per_page=1&post_type=project-post&order=DESC&post_status=publish');
if( ! empty( $newest->posts ) ) {
   $newest_post_id = $newest->posts[0]->ID;
}


?>
<div class="home page">
    <section class="project-section">
        <?php if($featured_project1): ?>
            <?php
                $projectName = get_field( 'project_name', $featured_project1->ID );
                $projectImage = get_field( 'featured_image', $featured_project1->ID );
                $projectVideo = get_field( 'vimeo_code', $featured_project1->ID )
            ?>
            <div class="container-fluid px-0 project-container">
                <a class="project-anchor" id="project1"></a>
                <div class="parallax-slide" id="slide1">
                <div class="parallax-clip">
						<div class="poster-image" style="background-image: url('<?php echo esc_url($projectImage['url']); ?>');"></div>
                        <?php if($projectVideo): ?>
                            <div class="fixed-parallax d-none d-lg-block">
                                <!-- Vimeo player -->
                                <div class="video-el vimeo-video" 
                                    data-vimeo-url="https://player.vimeo.com/video/<?php echo $projectVideo ?>"
                                    data-vimeo-background="true"
                                    data-vimeo-autopause="false"
                                    data-vimeo-loop="true"
                                    data-vimeo-responsive="true"
                                    id="video1">
                                </div>
                            </div>
                        <?php endif ?>
                        <!-- <div class="fixed-parallax">
                            <video class="autoplay-video__video" loop autoplay="" playsinline="" muted="" aria-hidden="true"><source src="/wp-content/uploads/2021/06/Hello-World_project1-video.mp4" type="video/mp4"></video>
                        </div> -->
                    </div>
                </div>
                <div class="project-bg-color"></div>
                <div class="project-content">
                    <a href="<?php echo esc_url(get_permalink( $featured_project1->ID )); ?>">
                        <div class="project-title-container">
                            <h1 class="project-title"><span><?php echo esc_html( $projectName ); ?><span></h1>
                            <h6 class="project-subtitle">Click for more info</span></h6>
                        </div>
                    </a>
                    <?php if( isset($newest_post_id) && $newest_post_id == $featured_project1->ID ): ?>
                        <div class="project-release-banner">
                            <i class="far fa-star icon"></i> Newest Release
                        </div>
                    <?php endif ?>
                    <?php if($featured_project2): ?>
                        <a href="/#project2" class="project-next-scroll">
                            Next Project <i class="fas fa-arrow-down icon"></i>
                        </a>
                    <?php endif; ?>
                    <div class="project-num-squares">
                        <div class="project-square active"></div>
                        <?php if($featured_project2): ?>
                            <div class="project-square"></div>
                        <?php endif; ?>
                        <?php if($featured_project3): ?>
                            <div class="project-square"></div>
                        <?php endif; ?>
                        <?php if($featured_project4): ?>
                            <div class="project-square"></div>
                        <?php endif; ?>
                        <?php if($featured_project5): ?>
                            <div class="project-square"></div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <?php if($featured_project2): ?>
            <?php
                $projectName = get_field( 'project_name', $featured_project2->ID );
                $projectImage = get_field( 'featured_image', $featured_project2->ID );
                $projectVideo = get_field( 'vimeo_code', $featured_project2->ID )
            ?>
             <div class="container-fluid px-0 project-container">
                <a class="project-anchor" id="project2"></a>
                

                <div class="parallax-slide" id="slide2">
					<div class="parallax-clip">
						<div class="poster-image" style="background-image: url('<?php echo esc_url($projectImage['url']); ?>');"></div>
                        <?php if($projectVideo): ?>
                            <div class="fixed-parallax  d-none d-lg-block">
                                <!-- Vimeo player -->
                                <div class="video-el vimeo-video" 
                                    data-vimeo-url="https://player.vimeo.com/video/<?php echo $projectVideo ?>"
                                    data-vimeo-background="true"
                                    data-vimeo-autopause="false"
                                    data-vimeo-loop="true"
                                    data-vimeo-responsive="true"
                                    style="position:absolute;top:0;left:0;width:100%;height:100%;" 
                                    id="video2">
                                </div>
                            </div>
                        <?php endif; ?>
                        <!-- <div class="fixed-parallax">
                            <video class="autoplay-video__video" loop autoplay="" playsinline="" muted="" aria-hidden="true"><source src="/wp-content/uploads/2021/06/Hello-World_project1-video.mp4" type="video/mp4"></video>
                        </div> -->
                    </div>
                </div>
                <div class="project-bg-color"></div>
                <div class="project-content">
                    <a href="<?php echo esc_url(get_permalink( $featured_project2->ID )); ?>">
                        <div class="project-title-container">
                            <h1 class="project-title"><span><?php echo esc_html( $projectName ); ?><span></h1>
                            <h6 class="project-subtitle">Click for more info</span></h6>
                        </div>
                    </a>
                    <?php if( isset($newest_post_id) && $newest_post_id == $featured_project2->ID ): ?>
                        <div class="project-release-banner">
                            <i class="far fa-star icon"></i> Newest Release
                        </div>
                    <?php endif ?>
                </div>
                <?php if($featured_project3): ?>
                    <a href="/#project3" class="project-next-scroll">
                        Next Project <i class="fas fa-arrow-down icon"></i>
                    </a>
                <?php endif; ?>
                <div class="project-num-squares">
                    <?php if($featured_project1): ?>
                        <div class="project-square"></div>
                    <?php endif; ?>
                    <div class="project-square active"></div>
                    <?php if($featured_project3): ?>
                        <div class="project-square"></div>
                    <?php endif; ?>
                    <?php if($featured_project4): ?>
                        <div class="project-square"></div>
                    <?php endif; ?>
                    <?php if($featured_project5): ?>
                        <div class="project-square"></div>
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>
        <?php if($featured_project3): ?>
            <?php
                $projectName = get_field( 'project_name', $featured_project3->ID );
                $projectImage = get_field( 'featured_image', $featured_project3->ID );
                $projectVideo = get_field( 'vimeo_code', $featured_project3->ID )
            ?>
            <div class="container-fluid px-0 project-container">
                <a class="project-anchor" id="project3"></a>


                <div class="parallax-slide" id="slide3">
					<div class="parallax-clip">
						<div class="poster-image" style="background-image: url('<?php echo esc_url($projectImage['url']); ?>');"></div>
                        <?php if($projectVideo): ?>
                            <div class="fixed-parallax d-none d-lg-block">
                                <!-- Vimeo player -->
                                <div class="video-el vimeo-video" 
                                    data-vimeo-url="https://player.vimeo.com/video/<?php echo $projectVideo ?>"
                                    data-vimeo-background="true"
                                    data-vimeo-autopause="false"
                                    data-vimeo-loop="true"
                                    data-vimeo-responsive="true"
                                    style="position:absolute;top:0;left:0;width:100%;height:100%;" 
                                    id="video3">
                                </div> 
                            </div>
                        <?php endif; ?>

                        <!-- <div class="fixed-parallax">
                            <video class="autoplay-video__video" loop autoplay="" playsinline="" muted="" aria-hidden="true"><source src="/wp-content/uploads/2021/06/Hello-World_project1-video.mp4" type="video/mp4"></video>
                        </div> -->
                    </div>
                </div>
                <div class="project-bg-color"></div>
                <div class="project-content">
                    <a href="<?php echo esc_url(get_permalink( $featured_project3->ID )); ?>">
                        <div class="project-title-container">
                            <h1 class="project-title"><span><?php echo esc_html( $projectName ); ?><span></h1>
                            <h6 class="project-subtitle">Click for more info</span></h6>
                        </div>
                    </a>
                    <?php if( isset($newest_post_id) && $newest_post_id == $featured_project3->ID ): ?>
                        <div class="project-release-banner">
                            <i class="far fa-star icon"></i> Newest Release
                        </div>
                    <?php endif ?>
                </div>
                <?php if($featured_project4): ?>
                    <a href="/#project4" class="project-next-scroll">
                        Next Project <i class="fas fa-arrow-down icon"></i>
                    </a>
                <?php endif; ?>
                <div class="project-num-squares">
                    <?php if($featured_project1): ?>
                        <div class="project-square"></div>
                    <?php endif; ?>
                    <?php if($featured_project2): ?>
                        <div class="project-square"></div>
                    <?php endif; ?>
                    <div class="project-square active"></div>
                    <?php if($featured_project4): ?>
                        <div class="project-square"></div>
                    <?php endif; ?>
                    <?php if($featured_project5): ?>
                        <div class="project-square"></div>
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>
        <?php if($featured_project4): ?>
            <?php
                $projectName = get_field( 'project_name', $featured_project4->ID );
                $projectImage = get_field( 'featured_image', $featured_project4->ID );
                $projectVideo = get_field( 'vimeo_code', $featured_project4->ID )
            ?>
            <div class="container-fluid px-0 project-container">
                <a class="project-anchor" id="project4"></a>
                <div class="parallax-slide" id="slide4">
                <div class="parallax-clip">
						<div class="poster-image" style="background-image: url('<?php echo esc_url($projectImage['url']); ?>');"></div>
                        <?php if($projectVideo): ?>
                            <div class="fixed-parallax  d-none d-lg-block">
                                <!-- Vimeo player -->
                                <div class="video-el vimeo-video" 
                                    data-vimeo-url="https://player.vimeo.com/video/<?php echo $projectVideo ?>"
                                    data-vimeo-background="true"
                                    data-vimeo-autopause="false"
                                    data-vimeo-loop="true"
                                    data-vimeo-responsive="true"
                                    style="position:absolute;top:0;left:0;width:100%;height:100%;" 
                                    id="video4">
                                </div>
                            </div>
                        <?php endif; ?>

                        <!-- <div class="fixed-parallax">
                            <video class="autoplay-video__video" loop autoplay="" playsinline="" muted="" aria-hidden="true"><source src="/wp-content/uploads/2021/06/Hello-World_project1-video.mp4" type="video/mp4"></video>
                        </div> -->
                    </div>
                </div>
                <div class="project-bg-color"></div>
                <div class="project-content">
                    <a href="<?php echo esc_url(get_permalink( $featured_project4->ID )); ?>">
                        <div class="project-title-container">
                            <h1 class="project-title"><span><?php echo esc_html( $projectName ); ?><span></h1>
                            <h6 class="project-subtitle">Click for more info</span></h6>
                        </div>
                    </a>
                    <?php if( isset($newest_post_id) && $newest_post_id == $featured_project4->ID ): ?>
                        <div class="project-release-banner">
                            <i class="far fa-star icon"></i> Newest Release
                        </div>
                    <?php endif ?>
                </div>
                <?php if($featured_project5): ?>
                    <a href="/#project5" class="project-next-scroll">
                        Next Project <i class="fas fa-arrow-down icon"></i>
                    </a>
                <?php endif; ?>
                <div class="project-num-squares">
                    <?php if($featured_project1): ?>
                        <div class="project-square"></div>
                    <?php endif; ?>
                    <?php if($featured_project2): ?>
                        <div class="project-square"></div>
                    <?php endif; ?>
                    <?php if($featured_project3): ?>
                        <div class="project-square"></div>
                    <?php endif; ?>
                    <div class="project-square active"></div>
                    <?php if($featured_project5): ?>
                        <div class="project-square"></div>
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>
        <?php if($featured_project5): ?>
            <?php
                $projectName = get_field( 'project_name', $featured_project5->ID );
                $projectImage = get_field( 'featured_image', $featured_project5->ID );
                $projectVideo = get_field( 'vimeo_code', $featured_project5->ID )
            ?>
            <div class="container-fluid px-0 project-container">
                <a class="project-anchor" id="project5"></a>
                <div class="parallax-slide" id="slide5">
                <div class="parallax-clip">
						<div class="poster-image" style="background-image: url('<?php echo esc_url($projectImage['url']); ?>');"></div>
                        <?php if($projectVideo): ?>
                            <div class="fixed-parallax d-none d-lg-block">
                                <!-- Vimeo player -->
                                <div class="video-el vimeo-video" 
                                    data-vimeo-url="https://player.vimeo.com/video/<?php echo $projectVideo ?>"
                                    data-vimeo-background="true"
                                    data-vimeo-autopause="false"
                                    data-vimeo-loop="true"
                                    data-vimeo-responsive="true"
                                    style="position:absolute;top:0;left:0;width:100%;height:100%;" 
                                    id="video5">
                                </div>
                            </div>
                        <?php endif; ?>

                        <!-- <div class="fixed-parallax">
                            <video class="autoplay-video__video" loop autoplay="" playsinline="" muted="" aria-hidden="true"><source src="/wp-content/uploads/2021/06/Hello-World_project1-video.mp4" type="video/mp4"></video>
                        </div> -->
                    </div>
                </div>
                <div class="project-bg-color"></div>
                <div class="project-content">
                    <a href="<?php echo esc_url(get_permalink( $featured_project5->ID )); ?>">
                        <div class="project-title-container">
                            <h1 class="project-title"><span><?php echo esc_html( $projectName ); ?><span></h1>
                            <h6 class="project-subtitle">Click for more info</span></h6>
                        </div>
                    </a>
                    <?php if( isset($newest_post_id) && $newest_post_id == $featured_project5->ID ): ?>
                        <div class="project-release-banner">
                            <i class="far fa-star icon"></i> Newest Release
                        </div>
                    <?php endif ?>
                </div>
                <?php if($featured_project6): ?>
                    <a href="/#project6" class="project-next-scroll">
                        Next Project <i class="fas fa-arrow-down icon"></i>
                    </a>
                <?php endif; ?>
                <div class="project-num-squares">
                    <?php if($featured_project1): ?>
                        <div class="project-square"></div>
                    <?php endif; ?>
                    <?php if($featured_project2): ?>
                        <div class="project-square"></div>
                    <?php endif; ?>
                    <?php if($featured_project3): ?>
                        <div class="project-square"></div>
                    <?php endif; ?>
                    <?php if($featured_project4): ?>
                        <div class="project-square"></div>
                    <?php endif; ?>
                    <div class="project-square active"></div>
                </div>
            </div>
        <?php endif; ?>
    <section>
    <!-- <section class="container px-4 py-5">
        <div class="row">
            <div class="content col-md-12 col-lg-7 mb-xs-4 mb-lg-0 py-lg-4 content">
                <?php echo $fields['home_content'] ?>
            </div>
            <div class="col-md-12 col-lg-5 col-xl-4 offset-xl-1 py-4 content">
                <?php get_template_part( 'inc/partials/contact-info-card' ); ?>
            </div>
        </div>
    </section> -->
</div>
<?php get_footer();?>