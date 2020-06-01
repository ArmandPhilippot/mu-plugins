<?php
/**
 * Submit Button Markup
 *
 * This plugin replaces input element with button element in comment form.
 *
 * @package   Submit Button Markup
 * @link      https://github.com/ArmandPhilippot/mu-plugins
 * @author    Armand Philippot
 * @see       https://www.armandphilippot.com
 *
 * @copyright 2020 Armand Philippot
 * @license   GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name: Submit Button Markup
 * Description: Replaces input element with button element in comment form.
 * Author:      Armand Philippot
 * Author URI:  https://www.armandphilippot.com/
 * License:     GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */

/**
 * Modify HTML markup for the submit button of comment form.
 *
 * @param string $button HTML markup used to render the submit button.
 * @return string HTML output modified.
 *
 * @since 1.0.0
 */

function apmu_muload_textdomain() {
	load_muplugin_textdomain( 'APMU', basename( dirname( __FILE__ ) ) . '/languages/' );
}
add_action( 'muplugins_loaded', 'apmu_muload_textdomain' );

function apmu_comment_form_submit_button( $button ) {
	$button =
	'<button class="submit-btn" type="submit">' . __( 'Leave a comment', 'APMU' ) . '</button>';
	return $button;
}
add_filter( 'comment_form_submit_button', 'apmu_comment_form_submit_button' );
