<?php 
    $fields = get_fields();
    the_title();
    // var_dump($fields);
?>

<div class="job-preview">
    <div class="row m-0">
        <div class="header col-xs-12 py-xs-2 py-md-1">
            <?php echo "<h5 class='title'>{$fields['job_title']}</h5>"; ?>
            <p class="date">Date Posted</p>
        </div>
        <div class="content col-xs-12 p-xs-2 px-md-5">
            <?php echo "<p class='description'>{$fields['preview_text']}</p>"; ?>
        </div>
        <div class="arrow col-xs-0 p-xs-2 p-md-0">
            <p style="color: black">-></p>
        </div>
    </div>
</div>

<div class="col-md-12 py-4"> 
    <?php get_template_part('inc/partials/modal', '', $fields); ?>
</div>

