<?php
 /**
 * Register Shortcode UI for Landing Page Hero Image
 * 
 */
function ufclas_ufl_2015_register_landing_double() {
	
	// Define the UI for attributes of the shortcode. 
	$shortcode_ui_fields = array(
		array(
			'label'		=> esc_html__( 'Headline', 'ufclas-ufl-2015' ),
			'description' 	=> esc_html__('Heading to display above the content, optional', 'ufclas-ufl-2015'),
			'attr' 		=> 'headline',
			'type' 		=> 'text',
		),
		array(
			'label'		=> esc_html__( 'Primary Image', 'ufclas-ufl-2015' ),
			'attr' 		=> 'image1',
			'type' 		=> 'attachment',
			'libraryType' 	=> array( 'Image' ),
			'addButton'		=> esc_html__( 'Select Image', 'ufclas-ufl-2015' ),
			'frameTitle'	=> esc_html__( 'Select Primary Image', 'ufclas-ufl-2015' ),
		),
		array(
			'label'		=> esc_html__( 'Secondary Image', 'ufclas-ufl-2015' ),
			'attr' 		=> 'image2',
			'type' 		=> 'attachment',
			'libraryType' 	=> array( 'Image' ),
			'addButton'		=> esc_html__( 'Select Image', 'ufclas-ufl-2015' ),
			'frameTitle'	=> esc_html__( 'Select Secondary Image', 'ufclas-ufl-2015' ),
		),
	);
	
	// Define the Shortcode UI arguments
	$shortcode_ui_args = array(
		'label' 			=> esc_html__('Landing Page Double Image', 'ufclas-ufl-2015'),
		'listItemImage' 	=> 'dashicons-layout',
		'post_type' 		=> array('page'),
		'inner_content' 	=> array(
			'label' 		=> esc_html__('Content', 'ufclas-ufl-2015'),
			'description' 	=> esc_html__('Include text to display within the Landing Page Double Image', 'ufclas-ufl-2015'),
		),
		'attrs' 			=> $shortcode_ui_fields,
	);
	
	shortcode_ui_register_for_shortcode( 'ufl-landing-page-double-image', $shortcode_ui_args );
}
add_action( 'register_shortcode_ui', 'ufclas_ufl_2015_register_landing_double' );

 /**
 * Register Shortcode UI for Landing Page Hero Full
 * 
 */
function ufclas_ufl_2015_register_landing_hero_full() {
	
	// Define the UI for attributes of the shortcode. 
	$shortcode_ui_fields = array(
		array(
			'label'		=> esc_html__( 'Headline', 'ufclas-ufl-2015' ),
			'description' 	=> esc_html__('Heading to display over the background image', 'ufclas-ufl-2015'),
			'attr' 		=> 'headline',
			'type' 		=> 'text',
		),
		array(
			'label'		=> esc_html__( 'Background Image', 'ufclas-ufl-2015' ),
			'attr' 		=> 'image',
			'type' 		=> 'attachment',
			'libraryType' 	=> array( 'Image' ),
			'addButton'		=> esc_html__( 'Select Image', 'ufclas-ufl-2015' ),
			'frameTitle'	=> esc_html__( 'Select Background Image', 'ufclas-ufl-2015' ),
		),
		array(
			'label'		=> esc_html__( 'Background Image Height', 'ufclas-ufl-2015' ),
			'attr' 		=> 'image_height',
			'type' 		=> 'select',
			'options' 	=> array(
							'' => esc_html__( 'Default', 'ufclas-ufl-2015' ),
							'half' => esc_html__( 'Half', 'ufclas-ufl-2015' ),
			),
		),
		array(
			'label'		=> esc_html__( 'Hide Button', 'ufclas-ufl-2015' ),
			'attr' 		=> 'hide_button',
			'type' 		=> 'checkbox',
		),
		array(
			'label'		=> esc_html__( 'Button Text', 'ufclas-ufl-2015' ),
			'description' 	=> esc_html__('Displayed within the button', 'ufclas-ufl-2015'),
			'attr' 		=> 'button_text',
			'type' 		=> 'text',
		),
		array(
			'label'		=> esc_html__( 'Button Link', 'ufclas-ufl-2015' ),
			'description' 	=> esc_html__('URL to visit when button is clicked.', 'ufclas-ufl-2015'),
			'attr' 		=> 'button_link',
			'type' 		=> 'url',
			'meta' 		=> array(
							'placeholder' => esc_html__( 'http:// or https://', 'ufclas-ufl-2015' ),
			),
		),
	);
	
	// Define the Shortcode UI arguments
	$shortcode_ui_args = array(
		'label' 			=> esc_html__('Landing Page Hero Full', 'ufclas-ufl-2015'),
		'listItemImage' 	=> 'dashicons-layout',
		'post_type' 		=> array('page'),
		'inner_content' 	=> array(
			'label' 		=> esc_html__('Content', 'ufclas-ufl-2015'),
			'description' 	=> esc_html__('Include text to display below the Landing Page Hero Image', 'ufclas-ufl-2015'),
		),
		'attrs' 			=> $shortcode_ui_fields,
	);
	
	shortcode_ui_register_for_shortcode( 'ufl-landing-page-hero', $shortcode_ui_args );
}
add_action( 'register_shortcode_ui', 'ufclas_ufl_2015_register_landing_hero_full' );

 /**
 * Register Shortcode UI for Breaker
 * 
 */
