<?php
/**
 * Plugin Name: Dropdown Menu Class
 * Plugin URI:  https://github.com/billerickson/Dropdown-Menu-Class
 * Description: Adds a CSS class of 'menu-item-has-children' to menu items with submenus. No Javascript Required.
 * Version:     1.1.0
 * Author:      Bill Erickson
 * Author URI:  http://www.billerickson.net
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License version 2, as published by the
 * Free Software Foundation.  You may NOT assume that you can use any other
 * version of the GPL.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.
 *
 * @author     Bill Erickson
 * @version    1.1s.0
 * @package    DropdownMenuClass
 * @copyright  Copyright (c) 2013, Bill Erickson
 * @link       https://github.com/billerickson/Dropdown-Menu-Class
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */
 
/**
 * Dropdown Menu Class
 * 
 * @author Bill Erickson
 *
 * @param array $classes
 * @param object $item
 * @param object $args
 * @return array $classes
 */
function be_dropdown_menu_class( $items, $args ) {

	// Added to core in 3.7
	// See: http://core.trac.wordpress.org/changeset/25602
	if( version_compare( get_bloginfo( 'version' ), '3.7', '>=' ) )
		return $items;

	// Allow devs to limit to specific menu
	$allowed_menus = apply_filters( 'dropdown_menu_class_menus', array() );
	if( !empty( $allowed_menus ) && !in_array( $args->theme_location, $allowed_menus ) )
		return $classes;

	$parents = array();
	foreach ( $items as $item ) {
		if ( $item->menu_item_parent && $item->menu_item_parent > 0 ) {
			$parents[] = $item->menu_item_parent;
		}
	}
	
	foreach ( $items as $item ) {
		if ( in_array( $item->ID, $parents ) ) {
			$item->classes[] = 'menu-item-has-children'; 
		}
	}
	
	return $items;
}
add_filter( 'wp_nav_menu_objects', 'be_dropdown_menu_class', 10, 2 );
