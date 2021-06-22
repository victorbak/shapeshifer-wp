<?php 
    $post = get_page_by_title('Contact Info', OBJECT, 'projects'); 
    $fields = get_fields();

    $artists         = $fields['artists'];
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
  <?php if ( ! empty( $software_used ) || ! empty( $artists ) ) : ?>
    <div class="box">
        <div class="triangle"></div>
        <div>
            <h5 class="contact-info--header">ARTISTS</h5>
            <div class="divider"></div>
            <div class="p-2">
                <p><?php echo $fields['artists']; ?></p>
            </div>
        </div>
        <?php if ( ! empty( $software_used ) ) : ?>
          <div>
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