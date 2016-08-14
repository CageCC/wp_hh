<?php
/**
 * Adds sidelink structures.
 *
 * 右侧边 咨询栏
 *
 * @package 		Theme Horse
 * @subpackage 		Interface
 * @since 			Interface 1.0
 * @license 		http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link 			http://themehorse.com/themes/interface
 */

/****************************************************************************************/
global $interface_theme_setting_value;
	$options = $interface_theme_setting_value;

	


add_action( 'interface_sidelink', 'interface_common_sidelink_area', 10 );
/** 
 * 咨询栏
 *
 * sidebar-footer.php
 *
 * Displays the footer widgets
 */
function interface_common_sidelink_area() {
	$qq = '00001';
	$tellPhone = '13800138000';
	$code = '';


	$slink = '<div class="common-sidelink" >';
	$slink .= '<a href="http://wpa.qq.com/msgrd?v=3&amp;uin='.$qq ;
	$slink .= '&amp;site=qq&amp;menu=yes" class="HomeQQ" target="_blank"><span class="QQbggray" style="display: none;">QQ咨询</span></a>';
	$slink .='<a href="javascript:;" class="Homedianhua"><span class="dianhuabggray" style="display: none;">'.$tellPhone; 
	// $link .= '<a href="javascript:;" class="Homeweixin"><span class="weixinerweima" style="display: none;"><img src="/webimages1/index_10.jpg" width="210" height="210" alt="官网微信"></span></a>';
	$slink .= '</span></a></div>';

	echo $slink;
}
/* end interface_common_sidelink_area */






?>