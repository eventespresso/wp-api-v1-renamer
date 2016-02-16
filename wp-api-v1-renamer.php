<?php
/*
Plugin Name: WP API v1 Renamer
Plugin URI: http://akismet.com/
Description: Allows WP API v1 and v2 to run simultaneously. Moves the v1 API's endpoint to `mysite.com/wp-json-old` and leaves v2 of the api at `mysite.com/wp-json`
Version: 0.0.1
Author: Event Espresso (Mike Nelson)
Author URI:  http://www.eventespresso.com
License: GPLv2 or later
*/

function wp_api_renamer_change_old_api_prefix( $old_prefix ) { 
	return 'wp-json-old';
}
add_filter( 'json_url_prefix', 'wp_api_renamer_change_old_api_prefix');