<?php 
// var_dump($args);
//  the_title();
?>

<div class="ss-modal">
    <div class="ss-modal-content row">
        <div class="ss-modal__header col-xs-12 pl-3 pr-5 py-md-1">
            <?php echo "<h5 class='ss-modal__header--title'>{$args['job_title']}</h5>"; ?>
            <?php echo "<p class='ss-modal__header--date'><span><em class='far fa-clock mr-1'></em></span>Date Posted: {$args['date_posted']}</p>"; ?>
        </div>
        <div class="content py-xs-2 col-xs-10">
            <?php echo "<p class='description'>{$args['job_description']}</p>" ?>
        </div>
        <?php echo "<a class='cta py-2 px-4' href='" . esc_url($args['application_link']) . "'target='_blank'>" ?>
            <span>Apply Now</span>
            <em class="icon fas fa-chevron-right"></em>
        </a>
    </div>
</div>