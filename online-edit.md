# 上线编辑操作

### 关闭调试模式：
站点根目录下 wp-config.php
```php
define('WP_DEBUG', true);
```

### 菜单创建
先创建一级、再创建子类二级，以此类推：

首页

关于龙心|about

    医院简介|yyjj
    科室介绍|ksjs
    医院动态|yydt
    媒体报道|mtbd

专家库

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

        心外科|xnk
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

先进设备

经典案例

体检中心

就诊指南

        专家出诊|zjcz
        挂号须知|ghxz
        就诊须知|jzxz
        就医流程|jylc
        门诊流程|mzlc
        健康检查|jkjc
        医保信息|ybxx
        来院路线|lylx
        住院流程|zylc

预约挂号

