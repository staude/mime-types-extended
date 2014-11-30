<?php

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

class mime_types_extended {
    
    /**
     * Constructor
     * 
     * Register all actions and filters
     */
    function __construct() {
        add_action( 'plugins_loaded',   array( 'mime_types_extended', 'load_translations' ) );
        add_action( 'admin_menu',       array( 'mime_types_extended', 'optionsMimeExtendedMenu' ) );
        add_action( 'admin_init',       array( 'mime_types_extended', 'registerSettings' ) );
        add_filter( 'upload_mimes' ,    array( 'mime_types_extended', 'addMimeTypes' ) );
    }
    
    /**
     * load the plugin textdomain
     * 
     * load the plugin textdomain with translations
     */
    static public function load_translations() {
        load_plugin_textdomain( 'mime_types_extended', false, apply_filters ( 'mime_types_extended_translationpath', dirname( plugin_basename( __FILE__ )) . '/languages/' ) ); 
    }
    
    static public function optionsMimeExtendedMenu() {
        add_options_page( 'Mime Types',  __('Mime types','mime_types_extended', 'hinweis'), 'manage_options',
        __FILE__, array( 'mime_types_extended', 'createOptionsMimeExtendedMenu' ) );        
    }
    
    static public function registerSettings() {
        wp_register_script( 'mime-types-extended', plugins_url( 'js/mime-types-extended.js', __FILE__ ) );
        
        register_setting( 'mime_types_extended_settings', 'mime_types_extended_settings_dwg' );
        register_setting( 'mime_types_extended_settings', 'mime_types_extended_settings_asd' );
        register_setting( 'mime_types_extended_settings', 'mime_types_extended_settings_asn' );
        register_setting( 'mime_types_extended_settings', 'mime_types_extended_settings_tsp' );
        register_setting( 'mime_types_extended_settings', 'mime_types_extended_settings_dxf' );
        register_setting( 'mime_types_extended_settings', 'mime_types_extended_settings_spl' );
        register_setting( 'mime_types_extended_settings', 'mime_types_extended_settings_ptlk' );
        register_setting( 'mime_types_extended_settings', 'mime_types_extended_settings_hqx' );
        register_setting( 'mime_types_extended_settings', 'mime_types_extended_settings_mbd' );
        register_setting( 'mime_types_extended_settings', 'mime_types_extended_settings_mif' );
        register_setting( 'mime_types_extended_settings', 'mime_types_extended_settings_hlp' );
        register_setting( 'mime_types_extended_settings', 'mime_types_extended_settings_chm' );
        register_setting( 'mime_types_extended_settings', 'mime_types_extended_settings_bin' );
        register_setting( 'mime_types_extended_settings', 'mime_types_extended_settings_dll' );
        register_setting( 'mime_types_extended_settings', 'mime_types_extended_settings_oda' );
        register_setting( 'mime_types_extended_settings', 'mime_types_extended_settings_ai' );
        register_setting( 'mime_types_extended_settings', 'mime_types_extended_settings_eps' );
        register_setting( 'mime_types_extended_settings', 'mime_types_extended_settings_ps' );
        register_setting( 'mime_types_extended_settings', 'mime_types_extended_settings_rtc' );
        register_setting( 'mime_types_extended_settings', 'mime_types_extended_settings_smp' );
        register_setting( 'mime_types_extended_settings', 'mime_types_extended_settings_tbk' );
        register_setting( 'mime_types_extended_settings', 'mime_types_extended_settings_vmd' );
        register_setting( 'mime_types_extended_settings', 'mime_types_extended_settings_vmf' );
        register_setting( 'mime_types_extended_settings', 'mime_types_extended_settings_shtml' );
        register_setting( 'mime_types_extended_settings', 'mime_types_extended_settings_xhtml' );
        register_setting( 'mime_types_extended_settings', 'mime_types_extended_settings_xml' );
        register_setting( 'mime_types_extended_settings', 'mime_types_extended_settings_bcpio' );
        register_setting( 'mime_types_extended_settings', 'mime_types_extended_settings_z' );
        register_setting( 'mime_types_extended_settings', 'mime_types_extended_settings_cpio' );
        register_setting( 'mime_types_extended_settings', 'mime_types_extended_settings_csh' );
        register_setting( 'mime_types_extended_settings', 'mime_types_extended_settings_dcr' );
        register_setting( 'mime_types_extended_settings', 'mime_types_extended_settings_dir' );
        register_setting( 'mime_types_extended_settings', 'mime_types_extended_settings_dxr' );
        register_setting( 'mime_types_extended_settings', 'mime_types_extended_settings_dvi' );
        register_setting( 'mime_types_extended_settings', 'mime_types_extended_settings_evy' );
        register_setting( 'mime_types_extended_settings', 'mime_types_extended_settings_gtar' );
        register_setting( 'mime_types_extended_settings', 'mime_types_extended_settings_hdf' );
        register_setting( 'mime_types_extended_settings', 'mime_types_extended_settings_php' );
        register_setting( 'mime_types_extended_settings', 'mime_types_extended_settings_phtml' );
        register_setting( 'mime_types_extended_settings', 'mime_types_extended_settings_latex' );
        register_setting( 'mime_types_extended_settings', 'mime_types_extended_settings_bin' );
        register_setting( 'mime_types_extended_settings', 'mime_types_extended_settings_mif' );
        register_setting( 'mime_types_extended_settings', 'mime_types_extended_settings_nc' );
        register_setting( 'mime_types_extended_settings', 'mime_types_extended_settings_cdf' );
        register_setting( 'mime_types_extended_settings', 'mime_types_extended_settings_nsc' );
        register_setting( 'mime_types_extended_settings', 'mime_types_extended_settings_sh' );
        register_setting( 'mime_types_extended_settings', 'mime_types_extended_settings_shar' );
        register_setting( 'mime_types_extended_settings', 'mime_types_extended_settings_cab' );
        register_setting( 'mime_types_extended_settings', 'mime_types_extended_settings_spr' );
        register_setting( 'mime_types_extended_settings', 'mime_types_extended_settings_sprite' );
        register_setting( 'mime_types_extended_settings', 'mime_types_extended_settings_sit' );
        register_setting( 'mime_types_extended_settings', 'mime_types_extended_settings_sca' );
        register_setting( 'mime_types_extended_settings', 'mime_types_extended_settings_sv4cpio' );
        register_setting( 'mime_types_extended_settings', 'mime_types_extended_settings_sv4crc' );
        register_setting( 'mime_types_extended_settings', 'mime_types_extended_settings_tcl' );
        register_setting( 'mime_types_extended_settings', 'mime_types_extended_settings_tex' );
        register_setting( 'mime_types_extended_settings', 'mime_types_extended_settings_texinfo' );
        register_setting( 'mime_types_extended_settings', 'mime_types_extended_settings_texi' );
        register_setting( 'mime_types_extended_settings', 'mime_types_extended_settings_t' );
        register_setting( 'mime_types_extended_settings', 'mime_types_extended_settings_tr' );
        register_setting( 'mime_types_extended_settings', 'mime_types_extended_settings_roff' );
        register_setting( 'mime_types_extended_settings', 'mime_types_extended_settings_man' );
        register_setting( 'mime_types_extended_settings', 'mime_types_extended_settings_troff' );
        register_setting( 'mime_types_extended_settings', 'mime_types_extended_settings_ustar' );
        register_setting( 'mime_types_extended_settings', 'mime_types_extended_settings_au' );
        register_setting( 'mime_types_extended_settings', 'mime_types_extended_settings_snd' );
        register_setting( 'mime_types_extended_settings', 'mime_types_extended_settings_es' );
        register_setting( 'mime_types_extended_settings', 'mime_types_extended_settings_tsi' );
        register_setting( 'mime_types_extended_settings', 'mime_types_extended_settings_vox' );
        register_setting( 'mime_types_extended_settings', 'mime_types_extended_settings_aif' );
        register_setting( 'mime_types_extended_settings', 'mime_types_extended_settings_aiff' );
        register_setting( 'mime_types_extended_settings', 'mime_types_extended_settings_aifc' );
        register_setting( 'mime_types_extended_settings', 'mime_types_extended_settings_dus' );
        register_setting( 'mime_types_extended_settings', 'mime_types_extended_settings_cht' );
        register_setting( 'mime_types_extended_settings', 'mime_types_extended_settings_mid' );
        register_setting( 'mime_types_extended_settings', 'mime_types_extended_settings_midi' );
        register_setting( 'mime_types_extended_settings', 'mime_types_extended_settings_gpx' );
        register_setting( 'mime_types_extended_settings', 'mime_types_extended_settings_osm' );
        register_setting( 'mime_types_extended_settings', 'mime_types_extended_settings_svg' );
        register_setting( 'mime_types_extended_settings', 'mime_types_extended_settings_svgz' );
        register_setting( 'mime_types_extended_settings', 'mime_types_extended_settings_img' );
        register_setting( 'mime_types_extended_settings', 'mime_types_extended_settings_exe' );
        register_setting( 'mime_types_extended_settings', 'mime_types_extended_settings_epub' );
        register_setting( 'mime_types_extended_settings', 'mime_types_extended_settings_mobi' );
    }
    
