<?php
/**
 * Clean Head
 *
 * This plugin remove unnecessary links in head element.
 *
 * @package   Clean Head
 * @link      https://github.com/ArmandPhilippot/mu-plugins
 * @author    Armand Philippot
 * @see       https://www.armandphilippot.com
 *
 * @copyright 2020 Armand Philippot
 * @license   GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name: Clean Head
 * Description: Remove unnecessary links in header
 * Author:      Armand Philippot
 * Author URI:  https://www.armandphilippot.com/
 * License:     GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */

defined( 'ABSPATH' ) || die();

/**
 * Clean header
 */
function apmu_clean_head() {
	// Remove WordPress version number.
	remove_action( 'wp_head', 'wp_generator' );
	// Remove discover mechanism used by XML-RPC clients.
	remove_action( 'wp_head', 'rsd_link' );
	// Remove Windows Live Writer.
	remove_action( 'wp_head', 'wlwmanifest_link' );
	// Remove recent comments style.
	global $wp_widget_factory;
	remove_action( 'wp_head', array( $wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style' ) );
	// Disable REST API link tag.
	remove_action( 'wp_head', 'rest_output_link_wp_head', 10 );
	// Disable oEmbed Discovery Links.
	remove_action( 'wp_head', 'wp_oembed_add_discovery_links', 10 );
	// Disable REST API link in HTTP headers.
	remove_action( 'template_redirect', 'rest_output_link_header', 11, 0 );
	// Remove HTML meta tag link rel shortlink.
	remove_action( 'wp_head', 'wp_shortlink_wp_head', 10 );
	// Remove HTTP header shortlink.
	remove_action( 'template_redirect', 'wp_shortlink_header', 11 );
}
add_action( 'init', 'apmu_clean_head' );
