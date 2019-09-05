<?php
if( function_exists('acf_add_local_field_group') ):
// Page MastHead - ACF Group

acf_add_local_field_group(array(
	'key' => 'group_5tk5cdb269e18ef7',
	'title' => __('MastHead', 'tkm-starter'),
	'fields' => array(
		array(
			'key' => 'field_5tk5c8e505e45130',
			'label' => __('Main Page Title', 'tkm-starter'),
			'name' => 'page_masthead_title',
			'type' => 'text',
			'instructions' => __('H1 - Replace page name title', 'tkm-starter'),
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '25',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5tk5cdbb46c75871',
			'label' => __('Hide Main Page Title', 'tkm-starter'),
			'name' => 'page_masthead_title_hide',
			'type' => 'true_false',
			'instructions' => __('If main page title is hidden you should add an H1 title in page', 'tkm-starter'),
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '25',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 0,
			'ui' => 1,
			'ui_on_text' => '',
			'ui_off_text' => '',
		),	
		array(
			'key' => 'field_5tk5c8f46bfffa62',
			'label' => __('Second Featured Image', 'tkm-starter'),
			'name' => 'page_main_icon',
			'type' => 'image',
			'instructions' => __('Will be used as hover image effect', 'tkm-starter'),
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '25',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'id',
			'preview_size' => 'thumbnail',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),	
		array(
			'key' => 'field_5tk6t45a82e09623',
			'label' => __('MastHead on Mobile', 'tkm-starter'),
			'name' => 'masthead_on_mobile',
			'type' => 'radio',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '25',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'same_desktop' => __('Same as Desktop', 'tkm-starter'),
				'mobile_masthead' => __('Different on Mobile', 'tkm-starter'),
			),
			'allow_null' => 0,
			'other_choice' => 0,
			'default_value' => '',
			'layout' => 'vertical',
			'return_format' => 'value',
			'save_other_choice' => 0,
		),
		array(
			'key' => 'field_5tk5c8e510sdw331',
			'label' => __('Page Sub Title', 'tkm-starter'),
			'name' => 'page_masthead_subtitle',
			'type' => 'textarea',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '50',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => 4,
			'new_lines' => 'br',
		),
		array(
			'key' => 'field_5tk5c8e510c45131',
			'label' => __('Short Excerpt', 'tkm-starter'),
			'name' => 'page_masthead_excerpt',
			'type' => 'textarea',
			'instructions' => __('will be shown on related pages linked here', 'tkm-starter'),
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '50',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => 4,
			'new_lines' => 'br',
		),
		
		array(
			'key' => 'field_5tk5c8e515a45132',
			'label' => __('Intro Text', 'tkm-starter'),
			'name' => 'page_masthead_text',
			'type' => 'wysiwyg',
			'instructions' => __('Position will be set by slider masthead style', 'tkm-starter'),
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'all',
			'toolbar' => 'full',
			'media_upload' => 1,
			'delay' => 0,
		),
		array(
			'key' => 'field_5tk5c8e4d434512f',
			'label' => __('MastHead Top Slider', 'tkm-starter'),
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 0,
		),
		array(
			'key' => 'field_5tk5c8f5f82d86b9',
			'label' => __('MastHead Style', 'tkm-starter'),
			'name' => 'page_top_slider_style',
			'type' => 'radio',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '60',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'full_slider' => __('Image Slider or Youtube video', 'tkm-starter'),
				'clean_top' => __('Clean Image Short Head', 'tkm-starter'),
				'no_image_top' => __('No Image BG', 'tkm-starter'),
				'manual_slider' => __('Full Manual slider', 'tkm-starter'),
			),
			'allow_null' => 0,
			'other_choice' => 0,
			'default_value' => '',
			'layout' => 'horizontal',
			'return_format' => 'value',
			'save_other_choice' => 0,
		),
		array(
			'key' => 'field_5dma0378b7ddf',
			'label' => __('Show section divider', 'tkm-starter'),
			'name' => 'page_top_slider_dividers',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '20',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 0,
			'ui' => 1,
			'ui_on_text' => '',
			'ui_off_text' => '',
		),
		array(
			'key' => 'field_5dma037ae401222',
			'label' => __('MastHead background color', 'tkm-starter'),
			'name' => 'masthead_background_color',
			'type' => 'color_picker',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '20',
				'class' => '',
				'id' => '',
			),
			'default_value' => '#ffffff',
		),
		array(
			'key' => 'field_5dma0378f70beb1',
			'label' => __('Top divider section', 'tkm-starter'),
			'name' => 'masthead_top_divider_section_type',
			'type' => 'select',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5dma0378b7ddf',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
			'wrapper' => array(
				'width' => '20',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'waves' => __('Waves', 'tkm-starter'),
				'opacity-waves' => __('Opacity waves', 'tkm-starter'),
				'mountains' => __('Mountains', 'tkm-starter'),
				'drops' => __('Drops', 'tkm-starter'),
				'opacity-clouds' => __('Opacity clouds', 'tkm-starter'),
				'big-clouds' => __('Big clouds', 'tkm-starter'),
				'pyramids' => __('Pyramids', 'tkm-starter'),
				'triangle' => __('Triangle', 'tkm-starter'),
				'circle' => __('Circle', 'tkm-starter'),
				'right-tilt' => __('Right tilt', 'tkm-starter'),
				'left-tilt' => __('Left tilt', 'tkm-starter'),
				'right-opacity-tilt' => __('Right opacity tilt', 'tkm-starter'),
				'left-opacity-tilt' => __('Left opacity tilt', 'tkm-starter'),
				'opacity-triangle' => __('Triangle opacity', 'tkm-starter'),
				'right-arc' => __('Right Arc', 'tkm-starter'),
				'left-arc' => __('Left Arc', 'tkm-starter'),
				'opacity-circle' => __('Opacity Circle', 'tkm-starter'),
				'right-opacity-arc' => __('Right Arc opacity', 'tkm-starter'),
				'left-opacity-arc' => __('Left Arc opacity', 'tkm-starter'),
				'arrow' => __('Arrow', 'tkm-starter'),
				'cross' => __('Cross', 'tkm-starter'),
				'watercolor' => __('Water-color',  'tkm-starter'),
				'watercolor-spread' => __('Water-color spread', 'tkm-starter'),
				'brush-spread' => __('Brush spread', 'tkm-starter'),
			),
			'default_value' => array(
			),
			'allow_null' => 1,
			'multiple' => 0,
			'ui' => 0,
			'return_format' => 'value',
			'ajax' => 0,
			'placeholder' => '',
		),
		array(
			'key' => 'field_5dma037ae40beb2',
			'label' => __('Top divider section - fill color', 'tkm-starter'),
			'name' => 'masthead_top_divider_section_color',
			'type' => 'color_picker',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5dma0378b7ddf',
						'operator' => '==',
						'value' => '1',
					),
					array(
						'field' => 'field_5dma0378f70beb1',
						'operator' => '!=',
						'value' => 'watercolor',
					),
					array(
						'field' => 'field_5dma0378f70beb1',
						'operator' => '!=',
						'value' => 'watercolor-spread',
					),
				),
			),
			'wrapper' => array(
				'width' => '20',
				'class' => '',
				'id' => '',
			),
			'default_value' => '#ffffff',
		),
		array(
			'key' => 'field_5dma037ae40beb21',
			'label' => __('Top divider section - BG color', 'tkm-starter'),
			'name' => 'masthead_top_divider_section_bg_color',
			'type' => 'color_picker',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5dma0378b7ddf',
						'operator' => '==',
						'value' => '1',
					),
					array(
						'field' => 'field_5dma0378f70beb1',
						'operator' => '!=',
						'value' => 'watercolor',
					),
					array(
						'field' => 'field_5dma0378f70beb1',
						'operator' => '!=',
						'value' => 'watercolor-spread',
					),
				),
			),
			'wrapper' => array(
				'width' => '20',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'transparent',
		),
		array(
			'key' => 'field_5dma037b150beb3',
			'label' => __('Top divider section - height', 'tkm-starter'),
			'name' => 'masthead_top_divider_section_height',
			'type' => 'number',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5dma0378b7ddf',
						'operator' => '==',
						'value' => '1',
					),
					array(
						'field' => 'field_5dma0378f70beb1',
						'operator' => '!=',
						'value' => 'watercolor',
					),
					array(
						'field' => 'field_5dma0378f70beb1',
						'operator' => '!=',
						'value' => 'watercolor-spread',
					),
				),
			),
			'wrapper' => array(
				'width' => '20',
				'class' => '',
				'id' => '',
			),
			'default_value' => 100,
			'placeholder' => '',
			'prepend' => '',
			'append' => 'px',
			'min' => 10,
			'max' => 300,
			'step' => 1,
		),
		array(
			'key' => 'field_5dma037b7e0beb4',
			'label' => __('Top divider section - position', 'tkm-starter'),
			'name' => 'masthead_top_divider_section_position',
			'type' => 'radio',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5dma0378b7ddf',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
			'wrapper' => array(
				'width' => '20',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'behind' => __('Behind content', 'tkm-starter'),
				'on-top' => __('On top content', 'tkm-starter'),
			),
			'allow_null' => 0,
			'default_value' => '',
			'layout' => 'horizontal',
			'return_format' => 'value',
		),
		array(
			'key' => 'field_5dma0378f70berr1',
			'label' => __('Bottom divider section', 'tkm-starter'),
			'name' => 'masthead_bottom_divider_section_type',
			'type' => 'select',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5dma0378b7ddf',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
			'wrapper' => array(
				'width' => '20',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'waves' => __('Waves', 'tkm-starter'),
				'opacity-waves' => __('Opacity waves', 'tkm-starter'),
				'mountains' => __('Mountains', 'tkm-starter'),
				'drops' => __('Drops', 'tkm-starter'),
				'opacity-clouds' => __('Opacity clouds', 'tkm-starter'),
				'big-clouds' => __('Big clouds', 'tkm-starter'),
				'pyramids' => __('Pyramids', 'tkm-starter'),
				'triangle' => __('Triangle', 'tkm-starter'),
				'circle' => __('Circle', 'tkm-starter'),
				'right-tilt' => __('Right tilt', 'tkm-starter'),
				'left-tilt' => __('Left tilt', 'tkm-starter'),
				'right-opacity-tilt' => __('Right opacity tilt', 'tkm-starter'),
				'left-opacity-tilt' => __('Left opacity tilt', 'tkm-starter'),
				'opacity-triangle' => __('Triangle opacity', 'tkm-starter'),
				'right-arc' => __('Right Arc', 'tkm-starter'),
				'left-arc' => __('Left Arc', 'tkm-starter'),
				'opacity-circle' => __('Opacity Circle', 'tkm-starter'),
				'right-opacity-arc' => __('Right Arc opacity', 'tkm-starter'),
				'left-opacity-arc' => __('Left Arc opacity', 'tkm-starter'),
				'arrow' => __('Arrow', 'tkm-starter'),
				'cross' => __('Cross', 'tkm-starter'),
				'watercolor' => __('Water-color',  'tkm-starter'),
				'watercolor-spread' => __('Water-color spread', 'tkm-starter'),
				'brush-spread' => __('Brush spread', 'tkm-starter'),
			),
			'default_value' => array(
			),
			'allow_null' => 1,
			'multiple' => 0,
			'ui' => 0,
			'return_format' => 'value',
			'ajax' => 0,
			'placeholder' => '',
		),
		array(
			'key' => 'field_5dma037ae40berr2',
			'label' => __('Bottom divider section - fill color', 'tkm-starter'),
			'name' => 'masthead_bottom_divider_section_color',
			'type' => 'color_picker',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5dma0378b7ddf',
						'operator' => '==',
						'value' => '1',
					),
					array(
						'field' => 'field_5dma0378f70berr1',
						'operator' => '!=',
						'value' => 'watercolor',
					),
					array(
						'field' => 'field_5dma0378f70berr1',
						'operator' => '!=',
						'value' => 'watercolor-spread',
					),
				),
			),
			'wrapper' => array(
				'width' => '20',
				'class' => '',
				'id' => '',
			),
			'default_value' => '#ffffff',
		),
		array(
			'key' => 'field_5dma037ae40berr22',
			'label' => __('Bottom divider section - BG color', 'tkm-starter'),
			'name' => 'masthead_bottom_divider_section_bg_color',
			'type' => 'color_picker',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5dma0378b7ddf',
						'operator' => '==',
						'value' => '1',
					),
					array(
						'field' => 'field_5dma0378f70berr1',
						'operator' => '!=',
						'value' => 'watercolor',
					),
					array(
						'field' => 'field_5dma0378f70berr1',
						'operator' => '!=',
						'value' => 'watercolor-spread',
					),
				),
			),
			'wrapper' => array(
				'width' => '20',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'transparent',
		),				
		array(
			'key' => 'field_5dma037b150berr3',
			'label' => __('Bottom divider section - height', 'tkm-starter'),
			'name' => 'masthead_bottom_divider_section_height',
			'type' => 'number',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5dma0378b7ddf',
						'operator' => '==',
						'value' => '1',
					),
					array(
						'field' => 'field_5dma0378f70berr1',
						'operator' => '!=',
						'value' => 'watercolor',
					),
					array(
						'field' => 'field_5dma0378f70berr1',
						'operator' => '!=',
						'value' => 'watercolor-spread',
					),
				),
			),
			'wrapper' => array(
				'width' => '20',
				'class' => '',
				'id' => '',
			),
			'default_value' => 100,
			'placeholder' => '',
			'prepend' => '',
			'append' => 'px',
			'min' => 10,
			'max' => 300,
			'step' => 1,
		),
		array(
			'key' => 'field_5dma037b7e0berr4',
			'label' => __('Bottom divider section - position', 'tkm-starter'),
			'name' => 'masthead_bottom_divider_section_position',
			'type' => 'radio',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5dma0378b7ddf',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
			'wrapper' => array(
				'width' => '20',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'behind' => __('Behind content', 'tkm-starter'),
				'on-top' => __('On top content', 'tkm-starter'),
			),
			'allow_null' => 0,
			'default_value' => '',
			'layout' => 'horizontal',
			'return_format' => 'value',
		),
		array(
			'key' => 'field_5tk5c96a82e09651',
			'label' => __('Slider Effect', 'tkm-starter'),
			'name' => 'page_top_slider_effect',
			'type' => 'radio',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5tk5c8f5f82d86b9','operator' => '==','value' => 'full_slider',
					),
				),
				array(
					array(
						'field' => 'field_5tk5c8f5f82d86b9','operator' => '==','value' => 'manual_slider',
					),
				),								
				array(
					array(
						'field' => 'field_5tk5c8f5f82d86b9','operator' => '==','value' => 'clean_top',
					),
				),				
			),
			'wrapper' => array(
				'width' => '20',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'style1' => __('style1', 'tkm-starter'),
				'style2' => __('style2', 'tkm-starter'),
				'style3' => __('style3', 'tkm-starter'),
			),
			'allow_null' => 0,
			'other_choice' => 0,
			'default_value' => '',
			'layout' => 'vertical',
			'return_format' => 'value',
			'save_other_choice' => 0,
		),
		array(
			'key' => 'field_5tk5c978bcf63295',
			'label' => __('Main title color', 'tkm-starter'),
			'name' => 'page_masthead_title_color',
			'type' => 'color_picker',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5tk5c8f5f82d86b9','operator' => '==','value' => 'no_image_top',
					),
				),
				array(
					array(
						'field' => 'field_5tk5c977a6af7f5e','operator' => '==','value' => 'slider_content_bottom',
					),
				),
			),
			'wrapper' => array(
				'width' => '25',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
		),
		array(
			'key' => 'field_5tk5c978b4663293',
			'label' => __('Intro text color', 'tkm-starter'),
			'name' => 'page_masthead_text_color',
			'type' => 'color_picker',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5tk5c8f5f82d86b9',
						'operator' => '==',
						'value' => 'no_image_top',
					),
				),
				array(
					array(
						'field' => 'field_5tk5c977a6af7f5e',
						'operator' => '==',
						'value' => 'slider_content_bottom',
					),
				),
			),
			'wrapper' => array(
				'width' => '25',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
		),
		array(
			'key' => 'field_5tk5c97sd393',
			'label' => __('Intro background color', 'tkm-starter'),
			'name' => 'page_masthead_intro_bg_color',
			'type' => 'color_picker',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5tk5c8f5f82d86b9',
						'operator' => '==',
						'value' => 'no_image_top',
					),
				),
				array(
					array(
						'field' => 'field_5tk5c977a6af7f5e',
						'operator' => '==',
						'value' => 'slider_content_bottom',
					),
				),
			),
			'wrapper' => array(
				'width' => '25',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
		),		
		array(
			'key' => 'field_5tk5c977a6af7f5e',
			'label' => __('Title & Intro location', 'tkm-starter'),
			'name' => 'page_masthead_title_location',
			'type' => 'radio',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5tk5c8f5f82d86b9',
						'operator' => '==',
						'value' => 'full_slider',
					),
				),
				array(
					array(
						'field' => 'field_5tk5c8f5f82d86b9',
						'operator' => '==',
						'value' => 'clean_top',
					),
				),
			),
			'wrapper' => array(
				'width' => '20',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'slider_content_inn' => __('On top of the Image', 'tkm-starter'),
				'slider_content_bottom' => __('Under the image', 'tkm-starter'),
			),
			'allow_null' => 0,
			'other_choice' => 0,
			'default_value' => '',
			'layout' => 'vertical',
			'return_format' => 'value',
			'save_other_choice' => 0,
		),
		array(
			'key' => 'field_5tk5c9779d3f7f5c',
			'label' => __('Title & Intro Horizontal position', 'tkm-starter'),
			'name' => 'page_masthead_title_hor',
			'type' => 'radio',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5tk5c8f5f82d86b9',
						'operator' => '==',
						'value' => 'full_slider',
					),
				),
				array(
					array(
						'field' => 'field_5tk5c8f5f82d86b9',
						'operator' => '==',
						'value' => 'clean_top',
					),
				),
				array(
					array(
						'field' => 'field_5tk5c8f5f82d86b9',
						'operator' => '==',
						'value' => 'no_image_top',
					),
				),				
			),
			'wrapper' => array(
				'width' => '20',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'start' => __('start', 'tkm-starter'),
				'center' => __('center', 'tkm-starter'),
				'end' => __('end', 'tkm-starter'),
			),
			'allow_null' => 0,
			'other_choice' => 0,
			'default_value' => '',
			'layout' => 'vertical',
			'return_format' => 'value',
			'save_other_choice' => 0,
		),
		array(
			'key' => 'field_5tk5c977a33f7f5d',
			'label' => __('Titile & Intro Vertical position', 'tkm-starter'),
			'name' => 'page_masthead_title_ver',
			'type' => 'radio',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5tk5c977a6af7f5e',
						'operator' => '==',
						'value' => 'slider_content_inn',
					),
					array(
						'field' => 'field_5tk5c8f5f82d86b9',
						'operator' => '==',
						'value' => 'full_slider',
					),
				),
			),
			'wrapper' => array(
				'width' => '20',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'top' => __('top', 'tkm-starter'),
				'middle' => __('middle', 'tkm-starter'),
				'bottom' => __('bottom', 'tkm-starter'),
			),
			'allow_null' => 0,
			'other_choice' => 0,
			'default_value' => '',
			'layout' => 'vertical',
			'return_format' => 'value',
			'save_other_choice' => 0,
		),
		array(
			'key' => 'field_5tk5c8e55e167281',
			'label' => __('MastHead Visual Height', 'tkm-starter'),
			'name' => 'page_top_slider_height',
			'type' => 'range',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5tk5c8f5f82d86b9',
						'operator' => '==',
						'value' => 'full_slider',
					),
				),
				array(
					array(
						'field' => 'field_5tk5c8f5f82d86b9',
						'operator' => '==',
						'value' => 'manual_slider',
					),
				),
			),
			'wrapper' => array(
				'width' => '20',
				'class' => '',
				'id' => '',
			),
			'default_value' => 100,
			'min' => 10,
			'max' => 100,
			'step' => '',
			'prepend' => '',
			'append' => '%',
		),
		array(
			'key' => 'field_5tk5c8e518c6b897',
			'label' => __('MastHead Type', 'tkm-starter'),
			'name' => 'page_top_slider_content',
			'type' => 'radio',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5tk5c8f5f82d86b9','operator' => '==','value' => 'full_slider',
					),
				),
				array(
					array(
						'field' => 'field_5tk5c8f5f82d86b9','operator' => '==','value' => 'clean_top',
					),
				),				
			),
			'wrapper' => array(
				'width' => '20',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'image_slider' => __('Image / Image slider', 'tkm-starter'),
				'youtube_vid' => __('Youtube Video', 'tkm-starter'),
			),
			'allow_null' => 0,
			'other_choice' => 0,
			'default_value' => '',
			'layout' => 'vertical',
			'return_format' => 'value',
			'save_other_choice' => 0,
		),
		array(
			'key' => 'field_5dma03dbjbjfisdf',
			'label' => __('Hide slider overlay', 'tkm-starter'),
			'name' => 'page_top_slider_overlay',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5tk5c8f5f82d86b9','operator' => '==','value' => 'full_slider',
					),
				),
				array(
					array(
						'field' => 'field_5tk5c8f5f82d86b9','operator' => '==','value' => 'clean_top',
					),
				),
				array(
					array(
						'field' => 'field_5tk5c8f5f82d86b9','operator' => '==','value' => 'manual_slider',
					),
				),
				array(
					array(
						'field' => 'field_5tk5c977a6af7f5e','operator' => '==','value' => 'slider_content_inn',
					),
				),
			),
			'wrapper' => array(
				'width' => '20',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 1,
			'ui' => 1,
			'ui_on_text' => '',
			'ui_off_text' => '',
		),				
		array(
			'key' => 'field_5tk5c8e51916b898',
			'label' => __('Choose Images', 'tkm-starter'),
			'name' => 'page_main_top_slider',
			'type' => 'gallery',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5tk5c8e518c6b897',
						'operator' => '==',
						'value' => 'image_slider',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'min' => '',
			'max' => '',
			'insert' => 'append',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),
		array(
			'key' => 'field_5tk5c8e51966b899',
			'label' => __('Youtube full URL', 'tkm-starter'),
			'name' => 'page_top_slider_youtube_vid',
			'type' => 'oembed',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5tk5c8e518c6b897',
						'operator' => '==',
						'value' => 'youtube_vid',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'width' => '',
			'height' => '',
		),
		
		array(
			'key' => 'field_5tk5csnnff651a',
			'label' => __('Button Type', 'tkm-starter'),
			'name' => 'page_masthead_btn_type',
			'type' => 'radio',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5tk5c8f5f82d86b9','operator' => '==','value' => 'full_slider',
					),
				),
				array(
					array(
						'field' => 'field_5tk5c8f5f82d86b9','operator' => '==','value' => 'clean_top',
					),
				),				
				array(
					array(
						'field' => 'field_5tk5c8f5f82d86b9','operator' => '==','value' => 'no_image_top',
					),
				),
			),
			'wrapper' => array(
				'width' => '25',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'btn_text' => __('Text button', 'tkm-starter'),
				'btn_img' => __('Image button', 'tkm-starter'),
			),
			'allow_null' => 0,
			'other_choice' => 0,
			'default_value' => '',
			'layout' => 'vertical',
			'return_format' => 'value',
			'save_other_choice' => 0,
		),				
		array(
			'key' => 'field_5tk5c99d0f44523',
			'label' => __('Button Style', 'tkm-starter'),
			'name' => 'page_masthead_button_style',
			'type' => 'radio',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5tk5c8f5f82d86b9','operator' => '==','value' => 'full_slider',
					),
					array(
						'field' => 'field_5tk5csnnff651a','operator' => '==','value' => 'btn_text',
					),
				),
				array(
					array(
						'field' => 'field_5tk5c8f5f82d86b9','operator' => '==','value' => 'clean_top',
					),
					array(
						'field' => 'field_5tk5csnnff651a','operator' => '==','value' => 'btn_text',
					),
				),				
				array(
					array(
						'field' => 'field_5tk5c8f5f82d86b9','operator' => '==','value' => 'no_image_top',
					),
					array(
						'field' => 'field_5tk5csnnff651a','operator' => '==','value' => 'btn_text',
					),
				),
			),
			'wrapper' => array(
				'width' => '25',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'btn_style1' => __('Style 1', 'tkm-starter'),
				'btn_style2' => __('Style 2', 'tkm-starter'),
				'btn_style3' => __('Style 3', 'tkm-starter'),
			),
			'allow_null' => 0,
			'other_choice' => 0,
			'default_value' => '',
			'layout' => 'vertical',
			'return_format' => 'value',
			'save_other_choice' => 0,
		),		
		array(
			'key' => 'field_5tk5c99dde13eea7',
			'label' => __('Button text color', 'tkm-starter'),
			'name' => 'page_masthead_btn_color',
			'type' => 'color_picker',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5tk5c8f5f82d86b9','operator' => '==','value' => 'full_slider',
					),
					array(
						'field' => 'field_5tk5csnnff651a','operator' => '==','value' => 'btn_text',
					),
				),
				array(
					array(
						'field' => 'field_5tk5c8f5f82d86b9','operator' => '==','value' => 'clean_top',
					),
					array(
						'field' => 'field_5tk5csnnff651a','operator' => '==','value' => 'btn_text',
					),
				),				
				array(
					array(
						'field' => 'field_5tk5c8f5f82d86b9','operator' => '==','value' => 'no_image_top',
					),
					array(
						'field' => 'field_5tk5csnnff651a','operator' => '==','value' => 'btn_text',
					),
				),
			),
			'wrapper' => array(
				'width' => '25',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
		),
		array(
			'key' => 'field_5tk5c99de133eea8',
			'label' => __('Button background color', 'tkm-starter'),
			'name' => 'page_masthead_btn_bg_color',
			'type' => 'color_picker',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5tk5c8f5f82d86b9','operator' => '==','value' => 'full_slider',
					),
					array(
						'field' => 'field_5tk5csnnff651a','operator' => '==','value' => 'btn_text',
					),
				),
				array(
					array(
						'field' => 'field_5tk5c8f5f82d86b9','operator' => '==','value' => 'clean_top',
					),
					array(
						'field' => 'field_5tk5csnnff651a','operator' => '==','value' => 'btn_text',
					),
				),				
				array(
					array(
						'field' => 'field_5tk5c8f5f82d86b9','operator' => '==','value' => 'no_image_top',
					),
					array(
						'field' => 'field_5tk5csnnff651a','operator' => '==','value' => 'btn_text',
					),
				),
			),
			'wrapper' => array(
				'width' => '25',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
		),
		
		
		array(
			'key' => 'field_5tk5c99d7e997b16',
			'label' => __('First Button - text', 'tkm-starter'),
			'name' => 'page_masthead_btn1_text',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5tk5c8f5f82d86b9','operator' => '==','value' => 'full_slider',
					),
					array(
						'field' => 'field_5tk5csnnff651a','operator' => '==','value' => 'btn_text',
					),
				),
				array(
					array(
						'field' => 'field_5tk5c8f5f82d86b9','operator' => '==','value' => 'clean_top',
					),
					array(
						'field' => 'field_5tk5csnnff651a','operator' => '==','value' => 'btn_text',
					),
				),				
				array(
					array(
						'field' => 'field_5tk5c8f5f82d86b9','operator' => '==','value' => 'no_image_top',
					),
					array(
						'field' => 'field_5tk5csnnff651a','operator' => '==','value' => 'btn_text',
					),
				),
			),
			'wrapper' => array(
				'width' => '25',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5tk5c99dssc46518',
			'label' => __('First Button - Image', 'tkm-starter'),
			'name' => 'page_masthead_btn1_img',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5tk5c8f5f82d86b9','operator' => '==','value' => 'full_slider',
					),
					array(
						'field' => 'field_5tk5csnnff651a','operator' => '==','value' => 'btn_img',
					),
				),
				array(
					array(
						'field' => 'field_5tk5c8f5f82d86b9','operator' => '==','value' => 'clean_top',
					),
					array(
						'field' => 'field_5tk5csnnff651a','operator' => '==','value' => 'btn_img',
					),
				),				
				array(
					array(
						'field' => 'field_5tk5c8f5f82d86b9','operator' => '==','value' => 'no_image_top',
					),
					array(
						'field' => 'field_5tk5csnnff651a','operator' => '==','value' => 'btn_img',
					),
				),
			),
			'wrapper' => array(
				'width' => '25',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'id',
			'preview_size' => 'menu-50',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),				
		array(
			'key' => 'field_5tk5c99d83597b17',
			'label' => __('First Button - link', 'tkm-starter'),
			'name' => 'page_masthead_btn1_link',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5tk5c8f5f82d86b9','operator' => '==','value' => 'full_slider',
					),
				),
				array(
					array(
						'field' => 'field_5tk5c8f5f82d86b9','operator' => '==','value' => 'clean_top',
					),
				),				
				array(
					array(
						'field' => 'field_5tk5c8f5f82d86b9','operator' => '==','value' => 'no_image_top',
					),
				),
			),
			'wrapper' => array(
				'width' => '25',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5tk5c99d84d97b18',
			'label' => __('Second Button - text', 'tkm-starter'),
			'name' => 'page_masthead_btn2_text',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5tk5c8f5f82d86b9','operator' => '==','value' => 'full_slider',
					),
					array(
						'field' => 'field_5tk5csnnff651a','operator' => '==','value' => 'btn_text',
					),
				),
				array(
					array(
						'field' => 'field_5tk5c8f5f82d86b9','operator' => '==','value' => 'clean_top',
					),
					array(
						'field' => 'field_5tk5csnnff651a','operator' => '==','value' => 'btn_text',
					),
				),				
				array(
					array(
						'field' => 'field_5tk5c8f5f82d86b9','operator' => '==','value' => 'no_image_top',
					),
					array(
						'field' => 'field_5tk5csnnff651a','operator' => '==','value' => 'btn_text',
					),
				),
			),
			'wrapper' => array(
				'width' => '25',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5tk5c99dsnfgf6518',
			'label' => __('Second Button - Image', 'tkm-starter'),
			'name' => 'page_masthead_btn2_img',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5tk5c8f5f82d86b9','operator' => '==','value' => 'full_slider',
					),
					array(
						'field' => 'field_5tk5csnnff651a','operator' => '==','value' => 'btn_img',
					),
				),
				array(
					array(
						'field' => 'field_5tk5c8f5f82d86b9','operator' => '==','value' => 'clean_top',
					),
					array(
						'field' => 'field_5tk5csnnff651a','operator' => '==','value' => 'btn_img',
					),
				),				
				array(
					array(
						'field' => 'field_5tk5c8f5f82d86b9','operator' => '==','value' => 'no_image_top',
					),
					array(
						'field' => 'field_5tk5csnnff651a','operator' => '==','value' => 'btn_img',
					),
				),
			),
			'wrapper' => array(
				'width' => '25',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'id',
			'preview_size' => 'menu-50',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),		
		array(
			'key' => 'field_5tk5c99d86397b19',
			'label' => __('Second Button - link', 'tkm-starter'),
			'name' => 'page_masthead_btn2_link',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5tk5c8f5f82d86b9','operator' => '==','value' => 'full_slider',
					),
				),
				array(
					array(
						'field' => 'field_5tk5c8f5f82d86b9','operator' => '==','value' => 'clean_top',
					),
				),				
				array(
					array(
						'field' => 'field_5tk5c8f5f82d86b9','operator' => '==','value' => 'no_image_top',
					),
				),
			),
			'wrapper' => array(
				'width' => '25',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5tk5cdfde3421a97',
			'label' => __('Manual Full Slider', 'tkm-starter'),
			'name' => 'page_top_slider_manual',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5tk5c8f5f82d86b9','operator' => '==','value' => 'manual_slider',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => 0,
			'max' => 0,
			'layout' => 'block',
			'button_label' => '',
			'sub_fields' => array(
				array(
					'key' => 'field_5tk5cdfde5621a98',
					'label' => __('Background Type', 'tkm-starter'),
					'name' => 'slider_manual_bg',
					'type' => 'radio',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '30',
						'class' => '',
						'id' => '',
					),
					'choices' => array(
						'image_bg' => __('Image', 'tkm-starter'),
						'video_bg' => __('Video', 'tkm-starter'),
					),
					'allow_null' => 0,
					'other_choice' => 0,
					'default_value' => '',
					'layout' => 'vertical',
					'return_format' => 'value',
					'save_other_choice' => 0,
				),
				array(
					'key' => 'field_5tk5cdfde9921a99',
					'label' => __('Image', 'tkm-starter'),
					'name' => 'slider_manual_image',
					'type' => 'image',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_5tk5cdfde5621a98',
								'operator' => '==',
								'value' => 'image_bg',
							),
						),
					),
					'wrapper' => array(
						'width' => '70',
						'class' => '',
						'id' => '',
					),
					'return_format' => 'id',
					'preview_size' => 'thumbnail',
					'library' => 'all',
					'min_width' => '',
					'min_height' => '',
					'min_size' => '',
					'max_width' => '',
					'max_height' => '',
					'max_size' => '',
					'mime_types' => '',
				),
				array(
					'key' => 'field_5tk5cdfdeb621a9a',
					'label' => __('Video URL', 'tkm-starter'),
					'name' => 'slider_manual_video',
					'type' => 'oembed',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_5tk5cdfde5621a98',
								'operator' => '==',
								'value' => 'video_bg',
							),
						),
					),
					'wrapper' => array(
						'width' => '70',
						'class' => '',
						'id' => '',
					),
					'width' => '',
					'height' => '',
				),
				array(
					'key' => 'field_5tk5cdfded621a9b',
					'label' => __('Content on slide', 'tkm-starter'),
					'name' => 'slider_manual_content',
					'type' => 'wysiwyg',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'tabs' => 'all',
					'toolbar' => 'full',
					'media_upload' => 1,
					'delay' => 0,
				),
				array(
					'key' => 'field_5tk5cdsder4f123',
					'label' => __('Inner slide slider', 'tkm-starter'),
					'name' => 'inner_manual_slider',
					'type' => 'repeater',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'collapsed' => '',
					'min' => 0,
					'max' => 0,
					'layout' => 'block',
					'button_label' => '',
					'sub_fields' => array(
						array(
							'key' => 'field_5tk5cddnfgt91',
							'label' => __('Image', 'tkm-starter'),
							'name' => 'inner_manual_slider_image',
							'type' => 'image',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '25',
								'class' => '',
								'id' => '',
							),
							'return_format' => 'id',
							'preview_size' => 'menu-50',
							'library' => 'all',
							'min_width' => '',
							'min_height' => '',
							'min_size' => '',
							'max_width' => '',
							'max_height' => '',
							'max_size' => '',
							'mime_types' => '',
						),
						array(
							'key' => 'field_5tk5c99sd4171',
							'label' => __('Title', 'tkm-starter'),
							'name' => 'inner_manual_slider_title',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '20',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
						array(
							'key' => 'field_5tk5c8s3093221',
							'label' => __('Short Content', 'tkm-starter'),
							'name' => 'inner_manual_slider_text',
							'type' => 'textarea',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '35',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'maxlength' => '',
							'rows' => 4,
							'new_lines' => 'br',
						),
						array(
							'key' => 'field_5tk5c99kd09je71',
							'label' => __('Link', 'tkm-starter'),
							'name' => 'inner_manual_slider_link',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '20',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
					),
				),
				array(
					'key' => 'field_5tk5cdfdef421a9c',
					'label' => __('Contenet position on slide', 'tkm-starter'),
					'name' => 'slider_manual_content_position',
					'type' => 'radio',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'choices' => array(
						'center-xs middle-xs' => __('Center Middle', 'tkm-starter'),
						'center-xs top-xs' => __('Center Top', 'tkm-starter'),
						'center-xs bottom-xs' => __('Center Bottom', 'tkm-starter'),
						'top-xs start-xs' => __('Top Start', 'tkm-starter'),
						'middle-xs start-xs' => __('Middle Start', 'tkm-starter'),
						'bottom-xs start-xs' => __('Bottom Start', 'tkm-starter'),
						'top-xs end-xs' => __('Top End', 'tkm-starter'),
						'middle-xs end-xs' => __('Middle End', 'tkm-starter'),
						'bottom-xs end-xs' => __('Bottom End', 'tkm-starter'),
					),
					'allow_null' => 0,
					'other_choice' => 0,
					'default_value' => '',
					'layout' => 'horizontal',
					'return_format' => 'value',
					'save_other_choice' => 0,
				),
				
			),
		),
		array(
			'key' => 'field_5tkmobile5c8e4d434512f',
			'label' => __('Mobile MastHead Top Slider', 'tkm-starter'),
			'name' => '',
			'type' => 'tab',
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5tk6t45a82e09623',
						'operator' => '==',
						'value' => 'mobile_masthead',
					),
				),
			),			
			'required' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 0,
		),
		array(
			'key' => 'field_5tkmobile5c8f5f82d86b9',
			'label' => __('MastHead Style', 'tkm-starter'),
			'name' => 'mobile_page_top_slider_style',
			'type' => 'radio',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'full_slider' => __('Image Slider or Youtube video', 'tkm-starter'),
				'clean_top' => __('Clean Image Short Head', 'tkm-starter'),
				'no_image_top' => __('No Image BG', 'tkm-starter'),
				'manual_slider' => __('Full Manual slider', 'tkm-starter'),
			),
			'allow_null' => 0,
			'other_choice' => 0,
			'default_value' => '',
			'layout' => 'horizontal',
			'return_format' => 'value',
			'save_other_choice' => 0,
		),
		array(
			'key' => 'field_5tkmobile5c96a82e09651',
			'label' => __('Slider Effect', 'tkm-starter'),
			'name' => 'mobile_page_top_slider_effect',
			'type' => 'radio',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5tkmobile5c8f5f82d86b9','operator' => '==','value' => 'full_slider',
					),
				),
				array(
					array(
						'field' => 'field_5tkmobile5c8f5f82d86b9','operator' => '==','value' => 'manual_slider',
					),
				),								
				array(
					array(
						'field' => 'field_5tkmobile5c8f5f82d86b9','operator' => '==','value' => 'clean_top',
					),
				),				
			),
			'wrapper' => array(
				'width' => '20',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'style1' => __('style1', 'tkm-starter'),
				'style2' => __('style2', 'tkm-starter'),
				'style3' => __('style3', 'tkm-starter'),
			),
			'allow_null' => 0,
			'other_choice' => 0,
			'default_value' => '',
			'layout' => 'vertical',
			'return_format' => 'value',
			'save_other_choice' => 0,
		),
		array(
			'key' => 'field_5tkmobile5c978bcf63295',
			'label' => __('Main title color', 'tkm-starter'),
			'name' => 'mobile_page_masthead_title_color',
			'type' => 'color_picker',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5tkmobile5c8f5f82d86b9','operator' => '==','value' => 'no_image_top',
					),
				),
				array(
					array(
						'field' => 'field_5tkmobile5c977a6af7f5e','operator' => '==','value' => 'slider_content_bottom',
					),
				),
			),
			'wrapper' => array(
				'width' => '25',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
		),
		array(
			'key' => 'field_5tkmobile5c978b4663293',
			'label' => __('Intro text color', 'tkm-starter'),
			'name' => 'mobile_page_masthead_text_color',
			'type' => 'color_picker',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5tkmobile5c8f5f82d86b9',
						'operator' => '==',
						'value' => 'no_image_top',
					),
				),
				array(
					array(
						'field' => 'field_5tkmobile5c977a6af7f5e',
						'operator' => '==',
						'value' => 'slider_content_bottom',
					),
				),
			),
			'wrapper' => array(
				'width' => '25',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
		),
		array(
			'key' => 'field_5tk5c97sd3sse93',
			'label' => __('Intro background color', 'tkm-starter'),
			'name' => 'mobile_page_masthead_intro_bg_color',
			'type' => 'color_picker',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5tkmobile5c8f5f82d86b9',
						'operator' => '==',
						'value' => 'no_image_top',
					),
				),
				array(
					array(
						'field' => 'field_5tkmobile5c977a6af7f5e',
						'operator' => '==',
						'value' => 'slider_content_bottom',
					),
				),
			),
			'wrapper' => array(
				'width' => '25',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
		),				
		array(
			'key' => 'field_5tkmobile5c977a6af7f5e',
			'label' => __('Title & Intro location', 'tkm-starter'),
			'name' => 'mobile_page_masthead_title_location',
			'type' => 'radio',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5tk5c8f5f82d86b9',
						'operator' => '==',
						'value' => 'full_slider',
					),
				),
				array(
					array(
						'field' => 'field_5tk5c8f5f82d86b9',
						'operator' => '==',
						'value' => 'clean_top',
					),
				),
			),
			'wrapper' => array(
				'width' => '20',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'slider_content_inn' => __('On top of the Image', 'tkm-starter'),
				'slider_content_bottom' => __('Under the image', 'tkm-starter'),
			),
			'allow_null' => 0,
			'other_choice' => 0,
			'default_value' => '',
			'layout' => 'vertical',
			'return_format' => 'value',
			'save_other_choice' => 0,
		),
		array(
			'key' => 'field_5tkmobile5c9779d3f7f5c',
			'label' => __('Title & Intro Horizontal position', 'tkm-starter'),
			'name' => 'mobile_page_masthead_title_hor',
			'type' => 'radio',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5tkmobile5c8f5f82d86b9',
						'operator' => '==',
						'value' => 'full_slider',
					),
				),
				array(
					array(
						'field' => 'field_5tkmobile5c8f5f82d86b9',
						'operator' => '==',
						'value' => 'clean_top',
					),
				),
			),
			'wrapper' => array(
				'width' => '20',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'start' => __('start', 'tkm-starter'),
				'center' => __('center', 'tkm-starter'),
				'end' => __('end', 'tkm-starter'),
			),
			'allow_null' => 0,
			'other_choice' => 0,
			'default_value' => '',
			'layout' => 'vertical',
			'return_format' => 'value',
			'save_other_choice' => 0,
		),
		array(
			'key' => 'field_5tkmobile5c977a33f7f5d',
			'label' => __('Titile & Intro Vertical position', 'tkm-starter'),
			'name' => 'mobile_page_masthead_title_ver',
			'type' => 'radio',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5tkmobile5c977a6af7f5e',
						'operator' => '==',
						'value' => 'slider_content_inn',
					),
					array(
						'field' => 'field_5tkmobile5c8f5f82d86b9',
						'operator' => '==',
						'value' => 'full_slider',
					),
				),
			),
			'wrapper' => array(
				'width' => '20',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'top' => __('top', 'tkm-starter'),
				'middle' => __('middle', 'tkm-starter'),
				'bottom' => __('bottom', 'tkm-starter'),
			),
			'allow_null' => 0,
			'other_choice' => 0,
			'default_value' => '',
			'layout' => 'vertical',
			'return_format' => 'value',
			'save_other_choice' => 0,
		),
		array(
			'key' => 'field_5tkmobile5c8e55e167281',
			'label' => __('MastHead Visual Height', 'tkm-starter'),
			'name' => 'mobile_page_top_slider_height',
			'type' => 'range',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5tkmobile5c8f5f82d86b9',
						'operator' => '==',
						'value' => 'full_slider',
					),
				),
				array(
					array(
						'field' => 'field_5tkmobile5c8f5f82d86b9',
						'operator' => '==',
						'value' => 'manual_slider',
					),
				),
			),
			'wrapper' => array(
				'width' => '20',
				'class' => '',
				'id' => '',
			),
			'default_value' => 100,
			'min' => 10,
			'max' => 100,
			'step' => '',
			'prepend' => '',
			'append' => '%',
		),
		array(
			'key' => 'field_5tkmobile5c8e518c6b897',
			'label' => __('MastHead Type', 'tkm-starter'),
			'name' => 'mobile_page_top_slider_content',
			'type' => 'radio',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5tkmobile5c8f5f82d86b9','operator' => '==','value' => 'full_slider',
					),
				),
				array(
					array(
						'field' => 'field_5tkmobile5c8f5f82d86b9','operator' => '==','value' => 'clean_top',
					),
				),				
			),
			'wrapper' => array(
				'width' => '20',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'image_slider' => __('Image / Image slider', 'tkm-starter'),
				'youtube_vid' => __('Youtube Video', 'tkm-starter'),
			),
			'allow_null' => 0,
			'other_choice' => 0,
			'default_value' => '',
			'layout' => 'vertical',
			'return_format' => 'value',
			'save_other_choice' => 0,
		),
		array(
			'key' => 'field_5tkmobile5c8e51916b898',
			'label' => __('Choose Images', 'tkm-starter'),
			'name' => 'mobile_page_main_top_slider',
			'type' => 'gallery',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5tkmobile5c8e518c6b897',
						'operator' => '==',
						'value' => 'image_slider',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'min' => '',
			'max' => '',
			'insert' => 'append',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),
		array(
			'key' => 'field_5tkmobile5c8e51966b899',
			'label' => __('Youtube full URL', 'tkm-starter'),
			'name' => 'mobile_page_top_slider_youtube_vid',
			'type' => 'oembed',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5tkmobile5c8e518c6b897',
						'operator' => '==',
						'value' => 'youtube_vid',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'width' => '',
			'height' => '',
		),
		array(
			'key' => 'field_5tk5c8f5f82d86b9',
			'label' => __('MastHead Style', 'tkm-starter'),
			'name' => 'page_top_slider_style',
			'type' => 'radio',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '60',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'full_slider' => __('Image Slider or Youtube video', 'tkm-starter'),
				'clean_top' => __('Clean Image Short Head', 'tkm-starter'),
				'no_image_top' => __('No Image BG', 'tkm-starter'),
				'manual_slider' => __('Full Manual slider', 'tkm-starter'),
			),
			'allow_null' => 0,
			'other_choice' => 0,
			'default_value' => '',
			'layout' => 'horizontal',
			'return_format' => 'value',
			'save_other_choice' => 0,
		),
		array(
			'key' => 'field_5tkmobile5c99d7e997b16',
			'label' => __('First Button - text', 'tkm-starter'),
			'name' => 'mobile_page_masthead_btn1_text',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5tkmobile5c8f5f82d86b9','operator' => '==','value' => 'full_slider',
					),
				),
				array(
					array(
						'field' => 'field_5tkmobile5c8f5f82d86b9','operator' => '==','value' => 'clean_top',
					),
				),				
				array(
					array(
						'field' => 'field_5tkmobile5c8f5f82d86b9','operator' => '==','value' => 'no_image_top',
					),
				),
			),
			'wrapper' => array(
				'width' => '25',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5tkmobile5c99d83597b17',
			'label' => __('First Button - link', 'tkm-starter'),
			'name' => 'mobile_page_masthead_btn1_link',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5tkmobile5c8f5f82d86b9','operator' => '==','value' => 'full_slider',
					),
				),
				array(
					array(
						'field' => 'field_5tkmobile5c8f5f82d86b9','operator' => '==','value' => 'clean_top',
					),
				),				
				array(
					array(
						'field' => 'field_5tkmobile5c8f5f82d86b9','operator' => '==','value' => 'no_image_top',
					),
				),
			),
			'wrapper' => array(
				'width' => '25',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5tkmobile5c99d84d97b18',
			'label' => __('Second Button - text', 'tkm-starter'),
			'name' => 'mobile_page_masthead_btn2_text',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5tkmobile5c8f5f82d86b9','operator' => '==','value' => 'full_slider',
					),
				),
				array(
					array(
						'field' => 'field_5tkmobile5c8f5f82d86b9','operator' => '==','value' => 'clean_top',
					),
				),				
				array(
					array(
						'field' => 'field_5tkmobile5c8f5f82d86b9','operator' => '==','value' => 'no_image_top',
					),
				),
			),
			'wrapper' => array(
				'width' => '25',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5tkmobile5c99d86397b19',
			'label' => __('Second Button - link', 'tkm-starter'),
			'name' => 'mobile_page_masthead_btn2_link',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5tkmobile5c8f5f82d86b9','operator' => '==','value' => 'full_slider',
					),
				),
				array(
					array(
						'field' => 'field_5tkmobile5c8f5f82d86b9','operator' => '==','value' => 'clean_top',
					),
				),				
				array(
					array(
						'field' => 'field_5tkmobile5c8f5f82d86b9','operator' => '==','value' => 'no_image_top',
					),
				),
			),
			'wrapper' => array(
				'width' => '25',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5tkmobile5h6ts31a',
			'label' => __('Button Style', 'tkm-starter'),
			'name' => 'mobile_page_masthead_button_style',
			'type' => 'radio',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5tkmobile5c8f5f82d86b9','operator' => '==','value' => 'full_slider',
					),
				),
				array(
					array(
						'field' => 'field_5tkmobile5c8f5f82d86b9','operator' => '==','value' => 'clean_top',
					),
				),				
				array(
					array(
						'field' => 'field_5tkmobile5c8f5f82d86b9','operator' => '==','value' => 'no_image_top',
					),
				),
			),
			'wrapper' => array(
				'width' => '33',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'btn_style1' => __('Style 1', 'tkm-starter'),
				'btn_style2' => __('Style 2', 'tkm-starter'),
				'btn_style3' => __('Style 3', 'tkm-starter'),
			),
			'allow_null' => 0,
			'other_choice' => 0,
			'default_value' => '',
			'layout' => 'vertical',
			'return_format' => 'value',
			'save_other_choice' => 0,
		),		
		array(
			'key' => 'field_5tkmobile5c99dde13eea7',
			'label' => __('Button text color', 'tkm-starter'),
			'name' => 'mobile_page_masthead_btn_color',
			'type' => 'color_picker',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5tkmobile5c8f5f82d86b9','operator' => '==','value' => 'full_slider',
					),
				),
				array(
					array(
						'field' => 'field_5tkmobile5c8f5f82d86b9','operator' => '==','value' => 'clean_top',
					),
				),				
				array(
					array(
						'field' => 'field_5tkmobile5c8f5f82d86b9','operator' => '==','value' => 'no_image_top',
					),
				),
				array(
					array(
						'field' => 'field_5tkmobile5c977a6af7f5e','operator' => '==','value' => 'slider_content_bottom',
					),
				),
			),
			'wrapper' => array(
				'width' => '33',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
		),
		array(
			'key' => 'field_5tkmobile5c99de133eea8',
			'label' => __('Button background color', 'tkm-starter'),
			'name' => 'mobile_page_masthead_btn_bg_color',
			'type' => 'color_picker',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5tkmobile5c8f5f82d86b9','operator' => '==','value' => 'full_slider',
					),
				),
				array(
					array(
						'field' => 'field_5tkmobile5c8f5f82d86b9','operator' => '==','value' => 'clean_top',
					),
				),				
				array(
					array(
						'field' => 'field_5tkmobile5c8f5f82d86b9','operator' => '==','value' => 'no_image_top',
					),
				),
				array(
					array(
						'field' => 'field_5tkmobile5c977a6af7f5e','operator' => '==','value' => 'slider_content_bottom',
					),
				),
			),
			'wrapper' => array(
				'width' => '33',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
		),
		array(
			'key' => 'field_5tkmobile5cdfde3421a97',
			'label' => __('Manual Full Slider', 'tkm-starter'),
			'name' => 'mobile_page_top_slider_manual',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5tkmobile5c8f5f82d86b9','operator' => '==','value' => 'manual_slider',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => 0,
			'max' => 0,
			'layout' => 'block',
			'button_label' => '',
			'sub_fields' => array(
				array(
					'key' => 'field_5tkmobile5cdfde5621a98',
					'label' => __('Background Type', 'tkm-starter'),
					'name' => 'mobile_slider_manual_bg',
					'type' => 'radio',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '30',
						'class' => '',
						'id' => '',
					),
					'choices' => array(
						'image_bg' => __('Image', 'tkm-starter'),
						'video_bg' => __('Video', 'tkm-starter'),
					),
					'allow_null' => 0,
					'other_choice' => 0,
					'default_value' => '',
					'layout' => 'vertical',
					'return_format' => 'value',
					'save_other_choice' => 0,
				),
				array(
					'key' => 'field_5tkmobile5cdfde9921a99',
					'label' => __('Image', 'tkm-starter'),
					'name' => 'mobile_slider_manual_image',
					'type' => 'image',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_5tkmobile5cdfde5621a98',
								'operator' => '==',
								'value' => 'image_bg',
							),
						),
					),
					'wrapper' => array(
						'width' => '70',
						'class' => '',
						'id' => '',
					),
					'return_format' => 'id',
					'preview_size' => 'thumbnail',
					'library' => 'all',
					'min_width' => '',
					'min_height' => '',
					'min_size' => '',
					'max_width' => '',
					'max_height' => '',
					'max_size' => '',
					'mime_types' => '',
				),
				array(
					'key' => 'field_5tkmobile5cdfdeb621a9a',
					'label' => __('Video URL', 'tkm-starter'),
					'name' => 'mobile_slider_manual_video',
					'type' => 'oembed',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_5tkmobile5cdfde5621a98',
								'operator' => '==',
								'value' => 'video_bg',
							),
						),
					),
					'wrapper' => array(
						'width' => '70',
						'class' => '',
						'id' => '',
					),
					'width' => '',
					'height' => '',
				),
				array(
					'key' => 'field_5tkmobile5cdfded621a9b',
					'label' => __('Content on slide', 'tkm-starter'),
					'name' => 'mobile_slider_manual_content',
					'type' => 'wysiwyg',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '70',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'tabs' => 'all',
					'toolbar' => 'full',
					'media_upload' => 1,
					'delay' => 0,
				),
				array(
					'key' => 'field_5tkmobile5cdfdef421a9c',
					'label' => __('Contenet position on slide', 'tkm-starter'),
					'name' => 'mobile_slider_manual_content_position',
					'type' => 'radio',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '30',
						'class' => '',
						'id' => '',
					),
					'choices' => array(
						'center-xs middle-xs' => __('Center Middle', 'tkm-starter'),
						'top-xs middle-xs' => __('Top Middle', 'tkm-starter'),
						'bottom-xs middle-xs' => __('Bottom Middle', 'tkm-starter'),
						'top-xs start-xs' => __('Top Start', 'tkm-starter'),
						'middle-xs start-xs' => __('Middle Start', 'tkm-starter'),
						'bottom-xs start-xs' => __('Bottom Start', 'tkm-starter'),
						'top-xs end-xs' => __('Top End', 'tkm-starter'),
						'middle-xs end-xs' => __('Middle End', 'tkm-starter'),
						'bottom-xs end-xs' => __('Bottom End', 'tkm-starter'),
					),
					'allow_null' => 0,
					'other_choice' => 0,
					'default_value' => '',
					'layout' => 'vertical',
					'return_format' => 'value',
					'save_other_choice' => 0,
				),
				
				
			),
		),
		
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'post',
			),
		),
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'page',
			),
		),
	),
	'menu_order' => 2,
	'position' => 'acf_after_title',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array(
		//0 => 'the_content',
		0 => 'excerpt',
		1 => 'discussion',
		2 => 'comments',
	),
	'active' => true,
	'description' => '',
));

endif;

 ?>
