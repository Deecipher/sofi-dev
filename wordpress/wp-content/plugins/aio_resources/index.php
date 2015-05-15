<?php
/**
 * Plugin Name: AIO Resources
 * Description: This plugin adds the custom post type for resources and their default metaboxes.
 * Version: 1.0
 * Author: Mike Vecchiarelli - Deecipher
 */

add_action( 'init', 'create_resource_post_type' );
function create_resource_post_type() {
	register_post_type( 'resource',
		array(
			'labels' => array(
				'name' => __( 'Resources' ),
				'singular_name' => __( 'Resource' )
			),
		'public' => true,
		'has_archive' => true,
		'taxonomies' => array('category'),
		'supports' => array( 'title', 'author', 'thumbnail' )
		)
	);
}

require_once( 'resource-functions.php' );

?>