function ufclas_ufl_2015_register_breaker() {
	
	// Define the UI for attributes of the shortcode. 
	$shortcode_ui_fields = array(
		array(
			'label'		=> esc_html__( 'Headline', 'ufclas-ufl-2015' ),
			'description' 	=> esc_html__('Heading to display over the background image', 'ufclas-ufl-2015'),
			'attr' 		=> 'headline',
			'type' 		=> 'text',
		),
		array(
			'label'		=> esc_html__( 'Background Image', 'ufclas-ufl-2015' ),
			'attr' 		=> 'image',
			'type' 		=> 'attachment',
			'libraryType' 	=> array( 'Image' ),
			'addButton'		=> esc_html__( 'Select Image', 'ufclas-ufl-2015' ),
			'frameTitle'	=> esc_html__( 'Select Background Image', 'ufclas-ufl-2015' ),
		),
		array(
			'label'		=> esc_html__( 'Hide Button', 'ufclas-ufl-2015' ),
			'attr' 		=> 'hide_button',
			'type' 		=> 'checkbox',
		),
		array(
			'label'		=> esc_html__( 'Button Text', 'ufclas-ufl-2015' ),
			'description' 	=> esc_html__('Displayed within the button', 'ufclas-ufl-2015'),
			'attr' 		=> 'button_text',
			'type' 		=> 'text',
		),
		array(
			'label'		=> esc_html__( 'Button Link', 'ufclas-ufl-2015' ),
			'description' 	=> esc_html__('URL to visit when button is clicked.', 'ufclas-ufl-2015'),
			'attr' 		=> 'button_link',
			'type' 		=> 'url',
			'meta' 		=> array(
							'placeholder' => esc_html__( 'http:// or https://', 'ufclas-ufl-2015' ),
			),
		),
	);
	
	// Define the Shortcode UI arguments
	$shortcode_ui_args = array(
		'label' 			=> esc_html__('Background Image with Text (Breaker)', 'ufclas-ufl-2015'),
		'listItemImage' 	=> 'dashicons-layout',
		'post_type' 		=> array('page'),
		'inner_content' 	=> array(
			'label' 		=> esc_html__('Content', 'ufclas-ufl-2015'),
			'description' 	=> esc_html__('full width background image with a headline, text, and butto', 'ufclas-ufl-2015'),
		),
		'attrs' 			=> $shortcode_ui_fields,
	);
	
	shortcode_ui_register_for_shortcode( 'ufl-breaker', $shortcode_ui_args );
}
add_action( 'register_shortcode_ui', 'ufclas_ufl_2015_register_breaker' );

 /**
 * Register Shortcode UI for Content with Left Image and Caption
 * 
 * @link http://webservices.it.ufl.edu/terminalfour/uf-2015-template/content-types/content-with-list-and-left-image-with-caption/
 */
