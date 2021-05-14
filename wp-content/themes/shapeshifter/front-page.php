<?php get_header();?>
<?php $fields = get_fields(); ?>
<?php
$featured_project1 = get_field('featured_project_1');
$featured_project2 = get_field('featured_project_2');
$featured_project3 = get_field('featured_project_3');
?>
<div class="home page">
    <section class="project-section">
        <?php if($featured_project1): ?>
            <?php
                $projectName = get_field( 'project_name', $featured_project1->ID );
                $projectImage = get_field( 'featured_image', $featured_project1->ID );
            ?>
            <div class="container-fluid px-0 project-container">
                <a class="project-anchor" id="project1"></a>
                <div class="parallax-slide">
					<div class="parallax-clip">
						<div class="fixed-parallax" style="background-image: url('<?php echo esc_url($projectImage['url']); ?>');"></div>
                    </div>
                </div>
                <div class="project-bg-color"></div>
                <div class="project-content">
                    <a href="<?php echo esc_url(get_permalink( $featured_project1->ID )); ?>">
                        <h1 class="project-title"><span><?php echo esc_html( $projectName ); ?><span></h1>
                    </a>
                    <div class="project-release-banner">
                        <i class="far fa-star icon"></i> Newest Release
                    </div>
                    <?php if($featured_project2): ?>
                        <a href="/#project2" class="project-next-scroll">
                            Next Project <i class="fas fa-arrow-down icon"></i>
                        </a>
                    <?php endif; ?>
                    <div class="project-num-squares">
                        <div class="project-square active"></div>
                        <div class="project-square"></div>
                        <div class="project-square"></div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <?php if($featured_project2): ?>
            <?php
                $projectName = get_field( 'project_name', $featured_project2->ID );
                $projectImage = get_field( 'featured_image', $featured_project2->ID );
            ?>
             <div class="container-fluid px-0 project-container">
                <a class="project-anchor" id="project2"></a>
                <div class="parallax-slide">
					<div class="parallax-clip">
						<div class="fixed-parallax" style="background-image: url('<?php echo esc_url($projectImage['url']); ?>');"></div>
                    </div>
                </div>
                <div class="project-bg-color"></div>
                <div class="project-content">
                    <a href="<?php echo esc_url(get_permalink( $featured_project2->ID )); ?>">
                        <h1 class="project-title"><span><?php echo esc_html( $projectName ); ?><span></h1>
                    </a>
                </div>
                <?php if($featured_project3): ?>
                    <a href="/#project3" class="project-next-scroll">
                        Next Project <i class="fas fa-arrow-down icon"></i>
                    </a>
                <?php endif; ?>
                <div class="project-num-squares">
                    <div class="project-square"></div>
                    <div class="project-square active"></div>
                    <div class="project-square"></div>
                </div>
            </div>
        <?php endif; ?>
        <?php if($featured_project3): ?>
            <?php
                $projectName = get_field( 'project_name', $featured_project3->ID );
                $projectImage = get_field( 'featured_image', $featured_project3->ID );
            ?>
            <div class="container-fluid px-0 project-container">
                <a class="project-anchor" id="project3"></a>
                <div class="parallax-slide">
					<div class="parallax-clip">
						<div class="fixed-parallax" style="background-image: url('<?php echo esc_url($projectImage['url']); ?>');"></div>
                    </div>
                </div>
                <div class="project-bg-color"></div>
                <div class="project-content">
                    <a href="<?php echo esc_url(get_permalink( $featured_project3->ID )); ?>">
                        <h1 class="project-title"><span><?php echo esc_html( $projectName ); ?><span></h1>
                    </a>
                </div>
                <div class="project-num-squares">
                    <div class="project-square"></div>
                    <div class="project-square"></div>
                    <div class="project-square active"></div>
                </div>
            </div>
        <?php endif; ?>
    <section>
    <section class="container px-4 py-5">
        <div class="row">
            <div class="content col-md-12 col-lg-7 mb-xs-4 mb-lg-0 py-lg-4 content">
                <?php echo $fields['home_content'] ?>
            </div>
            <div class="col-md-12 col-lg-5 col-xl-4 offset-xl-1 py-4 content">
                <?php get_template_part( 'inc/partials/contact-info-card' ); ?>
            </div>
        </div>
    </section>
</div>
<?php get_footer();?>