<?php
/**
 * Remove Login Errors
 *
 * This plugin remove errors on the login page.
 *
 * @package   Remove Login Errors
 * @link      https://github.com/ArmandPhilippot/mu-plugins
 * @author    Armand Philippot
 * @see       https://www.armandphilippot.com
 *
 * @copyright 2020 Armand Philippot
 * @license   GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name: Remove Login Errors
 * Description: Remove errors on the login page.
 * Author:      Armand Philippot
 * Author URI:  https://www.armandphilippot.com/
 * License:     GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */

defined( 'ABSPATH' ) || die();

if ( ! function_exists( 'ap_remove_login_error_messages' ) ) {
	/**
	 * Remove the authentication error message
	 *
	 * @param string $val Text to display.
	 * @return null
	 */
	function apmu_remove_login_error_messages( $val ) {
		$val = '';
		return null;
	}
}
add_filter( 'login_errors', 'apmu_remove_login_error_messages' );
