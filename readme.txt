=== Disable XML-RPC ===

Contributors: LittleBizzy
Tags: disable xml-rpc, xml-rpc, disable, pingbacks, trackbacks, xml, rpc, block, ddos, security
Requires at least: 4.4
Tested up to: 4.8
Stable tag: 1.0.0
License: GPLv3 or later
License URI: http://www.gnu.org/licenses/gpl-3.0.html

Completely disables all XML-RPC related functions in WordPress including pingbacks and trackbacks, and helps prevent attacks on the xmlrpc.php file.

== Description ==

Completely disables all XML-RPC related functions in WordPress including pingbacks and trackbacks, and helps prevent attacks on the xmlrpc.php file.

Does not affect the database whatsoever, nor change settings on existing posts/pages. This plugin only affects the main Discussion settings while disabling XML-RPC API functions. If you wish to "clean up" all posts and pages in your database e.g. turn off all their pingbacks and trackbacks or delete the old ones, please use a different plugin for that.

Lastly, it attempts to generate a 403 Denied error for requests to the /xmlrpc.php URL, but does not affect that file or your server in any way.

== Installation ==

1. Upload "Disable XML-RPC LittleBizzy" folder to the "/wp-content/plugins/" directory
2. Activate the plugin through the "Plugins" menu in WordPress

== Changelog ==

= 1.0.0 =
* initial release
