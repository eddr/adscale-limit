<?php
/**
 * Plugin Name: AdScale Limit For WooCommerce
 * Description: A plugin to limit AdScale XHR requests, in case the WC cart hasn't changed. To be used with Adscales' official plugin : https://adscale.com/integrations/woocommerce/ 
 * Version: 0.1
 * Tags: woocommerce, adscale, xhr
 * Author: eddr
 * Contributors: eddr,secretchord
 * Requires PHP: 7.0
 * License: GPLv3 or later
 * Tested up to: 6.3.2
 * License URI: https://www.gnu.org/licenses/gpl-3.0.html
 */

// Enqueue the script
function adscale_limit_enqueue_scripts() {
	
    wp_enqueue_script('adscale-limit-main', plugin_dir_url(__FILE__) . '/assets/js/main.js', [], time() . '1.0.0', false );
}

add_action( 'wp_enqueue_scripts', 'adscale_limit_enqueue_scripts', 1 );
