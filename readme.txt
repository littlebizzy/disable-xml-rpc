=== Disable XML-RPC ===

Contributors: littlebizzy
Donate link: https://www.patreon.com/littlebizzy
Tags: disable, xml-rpc, xmlrpc, pingbacks, trackbacks
Requires at least: 4.4
Tested up to: 5.0
Requires PHP: 7.0
Multisite support: No
Stable tag: 1.1.1
License: GPLv3
License URI: http://www.gnu.org/licenses/gpl-3.0.html
Prefix: DSBXML

Completely disables all XML-RPC related functions in WordPress including pingbacks and trackbacks, and helps prevent attacks on the xmlrpc.php file.

== Description ==

Completely disables all XML-RPC related functions in WordPress including pingbacks and trackbacks, and helps prevent attacks on the xmlrpc.php file.

* [**Join our FREE Facebook group for support**](https://www.facebook.com/groups/littlebizzy/)
* [**Worth a 5-star review? Thank you!**](https://wordpress.org/support/plugin/disable-xml-rpc-littlebizzy/reviews/?rate=5#new-post)
* [Plugin Homepage](https://www.littlebizzy.com/plugins/disable-xml-rpc)
* [Plugin GitHub](https://github.com/littlebizzy/disable-xml-rpc)

#### Current Features ####

Does not affect the database whatsoever, nor change settings on existing posts/pages. This plugin only affects the main Discussion settings while disabling XML-RPC API functions. If you wish to "clean up" all posts and pages in your database e.g. turn off all their pingbacks and trackbacks or delete the old ones, please use a different plugin for that.

Lastly, it attempts to generate a 403 Denied error for requests to the `/xmlrpc.php` URL, but does not affect that file or your server in any way.

#### Compatibility ####

This plugin has been designed for use on [SlickStack](https://slickstack.io) web servers with PHP 7.2 and MySQL 5.7 to achieve best performance. All of our plugins are meant for single site WordPress installations only; for both performance and usability reasons, we highly recommend avoiding WordPress Multisite for the vast majority of projects.

Any of our WordPress plugins may also be loaded as "Must-Use" plugins by using our free [Autoloader](https://github.com/littlebizzy/autoloader) script in the `mu-plugins` directory.

#### Defined Constants ####

    /* Plugin Meta */
    define('DISABLE_NAG_NOTICES', true);

#### Technical Details ####

* Parent Plugin: [**Speed Demon**](https://wordpress.org/plugins/speed-demon-littlebizzy/)
* Disable Nag Notices: [Yes](https://codex.wordpress.org/Plugin_API/Action_Reference/admin_notices#Disable_Nag_Notices)
* Settings Page: No
* PHP Namespaces: No
* Object-Oriented Code: No
* Includes Media (images, icons, etc): No
* Includes CSS: No
* Database Storage: Yes
  * Transients: No
  * WP Options Table: Yes
  * Other Tables: No
  * Creates New Tables: No
  * Creates New WP Cron Jobs: No
* Database Queries: Backend Only (Options API)
* Must-Use Support: [Yes](https://github.com/littlebizzy/autoloader)
* Multisite Support: No
* Uninstalls Data: Yes

#### Disclaimer ####

We released this plugin in response to our managed hosting clients asking for better access to their server, and our primary goal will remain supporting that purpose. Although we are 100% open to fielding requests from the WordPress community, we kindly ask that you keep these conditions in mind, and refrain from slandering, threatening, or harassing our team members in order to get a feature added, or to otherwise get "free" support. The only place you should be contacting us is in our free [**Facebook group**](https://www.facebook.com/groups/littlebizzy/) which has been setup for this purpose, or via GitHub if you are an experienced developer. Thank you!

== Installation ==

1. Upload to `/wp-content/plugins/disable-xml-rpc-littlebizzy`
2. Activate via WP Admin > Plugins
3. Test plugin is working:

After activing the plugin, purge all caches and try loading the `/xmlrpc.php` URI of your website, and it should result in a 403 Denied error in your browser. In addition, no further pingbacks or trackbacks should appear in the Comments section of your WP Admin Dashboard (nor the frontend in the Comments section of your blog posts and custom post types).

== Changelog ==

= 1.1.1 =
* updated recommended plugins

= 1.1.0 =
* tested with WP 5.0

= 1.0.8 =
* updated recommended plugins

= 1.0.7 =
* optimized plugin code
* added warning for Multisite installations
* updated recommended plugins
* updated plugin meta

= 1.0.6 =
* updated recommended plugins

= 1.0.5 =
* better support for `DISABLE_NAG_NOTICES`

= 1.0.4 =
* tested with WP 4.9
* updated plugin meta
* partial support for `DISABLE_NAG_NOTICES`

= 1.0.3 =
* optimized plugin code
* updated recommended plugins
* added rating request notice

= 1.0.2 =
* optimized plugin code
* updated recommended plugins

= 1.0.1 =
* added recommended plugins notice

= 1.0.0 =
* initial release
