<?php
/**
 * Displays the index section of the theme.
 *
 *
 *
 * @package Theme Horse
 * @subpackage Interface
 * @since Interface 1.0
 */
?>
<?php 
	/**
	 * 头部
	 *
	 */
	get_header(); 
?>
<!-- main_container -->
<?php
	/** 
	 *
	 * interface_before_main_container hook
	 *
	 * 没做任何事情
	 */
	do_action( 'interface_before_main_container' );
?>
<?php
	/** 
	 * inc/structure/conten-extensions.php
	 *
	 * interface_main_container hook
	 *
	 * HOOKED_FUNCTION_NAME PRIORITY
	 *
	 * interface_content 10
	 */
	do_action( 'interface_main_container' );
?>
<?php
	/** 
	 *
	 * interface_after_main_container hook
	 *
	 * 没做任何事情
	 */
	do_action( 'interface_after_main_container' );
?>
<!-- get_footer -->
<?php
	/**
	 *
	 */
	get_footer(); 

	// end 
?>