    static public function createOptionsMimeExtendedMenu () {
        global $settings, $mimetypes;
        
        wp_enqueue_script( 'mime-types-extended' );
    ?>
    <div class="wrap"  id="settingsNeedfulTweaks">
    <h2><?php _e( 'MIME Types settings', 'mime_types_extended' ); ?></h2>
    <p><?php _e( 'Activate mimetypes you want to use.', 'mime_types_extended' ); ?></p>
    <form method="POST" action="options.php">
    <input type="button" value="<?php _e( 'select all', 'mime_types_extended' ); ?>" onClick="mime_types_extended_selectall(this.form)"> 
    <input type="button" value="<?php _e( 'deselect all', 'mime_types_extended' ); ?>" onClick="mime_types_extended_deselectall(this.form)">
    <?php 
    settings_fields( 'mime_types_extended_settings' ); 
    echo '<table class="form-table">';
    ?>
    <tr>
        <td><input type="checkbox" name="mime_types_extended_settings_ai" value="1" <?php if ( get_option( 'mime_types_extended_settings_ai' ) ) echo " checked "; ?> /></td>
        <td><?php _e( 'enable .ai files', 'mime_types_extended' ); ?></td>
    </tr>  
     <tr>
        <td><input type="checkbox" name="mime_types_extended_settings_aif" value="1" <?php if ( get_option( 'mime_types_extended_settings_aif' ) ) echo " checked "; ?> /></td>
        <td><?php _e( 'enable .aif files', 'mime_types_extended' ); ?></td>
    </tr>  
     <tr>
        <td><input type="checkbox" name="mime_types_extended_settings_aifc" value="1" <?php if ( get_option( 'mime_types_extended_settings_aifc' ) ) echo " checked "; ?> /></td>
        <td><?php _e( 'enable .aifc files', 'mime_types_extended' ); ?></td>
    </tr>      
     <tr>
        <td><input type="checkbox" name="mime_types_extended_settings_aiff" value="1" <?php if ( get_option( 'mime_types_extended_settings_aiff' ) ) echo " checked "; ?> /></td>
        <td><?php _e( 'enable .aiff files', 'mime_types_extended' ); ?></td>
    </tr>  
    <tr>
        <td style="width: 13px;"><input type="checkbox" name="mime_types_extended_settings_asd" value="1" <?php if ( get_option( 'mime_types_extended_settings_asd' ) ) echo " checked "; ?> /></td>
        <td><?php _e( 'enable .asd files', 'mime_types_extended' ); ?></td>
    </tr>
    <tr>
        <td><input type="checkbox" name="mime_types_extended_settings_asn" value="1" <?php if ( get_option( 'mime_types_extended_settings_asn' ) ) echo " checked "; ?> /></td>
        <td><?php _e( 'enable .asn files', 'mime_types_extended' ); ?></td>
    </tr>
     <tr>
        <td><input type="checkbox" name="mime_types_extended_settings_au" value="1" <?php if ( get_option( 'mime_types_extended_settings_au' ) ) echo " checked "; ?> /></td>
        <td><?php _e( 'enable .au files', 'mime_types_extended' ); ?></td>
    </tr>  
    <tr>
        <td><input type="checkbox" name="mime_types_extended_settings_bcpio" value="1" <?php if ( get_option( 'mime_types_extended_settings_bcpio' ) ) echo " checked "; ?> /></td>
        <td><?php _e( 'enable .bcpio files', 'mime_types_extended' ); ?></td>
    </tr>  
    <tr>
        <td><input type="checkbox" name="mime_types_extended_settings_bin" value="1" <?php if ( get_option( 'mime_types_extended_settings_bin' ) ) echo " checked "; ?> /></td>
        <td><?php _e( 'enable .bin files', 'mime_types_extended' ); ?></td>
    </tr>  
    <tr>
        <td><input type="checkbox" name="mime_types_extended_settings_cab" value="1" <?php if ( get_option( 'mime_types_extended_settings_cab' ) ) echo " checked "; ?> /></td>
        <td><?php _e( 'enable .cab files', 'mime_types_extended' ); ?></td>
    </tr>  
    <tr>
        <td><input type="checkbox" name="mime_types_extended_settings_cdf" value="1" <?php if ( get_option( 'mime_types_extended_settings_cdf' ) ) echo " checked "; ?> /></td>
        <td><?php _e( 'enable .cdf files', 'mime_types_extended' ); ?></td>
    </tr>      
    <tr>
        <td><input type="checkbox" name="mime_types_extended_settings_chm" value="1" <?php if ( get_option( 'mime_types_extended_settings_chm' ) ) echo " checked "; ?> /></td>
        <td><?php _e( 'enable .chm files', 'mime_types_extended' ); ?></td>
    </tr>  
    <tr>
        <td><input type="checkbox" name="mime_types_extended_settings_cht" value="1" <?php if ( get_option( 'mime_types_extended_settings_cht' ) ) echo " checked "; ?> /></td>
        <td><?php _e( 'enable .cht files', 'mime_types_extended' ); ?></td>
    </tr>    
    <tr>
        <td><input type="checkbox" name="mime_types_extended_settings_cpio" value="1" <?php if ( get_option( 'mime_types_extended_settings_cpio' ) ) echo " checked "; ?> /></td>
        <td><?php _e( 'enable .cpio files', 'mime_types_extended' ); ?></td>
    </tr>  
    <tr>
        <td><input type="checkbox" name="mime_types_extended_settings_csh" value="1" <?php if ( get_option( 'mime_types_extended_settings_csh' ) ) echo " checked "; ?> /></td>
        <td><?php _e( 'enable .csh files', 'mime_types_extended' ); ?></td>
    </tr>  
    <tr>
        <td><input type="checkbox" name="mime_types_extended_settings_dcr" value="1" <?php if ( get_option( 'mime_types_extended_settings_dcr' ) ) echo " checked "; ?> /></td>
        <td><?php _e( 'enable .dcr files', 'mime_types_extended' ); ?></td>
    </tr>  
    <tr>
        <td><input type="checkbox" name="mime_types_extended_settings_dir" value="1" <?php if ( get_option( 'mime_types_extended_settings_dir' ) ) echo " checked "; ?> /></td>
        <td><?php _e( 'enable .dir files', 'mime_types_extended' ); ?></td>
    </tr>  
    <tr>
        <td><input type="checkbox" name="mime_types_extended_settings_dll" value="1" <?php if ( get_option( 'mime_types_extended_settings_dll' ) ) echo " checked "; ?> /></td>
        <td><?php _e( 'enable .dll files', 'mime_types_extended' ); ?></td>
    </tr>  
     <tr>
        <td><input type="checkbox" name="mime_types_extended_settings_dus" value="1" <?php if ( get_option( 'mime_types_extended_settings_dus' ) ) echo " checked "; ?> /></td>
        <td><?php _e( 'enable .dus files', 'mime_types_extended' ); ?></td>
    </tr> 
    <tr>
        <td><input type="checkbox" name="mime_types_extended_settings_dvi" value="1" <?php if ( get_option( 'mime_types_extended_settings_dvi' ) ) echo " checked "; ?> /></td>
        <td><?php _e( 'enable .dvi files', 'mime_types_extended' ); ?></td>
    </tr>  
    <tr>
        <td><input type="checkbox" name="mime_types_extended_settings_dwg" value="1" <?php if ( get_option( 'mime_types_extended_settings_dwg' ) ) echo " checked "; ?> /></td>
        <td><?php _e( 'enable .dwg files', 'mime_types_extended' ); ?></td>
    </tr>
    <tr>
        <td><input type="checkbox" name="mime_types_extended_settings_dxf" value="1" <?php if ( get_option( 'mime_types_extended_settings_dxf' ) ) echo " checked "; ?> /></td>
        <td><?php _e( 'enable .dxf files', 'mime_types_extended' ); ?></td>
    </tr>    
    <tr>
        <td><input type="checkbox" name="mime_types_extended_settings_dxr" value="1" <?php if ( get_option( 'mime_types_extended_settings_dxr' ) ) echo " checked "; ?> /></td>
        <td><?php _e( 'enable .dxr files', 'mime_types_extended' ); ?></td>
    </tr>  
    <tr>
        <td><input type="checkbox" name="mime_types_extended_settings_eps" value="1" <?php if ( get_option( 'mime_types_extended_settings_eps' ) ) echo " checked "; ?> /></td>
        <td><?php _e( 'enable .eps files', 'mime_types_extended' ); ?></td>
    </tr>  
    <tr>
        <td><input type="checkbox" name="mime_types_extended_settings_epub" value="1" <?php if ( get_option( 'mime_types_extended_settings_epub' ) ) echo " checked "; ?> /></td>
        <td><?php _e( 'enable .epub files', 'mime_types_extended' ); ?></td>
    </tr>  
     <tr>
        <td><input type="checkbox" name="mime_types_extended_settings_es" value="1" <?php if ( get_option( 'mime_types_extended_settings_es' ) ) echo " checked "; ?> /></td>
        <td><?php _e( 'enable .es files', 'mime_types_extended' ); ?></td>
    </tr>  
    <tr>
        <td><input type="checkbox" name="mime_types_extended_settings_evy" value="1" <?php if ( get_option( 'mime_types_extended_settings_evy' ) ) echo " checked "; ?> /></td>
        <td><?php _e( 'enable .evy files', 'mime_types_extended' ); ?></td>
    </tr>  
    <tr>
        <td><input type="checkbox" name="mime_types_extended_settings_exe" value="1" <?php if ( get_option( 'mime_types_extended_settings_exe' ) ) echo " checked "; ?> /></td>
        <td><?php _e( 'enable .exe files', 'mime_types_extended' ); ?></td>
    </tr>      
    <tr>
        <td><input type="checkbox" name="mime_types_extended_settings_gpx" value="1" <?php if ( get_option( 'mime_types_extended_settings_gpx' ) ) echo " checked "; ?> /></td>
        <td><?php _e( 'enable .gpx files', 'mime_types_extended' ); ?></td>
    </tr>       
    <tr>
        <td><input type="checkbox" name="mime_types_extended_settings_gtar" value="1" <?php if ( get_option( 'mime_types_extended_settings_gtar' ) ) echo " checked "; ?> /></td>
        <td><?php _e( 'enable .gtar files', 'mime_types_extended' ); ?></td>
    </tr>      
    <tr>
        <td><input type="checkbox" name="mime_types_extended_settings_hdf" value="1" <?php if ( get_option( 'mime_types_extended_settings_hdf' ) ) echo " checked "; ?> /></td>
        <td><?php _e( 'enable .hdf files', 'mime_types_extended' ); ?></td>
    </tr>  
    <tr>
        <td><input type="checkbox" name="mime_types_extended_settings_hlp" value="1" <?php if ( get_option( 'mime_types_extended_settings_hlp' ) ) echo " checked "; ?> /></td>
        <td><?php _e( 'enable .hlp files', 'mime_types_extended' ); ?></td>
    </tr>  
    <tr>
        <td><input type="checkbox" name="mime_types_extended_settings_hqx" value="1" <?php if ( get_option( 'mime_types_extended_settings_hqx' ) ) echo " checked "; ?> /></td>
        <td><?php _e( 'enable .hqx files', 'mime_types_extended' ); ?></td>
    </tr>  
    <tr>
        <td><input type="checkbox" name="mime_types_extended_settings_img" value="1" <?php if ( get_option( 'mime_types_extended_settings_img' ) ) echo " checked "; ?> /></td>
        <td><?php _e( 'enable .img files', 'mime_types_extended' ); ?></td>
    </tr>  
    <tr>
        <td><input type="checkbox" name="mime_types_extended_settings_latex" value="1" <?php if ( get_option( 'mime_types_extended_settings_latex' ) ) echo " checked "; ?> /></td>
        <td><?php _e( 'enable .latex files', 'mime_types_extended' ); ?></td>
    </tr>      
    <tr>
        <td><input type="checkbox" name="mime_types_extended_settings_man" value="1" <?php if ( get_option( 'mime_types_extended_settings_man' ) ) echo " checked "; ?> /></td>
        <td><?php _e( 'enable .man files', 'mime_types_extended' ); ?></td>
    </tr>       
    <tr>
        <td><input type="checkbox" name="mime_types_extended_settings_mbd" value="1" <?php if ( get_option( 'mime_types_extended_settings_mbd' ) ) echo " checked "; ?> /></td>
        <td><?php _e( 'enable .mbd files', 'mime_types_extended' ); ?></td>
    </tr>  
    <tr>
        <td><input type="checkbox" name="mime_types_extended_settings_mid" value="1" <?php if ( get_option( 'mime_types_extended_settings_mid' ) ) echo " checked "; ?> /></td>
        <td><?php _e( 'enable .mid files', 'mime_types_extended' ); ?></td>
    </tr>    
    <tr>
        <td><input type="checkbox" name="mime_types_extended_settings_midi" value="1" <?php if ( get_option( 'mime_types_extended_settings_midi' ) ) echo " checked "; ?> /></td>
        <td><?php _e( 'enable .midi files', 'mime_types_extended' ); ?></td>
    </tr>   
    <tr>
        <td><input type="checkbox" name="mime_types_extended_settings_mif" value="1" <?php if ( get_option( 'mime_types_extended_settings_mif' ) ) echo " checked "; ?> /></td>
        <td><?php _e( 'enable .mif files', 'mime_types_extended' ); ?></td>
    </tr>  
    <tr>
        <td><input type="checkbox" name="mime_types_extended_settings_mobi" value="1" <?php if ( get_option( 'mime_types_extended_settings_mobi' ) ) echo " checked "; ?> /></td>
        <td><?php _e( 'enable .mobi files', 'mime_types_extended' ); ?></td>
    </tr>  
    <tr>
        <td><input type="checkbox" name="mime_types_extended_settings_nc" value="1" <?php if ( get_option( 'mime_types_extended_settings_nc' ) ) echo " checked "; ?> /></td>
        <td><?php _e( 'enable .nc files', 'mime_types_extended' ); ?></td>
    </tr>      
    <tr>
        <td><input type="checkbox" name="mime_types_extended_settings_nsc" value="1" <?php if ( get_option( 'mime_types_extended_settings_nsc' ) ) echo " checked "; ?> /></td>
        <td><?php _e( 'enable .nsc files', 'mime_types_extended' ); ?></td>
    </tr>      
    <tr>
        <td><input type="checkbox" name="mime_types_extended_settings_oda" value="1" <?php if ( get_option( 'mime_types_extended_settings_oda' ) ) echo " checked "; ?> /></td>
        <td><?php _e( 'enable .oda files', 'mime_types_extended' ); ?></td>
    </tr>  
    <tr>
        <td><input type="checkbox" name="mime_types_extended_settings_osm" value="1" <?php if ( get_option( 'mime_types_extended_settings_osm' ) ) echo " checked "; ?> /></td>
        <td><?php _e( 'enable .osm files', 'mime_types_extended' ); ?></td>
    </tr>  
    <tr>
        <td><input type="checkbox" name="mime_types_extended_settings_php" value="1" <?php if ( get_option( 'mime_types_extended_settings_php' ) ) echo " checked "; ?> /></td>
        <td><?php _e( 'enable .php files', 'mime_types_extended' ); ?></td>
    </tr>  
    <tr>
        <td><input type="checkbox" name="mime_types_extended_settings_phtml" value="1" <?php if ( get_option( 'mime_types_extended_settings_phtml' ) ) echo " checked "; ?> /></td>
        <td><?php _e( 'enable .phtml files', 'mime_types_extended' ); ?></td>
    </tr>  
    <tr>
        <td><input type="checkbox" name="mime_types_extended_settings_ps" value="1" <?php if ( get_option( 'mime_types_extended_settings_ps' ) ) echo " checked "; ?> /></td>
        <td><?php _e( 'enable .ps files', 'mime_types_extended' ); ?></td>
    </tr>  
    <tr>
        <td><input type="checkbox" name="mime_types_extended_settings_ptlk" value="1" <?php if ( get_option( 'mime_types_extended_settings_ptlk' ) ) echo " checked "; ?> /></td>
        <td><?php _e( 'enable .ptlk files', 'mime_types_extended' ); ?></td>
    </tr>  
    <tr>
        <td><input type="checkbox" name="mime_types_extended_settings_roff" value="1" <?php if ( get_option( 'mime_types_extended_settings_roff' ) ) echo " checked "; ?> /></td>
        <td><?php _e( 'enable .roff files', 'mime_types_extended' ); ?></td>
    </tr>      
    <tr>
        <td><input type="checkbox" name="mime_types_extended_settings_rtc" value="1" <?php if ( get_option( 'mime_types_extended_settings_rtc' ) ) echo " checked "; ?> /></td>
        <td><?php _e( 'enable .rtc files', 'mime_types_extended' ); ?></td>
    </tr>  
    <tr>
        <td><input type="checkbox" name="mime_types_extended_settings_sca" value="1" <?php if ( get_option( 'mime_types_extended_settings_sca' ) ) echo " checked "; ?> /></td>
        <td><?php _e( 'enable .sca files', 'mime_types_extended' ); ?></td>
    </tr>      
    <tr>
        <td><input type="checkbox" name="mime_types_extended_settings_sh" value="1" <?php if ( get_option( 'mime_types_extended_settings_sh' ) ) echo " checked "; ?> /></td>
        <td><?php _e( 'enable .sh files', 'mime_types_extended' ); ?></td>
    </tr>      
    <tr>
        <td><input type="checkbox" name="mime_types_extended_settings_shar" value="1" <?php if ( get_option( 'mime_types_extended_settings_shar' ) ) echo " checked "; ?> /></td>
        <td><?php _e( 'enable .shar files', 'mime_types_extended' ); ?></td>
    </tr>      
    <tr>
        <td><input type="checkbox" name="mime_types_extended_settings_shtml" value="1" <?php if ( get_option( 'mime_types_extended_settings_shtml' ) ) echo " checked "; ?> /></td>
        <td><?php _e( 'enable .shtml files', 'mime_types_extended' ); ?></td>
    </tr>  
    <tr>
        <td><input type="checkbox" name="mime_types_extended_settings_sit" value="1" <?php if ( get_option( 'mime_types_extended_settings_sit' ) ) echo " checked "; ?> /></td>
        <td><?php _e( 'enable .sit files', 'mime_types_extended' ); ?></td>
    </tr>  
    <tr>
        <td><input type="checkbox" name="mime_types_extended_settings_smp" value="1" <?php if ( get_option( 'mime_types_extended_settings_smp' ) ) echo " checked "; ?> /></td>
        <td><?php _e( 'enable .smp files', 'mime_types_extended' ); ?></td>
    </tr>  
     <tr>
        <td><input type="checkbox" name="mime_types_extended_settings_snd" value="1" <?php if ( get_option( 'mime_types_extended_settings_snd' ) ) echo " checked "; ?> /></td>
        <td><?php _e( 'enable .snd files', 'mime_types_extended' ); ?></td>
    </tr>  
    <tr>
        <td><input type="checkbox" name="mime_types_extended_settings_spl" value="1" <?php if ( get_option( 'mime_types_extended_settings_spl' ) ) echo " checked "; ?> /></td>
        <td><?php _e( 'enable .spl files', 'mime_types_extended' ); ?></td>
    </tr>  
    <tr>
        <td><input type="checkbox" name="mime_types_extended_settings_spr" value="1" <?php if ( get_option( 'mime_types_extended_settings_spr' ) ) echo " checked "; ?> /></td>
        <td><?php _e( 'enable .spr files', 'mime_types_extended' ); ?></td>
    </tr>  
    <tr>
        <td><input type="checkbox" name="mime_types_extended_settings_sprite" value="1" <?php if ( get_option( 'mime_types_extended_settings_sprite' ) ) echo " checked "; ?> /></td>
        <td><?php _e( 'enable .sprite files', 'mime_types_extended' ); ?></td>
    </tr>  
    <tr>
        <td><input type="checkbox" name="mime_types_extended_settings_sv4cpio" value="1" <?php if ( get_option( 'mime_types_extended_settings_sv4cpio' ) ) echo " checked "; ?> /></td>
        <td><?php _e( 'enable .sv4cpio files', 'mime_types_extended' ); ?></td>
    </tr>      
    <tr>
        <td><input type="checkbox" name="mime_types_extended_settings_sv4crc" value="1" <?php if ( get_option( 'mime_types_extended_settings_sv4crc' ) ) echo " checked "; ?> /></td>
        <td><?php _e( 'enable .sv4crc files', 'mime_types_extended' ); ?></td>
    </tr>
    <tr>
        <td><input type="checkbox" name="mime_types_extended_settings_svg" value="1" <?php if ( get_option( 'mime_types_extended_settings_svg' ) ) echo " checked "; ?> /></td>
        <td><?php _e( 'enable .svg files', 'mime_types_extended' ); ?></td>
    </tr>
    <tr>
        <td><input type="checkbox" name="mime_types_extended_settings_svgz" value="1" <?php if ( get_option( 'mime_types_extended_settings_svgz' ) ) echo " checked "; ?> /></td>
        <td><?php _e( 'enable .svgz files', 'mime_types_extended' ); ?></td>
    </tr>
    <tr>
        <td><input type="checkbox" name="mime_types_extended_settings_t" value="1" <?php if ( get_option( 'mime_types_extended_settings_t' ) ) echo " checked "; ?> /></td>
        <td><?php _e( 'enable .t files', 'mime_types_extended' ); ?></td>
    </tr>      
    <tr>
        <td><input type="checkbox" name="mime_types_extended_settings_tbk" value="1" <?php if ( get_option( 'mime_types_extended_settings_tbk' ) ) echo " checked "; ?> /></td>
        <td><?php _e( 'enable .tbk files', 'mime_types_extended' ); ?></td>
    </tr>  
    <tr>
        <td><input type="checkbox" name="mime_types_extended_settings_tcl" value="1" <?php if ( get_option( 'mime_types_extended_settings_tcl' ) ) echo " checked "; ?> /></td>
        <td><?php _e( 'enable .tcl files', 'mime_types_extended' ); ?></td>
    </tr>      
    <tr>
        <td><input type="checkbox" name="mime_types_extended_settings_tex" value="1" <?php if ( get_option( 'mime_types_extended_settings_tex' ) ) echo " checked "; ?> /></td>
        <td><?php _e( 'enable .tex files', 'mime_types_extended' ); ?></td>
    </tr>      
    <tr>
        <td><input type="checkbox" name="mime_types_extended_settings_texi" value="1" <?php if ( get_option( 'mime_types_extended_settings_texi' ) ) echo " checked "; ?> /></td>
        <td><?php _e( 'enable .texi files', 'mime_types_extended' ); ?></td>
    </tr>      
    <tr>
        <td><input type="checkbox" name="mime_types_extended_settings_texinfo" value="1" <?php if ( get_option( 'mime_types_extended_settings_texinfo' ) ) echo " checked "; ?> /></td>
        <td><?php _e( 'enable .texinfo files', 'mime_types_extended' ); ?></td>
    </tr>      
    <tr>
        <td><input type="checkbox" name="mime_types_extended_settings_tr" value="1" <?php if ( get_option( 'mime_types_extended_settings_tr' ) ) echo " checked "; ?> /></td>
        <td><?php _e( 'enable .tr files', 'mime_types_extended' ); ?></td>
    </tr>      
    <tr>
        <td><input type="checkbox" name="mime_types_extended_settings_troff" value="1" <?php if ( get_option( 'mime_types_extended_settings_troff' ) ) echo " checked "; ?> /></td>
        <td><?php _e( 'enable .troff files', 'mime_types_extended' ); ?></td>
    </tr>  
    <tr>
        <td><input type="checkbox" name="mime_types_extended_settings_tsi" value="1" <?php if ( get_option( 'mime_types_extended_settings_tsi' ) ) echo " checked "; ?> /></td>
        <td><?php _e( 'enable .tsi files', 'mime_types_extended' ); ?></td>
    </tr>  
    <tr>
        <td><input type="checkbox" name="mime_types_extended_settings_tsp" value="1" <?php if ( get_option( 'mime_types_extended_settings_tsp' ) ) echo " checked "; ?> /></td>
        <td><?php _e( 'enable .tsp files', 'mime_types_extended' ); ?></td>
    </tr>
    <tr>
        <td><input type="checkbox" name="mime_types_extended_settings_ustar" value="1" <?php if ( get_option( 'mime_types_extended_settings_ustar' ) ) echo " checked "; ?> /></td>
        <td><?php _e( 'enable .ustar files', 'mime_types_extended' ); ?></td>
    </tr>  
    <tr>
        <td><input type="checkbox" name="mime_types_extended_settings_vmd" value="1" <?php if ( get_option( 'mime_types_extended_settings_vmd' ) ) echo " checked "; ?> /></td>
        <td><?php _e( 'enable .vmd files', 'mime_types_extended' ); ?></td>
    </tr>  
    <tr>
        <td><input type="checkbox" name="mime_types_extended_settings_vmf" value="1" <?php if ( get_option( 'mime_types_extended_settings_vmf' ) ) echo " checked "; ?> /></td>
        <td><?php _e( 'enable .vmf files', 'mime_types_extended' ); ?></td>
    </tr>  
     <tr>
        <td><input type="checkbox" name="mime_types_extended_settings_vox" value="1" <?php if ( get_option( 'mime_types_extended_settings_vox' ) ) echo " checked "; ?> /></td>
        <td><?php _e( 'enable .vox files', 'mime_types_extended' ); ?></td>
    </tr>  
    <tr>
        <td><input type="checkbox" name="mime_types_extended_settings_xhtml" value="1" <?php if ( get_option( 'mime_types_extended_settings_xhtml' ) ) echo " checked "; ?> /></td>
        <td><?php _e( 'enable .xhtml files', 'mime_types_extended' ); ?></td>
    </tr>  
    <tr>
        <td><input type="checkbox" name="mime_types_extended_settings_xml" value="1" <?php if ( get_option( 'mime_types_extended_settings_xml' ) ) echo " checked "; ?> /></td>
        <td><?php _e( 'enable .xml files', 'mime_types_extended' ); ?></td>
    </tr>  
    <tr>
        <td><input type="checkbox" name="mime_types_extended_settings_z" value="1" <?php if ( get_option( 'mime_types_extended_settings_z' ) ) echo " checked "; ?> /></td>
        <td><?php _e( 'enable .z files', 'mime_types_extended' ); ?></td>
    </tr>  
    </table>
    <br/>
    <input type="submit" class="button-primary" value="<?php _e('Save Changes', 'mime_types_extended' )?>" />
    </form>
    </div>
    <?php    
    }

