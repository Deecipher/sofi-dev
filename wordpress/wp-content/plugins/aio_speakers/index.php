<?php
/**
 * Plugin Name: AIO Speakers
 * Description: This plugin adds the custom post type for speakers and their default metaboxes.
 * Version: 1.0
 * Author: Mike Vecchiarelli - Deecipher
 */

add_action( 'init', 'create_speaker_post_type' );
function create_speaker_post_type() {
	register_post_type( 'speaker',
		array(
			'labels' => array(
				'name' => __( 'Speakers' ),
				'singular_name' => __( 'Speaker' )
			),
		'public' => true,
		'has_archive' => true,
		'supports' => array( 'title', 'author', 'thumbnail' )
		)
	);
}

require_once( 'speaker-functions.php' );

?>