function ufclas_ufl_2015_register_content_image_left() {
	
	// Define the UI for attributes of the shortcode. 
	$shortcode_ui_fields = array(
		array(
			'label'		=> esc_html__( 'Headline', 'ufclas-ufl-2015' ),
			'description' 	=> esc_html__('Heading to display over the background image', 'ufclas-ufl-2015'),
			'attr' 		=> 'headline',
			'type' 		=> 'text',
		),
		array(
			'label'		=> esc_html__( 'Image', 'ufclas-ufl-2015' ),
			'attr' 		=> 'image',
			'type' 		=> 'attachment',
			'libraryType' 	=> array( 'Image' ),
			'addButton'		=> esc_html__( 'Select Image', 'ufclas-ufl-2015' ),
			'frameTitle'	=> esc_html__( 'Select Image', 'ufclas-ufl-2015' ),
		),
		array(
			'label'		=> esc_html__( 'Image Caption', 'ufclas-ufl-2015' ),
			'description' 	=> esc_html__('A caption to overlay the image, optional', 'ufclas-ufl-2015'),
			'attr' 		=> 'caption',
			'type' 		=> 'textarea',
		),
	);
	
	// Define the Shortcode UI arguments
	$shortcode_ui_args = array(
		'label' 			=> esc_html__('Content with Left Image and Caption', 'ufclas-ufl-2015'),
		'listItemImage' 	=> 'dashicons-layout',
		'post_type' 		=> array('page'),
		'inner_content' 	=> array(
			'label' 		=> esc_html__('Content', 'ufclas-ufl-2015'),
			'description' 	=> esc_html__('Content with List and Left Image with Caption', 'ufclas-ufl-2015'),
		),
		'attrs' 			=> $shortcode_ui_fields,
	);
	
	shortcode_ui_register_for_shortcode( 'ufl-content-image-left', $shortcode_ui_args );
}
add_action( 'register_shortcode_ui', 'ufclas_ufl_2015_register_content_image_left' );

/**
 * Register Shortcode UI for Content with Left Image and Caption
 * 
 * @link http://webservices.it.ufl.edu/terminalfour/uf-2015-template/content-types/content-with-list-and-left-image-with-caption/
 */
function ufclas_ufl_2015_register_content_image_right() {
	
	// Define the UI for attributes of the shortcode. 
	$shortcode_ui_fields = array(
		array(
			'label'		=> esc_html__( 'Headline', 'ufclas-ufl-2015' ),
			'description' 	=> esc_html__('Heading for the section, optional', 'ufclas-ufl-2015'),
			'attr' 		=> 'headline',
			'type' 		=> 'text',
		),
		array(
			'label'		=> esc_html__( 'Image', 'ufclas-ufl-2015' ),
			'attr' 		=> 'image',
			'type' 		=> 'attachment',
			'libraryType' 	=> array( 'Image' ),
			'addButton'		=> esc_html__( 'Select Image', 'ufclas-ufl-2015' ),
			'frameTitle'	=> esc_html__( 'Select Image', 'ufclas-ufl-2015' ),
		),
		array(
			'label'		=> esc_html__( 'Category', 'ufclas-ufl-2015' ),
			'description' 	=> esc_html__('Category title for the content section, optional', 'ufclas-ufl-2015'),
			'attr' 		=> 'category',
			'type' 		=> 'text',
		),
	);
	
	// Define the Shortcode UI arguments
	$shortcode_ui_args = array(
		'label' 			=> esc_html__('Content with Right Image and Category', 'ufclas-ufl-2015'),
		'listItemImage' 	=> 'dashicons-layout',
		'post_type' 		=> array('page'),
		'inner_content' 	=> array(
			'label' 		=> esc_html__('Content', 'ufclas-ufl-2015'),
			'description' 	=> esc_html__('Content with Right Image and Category', 'ufclas-ufl-2015'),
		),
		'attrs' 			=> $shortcode_ui_fields,
	);
	
	shortcode_ui_register_for_shortcode( 'ufl-content-image-right', $shortcode_ui_args );
}
add_action( 'register_shortcode_ui', 'ufclas_ufl_2015_register_content_image_right' );


 /**
 * Register Shortcode UI for Breaker with Cards
 * 
 * @link http://webservices.it.ufl.edu/terminalfour/uf-2015-template/content-types/cards/
 */
