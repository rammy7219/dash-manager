<?php
/*
Plugin Name: Dash Manager
Plugin URI: http://web2dezine.com
Description: This plugin helps manage your dashboard.
Author: Wayne Ramshaw
Author URI: http://web2dezine.com/wayneramshaw/
Version: 1.0
License: GPLv2
*/

/*
|-----------------------------------------------------------------------------
| Removes widget from dashboard
|-----------------------------------------------------------------------------
*/

function w2dwp_dash_manager() {
	remove_meta_box( 'dashboard_primary', 'dashboard', post_container_2);
}
add_action( 'wp_dashboard_setup', 'w2dwp_dash_manager' );


/*
|-----------------------------------------------------------------------------
| This inserts a link to Google Analytics in your WP header bar
|-----------------------------------------------------------------------------
*/


function w2dwp_google_analytics() {

		global $wp_admin_bar;
		
		$wp_admin_bar->add_menu( array(
			'id' 	=> 'google_analytics',
			'title' => 'Goole Analytics',
			'href' 	=> 'https://www.google.co.uk/analytics'
		) );
}
add_action( 'wp_before_admin_bar_render', 'w2dwp_google_analytics' );