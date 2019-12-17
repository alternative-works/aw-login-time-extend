<?php
/*
Plugin Name: AW Login Time Extend
Plugin URI: https://careru.jp/
Description: ログイン期限を実質無期限にする
Author: Alternative Works
Version: 0.0.3
Author URI: https://careru.jp/
*/
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once( dirname( __FILE__ ) . '/update-checker/update-checker.php');
require_once( dirname( __FILE__ ) . '/common/main.php' );