    /**
     * Add allowed mimetype to wordpress
     *
     * @param array $mimetypes
     * @return array
     */
    static public function addMimeTypes( $mimetypes = array() ) {
        if ( get_option( 'mime_types_extended_settings_asd' ) ) {
             $mimetypes['asd'] = 'application/astound';
        }
        if ( get_option( 'mime_types_extended_settings_dwg' ) ) {
             $mimetypes['dwg'] = 'application/acad';
        }
        if ( get_option( 'mime_types_extended_settings_asn' ) ) {
             $mimetypes['asn'] = 'application/astound';
        }
        if ( get_option( 'mime_types_extended_settings_tsp' ) ) {
             $mimetypes['tsp'] = 'application/dsptype';
        }
        if ( get_option( 'mime_types_extended_settings_dxf' ) ) {
             $mimetypes['dxf'] = 'application/dxf';
        }       
        if ( get_option( 'mime_types_extended_settings_spl' ) ) {
             $mimetypes['spl'] = 'application/futuresplash';
        }  
        if ( get_option( 'mime_types_extended_settings_ptlk' ) ) {
             $mimetypes['ptlk'] = 'application/listenup';
        }   
        if ( get_option( 'mime_types_extended_settings_hqx' ) ) {
             $mimetypes['hqx'] = 'application/mac-binhex40';
        }   
        if ( get_option( 'mime_types_extended_settings_mbd' ) ) {
             $mimetypes['mbd'] = 'application/mbedlet';
        }   
        if ( get_option( 'mime_types_extended_settings_mif' ) ) {
             $mimetypes['mif'] = 'application/mif';
        }  
        if ( get_option( 'mime_types_extended_settings_hlp' ) ) {
             $mimetypes['hlp'] = 'application/mshelp';
        }           
        if ( get_option( 'mime_types_extended_settings_chm' ) ) {
             $mimetypes['chm'] = 'application/mshelp';
        }           
        if ( get_option( 'mime_types_extended_settings_bin' ) ) {
             $mimetypes['bin'] = 'application/octet-stream';
        }   
        if ( get_option( 'mime_types_extended_settings_dll' ) ) {
             $mimetypes['dll'] = 'application/octet-stream';
        }   
        if ( get_option( 'mime_types_extended_settings_oda' ) ) {
             $mimetypes['oda'] = 'application/octet-stream';
        }   
        if ( get_option( 'mime_types_extended_settings_ai' ) ) {
             $mimetypes['ai'] = 'application/postscript';
        }   
        if ( get_option( 'mime_types_extended_settings_eps' ) ) {
             $mimetypes['eps'] = 'application/postscript';
        }   
        if ( get_option( 'mime_types_extended_settings_ep' ) ) {
             $mimetypes['ps'] = 'application/postscript';
        }   
        if ( get_option( 'mime_types_extended_settings_rtc' ) ) {
             $mimetypes['rtc'] = 'application/rtc';
        }   
        if ( get_option( 'mime_types_extended_settings_smp' ) ) {
             $mimetypes['smp'] = 'application/studiom';
        }   
        if ( get_option( 'mime_types_extended_settings_tbk' ) ) {
             $mimetypes['tbk'] = 'application/toolbook';
        }   
        if ( get_option( 'mime_types_extended_settings_vmd' ) ) {
             $mimetypes['vmd'] = 'application/vocaltec-media-desc';
        }   
        if ( get_option( 'mime_types_extended_settings_vmf' ) ) {
             $mimetypes['vmf'] = 'application/vocaltec-media-file';
        }   
        if ( get_option( 'mime_types_extended_settings_shtml' ) ) {
             $mimetypes['shtml'] = 'application/xhtml+xml';
        }   
        if ( get_option( 'mime_types_extended_settings_xhtml' ) ) {
             $mimetypes['xhtml'] = 'application/xhtml+xml';
        }   
        if ( get_option( 'mime_types_extended_settings_xml' ) ) {
             $mimetypes['xml'] = 'application/xml';
        }   
        if ( get_option( 'mime_types_extended_settings_bcpio' ) ) {
             $mimetypes['bcpio'] = 'application/x-bcpio';
        }   
        if ( get_option( 'mime_types_extended_settings_z' ) ) {
             $mimetypes['z'] = 'application/x-compress';
        }   
        if ( get_option( 'mime_types_extended_settings_cpio' ) ) {
             $mimetypes['cpio'] = 'application/x-cpio';
        }   
        if ( get_option( 'mime_types_extended_settings_csh' ) ) {
             $mimetypes['csh'] = 'application/x-csh';
        }   
        if ( get_option( 'mime_types_extended_settings_dcr' ) ) {
             $mimetypes['dcr'] = 'application/x-director';
        }   
        if ( get_option( 'mime_types_extended_settings_dir' ) ) {
             $mimetypes['dir'] = 'application/x-director';
        }   
        if ( get_option( 'mime_types_extended_settings_dxr' ) ) {
             $mimetypes['dxr'] = 'application/x-director';
        }   
        if ( get_option( 'mime_types_extended_settings_dvi' ) ) {
             $mimetypes['dvi'] = 'application/x-dvi';
        }  
        if ( get_option( 'mime_types_extended_settings_evy' ) ) {
             $mimetypes['evy'] = 'application/x-envoy';
        }          
        if ( get_option( 'mime_types_extended_settings_gtar' ) ) {
             $mimetypes['gtar'] = 'application/x-gtar';
        }          
        if ( get_option( 'mime_types_extended_settings_hdf' ) ) {
             $mimetypes['hdf'] = 'application/x-hdf';
        }          
        if ( get_option( 'mime_types_extended_settings_php' ) ) {
             $mimetypes['php'] = 'application/x-httpd-php';
        }          
        if ( get_option( 'mime_types_extended_settings_php' ) ) {
             $mimetypes['phtml'] = 'application/x-httpd-php';
        }
        if ( get_option( 'mime_types_extended_settings_latex' ) ) {
             $mimetypes['latex'] = 'application/x-latex';
        }
        if ( get_option( 'mime_types_extended_settings_bin' ) ) {
             $mimetypes['bin'] = 'application/x-macbinary';
        }
        if ( get_option( 'mime_types_extended_settings_mif' ) ) {
             $mimetypes['mif'] = 'application/x-mif';
        }
        if ( get_option( 'mime_types_extended_settings_nc' ) ) {
             $mimetypes['nc'] = 'application/x-netcdf';
        }
        if ( get_option( 'mime_types_extended_settings_cdf' ) ) {
             $mimetypes['cdf'] = 'application/x-netcdf';
        }
        if ( get_option( 'mime_types_extended_settings_nsc' ) ) {
             $mimetypes['nsc'] = 'application/x-nschat';
        }
        if ( get_option( 'mime_types_extended_settings_sh' ) ) {
             $mimetypes['sh'] = 'application/x-sh';
        }
        if ( get_option( 'mime_types_extended_settings_shar' ) ) {
             $mimetypes['shar'] = 'application/x-shar';
        }
        if ( get_option( 'mime_types_extended_settings_cab' ) ) {
             $mimetypes['cab'] = 'application/x-shockwave-flash';
        }
        if ( get_option( 'mime_types_extended_settings_spr' ) ) {
             $mimetypes['spr'] = 'application/x-sprite';
        }
        if ( get_option( 'mime_types_extended_settings_sprite' ) ) {
             $mimetypes['sprite'] = 'application/x-sprite';
        }
        if ( get_option( 'mime_types_extended_settings_sit' ) ) {
             $mimetypes['sit'] = 'application/x-stuffit';
        }
        if ( get_option( 'mime_types_extended_settings_sca' ) ) {
             $mimetypes['sca'] = 'application/x-supercard';
        }
        if ( get_option( 'mime_types_extended_settings_sv4cpio' ) ) {
             $mimetypes['sv4cpio'] = 'application/x-sv4cpio';
        }
        if ( get_option( 'mime_types_extended_settings_sv4crc' ) ) {
             $mimetypes['sv4crc'] = 'application/x-sv4crc';
        }
        if ( get_option( 'mime_types_extended_settings_tcl' ) ) {
             $mimetypes['tcl'] = 'application/x-tcl';
        }       
        if ( get_option( 'mime_types_extended_settings_tex' ) ) {
             $mimetypes['tex'] = 'application/x-tex';
        }       
        if ( get_option( 'mime_types_extended_settings_texinfo' ) ) {
             $mimetypes['texinfo'] = 'application/x-texinfo';
        }       
        if ( get_option( 'mime_types_extended_settings_texi' ) ) {
             $mimetypes['texi'] = 'application/x-texinfo';
        }       
        if ( get_option( 'mime_types_extended_settings_t' ) ) {
             $mimetypes['t'] = 'application/x-troff';
        }       
        if ( get_option( 'mime_types_extended_settings_tr' ) ) {
             $mimetypes['tr'] = 'application/x-troff';
        }       
        if ( get_option( 'mime_types_extended_settings_roff' ) ) {
             $mimetypes['roff'] = 'application/x-troff';
        }       
        if ( get_option( 'mime_types_extended_settings_man' ) ) {
             $mimetypes['man'] = 'application/x-troff-man';
        }
        if ( get_option( 'mime_types_extended_settings_troff' ) ) {
             $mimetypes['troff'] = 'application/x-troff-man';
        }
        if ( get_option( 'mime_types_extended_settings_ustar' ) ) {
             $mimetypes['ustar'] = 'application/x-ustar';
        }
        if ( get_option( 'mime_types_extended_settings_au' ) ) {
             $mimetypes['au'] = 'audio/basic';
        }
        if ( get_option( 'mime_types_extended_settings_snd' ) ) {
             $mimetypes['snd'] = 'audio/basic';
        }
        if ( get_option( 'mime_types_extended_settings_es' ) ) {
             $mimetypes['es'] = 'audio/echospeech';
        }
        if ( get_option( 'mime_types_extended_settings_tsi' ) ) {
             $mimetypes['tsi'] = 'audio/tsplayer';
        }
        if ( get_option( 'mime_types_extended_settings_vox' ) ) {
             $mimetypes['vox'] = 'audio/voxware';
        }
        if ( get_option( 'mime_types_extended_settings_aif' ) ) {
             $mimetypes['aif'] = 'audio/x-aiff';
        }
        if ( get_option( 'mime_types_extended_settings_aiff' ) ) {
             $mimetypes['aiff'] = 'audio/x-aiff';
        }
        if ( get_option( 'mime_types_extended_settings_aifc' ) ) {
             $mimetypes['aifc'] = 'audio/x-aiff';
        }
        if ( get_option( 'mime_types_extended_settings_dus' ) ) {
             $mimetypes['dus'] = 'audio/x-dspeeh';
        }
        if ( get_option( 'mime_types_extended_settings_cht' ) ) {
             $mimetypes['cht'] = 'audio/x-dspeeh';
        }
        if ( get_option( 'mime_types_extended_settings_mid' ) ) {
             $mimetypes['mid'] = 'audio/x-midi';
        }
        if ( get_option( 'mime_types_extended_settings_midi' ) ) {
             $mimetypes['midi'] = 'audio/x-midi';
        }
        if ( get_option( 'mime_types_extended_settings_gpx' ) ) {
             $mimetypes['gpx'] = 'application/xml';
        }        
        if ( get_option( 'mime_types_extended_settings_osm' ) ) {
             $mimetypes['osm'] = 'application/octet-stream';
        }        
        if ( get_option( 'mime_types_extended_settings_svg' ) ) {
             $mimetypes['svg'] = 'image/svg+xml';
        }  
        if ( get_option( 'mime_types_extended_settings_svgz' ) ) {
             $mimetypes['svgz'] = 'image/svg+xml';
        }
        if ( get_option( 'mime_types_extended_settings_img' ) ) {
             $mimetypes['img'] = 'application/octet-stream';
        }
        if ( get_option( 'mime_types_extended_settings_exe' ) ) {
             $mimetypes['exe'] = 'application/x-msdownload';
        }
        if ( get_option( 'mime_types_extended_settings_epub' ) ) {
             $mimetypes['epub'] = 'application/epub+zip';
        }   
        if ( get_option( 'mime_types_extended_settings_mobi' ) ) {
             $mimetypes['mobi'] = 'application/x-mobipocket-ebook';
        }          
        return ($mimetypes); 
    }

    /**
     * Add a settings link to pluginlist
     *
     * @param $inks
     * @return mixed
     */
    static public function plugin_settings_link( $links ) {
        $settings_link = '<a href="options-general.php?page=mime-types-extended/class-mime-types-extended.php">' . __( 'Settings', 'mime_types_extended' )  . '</a>';
        array_unshift($links, $settings_link);
        return $links;
    }
        
}
