<?php
//session_start();
//$views = $_SESSION['views'];
//if (1 != $views)
if (0)
{
    header("Location:login.html");
}else{
    ?>
    <!DOCTYPE html>
    <html lang="zh-cn">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="renderer" content="webkit">
        <title>湖州华宸装饰</title>
        <meta name="keywords" content="湖州华宸 华宸装饰 湖州华宸装饰 湖州装饰 装饰 湖州装饰公司"/>
        <meta name="description" content=" 湖州华宸装饰有限公司，一直秉承：“质量第一、信誉至上”的经营理念，发扬“与时俱进，追求卓越”的华宸精神，专业从事室内外装修、设计服务。">
        <meta name="keywords" content="湖州华宸装饰" />
        <meta name="description" content="湖州华宸装饰。" />
        <link rel="stylesheet" href="css/pintuer.css">
        <link rel="stylesheet" href="css/admin.css">
        <script src="js/jquery.js"></script>
    </head>

    <body style="background-color:#f2f9fd;">


    <div class="header bg-main">
        <div class="logo margin-big-left fadein-top">
            <h1><img src="images/y.jpg" class="radius-circle rotate-hover" height="50" alt="" />后台管理中心</h1>
        </div>
        <div class="head-l"><a class="button button-little bg-green" href="" target="lunbo.html"><span class="icon-home"></span> 前台首页</a> &nbsp;&nbsp;&nbsp;<a class="button button-little bg-red" href="login.html"><span class="icon-power-off"></span> 退出登录</a> </div>
    </div>
    <div class="leftnav">
        <ul style="display:block">
            <li><a href="lunbo.html" target="right"><span class="icon-caret-right"></span>首页轮播</a></li>
            <li><a href="info.php" target="right"><span class="icon-caret-right"></span>公司信息</a></li>
        </ul>
        <h2><span class="icon-user"></span>案例修改</h2>
        <ul style="display:block">
            <li><a href="case1.php" target="right"><span class="icon-caret-right"></span>案例一</a></li>
            <li><a href="case1.php" target="right"><span class="icon-caret-right"></span>案例二</a></li>
            <li><a href="case1.php" target="right"><span class="icon-caret-right"></span>案例三</a></li>
            <li><a href="case1.php" target="right"><span class="icon-caret-right"></span>案例四</a></li>
        </ul>

    </div>
    <script type="text/javascript">
        $(function(){
            $(".leftnav h2").click(function(){
                $(this).next().slideToggle(200);
                $(this).toggleClass("on");
            })
            $(".leftnav ul li a").click(function(){
                $("#a_leader_txt").text($(this).text());
                $(".leftnav ul li a").removeClass("on");
                $(this).addClass("on");
            })
        });
    </script>

    <div class="admin">
        <iframe scrolling="auto" rameborder="0" src="lunbo.html" name="right" width="100%" height="100%"></iframe>
    </div>
    </body>
    </html>
<?php
}
?>
