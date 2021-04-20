<?php get_header();?>

<div class="home page">
    <section class="container-fluid px-0 project-container">
        <a href="/">
            <h2 class="project-title">Project One</h2>
            <img src="<?php bloginfo('template_url'); ?>/assets/projects/project1-2x.png" alt="project1">
            <div class="project-release-banner">
                Newest Release
            </div>
        </a>
    </section>
    <section class="container px-4 py-5">
        <div class="row">
            <div class="content col-md-12 col-lg-7 mb-xs-4 mb-lg-0 py-lg-4 content">
                <?php the_content() ?>
            </div>
            <div class="col-md-12 col-lg-5 col-xl-4 offset-xl-1 py-4 content">
                <?php get_template_part( 'inc/partials/contact-info' ); ?>
            </div>
        </div>
    </section>
</div>
<?php get_footer();?>