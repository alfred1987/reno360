<?php
/*
Plugin Name: Reno CPT
Plugin URI: 
Description: Declares a plugin that will create a custom post type
Version: 1.0
Author: Ninja Alfred
License: GPLv2
*/

add_action( 'init', 'create_homeowner' );
function create_homeowner() {
    register_post_type( 'homeowner',
        array(
            'labels' => array(
                'name' => 'Home Owners',
                'singular_name' => 'Home Owner',
                'add_new' => 'Add New',
                'add_new_item' => 'Add New Home Owner',
                'edit' => 'Edit',
                'edit_item' => 'Edit Home Owner',
                'new_item' => 'New Home Owner',
                'view' => 'View',
                'view_item' => 'View Home Owner',
                'search_items' => 'Search Home Owners',
                'not_found' => 'No Home Owners found',
                'not_found_in_trash' => 'No Home Owners found in Trash',
                'parent' => 'Parent Home Owner'
            ),
 
            'public' => true,
            'menu_position' => 15,
            'supports' => array( 'title', 'editor', 'comments', 'thumbnail', 'custom-fields' ),
            'taxonomies' => array( '' ),
            'menu_icon' => plugins_url( 'images/image.png', __FILE__ ),
            'has_archive' => true
        )
    );
}

function homeowner_metabox( $meta_boxes ) {
	$prefix = 'reno-ho-';

	$meta_boxes[] = array(
		'title' 		=> esc_html__( 'Details' ),
		'post_types' 	=> array( 'homeowner' ),
		'fields' 		=> array(
			array(
				'id' 	=> $prefix . 'location',
				'type' 	=> 'text',
				'name' 	=> esc_html__( 'Location' ),
			),
			array(
				'id' 	=> $prefix . 'unit',
			    'type' 	=> 'text',
			    'name' 	=> esc_html__( 'Unit' ),
			),
			array(
				'id' 	=> $prefix . 'type',
			    'type' 	=> 'text',
			    'name' 	=> esc_html__( 'Type' ),
			),
			array(
				'id' 	=> $prefix . 'year',
			    'type' 	=> 'text',
			    'name' 	=> esc_html__( 'Completed year' ),
			),
		),
	);

	return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'homeowner_metabox' );

function general_unit_type_metabox( $meta_boxes ) {
	$prefix = 'reno-gut-';

	$meta_boxes[] = array(
		'title' 		=> esc_html__( 'Variation of combinations' ),
		'post_types' 	=> array( 'homeowner' ),
		'fields' 		=> array(
			array(
				'id' 	=> $prefix . 'unit-type',
				'type' 	=> 'text',
				'name' 	=> esc_html__( 'Unit type (sft)' ),
				'clone' => true,
			),
			array(
				'id'		=> $prefix . 'prop-info',
				'type'    	=> 'checkbox_list',
			    'name'    	=> 'Property information',
			    'options' 	=> array(
			        '3D'    => '3D',
			        '360' 	=> '360',
			        'Plan'  => 'Plan',
			    ),
			    'select_all_none' => true,
			),
		),
	);

	return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'general_unit_type_metabox' );

function image_3d_metabox( $meta_boxes ) {
	$prefix = 'reno-3d-';

	$meta_boxes[] = array(
		'title' 		=> esc_html__( 'Property information' ),
		'post_types' 	=> array( 'homeowner' ),
		'fields' 		=> array(
			array(
			    'id' 				=> $prefix . '3d-display',
			    'name' 				=> esc_html__( '3D display' ),
			    'type'             	=> 'image_upload',
			    'force_delete'     	=> false,
			    'max_file_uploads' 	=> 1,
			    'max_status'       	=> 'false',
			    'image_size'       	=> 'thumbnail',
			),
			array(
			    'id' 				=> $prefix . '360-display',
			    'name' 				=> esc_html__( '360 display' ),
			    'type'             	=> 'image_upload',
			    'force_delete'     	=> false,
			    'max_file_uploads' 	=> 1,
			    'max_status'       	=> 'false',
			    'image_size'       	=> 'thumbnail',
			),
			array(
			    'id' 				=> $prefix . 'plan-display',
			    'name' 				=> esc_html__( 'Plan display' ),
			    'type'             	=> 'image_upload',
			    'force_delete'     	=> false,
			    'max_file_uploads' 	=> 1,
			    'max_status'       	=> 'false',
			    'image_size'       	=> 'thumbnail',
			),
		),
	);

	return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'image_3d_metabox' );






?>