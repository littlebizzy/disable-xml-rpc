<?php
/*
Plugin Name: Disable XML-RPC
Plugin URI: https://www.littlebizzy.com/plugins/disable-xml-rpc
Description: Disables all XML-RPC functions
Version: 2.4.0
Requires PHP: 7.0
Tested up to: 6.9
Author: LittleBizzy
Author URI: https://www.littlebizzy.com
License: GPLv3
License URI: http://www.gnu.org/licenses/gpl-3.0.html
Update URI: false
GitHub Plugin URI: littlebizzy/disable-xml-rpc
Primary Branch: master
Text Domain: disable-xml-rpc
*/

// prevent direct access
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// override wordpress.org with git updater
add_filter( 'gu_override_dot_org', function( $overrides ) {
    $overrides[] = 'disable-xml-rpc/disable-xml-rpc.php';
    return $overrides;
}, 999 );

// fail fast on xmlrpc.php before wordpress fully loads (when used as MU plugin)
if ( ! empty( $_SERVER['REQUEST_URI'] ) && strpos( $_SERVER['REQUEST_URI'], 'xmlrpc.php' ) !== false ) {
	status_header( 403 );
	exit;
}

// disable xml-rpc completely
add_filter( 'xmlrpc_enabled', '__return_false' );

// disable all xml-rpc methods to prevent re-registration by plugins
add_filter( 'xmlrpc_methods', '__return_empty_array' );

// immediately terminate any xml-rpc requests
add_action( 'xmlrpc_call', function() {
	status_header( 403 );
	exit;
} );

// block direct access to xmlrpc.php
add_action( 'init', function() {
	if ( isset( $_SERVER['SCRIPT_FILENAME'] ) && basename( $_SERVER['SCRIPT_FILENAME'] ) === 'xmlrpc.php' ) {
		status_header( 403 );
		exit;
	}
}, 1 );

// remove rsd link in head that exposes xmlrpc.php
remove_action( 'wp_head', 'rsd_link' );

// remove pingback url from headers
add_filter( 'wp_headers', function( $headers ) {
	unset( $headers['X-Pingback'] );
	return $headers;
} );

// disable pingbacks and trackbacks by default
add_filter( 'pre_option_default_ping_status', '__return_zero' );
add_filter( 'pre_option_default_pingback_flag', '__return_zero' );

// hide pingback and trackback options on the discussion settings page
add_action( 'admin_enqueue_scripts', function( $hook ) {
	if ( $hook === 'options-discussion.php' ) {
		wp_register_style( 'disable-xmlrpc-style', false );
		wp_enqueue_style( 'disable-xmlrpc-style' );
		wp_add_inline_style( 'disable-xmlrpc-style', '
			.form-table td label[for="default_pingback_flag"],
			.form-table td label[for="default_pingback_flag"] + br,
			.form-table td label[for="default_ping_status"],
			.form-table td label[for="default_ping_status"] + br {
				display: none;
			}
		' );
	}
} );

// Ref: ChatGPT
