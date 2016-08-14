<?php
/**
 * Interface defining constants, adding files and WordPress core functionality.
 *
 * Defining some constants, loading all the required files and Adding some core functionality.
 * @uses add_theme_support() To add support for post thumbnails and automatic feed links.
 * @uses register_nav_menu() To add support for navigation menu.
 * @uses set_post_thumbnail_size() To set a custom post thumbnail size.
 *
 * @package Theme Horse
 * @subpackage Interface
 * @since Interface 1.0
 */

// 加载本地 设置
add_action( 'after_setup_theme', 'interface_setup' );


/**
 * This content width is based on the theme structure and style.
 */
 function interface_setup() {
		global $content_width;


		if ( ! isset( $content_width ) ){
			$content_width = 700;
		}
}
/* end interface_setup*/

/**
 * 初始化
 *
 * 定义常量
 */
add_action( 'interface_init', 'interface_constants', 10 );



/**
 *
 * 定义主题常量
 *
 * This function defines the Interface theme constants
 *
 * @since 1.0
 */
function interface_constants() {

	/** Define Directory Location Constants */
	define( 'INTERFACE_PARENT_DIR', get_template_directory() );
	define( 'INTERFACE_CHILD_DIR', get_stylesheet_directory() );
	define( 'INTERFACE_IMAGES_DIR', INTERFACE_PARENT_DIR . '/images' );
	define( 'INTERFACE_INC_DIR', INTERFACE_PARENT_DIR. '/inc' );
	define( 'INTERFACE_PARENT_CSS_DIR', INTERFACE_PARENT_DIR. '/css' );
	define( 'INTERFACE_ADMIN_DIR', INTERFACE_INC_DIR . '/admin' );
	define( 'INTERFACE_ADMIN_IMAGES_DIR', INTERFACE_ADMIN_DIR . '/images' );
	define( 'INTERFACE_ADMIN_JS_DIR', INTERFACE_ADMIN_DIR . '/js' );
	define( 'INTERFACE_ADMIN_CSS_DIR', INTERFACE_ADMIN_DIR . '/css' );
	define( 'INTERFACE_JS_DIR', INTERFACE_PARENT_DIR . '/js' );
	define( 'INTERFACE_CSS_DIR', INTERFACE_PARENT_DIR . '/css' );	
	define( 'INTERFACE_FUNCTIONS_DIR', INTERFACE_INC_DIR . '/functions' );
	define( 'INTERFACE_SHORTCODES_DIR', INTERFACE_INC_DIR . '/shortcodes' );
	define( 'INTERFACE_STRUCTURE_DIR', INTERFACE_INC_DIR . '/structure' );

	/** So we can define with a child theme */
	if ( ! defined( 'INTERFACE_LANGUAGES_DIR' ) ) {
		define( 'INTERFACE_LANGUAGES_DIR', INTERFACE_PARENT_DIR . '/languages' );
	}
		
	define( 'INTERFACE_WIDGETS_DIR', INTERFACE_INC_DIR . '/widgets' );

	/** Define URL Location Constants */
	define( 'INTERFACE_PARENT_URL', get_template_directory_uri() );
	define( 'INTERFACE_CHILD_URL', get_stylesheet_directory_uri() );
	define( 'INTERFACE_IMAGES_URL', INTERFACE_PARENT_URL . '/images' );
	define( 'INTERFACE_INC_URL', INTERFACE_PARENT_URL . '/inc' );
	define( 'INTERFACE_ADMIN_URL', INTERFACE_INC_URL . '/admin' );
	define( 'INTERFACE_ADMIN_IMAGES_URL', INTERFACE_ADMIN_URL . '/images' );
	define( 'INTERFACE_ADMIN_JS_URL', INTERFACE_ADMIN_URL . '/js' );
	define( 'INTERFACE_ADMIN_CSS_URL', INTERFACE_ADMIN_URL . '/css' );
	define( 'INTERFACE_JS_URL', INTERFACE_PARENT_URL . '/js' );
	define( 'INTERFACE_CSS_URL', INTERFACE_PARENT_URL . '/css' );
	define( 'INTERFACE_FUNCTIONS_URL', INTERFACE_INC_URL . '/functions' );
	define( 'INTERFACE_SHORTCODES_URL', INTERFACE_INC_URL . '/shortcodes' );
	define( 'INTERFACE_STRUCTURE_URL', INTERFACE_INC_URL . '/structure' );
	/** So we can predefine to child theme */
	if ( ! defined( 'INTERFACE_LANGUAGES_URL' ) ) {
		define( 'INTERFACE_LANGUAGES_URL', INTERFACE_PARENT_URL . '/languages' );
	}


	define( 'INTERFACE_WIDGETS_URL', INTERFACE_INC_URL . '/widgets' );

}
/* end interface_constants*/


