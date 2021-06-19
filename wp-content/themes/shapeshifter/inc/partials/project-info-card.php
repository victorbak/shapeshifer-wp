<?php 
    $post = get_page_by_title('Contact Info', OBJECT, 'projects'); 
    $fields = get_fields();

    $software_header = $fields['software_section_heading'];
    $software_used = $fields['software_used'];

    $software_icons = array(
      'unreal_engine' => '',
      'xsens'         => '',
      'nuke'          => '',
      'vray'          => '',
      'maya'          => get_theme_file_uri( '/assets/icons/maya.png' ),
      '3ds_max'       => get_theme_file_uri( '/assets/icons/3ds_max.png' ),
      'autodesk'      => get_theme_file_uri( '/assets/icons/maya.png' ),
    );
?>
<main class="contact-info">
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
                  <?php if ( array_key_exists( $software, $software_icons ) && ! empty( $software_icons[$software] ) ): ?>
                    <img class="software-icon" 
                      src="<?php echo esc_url( $software_icons[$software] ); ?>" 
                      alt="<?php echo esc_attr( $software ) . ' ' . 'software icon' ?>"
                      title="<?php echo esc_attr( str_replace(' ', '_', ucfirst( $software ) ) ) ?>" />
                  <?php endif ?>
                <?php endforeach ?>
              </div>
          </div>
        <?php endif; ?>
    </div>
</main>