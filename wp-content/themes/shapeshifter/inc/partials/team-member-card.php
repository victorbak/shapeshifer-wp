<?php 
    $fields = get_fields();
    $id = get_the_ID();
?>

<a class="team-member box" role="button">
    <div class="team-member__photo">
        <img src="<?php echo $fields['photo']['url'] ?>" />
    </div>
    <div class="content">
        <div class="team-member__identity">
            <?php echo "<h5 class='full-name'>" . $fields['full_name'] ."</h5>"; ?>
            <?php echo "<h6 class='job-title'>" . $fields['job_title'] ."</h6>"; ?>
        </div>
        <div class="team-member__contact-info">
            <div class="divider"></div>
            <p class="team-member__contact-info-item"><em class="icon far fa-envelope"></em><?php echo $fields['email'] ?></p>
            <p class="team-member__contact-info-item"><em class="icon fab fa-linkedin-in"></em><?php echo $fields['linkedin'] ?></p>
            <p class="team-member__contact-info-item"><em class="icon fas fa-phone"></em><?php echo $fields['phone_number'] ?></p>
        </div>
        <div class="team-member__bio">
            <div class="divider"></div>
            <div class="team-member__bio-content">
                <?php echo "<p>" . $fields['bio'] ."</p>"; ?>
            </div>
        </div>
    </div>
    <span class="cta py-2 px-2">
        <span class="mr-2">View Details</span>
        <em class="icon fas fa-plus"></em>
    </span>
</a>