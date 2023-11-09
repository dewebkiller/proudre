<?php
/** custom category type */
add_action( 'init', 'creat_property_type' );

function creat_property_type() {
	register_taxonomy(
		'properties_cat',
		'properties',
		array(
			'label' => __( 'Property Type' ),
			'rewrite' => array( 'slug' => 'properties_cat' ),
			'hierarchical' => true,
			'show_admin_column' => true,
	
		)
	);
}

add_action( 'init', 'creat_property_status' );

function creat_property_status() {
	register_taxonomy(
		'properties_status',
		'properties',
		array(
			'label' => __( 'Property Status' ),
			'rewrite' => array( 'slug' => 'properties_status' ),
			'hierarchical' => true,
			'show_admin_column' => true,
	
		)
	);
}

