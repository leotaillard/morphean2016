<?php
/**
 * Every functions that morphean's theme needs
 *
 * @package FoundationPress
 * @since FoundationPress 2.2.0
 */

/* Disable WordPress Admin Bar for all users but admins. */
show_admin_bar(false);


/* Add options page for the plugin acf. */

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Morphean Settings',
		'menu_title'	=> 'Morphean',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	
}
