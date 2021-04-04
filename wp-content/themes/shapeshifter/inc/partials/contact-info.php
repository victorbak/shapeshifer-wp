<?php 
    $post = get_page_by_title('Contact Info', OBJECT, 'reusable_block'); 
    $fields = get_fields();
?>
<!-- TODO: ADD ICONS, ADD CORNER TO BOX -->
<main class="contact-info">
    <div class="contact-info__box">
        <div class="triangle"></div>
        <div>
            <p class="contact-info--header">CONTACT INFO</p>
            <div class="underline"></div>
            <div class="contact-info--contact">
                <p><?php echo $fields['phone_number']; ?>
                <p><?php echo $fields['email']; ?>
                <p><?php echo $fields['email']; ?>
                <p><?php echo $fields['street_address']; ?>
            </div>
        </div>
        <div>
            <p class="contact-info--header">SOCIAL</p>
            <div class="underline"></div>
            <div class="row contact-info--social">
                <!-- Add conditionals -->
                <p class="col-1">in</p>
                <p class="col-1">vm</p>
                <p class="col-1">yt</p>
                <p class="col-1">tw</p>
                <p class="col-1">ig</p>
            </div>
        </div>
    </div>
</main>