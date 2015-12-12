<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              djm204.desiratech.com
 * @since             1.0.0
 * @package           Desiratech_Custom_Web_Forms
 *
 * @wordpress-plugin
 * Plugin Name:       desiratech-custom-web-forms
 * Plugin URI:        https://github.com/djm204/desiratech-custom-web-forms
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            DJM204 - Desiratech 
 * Author URI:        djm204.desiratech.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       desiratech-custom-web-forms
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-desiratech-custom-web-forms-activator.php
 */
function activate_desiratech_custom_web_forms() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-desiratech-custom-web-forms-activator.php';
	Desiratech_Custom_Web_Forms_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-desiratech-custom-web-forms-deactivator.php
 */
function deactivate_desiratech_custom_web_forms() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-desiratech-custom-web-forms-deactivator.php';
	Desiratech_Custom_Web_Forms_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_desiratech_custom_web_forms' );
register_deactivation_hook( __FILE__, 'deactivate_desiratech_custom_web_forms' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-desiratech-custom-web-forms.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_desiratech_custom_web_forms() {

	$plugin = new Desiratech_Custom_Web_Forms();
	$plugin->run();

}
run_desiratech_custom_web_forms();
