<?php
/* -TINYMCE SETTINGS------------------------------------------------- */
function custom_wysiwyg_styles($settings)
{
	$settings['block_formats'] = 'Paragraph=p; Heading 1=h1; Heading 2=h2; Heading 3=h3; Heading 4=h4; Heading 5=h5; Heading 6=h6; Preformatted=pre; Code=code; Address=address;';
	
	$style_formats = array(
			array(
				'title'   => 'Heading Styles',
				'items' => array(
					array('title' => 'H1', 'classes' => 'h1', 'selector' => 'h1, h2, h3, h4, h5, h6, p'),
					array('title' => 'H2', 'classes' => 'h2', 'selector' => 'h1, h2, h3, h4, h5, h6, p'),
					array('title' => 'H3', 'classes' => 'h3', 'selector' => 'h1, h2, h3, h4, h5, h6, p'),
					array('title' => 'H4', 'classes' => 'h4', 'selector' => 'h1, h2, h3, h4, h5, h6, p'),
					array('title' => 'H5', 'classes' => 'h5', 'selector' => 'h1, h2, h3, h4, h5, h6, p'),
					array('title' => 'H6', 'classes' => 'h6', 'selector' => 'h1, h2, h3, h4, h5, h6, p'),
					array('title' => 'H2 Section Title (bigger)', 'classes' => 'section-title-h2', 'selector' => 'h2'),
					array('title' => 'Section Subtitle (bigger)', 'classes' => 'section-subtitle', 'selector' => 'h1, h2, h3, h4, h5, h6, p'),
					array('title' => 'Subtitle', 'classes' => 'subtitle', 'selector' => 'h1, h2, h3, h4, h5, h6, p'),
					array('title' => 'P', 'classes' => 'p', 'selector' => 'h1, h2, h3, h4, h5, h6, p'),
					array('title' => 'P - Leading', 'classes' => 'lead', 'selector' => 'h1, h2, h3, h4, h5, h6, p'),
				),
			),
			array(
				'title'   => 'Buttons & CTAs',
				'items' => array(
					array(
						'title' => 'Button Setting',
						'items' => array(
							array('title' => 'Button Green', 'classes' => 'button btn-green', 'selector' => 'a, button'),
							array('title' => 'Button White - Outline', 'classes' => 'button btn-white btn-outline', 'selector' => 'a, button'),
							array('title' => 'Button Purple - Outline', 'classes' => 'button btn-purple btn-outline', 'selector' => 'a, button'),
							array('title' => 'Button Blue  - Outline', 'classes' => 'button btn-blue btn-outline', 'selector' => 'a, button'),
						),
					),
					array('title' => 'Button Size: Small', 'classes' => 'btn-small', 'selector' => '.button'),
					array('title' => 'CTA', 'classes' => 'cta', 'selector' => 'a, button'),
					array('title' => 'Iconed Link (get icon html from fontawesome)', 'classes' => 'iconed-link', 'selector' => 'a, button'),
				),
			),
			array(
				'title'   => 'List Styles',
				'items' => array(
					array('title' => 'Checked', 'classes' => 'checked', 'selector' => 'ul'),
					array('title' => 'Purple', 'classes' => 'purple', 'selector' => 'ul'),
				),
			),
			array(
				'title'   => 'Typography',
				'items' => array(
					array(
						'title'   => 'Font Weights',
						'items' => array(
							array('title' => 'Light/300', 'classes' => 'weight-300', 'inline' => 'span'),
							array('title' => 'Regular/400', 'classes' => 'weight-400', 'inline' => 'span'),
							array('title' => 'Medium/500', 'classes' => 'weight-500', 'inline' => 'span'),
							array('title' => 'Semibold/600', 'classes' => 'weight-600', 'inline' => 'span'),
							array('title' => 'Bold/700', 'classes' => 'weight-700', 'inline' => 'span'),
						),
					),
					array(
					'title'   => 'Font Sizes',
					'items' => array(
							array(
								'title'   => 'Bigger',
								'items' => array(
									array('title' => '150%', 'classes' => 'text-150', 'inline' => 'span'),
									array('title' => '140%', 'classes' => 'text-140', 'inline' => 'span'),
									array('title' => '130%', 'classes' => 'text-130', 'inline' => 'span'),
									array('title' => '120%', 'classes' => 'text-120', 'inline' => 'span'),
									array('title' => '110%', 'classes' => 'text-110', 'inline' => 'span'),
								),
							),
							array(
								'title'   => 'Smaller',
								'items' => array(
									array('title' => '90%', 'classes' => 'text-90', 'inline' => 'span'),
									array('title' => '80%', 'classes' => 'text-80', 'inline' => 'span'),
									array('title' => '70%', 'classes' => 'text-70', 'inline' => 'span'),
									array('title' => '60%', 'classes' => 'text-60', 'inline' => 'span'),
									array('title' => '50%', 'classes' => 'text-50', 'inline' => 'span'),
								),
							)
						),
					),
					array(
						'title'   => 'Text Case',
						'items' => array(
							array('title' => 'Uppercase', 'classes' => 'uppercase', 'inline' => 'span'),
							array('title' => 'Normal Case', 'classes' => 'normalcase', 'inline' => 'span'),
							array('title' => 'Lowercase', 'classes' => 'lowercase', 'inline' => 'span'),
						),
					),
					array(
						'title'   => 'Line Height',
						'items' => array(
							array('title' => '1', 'classes' => 'lineheight-1', 'selector' => 'h1, h2, h3, h4, h5, h6, p, a, button'),
							array('title' => '1.1', 'classes' => 'lineheight-1-1', 'selector' => 'h1, h2, h3, h4, h5, h6, p, a, button'),
							array('title' => '1.2', 'classes' => 'lineheight-1-2', 'selector' => 'h1, h2, h3, h4, h5, h6, p, a, button'),
							array('title' => '1.3', 'classes' => 'lineheight-1-3', 'selector' => 'h1, h2, h3, h4, h5, h6, p, a, button'),
							array('title' => '1.4', 'classes' => 'lineheight-1-4', 'selector' => 'h1, h2, h3, h4, h5, h6, p, a, button'),
							array('title' => '1.5', 'classes' => 'lineheight-1-5', 'selector' => 'h1, h2, h3, h4, h5, h6, p, a, button'),
							array('title' => '1.6', 'classes' => 'lineheight-1-6', 'selector' => 'h1, h2, h3, h4, h5, h6, p, a, button'),
							array('title' => '1.7', 'classes' => 'lineheight-1-7', 'selector' => 'h1, h2, h3, h4, h5, h6, p, a, button'),
							array('title' => '1.8', 'classes' => 'lineheight-1-8', 'selector' => 'h1, h2, h3, h4, h5, h6, p, a, button'),
							array('title' => '1.9', 'classes' => 'lineheight-1-9', 'selector' => 'h1, h2, h3, h4, h5, h6, p, a, button'),
							array('title' => '2', 'classes' => 'lineheight-2', 'selector' => 'h1, h2, h3, h4, h5, h6, p, a, button'),
						),
					),
				),
			),
			array(
				'title'   => 'Spacing',
				'items' => array(
					array('title' => '0px', 'classes' => 'margin-bottom-0', 'selector' => 'h1, h2, h3, h4, h5, h6, p, a, blockquote, img'),
					array('title' => '5px', 'classes' => 'margin-bottom-5', 'selector' => 'h1, h2, h3, h4, h5, h6, p, a, blockquote, img'),
					array('title' => '10px', 'classes' => 'margin-bottom-10', 'selector' => 'h1, h2, h3, h4, h5, h6, p, a, blockquote, img'),
					array('title' => '15px', 'classes' => 'margin-bottom-15', 'selector' => 'h1, h2, h3, h4, h5, h6, p, a, blockquote, img'),
					array('title' => '20px', 'classes' => 'margin-bottom-20', 'selector' => 'h1, h2, h3, h4, h5, h6, p, a, blockquote, img'),
					array('title' => '25px', 'classes' => 'margin-bottom-25', 'selector' => 'h1, h2, h3, h4, h5, h6, p, a, blockquote, img'),
					array('title' => '30px', 'classes' => 'margin-bottom-30', 'selector' => 'h1, h2, h3, h4, h5, h6, p, a, blockquote, img'),
					array('title' => '35px', 'classes' => 'margin-bottom-35', 'selector' => 'h1, h2, h3, h4, h5, h6, p, a, blockquote, img'),
					array('title' => '40px', 'classes' => 'margin-bottom-40', 'selector' => 'h1, h2, h3, h4, h5, h6, p, a, blockquote, img'),
					array('title' => '45px', 'classes' => 'margin-bottom-45', 'selector' => 'h1, h2, h3, h4, h5, h6, p, a, blockquote, img'),
					array('title' => '50px', 'classes' => 'margin-bottom-50', 'selector' => 'h1, h2, h3, h4, h5, h6, p, a, blockquote, img'),
				),
			),
			array(
				'title'   => 'Misc',
				'items' => array(
					array('title' => 'hr - styled', 'classes' => 'styled', 'selector' => 'hr'),
					array('title' => 'hr - styled - centered', 'classes' => 'styled centered', 'selector' => 'hr'),
				),
			),
			
    );
    $settings['style_formats'] = json_encode( $style_formats );
	 
	
    return $settings;
}

