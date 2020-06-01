<?php
/**
 * Disable title using category description
 *
 * Prevent the use of category description as title attribute.
 *
 * @package   Disable Cat-Desc-Title
 * @link      https://github.com/ArmandPhilippot/mu-plugins
 * @author    Armand Philippot
 * @see       https://www.armandphilippot.com
 *
 * @copyright 2020 Armand Philippot
 * @license   GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name: Disable title using category description
 * Description: Prevent the use of category description as title attribute.
 * Author:      Armand Philippot
 * Author URI:  https://www.armandphilippot.com/
 * License:     GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */

defined( 'ABSPATH' ) || die();

/**
 * Prevent the category widget from using the category description as title attribute.
 *
 * @param array $cat_args Category arguments.
 * @return array $cat_args Category arguments filtered.
 */
function apmu_disable_cat_desc_title( $cat_args ) {
	$cat_args['use_desc_for_title'] = 0;
	return $cat_args;
}
add_filter( 'widget_categories_args', 'apmu_disable_cat_desc_title' );

