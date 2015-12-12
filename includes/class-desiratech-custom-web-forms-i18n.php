<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       djm204.desiratech.com
 * @since      1.0.0
 *
 * @package    Desiratech_Custom_Web_Forms
 * @subpackage Desiratech_Custom_Web_Forms/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Desiratech_Custom_Web_Forms
 * @subpackage Desiratech_Custom_Web_Forms/includes
 * @author     DJM204 - Desiratech  <desiratech@gmail.com>
 */
class Desiratech_Custom_Web_Forms_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'desiratech-custom-web-forms',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
