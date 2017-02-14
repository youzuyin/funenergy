<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <meta name="format-detection" content="telephone=no" />
    <title>泛能船舶云监控</title>
    
    <link rel="stylesheet" type="text/css" href="/Public/css/reset.css" />
    <link rel="stylesheet" type="text/css" href="/Public/css/common.css" />
    <link rel="stylesheet" type="text/css" href="/Public/css/base.css" />
    <link rel="stylesheet" href="//at.alicdn.com/t/font_7zby4hi0gwopqfr.css">
    <script src="/Public/js/jquery-1.11.1.min.js" type="text/javascript"></script>
    
    <script src="/Public/js/echarts.min.js"></script>

    
    <style>
        #chart-m{
            width: 60%;
            height: 200px;
            position:absolute ;
            top: 35px;
            left: 50%;
            -webkit-transform: translateX(-50%);
            -moz-transform: translateX(-50%);
            -ms-transform: translateX(-50%);
            -o-transform: translateX(-50%);
            transform: translateX(-50%);
        }
        #chart-l{
            width: 40%;
            height: 200px;
            position:absolute ;
            top: 80px;
            left: 0;

        }
        #chart-r{
            width: 40%;
            height: 200px;
            position:absolute ;
            top: 80px;
            right: 0;
        }
        .speed-wrap{
            position:absolute;
            top: 190px;
            left: 50%;
            -webkit-transform: translateX(-50%);
            -moz-transform: translateX(-50%);
            -ms-transform: translateX(-50%);
            -o-transform: translateX(-50%);
            transform: translateX(-50%);
        }
        .speed-num{
            padding: 2px 30px;
            border:1px solid #ccc;
            border-radius: 3px;

        }
        .main{
            height: 220px;
            background: #fff;
        }
        .data-wrap{
            padding: 8px 4%;
            background: #fff;
            margin-top: 1px;
        }
        .data-tab td{
            padding: 3px ;
            text-align: center;
            border: solid 1px #ccc;
        }


    </style>

</head>
<body>

    <div class="header my-cf">
        <i class="iconfont icon-left my-fl"></i>
        <span><?php echo ($info['name']); ?>详情</span>
    </div>


    <div class="loading-wrap">

    </div>



</body>

    <script src="/Public/layer/layer.js" type="text/javascript"></script>



    <script>
        var sid = "<?php echo ($info['id']); ?>";
        $(function () {
            index();
            loadingPage('load_shipinfo.html?id='+sid)
        })
        //动态加载
        function loadingPage(pageName) {
            $.ajax({
                url: pageName,//你对数据库的操作路径
                type: 'post',//提交方式
                //dataType:'json',//返回数据的类型
                success: function (data) {
                    layer.closeAll();
                    //  在这里执行对页面的数据刷新
                    $('.loading-wrap').html($(data))
                },
                error: function (data) {
                    //后台处理数据失败后的回调函数
                    //   alert(data)
                }
            })
        }

        function index(){
            var intDiff = 0;//倒计时总秒数量
            var timer = setInterval(function () {
                intDiff++;
                if (intDiff % 30 == 0) {
                    //console.log(1);
                    loadingPage('load_shipinfo.html?id='+sid)
                }
            }, 1000);
        }




    </script>



</html>