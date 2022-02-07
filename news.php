<?php 
/**
 Plugin Name: News
Plugin URI: http://wordpress.org/plugins/
Description: News posting with shortcode.
Author: Vaibhav Gangrade
Version: 1.0.0
Author URI: 
*/

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
//Defining contants 
define("PLUGIN_DIR_PATH",plugin_dir_path(__FILE__));
define("PLUGIN_URL",plugins_url());
define("SITE_URL",site_url());

//Including files
include_once('news-cpt.php');
include_once('news-taxonomy.php');
include_once('news-shortcode.php');
include_once('news-styles_and_js.php');


?>