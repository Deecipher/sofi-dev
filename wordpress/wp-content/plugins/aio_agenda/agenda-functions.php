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

add_action( 'cmb2_init', 'sofi_register_agenda_single_metabox' );
/**
 * Hook in and add a metabox to demonstrate repeatable grouped fields
 */
function sofi_register_agenda_single_metabox() {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_agenda_single_';

	/**
	 * Metabox to be displayed on post type agenda
	 */
	$cmb_agenda = new_cmb2_box( array(
		'id'           => $prefix . 'metabox',
		'title'        => __( 'Agenda Day Detail', 'cmb2' ),
		'object_types' => array( 'agenda', ), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
	) );

	$cmb_agenda->add_field( array(
		'name' => __( 'Agenda Day', 'cmb2' ),
		'desc' => __( 'Add corresponding day this agenda coincides with. For example, you could enter "1", "2", etc. This is used to order the agenda.', 'cmb2' ),
		'id'   => $prefix . 'day',
		'type' => 'text',
	) );
}

add_action( 'cmb2_init', 'sofi_register_agenda_metabox' );
/**
 * Hook in and add a metabox to demonstrate repeatable grouped fields
 */
function sofi_register_agenda_metabox() {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_agenda_';

	/**
	 * Repeatable Field Groups
	 */
	$cmb_group = new_cmb2_box( array(
		'id'           => $prefix . 'metabox',
		'title'        => __( 'Daily Agenda', 'cmb2' ),
		'object_types' => array( 'agenda', ),
	) );

	// $group_field_id is the field id string, so in this case: $prefix . 'demo'
	$group_field_id = $cmb_group->add_field( array(
		'id'          => $prefix . 'agenda_item',
		'type'        => 'group',
		'description' => __( 'Add agenda entries below.', 'cmb2' ),
		'options'     => array(
			'group_title'   => __( 'Agenda Item {#}', 'cmb2' ), // {#} gets replaced by row number
			'add_button'    => __( 'Add Another Entry', 'cmb2' ),
			'remove_button' => __( 'Remove Entry', 'cmb2' ),
			'sortable'      => true, // beta
		),
	) );

	/**
	 * Group fields works the same, except ids only need
	 * to be unique to the group. Prefix is not needed.
	 *
	 * The parent field's id needs to be passed as the first argument.
	 */
	$cmb_group->add_group_field( $group_field_id, array(
		'name'       => __( 'Time & Location', 'cmb2' ),
		'description' => __( 'Write the time for the event followed by the location. The format should be as follows: "08:30-08:50 am – Sala 500".', 'cmb2' ),
		'id'         => 'time',
		'type'       => 'text',
		// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
	) );

	$cmb_group->add_group_field( $group_field_id, array(
		'name'        => __( 'Title', 'cmb2' ),
		'description' => __( 'Write title for this portion of the agenda.', 'cmb2' ),
		'id'          => 'title',
		'type'        => 'text',
	) );

	$cmb_group->add_group_field( $group_field_id, array(
		'name'        => __( 'Presenter(s)', 'cmb2' ),
		'description' => __( 'Write names of the perseters and their respective titles and companies / organizations. The format should be as follows: "Ann Miles – Director, Financial Inclusion, The MasterCard Foundation".', 'cmb2' ),
		'id'          => 'pres',
		'type'        => 'textarea',
		'options' => array( 'textarea_rows' => 5, ),
	) );

	$cmb_group->add_group_field( $group_field_id, array(
		'name'        => __( 'Description', 'cmb2' ),
		'description' => __( 'Offer a description of what is happening for this portion of the agenda.', 'cmb2' ),
		'id'          => 'desc',
		'type'        => 'textarea',
		'options' => array( 'textarea_rows' => 5, ),
	) );

}

// THIS IF FOR THE AGENDA PAGE - SO THERE IS A PLACE TO HAVE AN AGENDA DOWNLOAD
add_action( 'cmb2_init', 'sofi_register_agenda_page_metabox' );
/**
 * Hook in and add a metabox that only appears on the 'About' page
 */
function sofi_register_agenda_page_metabox() {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_agenda_page_';

	/**
	 * Metabox to be displayed on post type speaker
	 */
	$cmb_speaker = new_cmb2_box( array(
		'id'           => $prefix . 'metabox',
		'title'        => __( 'Agenda Download', 'cmb2' ),
		'object_types' => array( 'page', ), // Post type
		'show_on'      => array( 'key' => 'page-template', 'value' => 'page-agenda.php' ),
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
	) );

	$cmb_speaker->add_field( array(
		'name' => __( 'Download Link', 'cmb2' ),
		'desc' => __( 'Add / upload the link of the agenda download here.', 'cmb2' ),
		'id'   => $prefix . 'dl',
		'type' => 'file',
	) );
}