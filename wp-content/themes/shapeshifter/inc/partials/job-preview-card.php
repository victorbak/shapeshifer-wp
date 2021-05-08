<?php 
    $fields = get_fields();
    $id = get_the_ID();
?>

<a class="job-preview" data-toggle="modal" data-target="<?php echo '#modalCenter-' . $id ?>">
    <div class="content row m-0">
        <div class="header col-xs-12 py-xs-2 py-md-1">
            <?php echo "<h5 class='title'>{$fields['job_title']}</h5>"; ?>
            <?php echo "<p class='date'><span><em class='far fa-clock mr-1'></em></span>Date Posted: {$fields['date_posted']}</p>" ?>
            <em class="fas fa-arrow-right icon"></em>
        </div>
        <div class="content col-xs-12 p-xs-2 pr-md-5">
            <?php echo "<p class='description'>{$fields['preview_text']}</p>"; ?>
        </div>
        <div class="arrow col-xs-0 p-xs-2 p-md-0">
            <em class="fas fa-arrow-right"></em>
        </div>
    </div>
</a>

<!-- Modal -->
<div class="modal fade" 
    id="<?php echo 'modalCenter-' . $id ?>" 
    tabindex="-1" 
    role="dialog" 
    aria-labelledby="exampleModalCenterTitle" 
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered container" role="document">
        <div class="modal-content"> 
            <?php get_template_part('inc/partials/modal', '', $fields); ?>
        </div>
    </div>
</div>


