<?php
/**
 * Plugin Name: AIO Agenda
 * Description: This plugin adds the custom post type for agenda and its default metaboxes.
 * Version: 1.0
 * Author: Mike Vecchiarelli - Deecipher
 */

add_action( 'init', 'create_agenda_post_type' );
function create_agenda_post_type() {
	register_post_type( 'agenda',
		array(
			'labels' => array(
				'name' => __( 'Agenda' ),
				'singular_name' => __( 'Day Agenda' )
			),
		'public' => true,
		'has_archive' => false,
		'supports' => array( 'title', 'author', 'thumbnail' )
		)
	);
}

require_once( 'agenda-functions.php' );

?>