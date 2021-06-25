<?php 
    $post = get_page_by_title('Contact Info', OBJECT, 'projects'); 
    $fields = get_fields();
    $creds = $fields['credits'];

    $software_header = $fields['software_section_heading'];
    $software_used   = $fields['software_used'];

    $software_icons = array(
      'unreal_engine' => get_theme_file_uri( '/assets/icons/unreal_engine.png' ),
      'xsens'         => get_theme_file_uri( '/assets/icons/xsens.png' ),
      'nuke'          => get_theme_file_uri( '/assets/icons/nuke.png' ),
      'vray'          => get_theme_file_uri( '/assets/icons/vray.png' ),
      'maya'          => get_theme_file_uri( '/assets/icons/maya.png' ),
      '3ds_max'       => get_theme_file_uri( '/assets/icons/3ds_max.png' ),
      'autodesk'      => get_theme_file_uri( '/assets/icons/autodesk.png' ),
    );
?>
<main class="contact-info">
  <?php if ( ! empty( $software_used ) || have_rows( 'credits' ) ) : ?>
    <div class="box">
        <div class="triangle"></div>
        <?php if ( have_rows( 'credits' ) ) : ?>
          <?php while( have_rows( 'credits' ) ) : the_row(); ?>
            <?php $credits = get_row(); ?>
            <?php foreach($credits as $key => $item): ?>
              <?php $credit = get_sub_field_object( $key ); ?>
              <div class="credits">
                  <h5 class="contact-info--header"><?php echo $credit['label']; ?></h5>
                  <div class="divider"></div>
                  <div class="p-1">
                      <p class="contact-info--text"><?php echo $credit['value']; ?></p>
                  </div>
              </div>
            <?php endforeach ?>
          <?php endwhile ?>
        <?php endif ?>
        <?php if ( ! empty( $software_used ) ) : ?>
          <div class="software-section">
              <h5 class="contact-info--header"><?php echo $software_header; ?></h5>
              <div class="divider"></div>
              <div class="software-container row p-2">
                <?php foreach( $software_used as $software ) : ?>
                  <?php if ( array_key_exists( $software['value'], $software_icons ) && ! empty( $software_icons[$software['value']] ) ): ?>
                  <div class="icon-wrapper">
                    <img class="software-icon" 
                      src="<?php echo esc_url( $software_icons[$software['value']] ); ?>" 
                      alt="<?php echo esc_attr( $software['label'] ) ?>"
                      title="<?php echo esc_attr( $software['label'] ) ?>" />
                  </div>
                  <?php endif ?>
                <?php endforeach ?>
              </div>
          </div>
        <?php endif; ?>
    </div>
  <?php endif; ?>
</main>