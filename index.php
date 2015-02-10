<?php
/*
Plugin Name: Quick Bangla Installer
Plugin URI: http://facebook.com/olikhitokabbo
Description: This plugin installs Bengali Language on wordpress site.
Version:1.0
Author: Md Monirul Alom
Author URI:  http://facebook.com/olikhitokabbo
*/

/*function change_locale
 
 replaces default locale 
 
 of wordpress site */

	function change_locale( $locale ){
    	
    	return 'bn_BD';
	
	}

 add_filter( 'locale', 'change_locale' );


	function get_lang_file($mofile, $domain='default') {
		
		$locale = get_locale(); 
		
		$path=plugin_dir_path(__FILE__);
		
		$custom_mofile= $path . "/lang/$locale.mo";
		
		if (file_exists($custom_mofile)) return ($custom_mofile); 
		
		else  return $mofile;
	}

 add_filter ('load_textdomain_mofile','get_lang_file' );
 
?>