function ufclas_ufl_2015_register_breaker_cards() {
	
	// Define the UI for attributes of the shortcode.
	$shortcode_ui_fields = array(
		array(
			'label'		=> esc_html__( 'Background Image', 'ufclas-ufl-2015' ),
			'attr' 		=> 'image',
			'type' 		=> 'attachment',
			'libraryType' 	=> array( 'Image' ),
			'addButton'		=> esc_html__( 'Select Image', 'ufclas-ufl-2015' ),
			'frameTitle'	=> esc_html__( 'Select Background Image', 'ufclas-ufl-2015' ),
		),
	);
	
	for($i=1; $i<=3; $i++){
		$shortcode_ui_fields[] = array(
			'label'		=> sprintf( '%s %d', esc_html__('Card Headline', 'ufclas-ufl-2015'), $i),
			'description' 	=> esc_html__('', 'ufclas-ufl-2015'),
			'attr' 		=> 'card_headline' . $i,
			'type' 		=> 'text',
		);
		$shortcode_ui_fields[] = array(
			'label'		=> sprintf( '%s %d', esc_html__('Card Image', 'ufclas-ufl-2015'), $i),
			'attr' 		=> 'card_image' . $i,
			'type' 		=> 'attachment',
			'libraryType' 	=> array( 'Image' ),
			'addButton'		=> sprintf( '%s %d', esc_html__( 'Select Image', 'ufclas-ufl-2015' ), $i),
			'frameTitle'	=> sprintf( '%s %d', esc_html__( 'Select Image', 'ufclas-ufl-2015' ), $i),
		);
		$shortcode_ui_fields[] = array(
			'label'		=> sprintf( '%s %d', esc_html__( 'Card Text', 'ufclas-ufl-2015' ), $i),
			'description' 	=> esc_html__('Text displayed in card, optional', 'ufclas-ufl-2015'),
			'attr' 		=> 'card_text' . $i,
			'type' 		=> 'textarea',
		);
	}
	
	// Define the Shortcode UI arguments
	$shortcode_ui_args = array(
		'label' 			=> esc_html__('Background Image with Content Cards', 'ufclas-ufl-2015'),
		'listItemImage' 	=> 'dashicons-layout',
		'post_type' 		=> array('page'),
		'attrs' 			=> $shortcode_ui_fields,
	);
	
	shortcode_ui_register_for_shortcode( 'ufl-breaker-cards', $shortcode_ui_args );
}
add_action( 'register_shortcode_ui', 'ufclas_ufl_2015_register_breaker_cards' );

