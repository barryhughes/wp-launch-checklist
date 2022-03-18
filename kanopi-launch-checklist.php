<?php

namespace Kanopi\Kanopi_Launch_Checklist;

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://kanopi.com
 * @since             1.0.0
 * @package           Kanopi_Launch_Checklist
 *
 * @wordpress-plugin
 * Plugin Name:       Kanopi Launch Checklist
 * Plugin URI:        https://kanopi.com
 * Description:       Creates an interactive launch checklist.
 * Version:           1.0.0
 * Author:            Kanopi Studios
 * Author URI:        https://kanopi.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       kanopi-launch-checklist
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'KANOPI_LAUNCH_CHECKLIST_VERSION', '1.0.0' );

/**
 * Root path to the plugin files.
 */
define( 'KANOPI_LAUNCH_CHECKLIST_ROOT', trailingslashit( plugin_dir_path( __FILE__ ) ) );

/**
 * Root path to the plugin files.
 */
define( 'KANOPI_LAUNCH_CHECKLIST_TEMPLATE_PARTIALS', trailingslashit( KANOPI_LAUNCH_CHECKLIST_ROOT . 'admin/partials' ) );

/**
 * Plugin name.
 */
define( 'KANOPI_LAUNCH_CHECKLIST_NAME', 'Kanopi Launch Checklist' );

/**
 * Plugin options table settings slug.
 */
define( 'KANOPI_LAUNCH_CHECKLIST_SLUG', 'kanopi_launch_checklist' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-kanopi-launch-checklist-activator.php
 */
function activate_kanopi_launch_checklist() {
	require_once KANOPI_LAUNCH_CHECKLIST_ROOT . 'includes/class-activator.php';
	$activator = new Activator;
	$activator->activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-kanopi-launch-checklist-deactivator.php
 */
function deactivate_kanopi_launch_checklist() {
	require_once KANOPI_LAUNCH_CHECKLIST_ROOT . 'includes/class-deactivator.php';
	$deactivator = new Deactivator;
	$deactivator->deactivate();
}

/**
 * The code that runs during plugin uninstall (deactivation and deletion).
 * This action is documented in includes/class-kanopi-launch-checklist-uninstaller.php
 */
function uninstall_kanopi_launch_checklist() {
	require_once KANOPI_LAUNCH_CHECKLIST_ROOT . 'includes/class-uninstaller.php';
	$uninstaller = new Uninstaller;
	$uninstaller->uninstall();
}

register_activation_hook( __FILE__, 'Kanopi\Kanopi_Launch_Checklist\activate_kanopi_launch_checklist' );
register_deactivation_hook( __FILE__, 'Kanopi\Kanopi_Launch_Checklist\deactivate_kanopi_launch_checklist' );
register_uninstall_hook( __FILE__, 'Kanopi\Kanopi_Launch_Checklist\uninstall_kanopi_launch_checklist' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require KANOPI_LAUNCH_CHECKLIST_ROOT . 'includes/class-kanopi-launch-checklist.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_kanopi_launch_checklist() {
	require_once( KANOPI_LAUNCH_CHECKLIST_ROOT . 'vendor/autoload.php' );

	$requirements = new Plugin_Requirements(
		[
			'plugin_name'         => KANOPI_LAUNCH_CHECKLIST_NAME,
			'php_version'         => '7.4',
			'wp_version'          => '5.5',
			'plugin_file'         => __FILE__,
			'php_server_version'  => phpversion(),
			'wp_server_version'   => get_bloginfo( 'version' ),
			'plugin_dependencies' => [],
		]
	);

	if ( $requirements->plugin_requirements_met() ) {
		$plugin = new Kanopi_Launch_Checklist();
		$plugin->run();
	}
}

/**
 * Let's start this party.
 */
run_kanopi_launch_checklist();
