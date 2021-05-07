<?php 
    $fields = get_fields();
    $id = get_the_ID();
?>

<a class="team-member box" role="button">
    <!-- <a class="team-member-card" role="button"> -->
        <div class="team-member__photo">
            <img src="<?php echo $fields['photo']['url'] ?>" />
        </div>
        <div class="content">
            <div class="team-member__identity">
                <?php echo "<h4>" . $fields['full_name'] ."</h4>"; ?>
                <?php echo "<h5>" . $fields['job_title'] ."</h5>"; ?>
            </div>
            <div class="underline"></div>
            <div class="team-member__contact-info">
                <p><em class="icon fas fa-phone mr-3"></em><?php echo $fields['email'] ?></p>
                <p><em class="icon fas fa-phone mr-3"></em><?php echo $fields['linkedin'] ?></p>
                <p><em class="icon fas fa-phone mr-3"></em><?php echo $fields['phone_number'] ?></p>
            </div>
            <div class="team-member__bio">
                <div class="underline"></div>
                <div class="team-member__bio-content">
                    <?php echo "<p>" . $fields['bio'] ."</p>"; ?>
                </div>
            </div>
        </div>
        <span class="cta py-2 px-2">
            <span class="mr-2">View Details</span>
            <em class="icon fas fa-plus"></em>
        </span>
    <!-- </a> -->
</a>