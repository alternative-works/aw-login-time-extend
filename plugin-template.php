<?php
/*
Plugin Name: Plugin Template
Plugin URI: https://careru.jp/
Description: Sample Plugin.
Author: Alternative Works
Version: 0.0.1
Author URI: https://careru.jp/
*/
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once( dirname( __FILE__ ) . '/update-checker/update-checker.php');
require_once( dirname( __FILE__ ) . '/common/main.php' );