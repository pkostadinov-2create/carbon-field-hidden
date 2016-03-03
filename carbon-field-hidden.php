<?php
/*
Plugin Name: Carbon Field: Hidden
Description: Extends base Carbon fields with a Hidden field. 
Version: 1.0.0
*/

/**
 * Set text domain
 * @see https://codex.wordpress.org/Function_Reference/load_plugin_textdomain
 */
load_plugin_textdomain('carbon-field-hidden', false, dirname( plugin_basename(__FILE__) ) . '/languages/'); 

/**
 * Hook field initialization
 */
add_action('after_setup_theme', 'crb_init_carbon_field_hidden', 15);
function crb_init_carbon_field_hidden() {
	if (class_exists("Carbon_Fields\\Field\\Field")) {
		include_once dirname(__FILE__) . '/Hidden_Field.php';
	}
}