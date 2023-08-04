<?php
/**
 * Plugin Name: Event Xpert
 * Plugin URI: https://www.dopethemes.com/downloads/eventxpert/
 * Description: Event Xpert is the ultimate event management solution for WordPress. Easily create, manage, and promote events with customizable designs, integrated booking, calendar sync, social media integration, and more. Contributors: DopeThemes (https://www.dopethemes.com), mynstudio (https://mynstudio.com/), 2fxmedia (https://2fxmedia.net/)
 * Version: 1.0
 * Author: DopeThemes, mynstudio, 2fxmedia
 * Author URI: https://www.dopethemes.com
 * Text Domain: eventxpert
 * Domain Path: /lang
 * License: GPLv3
 * License URI: https://www.dopethemes.com/gplv3/
 */

/*
    Copyright DopeThemes, mynstudio, 2fxmedia

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA 02110-1335, USA
*/

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed outside of WordPress
}

/**
 * Class EventXpert
 *
 * Main class that defines all the hooks and actions required for the EventXpert plugin.
 * Includes methods for enqueuing scripts, initializing admin functionalities, activation, and deactivation.
 *
 * @since 1.0.0
 */
if ( ! class_exists( 'EventXpert' ) ) {
	class EventXpert {

		/**
		 * EventXpert constructor.
		 *
		 * Initializes the plugin by registering actions, filters, and loading dependencies.
		 *
		 * @since 1.0.0
		 */
		public function __construct() {
			$this->load_dependencies(); // Load required files and classes
			add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_admin_scripts_styles' ) ); // Enqueue admin scripts and styles
			add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_public_scripts_styles' ) ); // Enqueue public scripts and styles
		}

		/**
		 * Enqueue the necessary scripts and styles for the admin area.
		 * Includes the CSS and JS files used within the admin dashboard.
		 *
		 * @since 1.0.0
		 */
		public function enqueue_admin_scripts_styles() {
			wp_enqueue_style( 'eventxpert-admin', plugins_url( 'assets/dist/css/backend.css', __FILE__ ) );
			wp_enqueue_script( 'eventxpert-admin', plugins_url( 'assets/dist/js/admin.js', __FILE__ ), array( 'jquery' ), '1.0', true );
		}

		/**
		 * Enqueue public-facing scripts and styles.
		 * Includes the CSS and JS files used on the frontend of the site.
		 *
		 * @since 1.0.0
		 */
		public function enqueue_public_scripts_styles() {
			wp_enqueue_style( 'eventxpert-public', plugins_url( 'assets/dist/css/frontend.css', __FILE__ ) );
			wp_enqueue_script( 'eventxpert-public', plugins_url( 'assets/dist/js/public.js', __FILE__ ), array( 'jquery' ), '1.0', true );
		}

		/**
		 * Load the required dependencies for this plugin.
		 * Includes the necessary files, classes, and sets up hooks for the admin area and the public side of the site.
		 *
		 * @since 1.0.0
		 */
		private function load_dependencies() {
            // Dependencies code here
		}

		/**
		 * Activation hook to run when the plugin is activated.
		 * Implement any required logic here for when the plugin is enabled.
		 *
		 * @since 1.0.0
		 */
		public static function activate() {
            // Activation code here
		}

		/**
		 * Deactivation hook to run when the plugin is deactivated.
		 * Implement any required logic here for cleaning up after the plugin is disabled.
		 *
		 * @since 1.0.0
		 */
		public static function deactivate() {
			// Deactivation code here
		}
	}

}

// Initialize EventXpert if class exists
if ( class_exists( 'EventXpert' ) ) {
    $eventXpert = new EventXpert(); // Instantiate main plugin class
}

// Hooks for activating and deactivating the plugin
register_activation_hook( __FILE__, array( 'EventXpert', 'activate' ) ); // Hook activation method
register_deactivation_hook( __FILE__, array( 'EventXpert', 'deactivate' ) ); // Hook deactivation method
