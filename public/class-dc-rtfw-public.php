<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://github.com/dcurasi
 * @since      1.0.0
 *
 * @package    Dc_Rtfw
 * @subpackage Dc_Rtfw/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Dc_Rtfw
 * @subpackage Dc_Rtfw/public
 * @author     Dario Curasì <curasi.d87@gmail.com>
 */
class Dc_Rtfw_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Dc_Rtfw_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Dc_Rtfw_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		if( !wp_style_is('bootstrap') ) {
			wp_register_style('bootstrap', plugin_dir_url( __FILE__ ) . 'css/bootstrap.min.css');
			wp_enqueue_style('bootstrap');
		}

		if ( is_cart() && get_option('dc_rtfw_activate_cart') ) {
			wp_enqueue_style( 'dc-rtfw-cart', plugin_dir_url( __FILE__ ) . 'css/dc-rtfw-cart.css', array(), $this->version, 'all' );
		}

		if ( is_page( get_option('dc_rtfw_wishlist_page') ) && get_option('dc_rtfw_activate_wishlist') ) {
			wp_enqueue_style( 'dc-rtfw-wishlist', plugin_dir_url( __FILE__ ) . 'css/dc-rtfw-wishlist.css', array(), $this->version, 'all' );
		}
	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Dc_Rtfw_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Dc_Rtfw_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		if( !wp_script_is('bootstrap') ) {
			wp_register_script( 'bootstrap', plugin_dir_url( __FILE__ ) . 'js/bootstrap.min.js', array( 'jquery' ), '', true);
			wp_enqueue_script('bootstrap');
		}

		if ( is_cart() && get_option('dc_rtfw_activate_cart') ) {
			wp_enqueue_script( 'dc-rtfw-cart', plugin_dir_url( __FILE__ ) . 'js/dc-rtfw-cart.js', array( 'jquery' ), $this->version, false );
		}

		if ( is_page( get_option('dc_rtfw_wishlist_page') ) && get_option('dc_rtfw_activate_wishlist') ) {
			wp_enqueue_script( 'dc-rtfw-wishlist', plugin_dir_url( __FILE__ ) . 'js/dc-rtfw-wishlist.js', array( 'jquery' ), $this->version, false );
		}
	}

	public function table_start() {
		echo '<div id="dc-rtfw-table">';
	}

	public function table_end() {
		echo '</div>';
	}

}
