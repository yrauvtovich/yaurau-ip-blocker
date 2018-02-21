<?php
/**
 * Plugin Name:       Yaurau IP Blocker
 * Plugin URI:        https://github.com/yaurau/yaurau-ip-blocker
 * Description:       A plugin for output random quote.
 * Version:           1.0.0
 * Author:            Rauvtovich Yauhen
 * Author URI:        https://github.com/yaurau
 * License:           GPL-2.0+
 */
require_once __DIR__ . '/autoload.php';
const MY_PLAGIN_PAGE = 'yaurau_ip_blocker';
register_activation_hook( __FILE__, ['Yaurau_IP_Blocker_Activator','activate']);
register_deactivation_hook( __FILE__, ['Yaurau_IP_Blocker_Deactivator','deactivate']);
Yaurau_Random_Quote_Admin::getCreateMenu();
add_filter('plugin_action_links_' . plugin_basename(__FILE__), ['Yaurau_Random_Quote_Admin', 'getSettingsLink'] );
add_action( 'plugins_loaded', ['Yaurau_IP_Blocker','handleIP']);
add_action( 'init', ['Yaurau_IP_Blocker','cleanIPRepository']);
add_action( 'init', ['Yaurau_IP_Blocker','redirectingBlockedIP']);





















