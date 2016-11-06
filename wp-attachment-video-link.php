<?php
/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://lightboxdigital.co.uk
 * @since             1.0.0
 * @package           WP_Attachment_Video_Link
 *
 * @wordpress-plugin
 * Plugin Name:       Attachment Video Link
 * Plugin URI:        https://github.com/LightboxDigital/wp-attachment-video-link
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Lightbox Digital
 * Author URI:        https://lightboxdigital.co.uk
 * License:           MIT
 * License URI:       https://opensource.org/licenses/MIT
 * Text Domain:       wp-attachment-video-link
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

// If the class already exists, abort.
if ( class_exists( 'WP_Attachment_Video_Link' ) ) {
	return;
}

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wp-attachment-video-link.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wp_attachment_video_link() {
	$plugin = new WP_Attachment_Video_Link();
	$plugin->run();
}

run_wp_attachment_video_link();
