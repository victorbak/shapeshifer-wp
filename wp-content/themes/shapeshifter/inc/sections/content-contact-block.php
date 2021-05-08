<section class="container px-4 py-5">
    <div class="row">
        <div class="content col-md-12 col-lg-7 mb-xs-4 mb-lg-0 py-lg-4">
            <?php the_field('contact_intro'); ?>
            <button class="button">Contact Us <span class="icon"><em class="fas fa-chevron-right"></em></span></button>
        </div>
        <div class="col-md-12 col-lg-5 col-xl-4 offset-xl-1 py-4">
            <?php get_template_part( 'inc/partials/contact-info-card' ); ?>
        </div>
    </div>
</section>