<?php 
    $fields       = get_fields();
    $id           = get_the_ID();
    $job_title    = $fields['job_title'];
    $date_posted  = empty( $fields['date_posted'] ) ? get_the_date('d/m/Y') : $fields['date_posted'];
    $preview_text = empty( $fields['preview_text'] ) ? "Click for more information." : $fields['preview_text']
?>

<button class="job-preview" role="button" data-toggle="modal" data-target="<?php echo '#modalCenter-' . $id ?>">
    <div class="content-container row m-0">
        <div class="job-header col-xs-12 py-xs-2 py-md-1">
            <h5 class='title'><?php echo $job_title; ?></h5>
            <p class='date'><span><em class='far fa-clock mr-1'></em></span><?php echo "Date Posted: {$date_posted}"; ?></p>
            <em class="fas fa-arrow-right icon"></em>
        </div>
        <div class="content col-xs-12 p-xs-2 pr-md-5">
          <p class='description'><?php echo $preview_text; ?></p>
        </div>
        <div class="arrow col-xs-0 p-xs-2 p-md-0">
            <em class="fas fa-arrow-right"></em>
        </div>
    </div>
</button>

<!-- Modal -->
<div class="modal fade" 
    id="<?php echo 'modalCenter-' . $id ?>" 
    tabindex="-1"
    role="dialog" 
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered container" role="document">
        <div class="modal-content"> 
            <button role="button" data-dismiss="modal" class="simple-modal-close">
                <em class="icon fas fa-times"></em>
            </button>
            <?php get_template_part('inc/partials/modal', '', $fields); ?>
        </div>
    </div>
</div>


