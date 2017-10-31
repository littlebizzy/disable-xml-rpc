=== Disable XML-RPC ===

Contributors: littlebizzy
Tags: disable xml-rpc, disable, xml-rpc, xmlrpc, xmlrpc.php, xml, rpc, pingbacks, trackbacks, block, deny
Requires at least: 4.4
Tested up to: 4.8
Requires PHP: 7.0
Stable tag: 1.0.2
License: GPLv3
License URI: http://www.gnu.org/licenses/gpl-3.0.html

Completely disables all XML-RPC related functions in WordPress including pingbacks and trackbacks, and helps prevent attacks on the xmlrpc.php file.

== Description ==

Completely disables all XML-RPC related functions in WordPress including pingbacks and trackbacks, and helps prevent attacks on the xmlrpc.php file.

Does not affect the database whatsoever, nor change settings on existing posts/pages. This plugin only affects the main Discussion settings while disabling XML-RPC API functions. If you wish to "clean up" all posts and pages in your database e.g. turn off all their pingbacks and trackbacks or delete the old ones, please use a different plugin for that.

Lastly, it attempts to generate a 403 Denied error for requests to the /xmlrpc.php URL, but does not affect that file or your server in any way.

== Installation ==

1. Upload to  `/wp-content/plugins/` directory
2. Activate the plugin in WP Admin

== Changelog ==

= 1.0.2 =
* minor code tweaks
* updated recommended plugins

= 1.0.1 =
* recommended plugins

= 1.0.0 =
* initial release
