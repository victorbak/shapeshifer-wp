<?php 
    $post = get_page_by_title('Contact Info', OBJECT, 'reusable_block'); 
    $fields = get_fields();
?>

<div>
    <h4>CONTACT INFO</h4>
    <p><?php echo $fields['phone_number']; ?>
    <p><?php echo $fields['email']; ?>
    <p><?php echo $fields['street_address']; ?>
</div>
<div>
    <h4>SOCIAL</h4>
    <div class="row justify-content-lg-start">
        <div class="col-lg-1">tw</div>
        <div class="col-lg-1">in</div>
        <div class="col-lg-1">vm</div>
        <div class="col-lg-1">yt</div>
        <div class="col-lg-1">ig</div>
    </div>
    <p><em>icons listed here</em></p>
</div>