function ufclas_ufl_2015_register_image_right_quote() {
	
	// Define the UI for attributes of the shortcode. 
	$shortcode_ui_fields = array(
		array(
			'label'		=> esc_html__( 'Image', 'ufclas-ufl-2015' ),
			'attr' 		=> 'image',
			'type' 		=> 'attachment',
			'libraryType' 	=> array( 'Image' ),
			'addButton'		=> esc_html__( 'Select Image', 'ufclas-ufl-2015' ),
			'frameTitle'	=> esc_html__( 'Select Image', 'ufclas-ufl-2015' ),
		),
		array(
			'label'		=> esc_html__( 'Quote', 'ufclas-ufl-2015' ),
			'description' 	=> esc_html__('Quote that appears to the right of the image', 'ufclas-ufl-2015'),
			'attr' 		=> 'quote',
			'type' 		=> 'textarea',
		),
		array(
			'label'		=> esc_html__( 'Image Caption', 'ufclas-ufl-2015' ),
			'description' 	=> esc_html__('A caption that appears below the image, optional', 'ufclas-ufl-2015'),
			'attr' 		=> 'caption',
			'type' 		=> 'textarea',
		),
		array(
			'label'		=> esc_html__( 'Image Credit', 'ufclas-ufl-2015' ),
			'description' 	=> esc_html__('Photographer and license information. Displayed below the image after the caption.', 'ufclas-ufl-2015'),
			'attr' 		=> 'credit',
			'type' 		=> 'text',
		),
	);
	
	// Define the Shortcode UI arguments
	$shortcode_ui_args = array(
		'label' 			=> esc_html__('Image with Right Quote', 'ufclas-ufl-2015'),
		'listItemImage' 	=> 'dashicons-format-image',
		'post_type' 		=> array('post','page'),
		'attrs' 			=> $shortcode_ui_fields,
	);
	
	shortcode_ui_register_for_shortcode( 'ufl-image-right-quote', $shortcode_ui_args );
}
add_action( 'register_shortcode_ui', 'ufclas_ufl_2015_register_image_right_quote' );

function ufclas_ufl_2015_register_image_full_width() {
	
	// Define the UI for attributes of the shortcode. 
	$shortcode_ui_fields = array(
		array(
			'label'		=> esc_html__( 'Image', 'ufclas-ufl-2015' ),
			'attr' 		=> 'image',
			'type' 		=> 'attachment',
			'libraryType' 	=> array( 'Image' ),
			'addButton'		=> esc_html__( 'Select Image', 'ufclas-ufl-2015' ),
			'frameTitle'	=> esc_html__( 'Select Image', 'ufclas-ufl-2015' ),
		),
		array(
			'label'		=> esc_html__( 'Image Caption', 'ufclas-ufl-2015' ),
			'description' 	=> esc_html__('A caption that appears below the image, optional', 'ufclas-ufl-2015'),
			'attr' 		=> 'caption',
			'type' 		=> 'textarea',
		),
		array(
			'label'		=> esc_html__( 'Image Credit', 'ufclas-ufl-2015' ),
			'description' 	=> esc_html__('Photographer and license information. Displayed below the image after the caption.', 'ufclas-ufl-2015'),
			'attr' 		=> 'credit',
			'type' 		=> 'text',
		),
	);
	
	// Define the Shortcode UI arguments
	$shortcode_ui_args = array(
		'label' 			=> esc_html__('Full Width Image with Caption', 'ufclas-ufl-2015'),
		'listItemImage' 	=> 'dashicons-format-image',
		'post_type' 		=> array('post','page'),
		'attrs' 			=> $shortcode_ui_fields,
	);
	
	shortcode_ui_register_for_shortcode( 'ufclas-image-full-width', $shortcode_ui_args );
}
add_action( 'register_shortcode_ui', 'ufclas_ufl_2015_register_image_full_width' );

function ufclas_ufl_2015_register_video_full_width() {
	
	// Define the UI for attributes of the shortcode. 
	$shortcode_ui_fields = array(
		array(
			'label'		=> esc_html__( 'Video URL', 'ufclas-ufl-2015' ),
			'description' 	=> esc_html__('', 'ufclas-ufl-2015'),
			'attr' 		=> 'url',
			'type' 		=> 'url',
		),
	);
	
	// Define the Shortcode UI arguments
	$shortcode_ui_args = array(
		'label' 			=> esc_html__('Full Width Video', 'ufclas-ufl-2015'),
		'listItemImage' 	=> 'dashicons-video-alt3',
		'post_type' 		=> array('post','page'),
		'attrs' 			=> $shortcode_ui_fields,
	);
	
	shortcode_ui_register_for_shortcode( 'ufclas-video-full-width', $shortcode_ui_args );
}
add_action( 'register_shortcode_ui', 'ufclas_ufl_2015_register_video_full_width' );