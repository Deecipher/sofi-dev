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

add_action( 'cmb2_init', 'sofi_register_speaker_metabox' );
/**
 * Hook in and add a metabox that only appears on the 'About' page
 */
function sofi_register_speaker_metabox() {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_speaker_';

	/**
	 * Metabox to be displayed on post type speaker
	 */
	$cmb_speaker = new_cmb2_box( array(
		'id'           => $prefix . 'metabox',
		'title'        => __( 'Speaker Details', 'cmb2' ),
		'object_types' => array( 'speaker', ), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
	) );

	$cmb_speaker->add_field( array(
		'name' => __( 'First Name', 'cmb2' ),
		'desc' => __( 'Add the first name of the speaker.', 'cmb2' ),
		'id'   => $prefix . 'f_name',
		'type' => 'text',
	) );

	$cmb_speaker->add_field( array(
		'name' => __( 'Last Name', 'cmb2' ),
		'desc' => __( 'Add the last name of the speaker.', 'cmb2' ),
		'id'   => $prefix . 'l_name',
		'type' => 'text',
	) );

	$cmb_speaker->add_field( array(
		'name' => __( 'Title, Company', 'cmb2' ),
		'desc' => __( 'Add the title of the speaker and associated company / organization. The format should be "Title, Company".', 'cmb2' ),
		'id'   => $prefix . 'title',
		'type' => 'text',
	) );

	$cmb_speaker->add_field( array(
		'name'    => __( 'Description', 'cmb2' ),
		'desc'    => __( 'Add the description of the speaker.', 'cmb2' ),
		'id'      => $prefix . 'desc',
		'type'    => 'wysiwyg',
		'options' => array( 'textarea_rows' => 5, ),
	) );

	$cmb_speaker->add_field( array(
		'name' => __( 'Linkedin', 'cmb2' ),
		'desc' => __( 'Add the speaker linkedin url.', 'cmb2' ),
		'id'   => $prefix . 'linkedin',
		'type' => 'text',
	) );

	$cmb_speaker->add_field( array(
		'name' => __( 'Twitter', 'cmb2' ),
		'desc' => __( 'Add the speaker twitter url.', 'cmb2' ),
		'id'   => $prefix . 'twitter',
		'type' => 'text',
	) );

	$cmb_speaker->add_field( array(
		'name' => __( 'Link', 'cmb2' ),
		'desc' => __( 'Add a link to where users can learn more about the speaker.', 'cmb2' ),
		'id'   => $prefix . 'link',
		'type' => 'text',
	) );

}