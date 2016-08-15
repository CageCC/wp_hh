<?php
/**
 * 显示单独的一篇文章时被调用
 *
 * Displays the single section of the theme.
 *
 * @package Theme Horse
 * @subpackage Interface
 * @since Interface 1.0
 */
?>
<?php 
	/**
	 * header.php
	 *
	 *
	 *
	 */
	get_header(); ?>
<!-- main_container -->
<?php
	/** 
	 * interface_before_main_container hook
	 */
	do_action( 'interface_before_main_container' );
?>
<?php
		/** 
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
	 * interface_after_main_container hook
	 */
	do_action( 'interface_after_main_container' );
?>
<?php get_footer(); ?>