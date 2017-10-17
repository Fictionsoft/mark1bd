<?php

/**
 * @link              http://jeweltheme.com
 * @since             1.0.0
 * @package           Sunrise_Coming_Soon
 *
 * @wordpress-plugin
 * Plugin Name: 	  Sunrise - Coming Soon & Maintenance Mode
 * Plugin URI:        http://plugins.jeweltheme.com
 * Description:       Sunrise is Responsive WordPress Coming Soon & Maintenance Mode Designed by <a href="http://codepassenger.com">CodePassenger</a> and Developed by <a href="http://jeweltheme.com" target="_blank"> Jewel Theme </a>
 * Version:           1.0.0
 * Author:            Jewel Theme
 * Author URI:        http://jeweltheme.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       sunrise-coming-soon
 * Domain Path:       /languages
 */


// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-sunrise-coming-soon-activator.php
 */
function activate_sunrise_coming_soon() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-sunrise-coming-soon-activator.php';
	Sunrise_Coming_Soon_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-sunrise-coming-soon-deactivator.php
 */
function deactivate_sunrise_coming_soon() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-sunrise-coming-soon-deactivator.php';
	Sunrise_Coming_Soon_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_sunrise_coming_soon' );
register_deactivation_hook( __FILE__, 'deactivate_sunrise_coming_soon' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-sunrise-coming-soon.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_jwt_sunrise_coming_soon() {

	$plugin = new Sunrise_Coming_Soon();
	$plugin->run();

}
run_jwt_sunrise_coming_soon();
