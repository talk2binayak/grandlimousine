<?php
/**
 * Fleet Manager
 *
 * @package           fleet
 * @author            Marcin Pietrzak
 * @copyright         2017-2023 Marcin Pietrzak
 * @license           GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name:       Fleet Manager Base
 * Plugin URI:        http://iworks.pl/en/plugins/fleet/
 * Description:       The sailboat manager makes it possible to manage boats, sailors, regattas and their results.
 * Version:           2.1.1
 * Requires at least: 5.0
 * Requires PHP:      7.4
 * Author:            Marcin Pietrzak
 * Author URI:        http://iworks.pl/
 * Text Domain:       fleet
 * License:           GPL v2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * static options
 */
define( 'IWORKS_FLEET_VERSION', '2.1.1' );
define( 'IWORKS_FLEET_PREFIX', 'iworks_fleet_' );
$base     = dirname( __FILE__ );
$includes = $base . '/includes';

/**
 * require: Iworksfleet Class
 */
if ( ! class_exists( 'iworks_fleet' ) ) {
	require_once $includes . '/iworks/class-iworks-fleet.php';
}
/**
 * configuration
 */
require_once $base . '/etc/options.php';
/**
 * require: IworksOptions Class
 */
if ( ! class_exists( 'iworks_options' ) ) {
	require_once $includes . '/iworks/options/options.php';
}

/**
 * i18n
 */
load_plugin_textdomain( 'fleet', false, plugin_basename( dirname( __FILE__ ) ) . '/languages' );

/**
 * load options
 */

global $iworks_fleet_options;
$iworks_fleet_options = iworks_fleet_get_options_object();

function iworks_fleet_get_options_object() {
	global $iworks_fleet_options;
	if ( is_object( $iworks_fleet_options ) ) {
		return $iworks_fleet_options;
	}
	$iworks_fleet_options = new iworks_options();
	$iworks_fleet_options->set_option_function_name( 'iworks_fleet_options' );
	$iworks_fleet_options->set_option_prefix( IWORKS_FLEET_PREFIX );
	if ( method_exists( $iworks_fleet_options, 'set_plugin' ) ) {
		$iworks_fleet_options->set_plugin( basename( __FILE__ ) );
	}
	return $iworks_fleet_options;
}

function iworks_fleet_options_init() {
	global $iworks_fleet_options;
	$iworks_fleet_options->options_init();
}

function iworks_fleet_activate() {
	$iworks_fleet_options = new iworks_options();
	$iworks_fleet_options->set_option_function_name( 'iworks_fleet_options' );
	$iworks_fleet_options->set_option_prefix( IWORKS_FLEET_PREFIX );
	$iworks_fleet_options->activate();
	/**
	 * install tables
	 */
	$iworks_fleet = new iworks_fleet;
	$iworks_fleet->db_install();
}

function iworks_fleet_deactivate() {
	global $iworks_fleet_options;
	$iworks_fleet_options->deactivate();
}

global $iworks_fleet;
$iworks_fleet = new iworks_fleet();

/**
 * install & uninstall
 */
register_activation_hook( __FILE__, 'iworks_fleet_activate' );
register_deactivation_hook( __FILE__, 'iworks_fleet_deactivate' );
/**
 * Ask for vote
 */
include_once $includes . '//iworks/rate/rate.php';
do_action(
	'iworks-register-plugin',
	plugin_basename( __FILE__ ),
	__( 'Fleet Manager', 'fleet' ),
	'fleet'
);
