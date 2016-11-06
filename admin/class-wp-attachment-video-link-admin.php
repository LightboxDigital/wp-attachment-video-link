<?php
/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://lightboxdigital.co.uk
 * @since      1.0.0
 *
 * @package    WP_Attachment_Video_Link
 * @subpackage WP_Attachment_Video_Link/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    WP_Attachment_Video_Link
 * @subpackage WP_Attachment_Video_Link/admin
 * @author     Warren Bickley <warren@lightboxdigital.co.uk>
 */
class WP_Attachment_Video_Link_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param    string $plugin_name   The name of this plugin.
	 * @param    string $version       The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Add the field input to the attachment editor
	 *
	 * @param  array $fields	 Fields to add to the editor.
	 * @param  post  $attachment Post object of the attachment.
	 * @return array Modified fields array
	 */
	public function attachment_fields( $fields, $attachment ) {
		$fields['video'] = array(
			'label' => __( 'Video URL', 'lightbox' ),
			'input' => 'text',
			// Get the posts current video value.
			'value' => get_post_meta( $attachment->ID, 'wp-attachment-video-link', true ),
		);

		// Return the modified fields.
		return $fields;
	}

	/**
	 * Save the video fields inputted URL
	 *
	 * @param  post  $attachment Post object of the attachment.
	 * @param  array $fields	 Array of field data.
	 * @return post	 Attachment
	 */
	public function save_fields( $attachment, $fields ) {
		if ( isset( $fields['video'] ) ) {
			// Update it against the attachment.
			update_post_meta( $attachment['ID'], 'wp-attachment-video-link', sanitize_text_field( $fields['video'] ) );
		} else {
			// Otherwise ensure no video post meta exists.
			delete_post_meta( $attachment['ID'], 'wp-attachment-video-link' );
		}

		// Return the attachment.
		return $attachment;
	}
}
