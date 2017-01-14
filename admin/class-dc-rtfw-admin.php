<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://github.com/dcurasi
 * @since      1.0.0
 *
 * @package    Dc_Rtfw
 * @subpackage Dc_Rtfw/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Dc_Rtfw
 * @subpackage Dc_Rtfw/admin
 * @author     Dario Curasì <curasi.d87@gmail.com>
 */
class Dc_Rtfw_Admin {

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
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
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

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/dc-rtfw-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
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

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/dc-rtfw-admin.js', array( 'jquery' ), $this->version, false );

	}

	//inizializzazione menu di amministrazione
	function add_menu_page()
	{
	    add_submenu_page('woocommerce','Responsive Table', 'Responsive Table', 'manage_options', 'dc-rtfw-menu-page', array( $this,'create_admin_interface' ));
	}

	/**
	 * Callback function for the admin settings page.
	 *
	 * @since    1.0.0
	 */
	public function create_admin_interface(){

		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/partials/dc-rtfw-admin-display.php';

	}

	/**
	 * Creates our settings sections with fields etc.
	 *
	 * @since    1.0.0
	 */
	public function settings_api_init(){
		register_setting('dc_rtfw_options_group', 'dc_rtfw_activate');
		register_setting('dc_rtfw_options_group', 'dc_rtfw_activate_cart');
		register_setting('dc_rtfw_options_group', 'dc_rtfw_activate_wishlist');
		register_setting('dc_rtfw_options_group', 'dc_rtfw_wishlist_page');
	}

	/**
	 * Error notice
	 *
	 * @since    1.1.1
	 */

	public function error_notice() {
		echo '<div class="notice notice-error is-dismissible">
        		<p>'.__('Responsive Table for Woocommerce is active but does not work. You need to install WooCommerce because the plugin is working properly.','dc-rtfw').'</p>
    		  </div>';
	}

}