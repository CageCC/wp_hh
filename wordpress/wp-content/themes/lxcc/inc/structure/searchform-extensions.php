<?php
/**
 * Renders the search form of the theme.
 *
 * @package 		Theme Horse
 * @subpackage 		Interface
 * @since 			Interface 1.0
 * @license 		http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link 			http://themehorse.com/themes/interface
 */



add_action( 'interface_searchform_hot', 'interface_display_searchform_hot', 10 );

/**
 * 显示推荐热词
 */
function interface_display_searchform_hot() {

	if( is_active_sidebar( 'interface_search_hothit_sidebar' ) ) {

		// 注册的自定义 侧边栏
		dynamic_sidebar( 'interface_search_hothit_sidebar' );
		
	}
}


/****************************************************************************************/

add_action( 'interface_searchform', 'interface_display_searchform', 10 );
/**
 * Displaying the search form.
 *
 */
function interface_display_searchform() {
	$categories = get_the_tag_list( '<a>', ' ', '</a>' );;

	// var_dump($categories);exit;
?>

<form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get" class="searchform clearfix">
	<div class="search-list">
		<label class="assistive-text">
			<?php _e( 'Search', 'interface' ); ?>
		</label>
		<input type="search" placeholder="<?php esc_attr_e( 'Search', 'interface' ); ?>" class="s field" name="s">
		<input type="submit" value="<?php esc_attr_e( 'Search', 'interface' ); ?>" class="search-submit">
	</div>
	<div class="search-list search-hot-tip">
		<?php 
			do_action( 'interface_searchform_hot' );
		?>
	</div>
</form>
<!-- .search-form -->
<?php
}
/* end  interface_display_searchform */


?>