/**
 * 初始化
 *
 * 加载文件
 *
 */
add_action( 'interface_init', 'interface_load_files', 15 );


/**
 * 加载主题需要的文件
 *
 *
 * Loading the included files.
 *
 * @since 1.0
 */
function interface_load_files() {
	/** 
	 * interface_add_files hook
	 *
	 * Adding other addtional files if needed.
	 */
	do_action( 'interface_add_files' );

	/** Load functions */
	require_once( INTERFACE_FUNCTIONS_DIR . '/i18n.php' );
	require_once( INTERFACE_FUNCTIONS_DIR . '/custom-header.php' );
	require_once( INTERFACE_FUNCTIONS_DIR . '/functions.php' );
	require_once( INTERFACE_FUNCTIONS_DIR . '/custom-style.php' );
	require_once( INTERFACE_ADMIN_DIR . '/interface-themedefaults-value.php' );
	require_once( INTERFACE_ADMIN_DIR . '/theme-option.php' );
	require_once( INTERFACE_ADMIN_DIR . '/interface-metaboxes.php' );
	

	/** Load Shortcodes */
	require_once( INTERFACE_SHORTCODES_DIR . '/interface-shortcodes.php' );

	/** Load Structure */
	require_once( INTERFACE_STRUCTURE_DIR . '/header-extensions.php' );
	require_once( INTERFACE_STRUCTURE_DIR . '/searchform-extensions.php' );
	require_once( INTERFACE_STRUCTURE_DIR . '/sidebar-extensions.php' );
	require_once( INTERFACE_STRUCTURE_DIR . '/footer-extensions.php' );
	require_once( INTERFACE_STRUCTURE_DIR . '/content-extensions.php' );

	/** Load Widgets and Widgetized Area */
	require_once( INTERFACE_WIDGETS_DIR . '/interface_widgets.php' );
}
/* end interface_load_files */

/**
 * 初始化 
 *
 * 加载核心功能
 *
 *
 */
add_action( 'interface_init', 'interface_core_functionality', 20 );



/**
 * Adding the core functionality of WordPess.
 *
 * @since 1.0
 */
function interface_core_functionality() {
	/** 
	 * interface_add_functionality hook
	 *
	 * Adding other addtional functionality if needed.
	 */
	do_action( 'interface_add_functionality' );


	// Add default posts and comments RSS feed links to head
	add_theme_support( 'automatic-feed-links' );

	// This theme uses Featured Images (also known as post thumbnails) for per-post/per-page.
	add_theme_support( 'post-thumbnails' ); 
 
	/**
	 * 菜单挂载
	 * 
	 * 可挂载多个菜单
	 *
	 *
	 * This theme uses wp_nav_menu() in header menu location.
	 *
	 */
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'interface' ),
		
	) );




	// Add Interface custom image sizes
	add_image_size( 'featured', 670, 300, true );
	add_image_size( 'featured-medium', 230, 160, true );

	// used on Featured Slider on Homepage Header for narrow layout
	add_image_size( 'slider-narrow', 1038, 500, true ); 	
	
	// used on Featured Slider on Homepage Header for wide layout	
	add_image_size( 'slider-wide', 1440, 500, true ); 

	// used to show gallery all images			
	add_image_size( 'gallery', 474, 342, true ); 

	//used for icon on business layout				
	add_image_size( 'icon', 100, 100, true );						
	



	/**
	 * This theme supports custom background color and image
	 */
	add_theme_support( 'custom-background' );



	// Adding excerpt option box for pages as well
	add_post_type_support( 'page', 'excerpt' );

	// 添加友情链接
	add_filter( 'pre_option_link_manager_enabled', '__return_true' );
}
/* end interface_core_functionality */



/** 
 * interface_init hook
 *
 * Hooking some functions of functions.php file to this action hook.
 */
do_action( 'interface_init' );




?>