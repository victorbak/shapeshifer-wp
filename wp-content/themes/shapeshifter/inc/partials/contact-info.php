<?php 
    $post = get_page_by_title('Contact Info', OBJECT, 'reusable_block'); 
    $fields = get_fields();
?>
<!-- TODO: ADD ICONS -->
<main class="contact-info">
    <div class="box">
        <div class="triangle"></div>
        <div>
            <p class="contact-info--header">CONTACT INFO</p>
            <div class="underline"></div>
            <div class="p-2">
                <p><?php echo $fields['phone_number']; ?>
                <p><?php echo $fields['email']; ?>
                <p><?php echo $fields['email']; ?>
            </div>
        </div>
        <div>
            <p class="contact-info--header">SOCIAL</p>
            <div class="underline"></div>
            <div class="row p-2">
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