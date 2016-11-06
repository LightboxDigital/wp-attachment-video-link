<?php
/**
 * The file that defines plugin global public functions.
 *
 * @link       https://lightboxdigital.co.uk
 * @since      1.0.0
 *
 * @package    WP_Attachment_Video_Link
 * @subpackage WP_Attachment_Video_Link/public
 */

/**
 * Get video URL for corresponding attachment ID.
 *
 * @param  integer $id ID of attachment.
 * @return string Video URL for attachment, or false.
 */
function ld_get_attachment_video( $id ) {
	$url = get_post_meta( (int) $id, 'wp-attachment-video-link', true );
	return $url ? $url : false;
}
