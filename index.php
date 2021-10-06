<?php

/*
Plugin Name: Custom WordPress Backend Styles
Plugin URI: https://scottsaunders.design
Description: Modifies the backend of WordPress to make content easier to edit.
Version: 1.0
Author: Scott Saunders
Author URI: https://scottsaunders.design
License: GPLv2 or later
Text Domain: scottsaunders.design
*/
//
function custom_admin_style() {
	
    wp_enqueue_style( 'customPadmin_styles', plugin_dir_url( __FILE__ ) . 'admin.css',true,'1.1','all');
}
add_action('admin_footer', 'custom_admin_style');