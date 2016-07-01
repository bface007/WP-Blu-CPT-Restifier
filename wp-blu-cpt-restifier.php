<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              facebook.com/Bface.Style
 * @since             1.0.0
 * @package           Wp_Blu_Cpt_Restifier
 *
 * @wordpress-plugin
 * Plugin Name:       WP Blu CPT Restifier
 * Plugin URI:        https://github.com/bface007/WP-Blu-CPT-Restifier
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Dan T. Ngossinga
 * Author URI:        facebook.com/Bface.Style
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wp-blu-cpt-restifier
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wp-blu-cpt-restifier-activator.php
 */
function activate_wp_blu_cpt_restifier() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-blu-cpt-restifier-activator.php';
	Wp_Blu_Cpt_Restifier_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wp-blu-cpt-restifier-deactivator.php
 */
function deactivate_wp_blu_cpt_restifier() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-blu-cpt-restifier-deactivator.php';
	Wp_Blu_Cpt_Restifier_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_wp_blu_cpt_restifier' );
register_deactivation_hook( __FILE__, 'deactivate_wp_blu_cpt_restifier' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wp-blu-cpt-restifier.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wp_blu_cpt_restifier() {

	$plugin = new Wp_Blu_Cpt_Restifier();
	$plugin->run();

}
run_wp_blu_cpt_restifier();
