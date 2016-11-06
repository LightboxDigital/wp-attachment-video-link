<?php
/**
 * Rsize testing class.
 *
 * @since             1.0.0
 * @package           WP_Attachment_Video_Link
 */

/**
 * Main attachment video tester.
 */
class ResizeTest extends WP_UnitTestCase {

	/**
	 * Setup WordPress unit testing factories.
	 */
	function __construct() {
		$this->post = new WP_UnitTest_Factory_For_Post( $this );
		$this->attachment = new WP_UnitTest_Factory_For_Attachment( $this );
	}

	/**
	 * Set video URL on attachment
	 */
	function test_video_url_meta() {
		$image = $this->attachment->create_upload_object( dirname( dirname( __FILE__ ) ) . '/tests/images/test-image-large.png' );

		$url = 'https://www.youtube.com/watch?v=fzQ6gRAEoy0';

		update_post_meta( $image, 'wp-attachment-video-link', sanitize_text_field( $url ) );

		$this->assertEquals( ld_get_attachment_video( $image ), $url );
	}
}
