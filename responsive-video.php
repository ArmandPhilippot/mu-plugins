<?php
/**
 * Responsive Video
 *
 * This plugin adds a container to video embed.
 *
 * @package   Responsive Video
 * @link      https://github.com/ArmandPhilippot/mu-plugins
 * @author    Armand Philippot
 * @see       https://www.armandphilippot.com
 *
 * @copyright 2020 Armand Philippot
 * @license   GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name: Responsive Video
 * Description: Adds a container to video embed.
 * Author:      Armand Philippot
 * Author URI:  https://www.armandphilippot.com/
 * License:     GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */

/**
 * Responsive video.
 *
 * @param string $html The default output HTML for video.
 * @return string HTML Template for video with a container.
 *
 * @since 1.0.0
 */
function apmu_embed_html( $html ) {
	$html = '<div class="video-container">' . $html . '</div>';
	return $html;
}
add_filter( 'embed_oembed_html', 'apmu_embed_html', 10, 3 );
add_filter( 'video_embed_html', 'apmu_embed_html' );
