<?php

/**
 * Fired during plugin activation
 *
 * @link       https://github.com/dcurasi
 * @since      1.0.0
 *
 * @package    Dc_Rtfw
 * @subpackage Dc_Rtfw/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Dc_Rtfw
 * @subpackage Dc_Rtfw/includes
 * @author     Dario Curasì <curasi.d87@gmail.com>
 */
class Dc_Rtfw_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {
		add_option('dc_rtfw_activate', 1);
		add_option('dc_rtfw_activate_cart', 1);
		add_option('dc_rtfw_activate_wishlist', 0);
		add_option('dc_rtfw_wishlist_page', '');
	}

}
