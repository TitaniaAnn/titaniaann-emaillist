<?php
/**
 * Plugin Name: Emaillist
 * Plugin URI:	http://titaniaann.github.io/titaniaann-emaillist/
 * Description: 
 * Version:		1.0.0
 * Author:		Cynthia Brown
 * Author URI:	http://cynthiabrown.me
 * License:		GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * 
 * @link 		http://cynthiabrown.me
 * @since 		1.0.0
 * @package 	titaniaann-emaillist
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-plugin-name-activator.php
 */
function activate_titaniaann_emaillist() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-titaniaann-emaillist-activator.php';
	Titaniaann_Emaillist_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-plugin-name-deactivator.php
 */
function deactivate_titaniaann_emaillist() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-titaniaann-emaillist-deactivator.php';
	Titaniaann_Emaillist_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_titaniaann_emaillist' );
register_deactivation_hook( __FILE__, 'deactivate_titaniaann_emaillist' );



?>