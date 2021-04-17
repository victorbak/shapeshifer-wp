<?php get_header();?>

<div class="home page">
    <section class="container px-4 pt-5 pb-2 mb-2">
        <div class="row">
            <div class="col-7 content">
                <?php the_content() ?>
            </div>
            <div class="col-5 content">
                <?php get_template_part( 'inc/partials/contact-info' ); ?>
            </div>
        </div>
    </section>
</div>
<?php get_footer();?>