<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       http://jeweltheme.com
 * @since      1.0.0
 *
 * @package    Sunrise_Coming_Soon
 * @subpackage Sunrise_Coming_Soon/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Sunrise_Coming_Soon
 * @subpackage Sunrise_Coming_Soon/public
 * @author     Jewel Theme <support@jeweltheme.com>
 */
class Sunrise_Coming_Soon_Public {

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
	 * @param      string    $sunrise_coming_soon       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $sunrise_coming_soon, $version ) {

		$this->sunrise_coming_soon = $sunrise_coming_soon;
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
		 * defined in Plugin_Name_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Plugin_Name_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style('bootstrap', plugin_dir_url( __FILE__ ) . 'css/bootstrap.css', array(), $this->version, 'all' );
		wp_enqueue_style('style', plugin_dir_url( __FILE__ ) . 'css/style.css', array(), $this->version, 'all' );
		wp_enqueue_style('responsive', plugin_dir_url( __FILE__ ) . 'css/responsive.css', array(), $this->version, 'all' );
		wp_enqueue_style('TimeCircles', plugin_dir_url( __FILE__ ) . 'css/TimeCircles.css', array(), $this->version, 'all' );
		wp_enqueue_style('font-awesome.min', plugin_dir_url( __FILE__ ) . 'css/font-awesome.min.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
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


		wp_enqueue_script( 'jquery' );
		wp_enqueue_script('bootstrap-js', plugin_dir_url( __FILE__ ) . 'js/bootstrap.min.js', array( 'jquery' ));
		wp_enqueue_script('TimeCircles', plugin_dir_url( __FILE__ ) . 'js/TimeCircles.js', array( 'jquery' ));
		wp_enqueue_script('ajaxchimp', plugin_dir_url( __FILE__ ) . 'js/jquery.ajaxchimp.min.js', array( 'jquery' ));
		wp_enqueue_script('jquery.placeholder', plugin_dir_url( __FILE__ ) . 'js/jquery.placeholder.js', array( 'jquery' ));

	}

}
