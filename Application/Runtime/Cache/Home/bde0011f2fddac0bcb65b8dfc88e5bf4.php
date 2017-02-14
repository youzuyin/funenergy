<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <meta name="format-detection" content="telephone=no" />
    <title>泛能船舶云监控</title>
    
        <link rel="stylesheet" href="/Public/css/loading.css">
        <script src="/Public/js/loading.js"></script>
        <script>
            document.write('<div  class="mop-load-10"></div>');
        </script>
    
    <link rel="stylesheet" type="text/css" href="/Public/css/reset.css" />
    <link rel="stylesheet" type="text/css" href="/Public/css/common.css" />
    <link rel="stylesheet" type="text/css" href="/Public/css/base.css" />
    <link rel="stylesheet" href="//at.alicdn.com/t/font_7zby4hi0gwopqfr.css">
    <script src="/Public/js/jquery-1.11.1.min.js" type="text/javascript"></script>
    
    
    <style>
        .main{
            padding: 10px 0;
        }
        .pership{
            padding: 10px 4%;
            background: #fff;
            margin-top: 1px;

        }
        .icon-ship{
            font-size: 25px;
        }
        .icon-right{
            margin-top: 5px;

        }

    </style>

</head>
<body>

    <div class="header my-cf">
        <i class="iconfont icon-left my-fl"></i>
        <span>船舶列表</span>
    </div>


    <div class="main">
        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="<?php echo U('shipinfo');?>?id=<?php echo ($vo["id"]); ?>">
        <div class="pership my-cf">
            <i class="iconfont icon-ship my-cl-wx my-valign-m"></i>
            <span class="my-margin-l10 my-valign-m"><?php echo ($vo["name"]); ?></span>
            <i class="iconfont icon-right my-fr my-valign-m"></i>
        </div>
            </a><?php endforeach; endif; else: echo "" ;endif; ?>
    </div>


</body>

    <script src="/Public/layer/layer.js" type="text/javascript"></script>






    <script>
        $(function () {
            $('.mop-load-10').fadeOut();//加载样式消失
        })
    </script>


</html>