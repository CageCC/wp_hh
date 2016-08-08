# wordpress install


### 最低系统需求

PHP 5.2.4或更高版本。
MySQL 5.0或更高版本。

### 数据库 预备
数据库名
数据库用户名
数据库密码
数据库主机
数据表前缀（table prefix，特别是当您要在一个数据库中安装多个WordPress时）


### 配置信息
站点标题：  龙心
用户名：longxin
密码: longxin123
您的电子邮件: longxin@qq.com


### 步骤

1 将WordPress压缩包解压至一个空文件夹，并上传它。

2 在浏览器中访问wp-admin/install.php。它将帮助您把数据库连接信息写入到wp-config.php文件中。
  
    
 * 如果上述方法无效，也没关系，这很正常。请用文本编辑器（如写字板）手动打开wp-config-sample.php文件，填入数据库信息。
 * 将文件另存为wp-config.php并上传。
 * 在浏览器中访问wp-admin/install.php。
3 在配置文件就绪之后，WordPress会自动尝试建立数据库表。若发生错误，请检查wp-config.php文件中填写的信息是否准确，然后再试。若问题依然存在，请访问中文支持论坛寻求帮助。

4 若您不设置密码，请牢记生成的随机密码。若您不输入用户名，用户名将是admin。

5 完成后，安装向导会带您到登录页面。用刚刚设置的用户名和密码登录。若您使用随机密码，在登录后可以按照页面提示修改密码。


### 系统推荐

启用mod_rewrite这一Apache模块。
在您的站点设置至 http://cn.wordpress.org的链接。
Apache模块mod_rewrite。