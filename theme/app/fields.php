<?php 
add_action( 'cmb2_admin_init', 'home_fields' );
add_action( 'cmb2_admin_init', 'page_fields' );



function page_fields() {
	$cmb = new_cmb2_box( array(
		'id'            => 'page_metabox',
		'title'         => __( 'Page Details', 'cmb2' ),
		'object_types'  => array( 'page' ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
	) );

	$cmb->add_field( array(
		'name'       => __( 'Headline ', 'cmb2' ),
		'id'         => 'headline',
		'type'       => 'text',
	) );




    $cmb->add_field( array(
        'name'    => 'Button Text',
        'id'      => 'button_text',
        'type'    => 'text_medium',

        
    ) );

    $cmb->add_field( array(
		'name' => __( '(CTA) Button url', 'cmb2' ),
		'id'   => 'button_url',
		'type' => 'text_url',
	) );

    $cmb->add_field( array(
		'name' => __( 'Modal content?', 'cmb2' ),
		'id'   => 'is_modal',
		'type' => 'checkbox',
        'default' => false,
	) );

    $cmb->add_field( array(
        'name' => 'Photo',
        'id'   => 'unscripted_image',
        'type' => 'file',
    ) );

    $cmb->add_field( array(
        'name' => 'Photo (portrait)',
        'id'   => 'unscripted_image_tab',
        'type' => 'file',
    ) );



    // Hero section
    $cmb = new_cmb2_box( array(
		'id'            => 'page_hero',
		'title'         => __( 'Page Hero', 'cmb2' ),
		'object_types'  => array( 'page' ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
	) );

	$cmb->add_field( array(
		'name'       => __( 'Enabled ', 'cmb2' ),
        'desc' => 'Enable hero image on this page',
		'id'         => 'hero_check',
		'type'       => 'checkbox',
	) );

    $cmb->add_field( array(
        'name' => 'Hero Image (desktop)',
        'id'   => 'site_hero',
        'type' => 'file',
        'options' => array(
            'url' => false, // Hide the text input for the url
        ),
    ) );

    $cmb->add_field( array(
		'name'    => 'Hero Video',
		'desc'    => 'Full HD 1920 x 1080',
		'id'      => 'hero_video',
		'type'    => 'file',
		'query_args' => array(
			'type' => 'video', // Make library only display PDFs.

		),
		'options' => array(
			'url' => false, // Hide the text input for the url
		),
	) );

    $cmb->add_field( array(
        'name' => 'Hero Image (mobile)',
        'id'   => 'site_hero_mobile',
        'type' => 'file',
        'options' => array(
            'url' => false, // Hide the text input for the url
        ),
    ) );

    $cmb->add_field( array(
		'name'    => 'Hero Video (Mobile)',
		'desc'    => 'Full HD (Portrait) 1080 x 1920',
		'id'      => 'hero_video_mobile',
		'type'    => 'file',
		'query_args' => array(
			'type' => 'video', // Make library only display PDFs.

		),
		'options' => array(
			'url' => false, // Hide the text input for the url
		),
	) );

}


function home_fields() {
    //Hero Image
	$cmb = new_cmb2_box( array(
        'id'           => 'hero-section',
        'title'        => 'Hero Section',
        'object_types' => array( 'page' ), // post type
        'show_on'      => array( 'key' => 'page-template', 'value' => 'page-home.php' ),
        'context'      => 'normal', //  'normal', 'advanced', or 'side'
        'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
        'show_names'   => true, // Show field names on the left
    ) );

    $cmb->add_field( array(
        'name' => 'Hero Image (desktop)',
        'id'   => 'Desktop_site_hero',
        'type' => 'file',
        'options' => array(
            'url' => false, // Hide the text input for the url
        ),
    ) );


    $cmb->add_field( array(
        'name' => 'Hero Image (mobile)',
        'id'   => 'mobile_site_hero',
        'type' => 'file',
        'options' => array(
            'url' => false, // Hide the text input for the url
        ),
    ) );

    $cmb->add_field( array(
        'name' => 'Main Banner',
        'id'   => 'banner_img',
        'desc' => 'Image size - 600x400',
        'type' => 'file_list',
        'preview_size' => array( 100, 100 ), // Default: array( 50, 50 )
        'query_args' => array( 'type' => 'image' ), // Only images attachment

    ) );


    // section one
	$cmb = new_cmb2_box( array(
        'id'           => 'section-one',
        'title'        => 'Section About ',
        'object_types' => array( 'page' ), // post type
        'show_on'      => array( 'key' => 'page-template', 'value' => 'page-home.php' ),
        'context'      => 'normal', //  'normal', 'advanced', or 'side'
        'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
        'show_names'   => true, // Show field names on the left
    ) );

    $cmb->add_field( array(
        'name' => 'Title',
        'id'   => '1_title',
        'type' => 'text',
    ) );

    $cmb->add_field( array(
        'name'    => 'Description',
        'id'      => '1_description',
        'type'    => 'textarea',
    ) );

    $cmb->add_field( array(
        'name' => 'Photo',
        'id'   => '1_image',
        'type' => 'file',
    ) );



    //why us
    $cmb = new_cmb2_box( array(
        'id'           => 'section-unscripted',
        'title'        => 'Section why us ',
        'object_types' => array( 'page' ), // post type
        'show_on'      => array( 'key' => 'page-template', 'value' => 'page-home.php' ),
        'context'      => 'normal', //  'normal', 'advanced', or 'side'
        'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
        'show_names'   => true, // Show field names on the left
    ) );


    $cmb->add_field( array(
        'name' => 'Title',
        'id'   => 'why_title',
        'type' => 'text',
    ) );

    $cmb->add_field( array(
        'name'    => 'Description',
        'id'      => 'why_description',
        'type'    => 'wysiwyg',
        'options' => array(
            'wpautop' => true, 
            'media_buttons' => false, 
            'textarea_rows' => get_option('default_post_edit_rows', 10), 
            'teeny' => true, 
            'tinymce' => true, 
            'quicktags' => false 
        ),
    ) );

    // section Produts
	$cmb = new_cmb2_box( array(
        'id'           => 'section-two',
        'title'        => 'Section Products ',
        'object_types' => array( 'page' ), // post type
        'show_on'      => array( 'key' => 'page-template', 'value' => 'page-home.php' ),
        'context'      => 'normal', //  'normal', 'advanced', or 'side'
        'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
        'show_names'   => true, // Show field names on the left
    ) );


    $cmb->add_field( array(
        'name' => 'Title',
        'id'   => 'Pro_title',
        'type' => 'text',
    ) );

    $cmb->add_field( array(
        'name'    => 'Description',
        'id'      => 'pro_description',
        'type'    => 'wysiwyg',
        'options' => array(
            'wpautop' => true, 
            'media_buttons' => false, 
            'textarea_rows' => get_option('default_post_edit_rows', 10), 
            'teeny' => true, 
            'tinymce' => true, 
            'quicktags' => false 
        ),
    ) );


    $group_field_id = $cmb->add_field( array(
        'id'          => 'Produts_group',
        'type'        => 'group',
        'description' => __( 'Produts group', 'cmb2' ),
        'options'     => array(
            'group_title'       => __( 'Group {#}', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
            'add_button'        => __( 'Add Another Produt', 'cmb2' ),
            'remove_button'     => __( 'Remove Product', 'cmb2' ),
            'sortable'          => true,
            'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
        ),
    ) );

    $cmb->add_group_field( $group_field_id, array(
        'name' => 'Title',
        'id'   => 'Product_title',
        'type' => 'text',
    ) );

    $cmb->add_group_field( $group_field_id, array(
        'name'    => 'Description',
        'id'      => 'product_description',
        'type'    => 'wysiwyg',
        'options' => array(
            'wpautop' => true, 
            'media_buttons' => false, 
            'textarea_rows' => get_option('default_post_edit_rows', 10), 
            'teeny' => true, 
            'tinymce' => true, 
            'quicktags' => false 
        ),
    ) );


    $cmb->add_group_field( $group_field_id,array(
        'name' => 'Product Photo gallery',
        'id'   => 'product_gallery',
        'desc' => 'Image size - 600x400',
        'type' => 'file_list',
        'preview_size' => array( 100, 100 ), // Default: array( 50, 50 )
        'query_args' => array( 'type' => 'image' ), // Only images attachment

    ) );

    $cmb->add_group_field( $group_field_id,array(
        'name'    => 'Button Text',
        'id'      => 'button_text',
        'type'    => 'text_medium', 
    ) );

    $cmb->add_group_field( $group_field_id,array(
		'name' => __( '(CTA) Button url', 'cmb2' ),
		'id'   => 'button_url',
		'type' => 'text_url',
	) );




 // section Contacts
 $cmb = new_cmb2_box( array(
    'id'           => 'section-contacts',
    'title'        => 'Section Contacts ',
    'object_types' => array( 'page' ), // post type
    'show_on'      => array( 'key' => 'page-template', 'value' => 'page-home.php' ),
    'context'      => 'normal', //  'normal', 'advanced', or 'side'
    'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
    'show_names'   => true, // Show field names on the left
) );

$cmb->add_field( array(
    'name' => 'Title',
    'id'   => 'Contacts_title',
    'type' => 'text',
) );

$cmb->add_field( array(
    'name'    => 'Description',
    'id'      => 'Contacts_description',
    'type'    => 'wysiwyg',
    'options' => array(
        'wpautop' => true, 
        'media_buttons' => false, 
        'textarea_rows' => get_option('default_post_edit_rows', 10), 
        'teeny' => true, 
        'tinymce' => true, 
        'quicktags' => false 
    ),
) );

$cmb->add_field( array(
    'name' => 'Email',
    'id'   => 'Contacts_email',
    'type' => 'text_email',
) );

$cmb->add_field( array(
    'name' => 'Whatsapp No.',
    'id'   => 'Contacts_whatsapp',
    'type' => 'text',
) );

$cmb->add_field(  array(
    'name' => 'Button Text',
    'id'   => 'pdf_txt_button',
    'type' => 'text_medium',
) );

$cmb->add_field(  array(
    'name' => 'Button Url',
    'id'   => 'pdf_button_url',
    'type' => 'text',
) );

$cmb->add_field( array(
    'name'    => 'Adress',
    'id'      => 'Contacts_adress',
    'type'    => 'wysiwyg',
    'options' => array(
        'wpautop' => true, 
        'media_buttons' => false, 
        'textarea_rows' => get_option('default_post_edit_rows', 10), 
        'teeny' => true, 
        'tinymce' => true, 
        'quicktags' => false 
    ),
) );


    

}







