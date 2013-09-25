Dropdown Menu Class
===================

Adds a CSS class of 'has-submenu' to menu items with submenus. This does not use Javascript, like Superfish. This is pure PHP.

It's recommended that you limit the scope of the plugin to the specific theme locations you want to target using the `dropdown_menu_class_menus` filter. This will reduce unnecessary database queries.

Customization Filters
-------------

`dropdown_menu_class_menus` - An array of theme locations. If empty (default), the plugin will run on all menus.
`dropdown_menu_class_args` - Menu query args. Useful if you want to change the conditions under which an item gets the class (ie: only top level menu items with submenus).
