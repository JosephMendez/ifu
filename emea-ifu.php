<?php

/**
 * The plugin for EMEA IFU
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://seoagency.com.sg
 * @since             1.0.0
 * @package           Emea_Ifu
 *
 * @wordpress-plugin
 * Plugin Name:       EMEA IFU
 * Plugin URI:        seoagency.com.sg
 * Description:       Please do not deactivate this plugin without prior notice to joseph.mendez@seoagency.com.sg
 * Version:           1.0.0
 * Author:            Joseph Mendez
 * Author URI:        http://seoagency.com.sg
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       emea-ifu
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-emea-ifu-activator.php
 */
function activate_emea_ifu() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-emea-ifu-activator.php';
	Emea_Ifu_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-emea-ifu-deactivator.php
 */
function deactivate_emea_ifu() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-emea-ifu-deactivator.php';
	Emea_Ifu_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_emea_ifu' );
register_deactivation_hook( __FILE__, 'deactivate_emea_ifu' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-emea-ifu.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_emea_ifu() {

	$plugin = new Emea_Ifu();
	$plugin->run();

}
run_emea_ifu();
