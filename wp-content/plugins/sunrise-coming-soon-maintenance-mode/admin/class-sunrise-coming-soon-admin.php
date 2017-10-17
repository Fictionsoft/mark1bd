<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://jeweltheme.com
 * @since      1.0.0
 *
 * @package    Sunrise_Coming_Soon
 * @subpackage Sunrise_Coming_Soon/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Sunrise_Coming_Soon
 * @subpackage Sunrise_Coming_Soon/admin
 * @author     Jewel Theme<support@jeweltheme.com>
 */
class Sunrise_Coming_Soon_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $sunrise_coming_soon    The ID of this plugin.
	 */
	private $sunrise_coming_soon;

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
	 * @param      string    $sunrise_coming_soon       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $sunrise_coming_soon, $version ) {

		$this->sunrise_coming_soon = $sunrise_coming_soon;
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
		 * defined in Plugin_Name_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Plugin_Name_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->sunrise_coming_soon, plugin_dir_url( __FILE__ ) . 'css/sunrise-coming-soon-admin.css', array(), $this->version, 'all' );

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
		 * defined in Plugin_Name_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Plugin_Name_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->sunrise_coming_soon, plugin_dir_url( __FILE__ ) . 'js/sunrise-coming-soon-admin.js', array( 'jquery' ), $this->version, false );

	}

}
