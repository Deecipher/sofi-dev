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

add_action( 'cmb2_init', 'sofi_register_resource_metabox' );
/**
 * Hook in and add a metabox that only appears on the 'About' page
 */
function sofi_register_resource_metabox() {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_resource_';

	/**
	 * Metabox to be displayed on post type resource
	 */
	$cmb_resource = new_cmb2_box( array(
		'id'           => $prefix . 'metabox',
		'title'        => __( 'Resource Details', 'cmb2' ),
		'object_types' => array( 'resource', ), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
	) );

	$cmb_resource->add_field( array(
		'name' => __( 'Resource Type', 'cmb2' ),
		'desc' => __( 'Select the type of resource you would like to add.', 'cmb2' ),
		'id'   => $prefix . 'type',
		'type'             => 'select',
		'show_option_none' => true,
		'default'          => 'custom',
		'options'          => array(
			'doc' => __( 'Document', 'cmb' ),
			'vid'   => __( 'Video', 'cmb' ),
		),
	) );

	$cmb_resource->add_field( array(
		'name' => __( 'Document', 'cmb2' ),
		'desc' => __( 'Upload a document or or enter a URL.', 'cmb2' ),
		'id'   => $prefix . 'doc',
		'type' => 'file',
	) );

	$cmb_resource->add_field( array(
		'name' => __( 'Video URL', 'cmb2' ),
		'desc' => __( 'Add the url of the video resource.', 'cmb2' ),
		'id'   => $prefix . 'video',
		'type' => 'oembed',
	) );
}