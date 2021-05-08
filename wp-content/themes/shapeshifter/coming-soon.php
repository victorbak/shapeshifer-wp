<?php

/* 
 * Template Name: Coming Soon
 */
 
$fields = get_fields();
?>

<?php get_header(); ?>

<div class="coming-soon page">
    <div class="content">
        <div class="row">
            <div class="col-md-12">    
                <div class="logo">
                    <a href="/">
                        <img src="<?php bloginfo('template_url'); ?>/assets/Logo_Vector.svg" alt="Shapeshifter">
                    </a>
                </div>
            </div>
            <div class="col-md-12">
                <p><?php echo $fields['coming_soon_text']; ?></p>
            </div>
        </div>
    </div>
</div>