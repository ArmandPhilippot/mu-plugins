<?php
/**
 * Reorder Comment Fields
 *
 * This plugin changes comment form fields order.
 *
 * @package   Reorder Comment Fields
 * @link      https://github.com/ArmandPhilippot/mu-plugins
 * @author    Armand Philippot
 * @see       https://www.armandphilippot.com
 *
 * @copyright 2020 Armand Philippot
 * @license   GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name: Reorder Comment Fields
 * Description: Change comment form fields order.
 * Author:      Armand Philippot
 * Author URI:  https://www.armandphilippot.com/
 * License:     GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */

/**
 * Change comment form fields order.
 *
 * @param array $fields Default fields.
 * @return $fields Custom fields order.
 *
 * @since 1.0.0
 */
function apmu_comment_fields_custom_order( $fields ) {
	$comment_field = $fields['comment'];
	$author_field  = $fields['author'];
	$email_field   = $fields['email'];
	$url_field     = $fields['url'];
	unset( $fields['comment'] );
	unset( $fields['author'] );
	unset( $fields['email'] );
	unset( $fields['url'] );
	// The order of fields is the order below, change it as needed.
	$fields['author']  = $author_field;
	$fields['email']   = $email_field;
	$fields['url']     = $url_field;
	$fields['comment'] = $comment_field;
	// Done ordering, now return the fields.
	return $fields;
}
add_filter( 'comment_form_fields', 'apmu_comment_fields_custom_order' );
