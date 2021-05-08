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
            <?php //foreach( $featured_project1 as $project1 ): ?>
                <?php
                    $projectName = get_field( 'project_name', $featured_project1->ID );
                    $projectImage = get_field( 'gallery', $featured_project1->ID );
                ?>
                <div class="container-fluid px-0 project-container">
                    <a href="/coming-soon">
                        <h2 class="project-title"><?php echo esc_html( $projectName ); ?></h2>
                        <img src="<?php echo esc_url($projectImage['url']); ?>" alt="<?php echo esc_url($projectImage['alt']); ?>">
                        <div class="project-release-banner">
                            Newest Release
                        </div>
                    </a>
                </div>
            <?php //endforeach; ?>
        <?php endif; ?>
        <?php if($featured_project2): ?>
            <div class="container-fluid px-0 project-container">
                <a href="/coming-soon">
                    <h2 class="project-title">Project One</h2>
                    <img src="<?php bloginfo('template_url'); ?>/assets/projects/project1-2x.png" alt="project1">
                </a>
            </div>
        <?php endif; ?>
        <?php if($featured_project3): ?>
            <div class="container-fluid px-0 project-container">
                <a href="/coming-soon">
                    <h2 class="project-title">Project One</h2>
                    <img src="<?php bloginfo('template_url'); ?>/assets/projects/project1-2x.png" alt="project1">
                </a>
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