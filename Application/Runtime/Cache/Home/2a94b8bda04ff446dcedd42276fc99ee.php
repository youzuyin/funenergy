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
     body{
         background: #fff;

     }
    .login-wrap input{
        border: 1px solid #ccc;
        border-radius: 3px;
        padding: 8px 0;
        text-align: center;
        width: 100%;
        margin-top: 5px;
        background: #fff;
     }
    .login-wrap{
        width: 70%; ;
        margin: 15vh auto;
    }
    .per-wrap{
         display: inline-block;
     }
     .log-btn{
         width: 100%;
         padding: 10px 0;
         color: #fff;
         background: #04bd02;
         border-radius: 5px;
         margin-top: 50px;
         font-size: 16px;
     }
     .register-btn{
         width: 100%;
         padding: 10px 0;
         background: #f9f8fd;
         border: 1px solid #ccc;
         border-radius: 5px;
         margin-top: 10px;
         font-size: 16px;
     }

 </style>

</head>
<body>

    <div class="header my-cf">
        <i class="iconfont icon-left my-fl"></i>
        <span>登陆</span>
    </div>


   <div class="login-wrap">
       <p>用户名</p>
       <input type="text" id="name" placeholder="请输入用户名">
       <p class="my-margin-t15">密码</p>
       <input type="password" id="pwd" placeholder="请输入密码">

       <button class="log-btn">登陆</button>
       <button class="register-btn">注册账号</button>
   </div>

</body>

    <script src="/Public/layer/layer.js" type="text/javascript"></script>



    <script src="/Public/js/Ajax.js" type="text/javascript"></script>
    <script>
        $('.log-btn').on('touchend', function () {
            var uploading=layer.msg('登录中请稍等', {
                icon: 16
                ,shade: 0.01
            });

            var url="<?php echo U('dologin');?>";
            var jsondata = {name:$('#name').val(),pwd:$('#pwd').val()};
            ajaxGet(url,jsondata,reslogin);
            layer.close(uploading);
        })

        function reslogin(data){
            if(data.res == 0){
                layer.msg(data.word); return false;
            }
            location.href = "<?php echo U('ship/index');?>";
        }

    </script>



    <script>
        $(function () {
            $('.mop-load-10').fadeOut();//加载样式消失
        })
    </script>


</html>