<?php
/**
 * Markup Pagination Title
 *
 * This plugin replaces H2 tag for posts pagination.
 *
 * @package   Markup Pagination Title
 * @link      https://github.com/ArmandPhilippot/mu-plugins
 * @author    Armand Philippot
 * @see       https://www.armandphilippot.com
 *
 * @copyright 2020 Armand Philippot
 * @license   GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name: Markup Pagination Title
 * Description: Replace H2 tag for posts pagination.
 * Author:      Armand Philippot
 * Author URI:  https://www.armandphilippot.com/
 * License:     GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */

/**
 * Replace H2 tag for posts pagination.
 *
 * @param string $content Comment Pagination Template HTML.
 */
function apmu_sanitize_pagination( $content ) {
	$content = preg_replace( '/<h2(.*)>(.*)<\/h2>/', '<p\1>\2</p>', $content );
	return $content;
}
add_action( 'navigation_markup_template', 'apmu_sanitize_pagination' );
