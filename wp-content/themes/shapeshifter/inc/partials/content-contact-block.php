<section class="container px-4 py-5">
    <div class="row">
        <div class="col-md-12 col-lg-7 mb-xs-4 mb-lg-0 py-lg-4">
            <h2 class="mb-5"><?php the_title(); ?></h2>
            <p class="mb-5"><?php the_content() ?></p>
            <button class="button">Contact Us</button>
        </div>
        <div class="col-md-12 col-lg-5 col-xl-4 offset-xl-1 py-4">    
            <?php get_template_part( 'inc/partials/contact-info' ); ?>
        </div>
    <!-- Button trigger modal -->
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalCenter">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="modalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered container" role="document">
        <div class="modal-content"> 
            <?php get_template_part('inc/partials/modal', '', $fields); ?>
        </div>
    </div>
</div>  
    </div>
</section>