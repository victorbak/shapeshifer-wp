<?php 
  $fields = get_fields();
  $id = get_the_ID();

  $hasContactInfo = false;
  $contact_details = $fields['contact_details'];

  if( ! empty( $contact_details ) ) {
    $hasContactInfo = true;
  } 

  $photo      = $fields['photo'];
  $full_name  = $fields['full_name'];
  $job_title  = $fields['job_title'];
  $bio        = $fields['bio'];

  $phone      = $contact_details['phone_number'];
  $email      = $contact_details['email'];
  $linkedin   = $contact_details['linkedin'];
  $artstation = $contact_details['artstation'];
  $youtube    = $contact_details['youtube'];
  $demo_reel  = $contact_details['demo_reel'];
  $imdb       = $contact_details['imdb'];
  
?>

<div class="team-member box" role="button">
    <div class="team-member__photo">
    <?php if ( ! empty( $photo ) ): ?>
        <div class="photo" style="background-image: url('<?php echo $photo['url'] ?>');"></div>
    <?php else: ?>
        <img src="<?php echo get_template_directory_uri() . '/assets/dog.png' ?>">
    <?php endif ?>
    </div>
    <div class="content">
      <div class="team-member__identity">
      <?php if ( ! empty( $full_name ) ): ?>
        <?php echo "<h5 class='full-name'>" . $full_name ."</h5>"; ?>
      <?php endif ?>
      <?php if ( ! empty( $job_title ) ): ?>
        <?php echo "<h6 class='job-title'>" . $job_title ."</h6>"; ?>
        <div class="divider"></div>
      <?php endif ?>
      </div>
      <?php if ( $hasContactInfo ) : ?>
        <div class="team-member__contact-info py-1">
          <!-- <div class="divider"></div> -->
          <?php if ( ! empty( $email ) ): ?>
            <a class="team-member__contact-info-item" href="<?php echo esc_url( 'mailto:' . $email ) ?>" target="_blank" rel="noopener noreferrer"><em class="icon far fa-envelope"></em><?php echo $email ?></a>
          <?php endif ?>
          <?php if ( ! empty( $linkedin ) ): ?>
            <a class="team-member__contact-info-item" href="<?php echo esc_url( $linkedin ) ?>" target="_blank" rel="noopener noreferrer"><em class="icon fab fa-linkedin-in"></em><?php echo $linkedin ?></a>
          <?php endif ?>
          <?php if ( ! empty( $phone ) ): ?>
            <a class="team-member__contact-info-item" href="<?php echo esc_url( 'tel:' . $phone ) ?>" target="_blank" rel="noopener noreferrer"><em class="icon fas fa-phone"></em><?php echo $phone ?></a>
          <?php endif ?>
          <?php if ( ! empty( $artstation ) ): ?>
            <a class="team-member__contact-info-item" href="<?php echo esc_url( $artstation ) ?>" target="_blank" rel="noopener noreferrer"><i class="icon fab fa-artstation"></i><?php echo $artstation ?></a>
          <?php endif ?>
          <?php if ( ! empty( $youtube ) ): ?>
            <a class="team-member__contact-info-item" href="<?php echo esc_url( $youtube ) ?>" target="_blank" rel="noopener noreferrer"><em class="icon fab fa-youtube"></em><?php echo $youtube ?></a>
          <?php endif ?>
          <?php if ( ! empty( $demo_reel ) ): ?>
            <a class="team-member__contact-info-item" href="<?php echo esc_url( $demo_reel ) ?>" target="_blank" rel="noopener noreferrer"><em class="icon fas fa-film"></em><?php echo $demo_reel ?></a>
          <?php endif ?>
          <?php if ( ! empty( $imdb ) ): ?>
            <a class="team-member__contact-info-item" href="<?php echo esc_url( $imdb ) ?>" target="_blank" rel="noopener noreferrer"><em class="icon fab fa-imdb"></em><?php echo $imdb ?></a>
          <?php endif ?>
        </div>
        <!-- <div class="divider"></div>  -->
      <?php endif ?>
      <div class="team-member__bio">
        <div class="divider"></div>
        <div class="team-member__bio-content">
        <?php if ( ! empty($bio ) ): ?>
          <?php echo "<p>" . $bio ."</p>"; ?>
        <?php endif ?>
        </div>
      </div>
    </div>
    <span class="cta py-2 px-2">
        <span class="text mr-2">View Details</span>
        <em class="icon fas fa-plus"></em>
    </span>
</div>