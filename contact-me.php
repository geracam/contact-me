<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              www.gcgomez.com
 * @since             1.0.0
 * @package           Contact_Me
 *
 * @wordpress-plugin
 * Plugin Name:       Contact Me
 * Plugin URI:        https://github.com/geracam/contact-me
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Gerardo Camarena
 * Author URI:        www.gcgomez.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       contact-me
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-contact-me-activator.php
 */
function activate_contact_me() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-contact-me-activator.php';
	Contact_Me_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-contact-me-deactivator.php
 */
function deactivate_contact_me() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-contact-me-deactivator.php';
	Contact_Me_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_contact_me' );
register_deactivation_hook( __FILE__, 'deactivate_contact_me' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-contact-me.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_contact_me() {

	$plugin = new Contact_Me();
	$plugin->run();

}
run_contact_me();
