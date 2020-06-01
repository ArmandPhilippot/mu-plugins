<?php
/**
 * Remove Version
 *
 * This plugin remove version number in RSS Feed and in CSS & JS links.
 *
 * @package   Remove Version
 * @link      https://github.com/ArmandPhilippot/mu-plugins
 * @author    Armand Philippot
 * @see       https://www.armandphilippot.com
 *
 * @copyright 2020 Armand Philippot
 * @license   GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name: Remove Version
 * Description: Remove version number in RSS Feed and in CSS & JS links.
 * Author:      Armand Philippot
 * Author URI:  https://www.armandphilippot.com/
 * License:     GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */

defined( 'ABSPATH' ) || die();

/**
 * Remove WordPress version number in RSS Feed
 */
function apmu_remove_wp_version_feed() {
	return '';
}
add_filter( 'the_generator', 'apmu_remove_wp_version_feed' );

/**
 * Remove included css/js version numbers
 *
 * @param string $src URL with version.
 * @return string URL without version.
 */
function apmu_remove_version_css_js( $src ) {
	if ( strpos( $src, 'ver=' ) ) {
		$src = remove_query_arg( 'ver', $src );
	}
	return $src;
}
add_filter( 'style_loader_src', 'apmu_remove_version_css_js', 15, 1 );
add_filter( 'script_loader_src', 'apmu_remove_version_css_js', 15, 1 );
