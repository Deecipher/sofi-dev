<?php
/**
 * Plugin Name: AIO Newsroom
 * Description: This plugin adds the custom post type for newsroom and its default metaboxes.
 * Version: 1.0
 * Author: Mike Vecchiarelli - Deecipher
 */

add_action( 'init', 'create_newsroom_post_type' );
function create_newsroom_post_type() {
	register_post_type( 'timeline',
		array(
			'labels' => array(
				'name' => __( 'Newsroom' ),
				'singular_name' => __( 'Newsroom Article' )
			),
		'public' => true,
		'has_archive' => false,
		// 'rewrite' => array('slug' => 'timeline'),
		'supports' => array( 'title', 'author', 'thumbnail', 'editor', )
		)
	);
}

// require_once( 'newsroom-functions.php' );

?>