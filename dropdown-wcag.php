<?php
/**
 * Dropdown WCAG
 *
 * This plugin adds WCAG 2.0 Attributes for Dropdown Menus.
 *
 * @package   Dropdown WCAG
 * @link      https://github.com/ArmandPhilippot/mu-plugins
 * @author    Armand Philippot
 * @see       https://www.armandphilippot.com
 *
 * @copyright 2020 Armand Philippot
 * @license   GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name: Dropdown WCAG
 * Description: Adds WCAG 2.0 Attributes for Dropdown Menus.
 * Author:      Armand Philippot
 * Author URI:  https://www.armandphilippot.com/
 * License:     GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */

/**
 * WCAG 2.0 Attributes for Dropdown Menus
 * Add [aria-haspopup] and [aria-expanded] to menu items that have children.
 *
 * @param array  $att Attributes list.
 * @param object $item Nav menu item.
 * @param object $args Nav menu args.
 * @param int    $depth Depth.
 */
function apmu_nav_menu_link_attributes( $att, $item, $args, $depth ) {
	$item_has_children = in_array( 'menu-item-has-children', $item->classes, true );
	if ( $item_has_children ) {
		$att['aria-haspopup'] = 'true';
		$att['aria-expanded'] = 'false';
	}

	return $att;
}
add_filter( 'nav_menu_link_attributes', 'apmu_nav_menu_link_attributes', 10, 4 );
