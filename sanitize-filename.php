<?php
/**
 * Sanitize Filename
 *
 * This plugin sanitize filenames during upload.
 *
 * @package   Sanitize Filename
 * @link      https://github.com/ArmandPhilippot/mu-plugins
 * @author    Armand Philippot
 * @see       https://www.armandphilippot.com
 *
 * @copyright 2020 Armand Philippot
 * @license   GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name: Sanitize Filename
 * Description: Sanitize filenames during upload.
 * Author:      Armand Philippot
 * Author URI:  https://www.armandphilippot.com/
 * License:     GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */

defined( 'ABSPATH' ) || die();

/**
 * Sanitize the filename
 *
 * @param string $filename The filename.
 * @return string Sanitized filename.
 */
function apmu_sanitize_filename( $filename ) {
	// Remove accents.
	$sanitized_filename = remove_accents( $filename );

	// Replace underscores with hyphens.
	$sanitized_filename = str_replace( '_', '-', $sanitized_filename );

	// Lowercase filename.
	$sanitized_filename = strtolower( $sanitized_filename );

	return $sanitized_filename;
}
add_filter( 'sanitize_file_name', 'apmu_sanitize_filename', 10, 1 );
