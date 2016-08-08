# wordpress 开发记录


### 国际化
将翻译文件(**.po) 文件放置在目录wp-content/languages/themes/ 即可


### 注册菜单到后台
修改主题的functions.php
```php
// 注册菜单(主菜单、社交菜单)
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'twentysixteen' ),
		'social'  => __( 'Social Links Menu', 'twentysixteen' ),
		'homeindex' =>__( 'Home index Links Menu', 'twentysixteen' ), // 可任意添加
	) );
```