<?php 
/* ACF Fields*/
if( function_exists('acf_add_local_field_group') ):

    acf_add_local_field_group(array(
        'key' => 'group_5f3a4704ad8d7',
        'title' => 'acf-blocks',
        'fields' => array(
            array(
                'key' => 'field_5f3a471a3495a',
                'label' => 'headline',
                'name' => 'headline',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
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
                'key' => 'field_5f3a470a34959',
                'label' => 'subheadline',
                'name' => 'subheadline',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
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
                'key' => 'field_5f3a471f3495b',
                'label' => 'description',
                'name' => 'description',
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
                'key' => 'field_5f3cee223d9f0',
                'label' => 'CTA Button',
                'name' => 'cta_button',
                'type' => 'true_false',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'message' => 'Möchtest du einen Call to Action Button?',
                'default_value' => 1,
                'ui' => 0,
                'ui_on_text' => '',
                'ui_off_text' => '',
            ),
            array(
                'key' => 'field_5f3cef0706fd5',
                'label' => 'link',
                'name' => 'link',
                'type' => 'url',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'field_5f3cee223d9f0',
                            'operator' => '==',
                            'value' => '1',
                        ),
                    ),
                ),
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
            ),
            array(
                'key' => 'field_5f3cef1206fd6',
                'label' => 'linktext',
                'name' => 'linktext',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'field_5f3cee223d9f0',
                            'operator' => '==',
                            'value' => '1',
                        ),
                    ),
                ),
                'wrapper' => array(
                    'width' => '',
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
                'key' => 'field_5f3a54ff0fe58',
                'label' => 'font-color',
                'name' => 'font-color',
                'type' => 'color_picker',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
            ),
            array(
                'key' => 'field_5f3d4dc02ee4c',
                'label' => 'background-color',
                'name' => 'background-color',
                'type' => 'color_picker',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
            ),
            array(
                'key' => 'field_5f3a5f31f680f',
                'label' => 'anker_id',
                'name' => 'anker_id',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
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
        'location' => array(
            array(
                array(
                    'param' => 'block',
                    'operator' => '==',
                    'value' => 'all',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
    ));
    
    acf_add_local_field_group(array(
        'key' => 'group_5f3d00be8cee0',
        'title' => 'faq',
        'fields' => array(
            array(
                'key' => 'field_5f3d00c239bd8',
                'label' => 'FAQ',
                'name' => 'faq_group',
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
                        'key' => 'field_5f3d00cb39bd9',
                        'label' => 'Frage',
                        'name' => 'question',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
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
                        'key' => 'field_5f3d00d839bda',
                        'label' => 'Antwort',
                        'name' => 'answer',
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
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'block',
                    'operator' => '==',
                    'value' => 'acf/faq',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
    ));
    
    acf_add_local_field_group(array(
        'key' => 'group_5f33b16d0d563',
        'title' => 'hero-image-block',
        'fields' => array(
            array(
                'key' => 'field_5f33b181216e6',
                'label' => 'Background',
                'name' => 'background-image',
                'type' => 'image',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'array',
                'preview_size' => 'full',
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
                'key' => 'field_5f3cee223d9f0',
                'label' => 'CTA Button',
                'name' => 'cta_button',
                'type' => 'true_false',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'message' => 'Möchtest du einen Call to Action Button?',
                'default_value' => 1,
                'ui' => 0,
                'ui_on_text' => '',
                'ui_off_text' => '',
            ),
            array(
                'key' => 'field_5f3cef0706fd5',
                'label' => 'link',
                'name' => 'link',
                'type' => 'url',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'field_5f3cee223d9f0',
                            'operator' => '==',
                            'value' => '1',
                        ),
                    ),
                ),
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
            ),
            array(
                'key' => 'field_5f3cef1206fd6',
                'label' => 'linktext',
                'name' => 'linktext',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'field_5f3cee223d9f0',
                            'operator' => '==',
                            'value' => '1',
                        ),
                    ),
                ),
                'wrapper' => array(
                    'width' => '',
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
        'location' => array(
            array(
                array(
                    'param' => 'block',
                    'operator' => '==',
                    'value' => 'acf/hero-image',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
    ));
    
    acf_add_local_field_group(array(
        'key' => 'group_5f3bb04149f66',
        'title' => 'product-block',
        'fields' => array(
            array(
                'key' => 'field_5f3bb0414e991',
                'label' => 'Product Posts',
                'name' => 'relation',
                'type' => 'relationship',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'post_type' => array(
                    0 => 'product',
                ),
                'taxonomy' => '',
                'filters' => array(
                    0 => 'search',
                ),
                'elements' => '',
                'min' => '',
                'max' => '',
                'return_format' => 'object',
            ),
            
        ),
        'location' => array(
            array(
                array(
                    'param' => 'block',
                    'operator' => '==',
                    'value' => 'acf/product',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
    ));
    
    if( function_exists('acf_add_local_field_group') ):

        acf_add_local_field_group(array(
            'key' => 'group_5f3d449ebbdee',
            'title' => 'cpt_product',
            'fields' => array(
                array(
                    'key' => 'field_5f3d44b4b3501',
                    'label' => 'subheadline',
                    'name' => 'subheadline',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                ),array(
                    'key' => 'field_5f3cee223d9f0',
                    'label' => 'CTA Button',
                    'name' => 'cta_button',
                    'type' => 'true_false',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'message' => 'Möchtest du einen Call to Action Button?',
                    'default_value' => 1,
                    'ui' => 0,
                    'ui_on_text' => '',
                    'ui_off_text' => '',
                ),
                array(
                    'key' => 'field_5f3cef0706fd5',
                    'label' => 'link',
                    'name' => 'link',
                    'type' => 'url',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => array(
                        array(
                            array(
                                'field' => 'field_5f3cee223d9f0',
                                'operator' => '==',
                                'value' => '1',
                            ),
                        ),
                    ),
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'placeholder' => '',
                ),
                array(
                    'key' => 'field_5f3cef1206fd6',
                    'label' => 'linktext',
                    'name' => 'linktext',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => array(
                        array(
                            array(
                                'field' => 'field_5f3cee223d9f0',
                                'operator' => '==',
                                'value' => '1',
                            ),
                        ),
                    ),
                    'wrapper' => array(
                        'width' => '',
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
            'location' => array(
                array(
                    array(
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'product',
                    ),
                ),
            ),
            'menu_order' => 0,
            'position' => 'normal',
            'style' => 'default',
            'label_placement' => 'top',
            'instruction_placement' => 'label',
            'hide_on_screen' => '',
            'active' => true,
            'description' => '',
        ));
        
        endif;


    acf_add_local_field_group(array(
        'key' => 'group_5f3ba8b90dcb7',
        'title' => 'testimonial-block',
        'fields' => array(
            array(
                'key' => 'field_5f3ba8c662743',
                'label' => 'Testimonial Posts',
                'name' => 'relation',
                'type' => 'relationship',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'post_type' => array(
                    0 => 'testimonial',
                ),
                'taxonomy' => '',
                'filters' => array(
                    0 => 'search',
                ),
                'elements' => '',
                'min' => '',
                'max' => '',
                'return_format' => 'object',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'block',
                    'operator' => '==',
                    'value' => 'acf/testimonial',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
    ));
    
    acf_add_local_field_group(array(
        'key' => 'group_5f32726b66f01',
        'title' => 'testimonials',
        'fields' => array(
            array(
                'key' => 'field_5f3272872307d',
                'label' => 'position',
                'name' => 'position',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
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
                'key' => 'field_5f3272935c23f',
                'label' => 'image',
                'name' => 'image',
                'type' => 'image',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'url',
                'preview_size' => 'thumbnail',
                'library' => 'all',
                'min_width' => 100,
                'min_height' => 100,
                'min_size' => '',
                'max_width' => 150,
                'max_height' => 150,
                'max_size' => '',
                'mime_types' => '',
            ),
            array(
                'key' => 'field_5f3273449f8ba',
                'label' => 'content',
                'name' => 'content',
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
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'testimonial',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
    ));
    
    acf_add_local_field_group(array(
        'key' => 'group_5f33aa251c1fc',
        'title' => 'timeline-block',
        'fields' => array(
            array(
                'key' => 'field_5f33aa33d22a1',
                'label' => 'Timeline',
                'name' => 'timeline',
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
                'layout' => 'table',
                'button_label' => '',
                'sub_fields' => array(
                    array(
                        'key' => 'field_5f33aa40d22a2',
                        'label' => 'Jahr',
                        'name' => 'year',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '30',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => 4,
                    ),
                    array(
                        'key' => 'field_5f33aa67d22a3',
                        'label' => 'Ereignis',
                        'name' => 'event',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '80',
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
        ),
        'location' => array(
            array(
                array(
                    'param' => 'block',
                    'operator' => '==',
                    'value' => 'acf/timeline',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
    ));
    
    acf_add_local_field_group(array(
        'key' => 'group_5f3274c8663ac',
        'title' => '2-columns-block',
        'fields' => array(
            array(
                'key' => 'field_5f3274df64c7c',
                'label' => 'Ausrichtung',
                'name' => 'align',
                'type' => 'select',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'choices' => array(
                    'mr-md-auto' => 'Content Links',
                    'ml-md-auto' => 'Content Rechts',
                ),
                'default_value' => false,
                'allow_null' => 0,
                'multiple' => 0,
                'ui' => 0,
                'return_format' => 'value',
                'ajax' => 0,
                'placeholder' => '',
            ),
            array(
                'key' => 'field_5f33b0f18468e',
                'label' => 'Image',
                'name' => 'image',
                'type' => 'image',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'array',
                'preview_size' => 'medium',
                'library' => 'all',
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '',
                'mime_types' => '',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'block',
                    'operator' => '==',
                    'value' => 'acf/two-columns',
                ),
            ),
        ),
        'menu_order' => 1,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
    ));
    
    endif;

// Register Custom Blocks
add_action('acf/init', 'my_register_blocks');
function my_register_blocks()
{

	// check function exists.
	if (function_exists('acf_register_block_type')) {


		// register a testimonial block.
		acf_register_block_type(array(
			'name'				=> 'testimonial',
			'title'				=> __('Testimonial'),
			'description'		=> __('A custom testimonial block.'),
			'render_template'   => 'blocks/testimonial/block.php',
			'category'			=> 'formatting',
			'icon'				=> 'admin-comments',
			'keywords'			=> array('testimonial'),
			'enqueue_style' => get_template_directory_uri() . '/blocks/testimonial/style.css',
			'render_callback'	=> 'my_acf_block_render_callback',
		));

		// register a product block.
		acf_register_block_type(array(
			'name'				=> 'product',
			'title'				=> __('Product'),
			'description'		=> __('A custom product block.'),
			'render_template'   => 'blocks/product/block.php',
			'category'			=> 'formatting',
			'icon'				=> 'admin-comments',
			'keywords'			=> array('product'),
			'enqueue_style' => get_template_directory_uri() . '/blocks/product/style.css',
			'render_callback'	=> 'my_acf_block_render_callback',
		));


		// register a job block.
		acf_register_block_type(array(
			'name'				=> 'job',
			'title'				=> __('Job'),
			'description'		=> __('A custom job block.'),
			'render_template'   => 'blocks/job/block.php',
			'category'			=> 'formatting',
			'icon'				=> 'admin-comments',
			'keywords'			=> array('job'),
			'enqueue_style' => get_template_directory_uri() . '/blocks/job/style.css',
			'render_callback'	=> 'my_acf_block_render_callback',
		));

		acf_register_block_type(array(
			'name'				=> 'timeline',
			'title'				=> __('Timeline'),
			'description'		=> __('A custom Timeline block.'),
			'render_template'   => 'blocks/timeline/block.php',
			'category'			=> 'layout',
			'icon'				=> 'admin-comments',
			'keywords'			=> array('timeline'),
			'enqueue_style' => get_template_directory_uri() . '/blocks/timeline/style.css',
			'render_callback'	=> 'my_acf_block_render_callback',
		));
		acf_register_block_type(array(
			'name'				=> 'hero-image',
			'title'				=> __('Hero Image'),
			'description'		=> __('A custom Hero Image block.'),
			'render_template'   => 'blocks/hero-image/block.php',
			'category'			=> 'layout',
			'icon'				=> 'admin-comments',
			'keywords'			=> array('hero-image'),
			'enqueue_style' => get_template_directory_uri() . '/blocks/hero-image/style.css',
			'render_callback'	=> 'my_acf_block_render_callback',
		));
		acf_register_block_type(array(
			'name'				=> 'two-columns',
			'title'				=> __('two Columns'),
			'description'		=> __('A custom two-columns block.'),
			'render_template'   => 'blocks/two-columns/block.php',
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'layout',
			'icon'				=> 'admin-comments',
			'keywords'			=> array('two-columns'),
			'enqueue_style' => get_template_directory_uri() . '/blocks/two-columns/style.css',
		));
		acf_register_block_type(array(
			'name'				=> 'faq',
			'title'				=> __('FAQ'),
			'description'		=> __('A custom FAQ block in accordion.'),
			'render_template'   => 'blocks/faq/block.php',
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'layout',
			'icon'				=> 'admin-comments',
			'keywords'			=> array('faq'),
			'enqueue_style' => get_template_directory_uri() . '/blocks/faq/style.css',
		));
	}
}


function my_acf_block_render_callback( $block ) {
	
	// convert name ("acf/testimonial") into path friendly slug ("testimonial")
	$slug = str_replace('acf/', '', $block['name']);

	// include a template part from within the "template-parts/block" folder
	if( file_exists( get_theme_file_path("/blocks/".$slug."/block.php") ) ) {
		include( get_theme_file_path("/blocks/".$slug."/block.php") );
	}
}

/* Filter Blocks */

add_filter( 'render_block', function( $block_content, $block ) {
//	var_dump ($block['blockName']);
//	var_dump ($block_content);
	$futrue_blocks = array (
		'acf/timeline',
		'acf/testimonial',
		'acf/hero-image',
		'acf/two-columns',
		'acf/product',
		'acf/job',
		'acf/faq'
	);

	// Remove the block/timed-block from the rendered content.
	if (!in_array($block['blockName'], $futrue_blocks)) {
		$content = $block_content;
		
		if (isset($block['attrs']['style']['color']['background'])){
			$background_color = $block['attrs']['style']['color']['background'];
			$block_content = '<div class="section" style="background-color: '.$background_color.'"><div class="container" >'.$content.'</div></div>';
		}
		else {
			$block_content = '<div class="section"><div class="container" >'.$content.'</div></div>';
		}
		
	}


   return $block_content;
}, 10, 2 );

