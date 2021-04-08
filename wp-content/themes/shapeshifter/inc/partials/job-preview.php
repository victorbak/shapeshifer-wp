<?php 
    var_dump($args);
    // $title = $args  
    // $content = $args->content;
    ob_start();
    the_title();
    $title = ob_get_clean();
    var_dump($title);

    $slug = get_post_field( 'post_name', get_the_ID() );
    var_dump($slug);

?>


<div class="job-preview">
    <div class="row m-0">
        <div class="header col-xs-12 py-xs-2 py-md-1">
            <h4 class='title'><?php the_title(); ?></h4>
            <p class="date">Date Posted</p>
        </div>
        <div class="content col-xs-12 p-xs-2 px-md-5">
            <p class="description">Are you driven to succeed, and looking to work with one of Vancouver’s highest volume studios? How does huge growth potential sound? We are looking for a motivated Sales Manager to add to our growing Team!</p>
        </div>
        <div class="arrow col-xs-0 p-xs-2 p-md-0">
            <p>-></p>
        </div>
    </div>
</div>