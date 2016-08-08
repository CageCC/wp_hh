# wordpress 安装优化

### 内容缓存

根目录的 .htaccess 文件添加以下代码：

ExpiresActive On
ExpiresByType image/gif "access plus 30 days"
ExpiresByType image/jpeg "access plus 30 days"
ExpiresByType image/png "access plus 30 days"
ExpiresByType text/css "access plus 1 week"
ExpiresByType text/javascript "access plus 1 week"