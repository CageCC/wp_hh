# 上线编辑操作

### （尾部）版权修改：
后台 -- 小工具 -- Theme Options -- 重要 -- 版权信息
```
<a href="javascript:;">@Copyright，版权归深圳龙城心血管医院所有</a>

© Copyright - <a href='http://themeforest.net/user/QuanticaLabs/portfolio?ref=QuanticaLabs' target='_blank'>MediCenter Theme</a> by <a href='http://quanticalabs.com' title='QuanticaLabs' target='_blank'>QuanticaLabs</a>
```

### （尾部）修改版权 边框颜色
后台 -- 小工具 -- Theme Options -- 基本 -- 其他 -- 版权区域边框颜色
```
    00406E
    
    
```

### （尾部）导航菜单
后台 -- 小工具 -- Sidebar Footer Top 

### (右侧边栏) 联系我们
后台 -- 小工具 -- Sidebar Home Right 
```
<p class="info">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut volutpat rutrum eros sit amet sollicitudin.</p>
--
<p class="info">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut volutpat rutrum eros sit amet sollicitudin.</p>
```

### (右侧边栏) 科室导航 -- 待修改
后台 -- 小工具 -- Sidebar Home Right 

```

```

### （body） 医疗环境
后台 -- 页面 -- Home

添加代码：指定分类 category="28,34"
```
[vc_row top_margin="none" el_position="first last"]
	[vc_column top_margin="none"]
		[medicenter_gallery shortcode_type="gallery" header="医疗环境" order_by="menu_order,title" order="ASC" type="list_with_details" layout="gallery_4_columns" featured_image_size="default" title_box="0" details_page="-" display_method="dm_carousel" all_label="All Departments" id="carousel" autoplay="0" pause_on_hover="1" scroll="1" effect="scroll" easing="swing" duration="500" items_per_page="4" ajax_pagination="1" ids="-"  display_headers="1" headers_type="h2" display_social_icons="0" images_loop="0" lightbox_icon_color="blue_light" top_margin="page_margin_top" el_position="first last" animation="1"]
	[/vc_column]
[/vc_row]
```
### （body）轮播图
后台 -- 外观 -- Theme Options -- 轮播图


### （body）顶部菜单
后台 -- 外观 -- 小工具 -- sliderbar home top
链接：可留空，可填page名称，可填完整链接


```
[items_list style='simple' top_margin='none' class='thin opening_hours']
	[item class='clearfix' value='8.00 - 17.00']Monday - Friday[/item]
	[item class='clearfix' value='9.30 - 17.30']Saturday[/item]
	[item class='clearfix' value='9.30 - 15.00']Sunday[/item]
[/items_list]
```


### （body）首页主体输出 
后台 -- 页面 -- home
医院动态
category: 可选取分类
查看更多  Show all
```php
[vc_row top_margin="page_margin_top" el_position="first last"][vc_column top_margin="none" width="2/3"][box_header title="医院动态" type="h3" bottom_border="1" top_margin="none" el_position="first" animation="1"][blog mc_pagination="0" items_per_page="4" featured_image_size="default" layout_type="2" ids="-" category="-" order_by="date" order="desc" show_post_title="1" read_more="0" show_post_categories="0" show_post_author="0" show_post_comments_box="0" lightbox_icon_color="blue_light" top_margin="none"][show_all_button title="Show all →" url="blog" el_position="last"][/vc_column][vc_column top_margin="none" width="1/3"][vc_widget_sidebar sidebar_id="sidebar-home-right" top_margin="none" el_position="first last"][/vc_column][/vc_row]
```

### （header）菜单制作
后台 -- 外观 -- 菜单 -- 编辑 页面菜单


end =================================

- - - - -


### 关闭调试模式：
站点根目录下 wp-config.php
```php
define('WP_DEBUG', true);
```

### 菜单创建

创建分类类目：
先创建一级、再创建子类二级，以此类推：

首页（不创建分类，使用url即可，并将主站的url赋值）

关于龙心|about

    医院简介|yyjj
    科室介绍|ksjs
    医院动态|yydt
    媒体报道|mtbd

专家库|zjia

科室导航|ksdh

        心内科|xnk

            冠心病|gxb
            心绞痛|xjt
            高血压|gxy
            心肌病|xjb
            心律不齐|xlbq
            心律失常|xlsc
            心力衰竭|xlsj
            心肌梗塞|xjgs

        心外科|xwk
            先天性心脏病|xtxxzb
            后天性心脏瓣膜病|htxxzbmb
            缺血性心脏病|qxxxzb
            心脏肿瘤|xzzl

        神经内科|sjnk            
            脑梗塞|ngs
            脑出血|ncx
            偏头痛|ptt
            脑膜炎|nmy
            脊髓炎|jsy
            坐骨神经病|zgsjb
            三叉神经痛|scsjt

        神经外科|sjwk
            癫痫|dx
            帕金森病|pjsb

先进设备|xjsb

经典案例|jdal

体检中心|tjzx

就诊指南|jyzn

        专家出诊|zjcz
        挂号须知|ghxz
        就诊须知|jzxz
        就医流程|jylc
        门诊流程|mzlc
        健康检查|jkjc
        医保信息|ybxx
        来院路线|lylx
        住院流程|zylc

预约挂号|yygh

### 后台创建一个空白page
标题： home

选择 Business Template 模板，

管理界面>设置>阅读菜单下, 将 home页面作为“静态首页”

### 首页轮播图

创建一个分类，标记为：轮播图
创建文章，并归类为轮播图，同时设置页面显示：
编辑主题--> Featured Post/Page Slider --> 添加 post id

### 开启摘要
在写文章界面中，点击左上角‘显示选项’，点击摘要即可




### 编辑站点 域名
编辑后台--> 设置 -- 常规设置


### 去掉副标题
编辑后台--> 设置 -- 常规设置


### 禁止wp更新

安装插件： Disable Updates Manager

###  优化google 字体
Disable Google Fonts Plus 插件

### 分页插件

Wp-PageNavi 

Text For Number Of Pages 总页数
Text For Current Page 当前页
Text For Page 页数
Text For First Post 首页
Text For Last Post 尾页
Text For Next Post 下一页
Text For Previous Post 上一页
Text For Next … 下
Text For Previous … 上

### 中文链接出现 404
需要修改wp的核心文件：wp-includes/class-wp.php
186行：添加需要解码一下中文字符
```php
    $req_uri=urldecode($req_uri);
```


### 可以选择安装图片插件
image-widget


### footer 个性化设置

![](./_image/2016-08-17 00-05-07.jpg)

