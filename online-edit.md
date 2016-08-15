# 上线编辑操作

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
