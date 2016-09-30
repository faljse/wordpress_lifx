<?php
/*
 * Plugin Name: lifx
 * Version: 1.0
 * Plugin URI: http://www.hughlashbrooke.com/
 * Description: This is your starter template for your next WordPress plugin.
 * Author: Hugh Lashbrooke
 * Author URI: http://www.hughlashbrooke.com/
 * Requires at least: 4.0
 * Tested up to: 4.0
 *
 * Text Domain: lifx
 * Domain Path: /lang/
 *
 * @package WordPress
 * @author Hugh Lashbrooke
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit;

// Load plugin class files
require_once( 'includes/class-lifx.php' );
require_once( 'includes/class-lifx-settings.php' );

// Load plugin libraries
require_once( 'includes/lib/class-lifx-admin-api.php' );
require_once( 'includes/lib/class-lifx-post-type.php' );
require_once( 'includes/lib/class-lifx-taxonomy.php' );

/**
 * Returns the main instance of lifx to prevent the need to use globals.
 *
 * @since  1.0.0
 * @return object lifx
 */
function lifx () {
	$instance = lifx::instance( __FILE__, '1.0.0' );

	if ( is_null( $instance->settings ) ) {
		$instance->settings = lifx_Settings::instance( $instance );
	}

	return $instance;
}

lifx();