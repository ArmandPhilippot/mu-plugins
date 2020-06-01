<?php
/**
 * Remove Block CSS
 *
 * This plugin removes Gutenberg styles if it's front-end.
 *
 * @package   Remove Block CSS
 * @link      https://github.com/ArmandPhilippot/mu-plugins
 * @author    Armand Philippot
 * @see       https://www.armandphilippot.com
 *
 * @copyright 2020 Armand Philippot
 * @license   GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name: Remove Block CSS
 * Description: Dequeue Gutenberg styles if it's front-end.
 * Author:      Armand Philippot
 * Author URI:  https://www.armandphilippot.com/
 * License:     GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */

/**
 * Dequeue Gutenberg styles if it's front-end
 *
 * @since 1.0.0
 */
function apmu_remove_block_css() {
	if ( ! is_admin() ) {
		wp_dequeue_style( 'wp-block-library' );
	}
}
add_action( 'wp_enqueue_scripts', 'apmu_remove_block_css' );
