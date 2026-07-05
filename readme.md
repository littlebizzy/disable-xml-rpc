# Disable XML-RPC

Disables all XML-RPC functions

## What it does

- blocks direct requests to `xmlrpc.php`
- blocks direct requests to `wp-trackback.php`
- disables XML-RPC authentication and methods
- removes the RSD link from the site header
- removes the `X-Pingback` header
- disables pingback and trackback defaults for new content
- hides pingback and trackback defaults on the Discussion settings page

## What it does not do

- does not disable the REST API or `wp-json`
- does not disable the WooCommerce REST API
- does not modify Nginx, Apache, or other server config
- does not retroactively close pingbacks or trackbacks on existing content

## Changelog

### 2.5.1
- clarified the XML-RPC dispatch fallback comment
- runs the XML-RPC dispatch fallback at late priority `999` with zero accepted args
- blocks direct requests to `wp-trackback.php`

### 2.5.0
- `Tested up to:` bumped to 7.0
- tightened fail-fast `REQUEST_URI` handling to parse only the request path before matching `xmlrpc.php`
- runs XML-RPC disabling filters at late priority `999` to avoid later method re-registration

### 2.4.0
- added fail-fast XML-RPC blocking via `REQUEST_URI` detection when used as an MU plugin
- blocks `xmlrpc.php` before WordPress fully loads to reduce CPU usage under attack
- improves compatibility with proxies and rewritten server paths
- strengthens XML-RPC shutdown with layered transport, file, protocol, and request-level protection

### 2.3.0
- added protocol-level hardening by disabling all XML-RPC methods via `xmlrpc_methods` filter
- prevents plugins from re-registering XML-RPC endpoints after XML-RPC is disabled
- strengthens XML-RPC lockdown without affecting REST API or wp-json

### 2.2.0
- replaced raw `header()` calls with WordPress-native `status_header()` for proper HTTP status handling
- `Tested up to:` bumped to 6.9

### 2.1.0
- removed redundant `xmlrpc_methods` filter
- fixed "dummy" CSS class to hide discussion settings reliably
- improved code formatting and hook order
- added `Tested up to` plugin header
- added `Update URI` plugin header
- added `Text Domain` plugin header

### 2.0.2
- added `Requires PHP` plugin header
- improved `gu_override_dot_org` snippet

### 2.0.1
- fixed `gu_override_dot_org` snippet

### 2.0.0
- completely refactored to WordPress standards
- several new snippets to further disable XML-RPC calls and methods
- support for Git Updater
- support for PHP 7.0 to 8.3
- support for Multisite

### 1.1.1
- updated recommended plugins

### 1.1.0
- tested with WP 5.0

### 1.0.8
- updated recommended plugins

### 1.0.7
- optimized plugin code
- added warning for Multisite installations
- updated recommended plugins
- updated plugin meta

### 1.0.6
- updated recommended plugins

### 1.0.5
- better support for `DISABLE_NAG_NOTICES`

### 1.0.4
- tested with WP 4.9
- updated plugin meta
- partial support for `DISABLE_NAG_NOTICES`

### 1.0.3
- optimized plugin code
- updated recommended plugins
- added rating request notice

### 1.0.2
- optimized plugin code
- updated recommended plugins

### 1.0.1
- added recommended plugins notice

### 1.0.0
- initial release
