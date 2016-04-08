<?php
/*
* Plugin Name: WooCommerce Composite Products - JS API Boilerplate
* Plugin URI: http://www.woothemes.com/products/composite-products/
* Description: Boilerplate for writing plugins on top of the Composite Products JS API.
* Version: 1.0.0
* Author: SomewhereWarm
* Author URI: http://somewherewarm.net/
* Developer: Manos Psychogyiopoulos
* Developer URI: http://somewherewarm.net/
*
* Text Domain: woocommerce-composite-products-js-api-example
* Domain Path: /languages/
*
* Requires at least: 3.8
* Tested up to: 4.4
*
* Copyright: © 2009-2015 Manos Psychogyiopoulos.
* License: GNU General Public License v3.0
* License URI: http://www.gnu.org/licenses/gpl-3.0.html
*/

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class WC_CP_JS_API_Example {

	public static $version = '1.0.0';

	public static function plugin_url() {
		return plugins_url( basename( plugin_dir_path(__FILE__) ), basename( __FILE__ ) );
	}

	public static function init() {
		// Load plugin.
		add_action( 'plugins_loaded', __CLASS__ . '::load' );
	}

	public static function load() {

		global $woocommerce_composite_products;

		// Bootstrapping.
		add_filter( 'woocommerce_composite_script_dependencies', __CLASS__ . '::bootstrap' );
	}

	/**
	 * Front-end script.
	 *
	 * @param array $dependencies
	 */
	public static function bootstrap( $dependencies ) {

		wp_register_script( 'wccp-js-api-example', self::plugin_url() . '/assets/js/wccp-js-api-example.js', array(), self::$version );

		$dependencies[] = 'wccp-js-api-example';

		return $dependencies;
	}
}

WC_CP_JS_API_Example::init();
