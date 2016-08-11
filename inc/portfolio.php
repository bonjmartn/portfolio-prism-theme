<?php

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_portfolio',
		'title' => 'Portfolio',
		'fields' => array (
			array (
				'key' => 'field_57a1a3c660119',
				'label' => 'Main Image',
				'name' => 'featured_image',
				'type' => 'image',
				'instructions' => 'Upload the main image for this portfolio item. This is the image that appears at the top of the page, to the left of the portfolio item details. Important Note: You still need to set a "Featured Image" for WordPress to use throughout the site. Do that under "Featured Image" at the bottom-right of the page.',
				'save_format' => 'url',
				'preview_size' => 'large',
				'library' => 'all',
			),
			array (
				'key' => 'field_57a1a43c6011a',
				'label' => 'Date',
				'name' => 'date',
				'type' => 'text',
				'instructions' => 'Enter the date that the item was created or published.',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_57a1a4cb6011c',
				'label' => 'Client',
				'name' => 'client',
				'type' => 'text',
				'instructions' => 'Enter the name of the client this work was for.',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_57a1a4df6011d',
				'label' => 'Summary',
				'name' => 'summary',
				'type' => 'textarea',
				'instructions' => 'Enter a summary of the work you did for this portfolio item.',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'portfolio',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'acf_after_title',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}

?>