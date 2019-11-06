<?php
/*
Plugin Name: STM Configurations
Plugin URI: http://stylemixthemes.com/
Description: STM Configurations
Author: Stylemix Themes
Author URI: http://stylemixthemes.com/
Text Domain: stm-configurations
Version: 4.0
*/

define( 'STM_CONFIGURATIONS', 'stm-post-type' );
define( 'STM_CONFIGURATIONS_URL', plugin_dir_url( __FILE__ ) );
define( 'STM_CONFIGURATIONS_PATH', dirname(__FILE__) );

if(!is_textdomain_loaded('stm-configurations')) {
	load_plugin_textdomain('stm-configurations', false, 'stm-configurations/languages');
}


/*Post types*/
require_once STM_CONFIGURATIONS_PATH . '/post-types/post_types.php';
require_once STM_CONFIGURATIONS_PATH . '/splash/functions.php';

/*WIDGETS*/
require_once( STM_CONFIGURATIONS_PATH . '/widgets/contacts.php' );
require_once( STM_CONFIGURATIONS_PATH . '/widgets/stm-event-list.php' );
require_once( STM_CONFIGURATIONS_PATH . '/widgets/recent_posts.php' );
require_once( STM_CONFIGURATIONS_PATH . '/widgets/follow_us.php' );
if(is_admin()) {
	require_once( STM_CONFIGURATIONS_PATH . '/admin/announcement/main.php' );
}