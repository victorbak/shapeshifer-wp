<?php 
// var_dump($args);
//  the_title();
?>
<!-- <div class="modal fade" id="modalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered container" role="document">
        <div class="modal-content">  -->
            <div class="ss-modal">
                <div class="ss-modal-content row">
                    <div class="ss-modal__header col-xs-12 pl-3 pr-5 py-md-1">
                        <h5 class='ss-modal__header--title'> <?php the_title(); ?> </h5>
                        <?php echo "<p class='ss-modal__header--date'><span><em class='far fa-clock mr-1'></em></span>Date Posted: {$args['date_posted']}</p>"; ?>
                    </div>
                    <div class="content py-xs-2">
                        <p class='description col-xs-12'><?php the_content() ?></p>
                    </div>
                    <a class="cta py-2 px-4" href="https://indeed.com" target="_blank">
                        <span>Apply Now</span>
                        <em class="icon fas fa-chevron-right"></em>
                    </a>
                </div>
            </div>
        <!-- </div>
    </div>
</div>   -->