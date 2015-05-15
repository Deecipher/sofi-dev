<?php
/**
 * Include and setup custom metaboxes and fields. (make sure you copy this file to outside the CMB directory)
 *
 * Replaced all instances of 'yourprefix_' with 'sofi_' for this project's prefix.
 * http://nacin.com/2010/05/11/in-wordpress-prefix-everything/
 *
 * @category YourThemeOrPlugin
 * @package  Metaboxes
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     https://github.com/WebDevStudios/CMB2
 */

/**
 * Get the bootstrap! If using the plugin from wordpress.org, REMOVE THIS!
 */

// if ( file_exists( dirname( __FILE__ ) . '/cmb2/init.php' ) ) {
// 	require_once dirname( __FILE__ ) . '/cmb2/init.php';
// } elseif ( file_exists( dirname( __FILE__ ) . '/CMB2/init.php' ) ) {
// 	require_once dirname( __FILE__ ) . '/CMB2/init.php';
// }

// add_action( 'cmb2_init', 'sofi_register_newsroom_metabox' );
// /**
//  * Hook in and add a metabox that only appears on the 'About' page
//  */
// function sofi_register_newsroom_metabox() {

// 	// Start with an underscore to hide fields from custom fields list
// 	$prefix = '_newsroom_';

// 	/**
// 	 * Metabox to be displayed on post type newsroom
// 	 */
// 	$cmb_newsroom = new_cmb2_box( array(
// 		'id'           => $prefix . 'metabox',
// 		'title'        => __( 'newsroom Details', 'cmb2' ),
// 		'object_types' => array( 'timeline', ), // Post type
// 		'context'      => 'normal',
// 		'priority'     => 'high',
// 		'show_names'   => true, // Show field names on the left
// 	) );

// 	$cmb_newsroom->add_field( array(
// 		'name' => __( 'Title', 'cmb2' ),
// 		'desc' => __( 'Add the title of the newsroom article.', 'cmb2' ),
// 		'id'   => $prefix . 'title',
// 		'type' => 'text',
// 	) );

// 	$cmb_newsroom->add_field( array(
// 		'name' => __( 'Body Content', 'cmb2' ),
// 		'desc' => __( 'Add the content the newsroom article.', 'cmb2' ),
// 		'id'   => $prefix . 'content',
// 		'type' => 'wysiwyg',
// 		'options' => array( 'textarea_rows' => 15, ),
// 	) );

// }