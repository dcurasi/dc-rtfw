<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/dcurasi
 * @since             1.1.1
 * @package           Dc_Rtfw
 *
 * @wordpress-plugin
 * Plugin Name:       Responsive Table for Woocommerce
 * Plugin URI:        https://github.com/dcurasi/dc-rtfw
 * Description:       Make responsive the Cart and Wishlist table of Woocommerce.
 * Version:           1.1.1
 * Author:            Dario Curasì
 * Author URI:        https://github.com/dcurasi
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       dc-rtfw
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-dc-rtfw-activator.php
 */
function activate_dc_rtfw() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-dc-rtfw-activator.php';
	Dc_Rtfw_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-dc-rtfw-deactivator.php
 */
function deactivate_dc_rtfw() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-dc-rtfw-deactivator.php';
	Dc_Rtfw_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_dc_rtfw' );
register_deactivation_hook( __FILE__, 'deactivate_dc_rtfw' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-dc-rtfw.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_dc_rtfw() {

	$plugin = new Dc_Rtfw();
	$plugin->run();

}
run_dc_rtfw();
