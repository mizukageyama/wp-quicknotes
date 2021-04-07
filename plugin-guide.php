/**
 * Plugin Name: YOUR PLUGIN NAME
 */

register_activation_hook( __FILE__, 'my_activation_hook' ); // fired once
register_deactivation_hook( __FILE__, 'my_deactivation_hook' );

// uninstall method :
// 1. register_uninstall_hook(__FILE__, 'pluginprefix_function_to_run');
// 2. uninstall.php :
    // first code in uninstall.php
    if (!defined('WP_UNINSTALL_PLUGIN')) die;


