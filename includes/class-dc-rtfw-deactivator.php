<?php

/**
 * Fired during plugin deactivation
 *
 * @link       https://github.com/dcurasi
 * @since      1.0.0
 *
 * @package    Dc_Rtfw
 * @subpackage Dc_Rtfw/includes
 */

/**
 * Fired during plugin deactivation.
 *
 * This class defines all code necessary to run during the plugin's deactivation.
 *
 * @since      1.0.0
 * @package    Dc_Rtfw
 * @subpackage Dc_Rtfw/includes
 * @author     Dario Curasì <curasi.d87@gmail.com>
 */
class Dc_Rtfw_Deactivator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function deactivate() {
		delete_option( 'dc_rtfw_activate' );
		delete_option('dc_rtfw_activate_cart');
		delete_option('dc_rtfw_activate_wishlist');
		delete_option( 'dc_rtfw_wishlist_page' );
	}

}
