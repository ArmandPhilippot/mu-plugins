<?php
/**
 * Gravatar Alt
 *
 * This plugin adds alt and title tag value for Gravatars.
 *
 * @package   Gravatar Alt
 * @link      https://github.com/ArmandPhilippot/mu-plugins
 * @author    Armand Philippot
 * @see       https://www.armandphilippot.com
 *
 * @copyright 2020 Armand Philippot
 * @license   GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name: Gravatar Alt
 * Description: Add alt and title tag value for Gravatars.
 * Author:      Armand Philippot
 * Author URI:  https://www.armandphilippot.com/
 * License:     GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */

/**
 * Add alt and title tag value for Gravatars
 *
 * @param string $apmu_gravatar HTML template for Gravatar.
 */
function apmu_gravatar_alt( $apmu_gravatar ) {
	if ( have_comments() ) {
		$alt = get_comment_author();
	} else {
		$alt = get_the_author_meta( 'display_name' );
	}

	$apmu_gravatar = str_replace( 'alt=\'\'', 'alt=\'Avatar - ' . $alt . '\' title=\'Gravatar - ' . $alt . '\'', $apmu_gravatar );
	return $apmu_gravatar;
}
add_filter( 'get_avatar', 'apmu_gravatar_alt' );
