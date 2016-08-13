<?php
/**
 * wp的执行流程：
 *  第一步是核心文件的加载，
 *  第二步是业务逻辑的执行，
 *  第三步是模板的加载渲染，最后输出到浏览器客户端。
 * 
 *  不想使用wp的模板加载，也就是说不输出模板数据，
 *  只想输出原始的执行数据输出到客户端，比如APi数据的返回，
 *  可以直接设置这个常量为false，
 *
 * Loads the WordPress environment and template.
 *
 * @package WordPress
 */

if ( !isset($wp_did_header) ) {

	$wp_did_header = true;

	// Load the WordPress library.
	require_once( dirname(__FILE__) . '/wp-load.php' );

	// Set up the WordPress query.
	wp();

	// Load the theme template.
	require_once( ABSPATH . WPINC . '/template-loader.php' );

}
