<?php
/*
Plugin Name: Mime Types Extended
Plugin URI: http://www.staude.net/wordpress/plugins/MimeTypesExtended
Description: This Plugin extends the allowed mimetypes from the media upload dialog 
Author: Frank Staude
Version: 0.11
Text Domain: mime_types_extended
Domain Path: languages
Author URI: http://www.staude.net/
Compatibility: WordPress 4.0
*/

/*  Copyright 2012-2014  Frank Staude  (email : frank@staude.net)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

if (!class_exists( 'mime_types_extended' ) ) {

    include_once dirname( __FILE__ ) .'/class-mime-types-extended.php';

    /**
     * Delete options on plugin uninstall
     */
    function mime_types_extended_uninstall() {
        global $wpdb;
        $wpdb->query( "DELETE FROM $wpdb->options WHERE option_name LIKE 'mime_types_extended_settings_%';" );
    }

    register_uninstall_hook( __FILE__,  'mime_types_extended_uninstall' );

    $plugin = plugin_basename(__FILE__);
    add_filter( "plugin_action_links_$plugin", array( 'mime_types_extended', 'plugin_settings_link') );

    $mime_types_extended = new mime_types_extended();

}
