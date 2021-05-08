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
                $projectImage = get_field( 'gallery', $featured_project1->ID );
            ?>
            <div class="container-fluid px-0 project-container" style="background-image: url('<?php echo esc_url($projectImage['url']); ?>');">
                <div class="project-bg-color"></div>
                <div class="project-content">
                    <a href="/coming-soon">
                        <h2 class="project-title"><?php echo esc_html( $projectName ); ?></h2>
                        <div class="project-release-banner">
                            <i class="far fa-star icon"></i> Newest Release
                        </div>
                    </a>
                </div>
            </div>
        <?php endif; ?>
        <?php if($featured_project2): ?>
            <?php
                $projectName = get_field( 'project_name', $featured_project2->ID );
                $projectImage = get_field( 'gallery', $featured_project2->ID );
            ?>
            <div class="container-fluid px-0 project-container" style="background-image: url('<?php echo esc_url($projectImage['url']); ?>');">
                <div class="project-bg-color"></div>
                <div class="project-content">
                    <a href="/coming-soon">
                        <h2 class="project-title"><?php echo esc_html( $projectName ); ?></h2>
                    </a>
                </div>
            </div>
        <?php endif; ?>
        <?php if($featured_project3): ?>
            <?php
                $projectName = get_field( 'project_name', $featured_project3->ID );
                $projectImage = get_field( 'gallery', $featured_project3->ID );
            ?>
            <div class="container-fluid px-0 project-container" style="background-image: url('<?php echo esc_url($projectImage['url']); ?>');">
                <div class="project-bg-color"></div>
                <div class="project-content">
                    <a href="/coming-soon">
                        <h2 class="project-title"><?php echo esc_html( $projectName ); ?></h2>
                    </a>
                </div>
            </div>
        <?php endif; ?>
    <section>
    <section class="container px-4 py-5">
        <div class="row">
            <div class="content col-md-12 col-lg-7 mb-xs-4 mb-lg-0 py-lg-4 content">
                <?php the_content() ?>
            </div>
            <div class="col-md-12 col-lg-5 col-xl-4 offset-xl-1 py-4 content">
                <?php get_template_part( 'inc/partials/contact-info-card' ); ?>
            </div>
        </div>
    </section>
</div>
<?php get_footer();?>