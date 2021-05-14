<?php 
    $fields = get_fields();
    $id = get_the_ID();
?>

<a class="team-member box" role="button">
    <div class="team-member__photo">
    <?php if ( ! empty($fields['photo'] ) ): ?>
        <img src="<?php echo $fields['photo']['url'] ?>">
    <?php else: ?>
        <img src="<?php echo '/wp-content/uploads/2021/04/Image-5.png' ?>">
    <?php endif ?>
    </div>
    <div class="content">
        <div class="team-member__identity">
        <?php if ( ! empty($fields['full_name'] ) ): ?>
            <?php echo "<h5 class='full-name'>" . $fields['full_name'] ."</h5>"; ?>
        <?php endif ?>
        <?php if ( ! empty($fields['job_title'] ) ): ?>
            <?php echo "<h6 class='job-title'>" . $fields['job_title'] ."</h6>"; ?>
        <?php endif ?>
        </div>
        <div class="team-member__contact-info">
            <div class="divider"></div>
        <?php if ( ! empty($fields['email'] ) ): ?>
            <p class="team-member__contact-info-item"><em class="icon far fa-envelope"></em><?php echo $fields['email'] ?></p>
        <?php endif ?>
        <?php if ( ! empty($fields['linkedin'] ) ): ?>
            <p class="team-member__contact-info-item"><em class="icon fab fa-linkedin-in"></em><?php echo $fields['linkedin'] ?></p>
        <?php endif ?>
        <?php if ( ! empty($fields['phone_number'] ) ): ?>
            <p class="team-member__contact-info-item"><em class="icon fas fa-phone"></em><?php echo $fields['phone_number'] ?></p>
        <?php endif ?>
        </div>
        <div class="team-member__bio">
            <div class="divider"></div>
            <div class="team-member__bio-content">
            <?php if ( ! empty($fields['bio'] ) ): ?>
                <?php echo "<p>" . $fields['bio'] ."</p>"; ?>
            <?php endif ?>
            </div>
        </div>
    </div>
    <span class="cta py-2 px-2">
        <span class="mr-2">View Details</span>
        <em class="icon fas fa-plus"></em>
    </span>
</a>