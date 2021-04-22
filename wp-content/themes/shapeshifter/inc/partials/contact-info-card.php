<?php 
    $post = get_page_by_title('Contact Info', OBJECT, 'reusable_block'); 
    $fields = get_fields();
?>
<!-- TODO: ADD ICONS -->
<main class="contact-info">
    <div class="box">
        <div class="triangle"></div>
        <div>
            <h5 class="contact-info--header">CONTACT INFO</h5>
            <div class="underline"></div>
            <div class="p-2">
                <p><em class="icon fas fa-phone mr-3"></em><?php echo $fields['phone_number']; ?></p>
                <p><em class="icon far fa-envelope mr-3"></em><?php echo $fields['email']; ?></p>
                <p><em class="icon fas fa-map-marker-alt mr-3"></em><?php echo $fields['street_address']; ?></p>
            </div>
        </div>
        <div>
            <h5 class="contact-info--header">SOCIAL</h5>
            <div class="underline"></div>
            <div class="row p-2">
                <!-- Add conditionals -->
                <a href="https://google.ca" target="blank"><em class="icon col-1 fab fa-twitter"></em></a>
                <a href="https://google.ca" target="blank"><em class="icon col-1 fab fa-facebook-f"></em></a>
                <a href="https://google.ca" target="blank"><em class="icon col-1 fab fa-vimeo"></em></a>
                <a href="https://google.ca" target="blank"><em class="icon col-1 fab fa-youtube"></em></a>
                <a href="https://google.ca" target="blank"><em class="icon col-1 fab fa-linkedin-in"></em></a>
            </div>
        </div>
    </div>
</main>