Dropdown Menu Class
===================

Adds a CSS class of 'menu-item-has-children' to menu items with submenus. This does not use Javascript, like Superfish. This is pure PHP.

Note: This functionality was recently added to WordPress core, and is expected to be released in 3.7. The code in this plugin only runs if your version is older than 3.7 (ex: 3.6.1), so once you update WordPress you'll seamlessly be using the WordPress core version instead. No need to update your theme's styles or to disable this plugin.

It's recommended that you limit the scope of the plugin to the specific theme locations you want to target using the `dropdown_menu_class_menus` filter. This will reduce unnecessary database queries.

Customization Filters
-------------

`dropdown_menu_class_menus`
An array of theme locations. If empty (default), the plugin will run on all menus.
Example: https://gist.github.com/billerickson/6700212
