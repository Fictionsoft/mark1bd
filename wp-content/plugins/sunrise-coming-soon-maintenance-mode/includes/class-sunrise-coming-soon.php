<?php

/**
 * The file that defines the core plugin class
 *
 * A class definition that includes attributes and functions used across both the
 * public-facing side of the site and the admin area.
 *
 * @link       http://jeweltheme.com
 * @since      1.0.0
 *
 * @package    Sunrise_Coming_Soon
 * @subpackage Sunrise_Coming_Soon/includes
 */

/**
 * The core plugin class.
 *
 * This is used to define internationalization, admin-specific hooks, and
 * public-facing site hooks.
 *
 * Also maintains the unique identifier of this plugin as well as the current
 * version of the plugin.
 *
 * @since      1.0.0
 * @package    Sunrise_Coming_Soon
 * @subpackage Sunrise_Coming_Soon/includes
 * @author     Jewel Theme <support@jeweltheme.com>
 */
class Sunrise_Coming_Soon {

	/**
	 * The loader that's responsible for maintaining and registering all hooks that power
	 * the plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      Plugin_Name_Loader    $loader    Maintains and registers all hooks for the plugin.
	 */
	protected $loader;

	/**
	 * The unique identifier of this plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      string    $sunrise_coming_soon    The string used to uniquely identify this plugin.
	 */
	protected $sunrise_coming_soon;

	/**
	 * The current version of the plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      string    $version    The current version of the plugin.
	 */
	protected $version;

	/**
	 * Define the core functionality of the plugin.
	 *
	 * Set the plugin name and the plugin version that can be used throughout the plugin.
	 * Load the dependencies, define the locale, and set the hooks for the admin area and
	 * the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function __construct() {

		$this->sunrise_coming_soon = 'sunrise-coming-soon';
		$this->version = '1.0.0';

		$this->load_dependencies();
		$this->set_locale();
		$this->define_admin_hooks();
		$this->define_public_hooks();
		$this->define_public_hooks_display();

	}

	/**
	 * Load the required dependencies for this plugin.
	 *
	 * Include the following files that make up the plugin:
	 *
	 * - Plugin_Name_Loader. Orchestrates the hooks of the plugin.
	 * - Plugin_Name_i18n. Defines internationalization functionality.
	 * - Plugin_Name_Admin. Defines all hooks for the admin area.
	 * - Plugin_Name_Public. Defines all hooks for the public side of the site.
	 *
	 * Create an instance of the loader which will be used to register the hooks
	 * with WordPress.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function load_dependencies() {

		/**
		 * The class responsible for orchestrating the actions and filters of the
		 * core plugin.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-sunrise-coming-soon-loader.php';

		/**
		 * The class responsible for defining internationalization functionality
		 * of the plugin.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-sunrise-coming-soon-i18n.php';
		
		/**
		 * The class responsible for defining all actions that occur in the admin area.
		*/
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/class-sunrise-coming-soon-admin.php';

		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/class-sunrise-coming-soon-settings.php';

		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/sunrise-coming-soon-settings.php';

		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/sunrise-functions.php';



		/**
		 * The class responsible for defining all actions that occur in the public-facing
		 * side of the site.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'public/class-sunrise-coming-soon-public.php';

		$this->loader = new Sunrise_Coming_Soon_Loader();
		
		new Sunrise_Coming_Soon_Settings();

	}

	/**
	 * Define the locale for this plugin for internationalization.
	 *
	 * Uses the Plugin_Name_i18n class in order to set the domain and to register the hook
	 * with WordPress.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function set_locale() {

		$plugin_i18n = new Sunrise_Coming_Soon_i18n();
		$plugin_i18n->set_domain( $this->get_plugin_name() );

		$this->loader->add_action( 'plugins_loaded', $plugin_i18n, 'load_plugin_textdomain' );

	}

	/**
	 * Register all of the hooks related to the admin area functionality
	 * of the plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function define_admin_hooks() {

		$plugin_admin = new Sunrise_Coming_Soon_Admin( $this->get_plugin_name(), $this->get_version() );

		$this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_styles' );
		$this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_scripts' );

	}

	/**
	 * Register all of the hooks related to the public-facing functionality
	 * of the plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function define_public_hooks() {

		$plugin_public = new Sunrise_Coming_Soon_Public( $this->get_plugin_name(), $this->get_version() );

		$this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_styles' );
		$this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_scripts' );

	}
	private function define_public_hooks_display() {
		if ($this->loader->sunrise_get_option( 'sunrise_coming_soon_enable', 'sunrise_general') == 'on') {
		 $this->get_loader();
		}

	}

	/**
	 * Run the loader to execute all of the hooks with WordPress.
	 *
	 * @since    1.0.0
	 */
	public function run() {
		$this->loader->run();
	}

	/**
	 * The name of the plugin used to uniquely identify it within the context of
	 * WordPress and to define internationalization functionality.
	 *
	 * @since     1.0.0
	 * @return    string    The name of the plugin.
	 */
	public function get_plugin_name() {
		return $this->sunrise_coming_soon;
	}

	/**
	 * The reference to the class that orchestrates the hooks with the plugin.
	 *
	 * @since     1.0.0
	 * @return    Sunrise_Coming_Soon_Loader    Orchestrates the hooks of the plugin.
	 */
	public function get_loader() {
		//return $this->loader;
		add_action('template_redirect', array( &$this, 'sunrise_coming_soon_template_redirect'));
	}

	/*
	* Check the page validation of user restriction
	*/
    public function sunrise_coming_soon_check_valid_page() {
        return in_array($GLOBALS['pagenow'], array('wp-login.php', 'wp-register.php'));
    }

    /*
    * Validate the User Restriction of Webpage
    */
    public function sunrise_coming_soon_template_redirect(){
        if(is_user_logged_in()){
            //if user logged in then Webpage will show in normal web mode
        }
        else
        {
            if( !is_admin() && !$this->sunrise_coming_soon_check_valid_page()){  //show maintenance page
                $this->load_sunrise_coming_soon_template();
            }
        }
    }

    /*
    * Load Coming Soon Template
    */
    public function load_sunrise_coming_soon_template()
    {
        header('HTTP/1.0 503 Service Unavailable');
        include_once plugin_dir_path( dirname( __FILE__ ) ) . 'public/partials/sunrise-coming-soon-public-display.php';
        exit();
    }
	/**
	 * Retrieve the version number of the plugin.
	 *
	 * @since     1.0.0
	 * @return    string    The version number of the plugin.
	 */
	public function get_version() {
		return $this->version;
	}

}