add_filter('tiny_mce_before_init', 'custom_wysiwyg_styles');

// Add custom colors
function tinymce_colors($init) {
    $default_colours = '
        "000000", "Black",
        "993300", "Burnt orange",
        "333300", "Dark olive",
        "003300", "Dark green",
        "003366", "Dark azure",
        "000080", "Navy Blue",
        "333399", "Indigo",
        "333333", "Very dark gray",
        "800000", "Maroon",
        "FF6600", "Orange",
        "808000", "Olive",
        "008000", "Green",
        "008080", "Teal",
        "0000FF", "Blue",
        "666699", "Grayish blue",
        "808080", "Gray",
        "FF0000", "Red",
        "FF9900", "Amber",
        "99CC00", "Yellow green",
        "339966", "Sea green",
        "33CCCC", "Turquoise",
        "3366FF", "Royal blue",
        "800080", "Purple",
        "999999", "Medium gray",
        "FF00FF", "Magenta",
        "FFCC00", "Gold",
        "FFFF00", "Yellow",
        "00FF00", "Lime",
        "00FFFF", "Aqua",
        "00CCFF", "Sky blue",
        "993366", "Brown",
        "C0C0C0", "Silver",
        "FF99CC", "Pink",
        "FFCC99", "Peach",
        "FFFF99", "Light yellow",
        "CCFFCC", "Pale green",
        "CCFFFF", "Pale cyan",
        "99CCFF", "Light sky blue",
        "CC99FF", "Plum",
        "FFFFFF", "White"
    ';
	
	$custom_colours = "";
    $custom_colours = '
		"58C384", "ViaeX Green",
		"534CD5", "ViaeX Purple"
	';

    $init['textcolor_map'] = '['.$default_colours.','.$custom_colours.']'; // build colour grid default+custom colors
    $init['textcolor_rows'] = 6; // enable 6th row for custom colours in grid
    return $init;
}
add_filter('tiny_mce_before_init', 'tinymce_colors');
?>
