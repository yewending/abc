<!DOCTYPE HTML>
<html>
<head>
    <title>【湖州华宸装饰】湖州装修公司|湖州装饰公司|湖州装修</title>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="湖州华宸 华宸装饰 湖州华宸装饰 湖州装饰 装饰 湖州装饰公司"/>
    <meta name="description" content=" 湖州华宸装饰有限公司，一直秉承：“质量第一、信誉至上”的经营理念，发扬“与时俱进，追求卓越”的华宸精神，专业从事室内外装修、设计服务。">
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);
        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/responsiveslides.min.js"></script>
    <script>
        $(function () {
            $("#slider").responsiveSlides({
                auto: true,
                nav: true,
                speed: 500,
                namespace: "callbacks",
                pager: true,
            });
        });
    </script>

</head>
<body>
<!--header-->
<div class="header head-top">
    <div class="container">
        <div class="header-top">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="navbar-brand">
                            <h1><a href="index.html">湖州华宸装饰</a></h1>
                        </div>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a href="index.html">主页 <span class="sr-only">(current)</span></a></li>
                            <li class="active"><a href="services.html">案例</a></li>
                            <li><a href="about.html">团队简介</a></li>


                            <li><a href="contact.php">联系我们</a></li>
                        </ul>

                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>

        </div>
    </div>
</div>
<!--services-->
<div class="content">
    <div class="services">
        <div class="container">
            <div class="services-main">
                <h2>欧式风格</h2>
                <div class="col-xs-6">
                    <img class="news-img" src="mis/images/1/1.jpg"/>
                </div>
                <div class="col-xs-6">
                    <img class="news-img" src="mis/images/1/2.jpg"/>
                </div>
                <div class="col-xs-6">
                    <img class="news-img" src="mis/images/1/3.jpg"/>
                </div>
                <div class="col-xs-6">
                    <img class="news-img" src="mis/images/1/3.jpg"/>
                </div>

                <p class="news-content">
                    <?php
                    $file = fopen("mis/article/article1.txt","r");
                    echo fread($file,filesize("mis/article/article1.txt"));
                    fclose($file);
                    ?>


                </p>

            </div>
        </div>
    </div>

    <!--GET IN TOUCH-->
    <div class="touch-section">
        <div class="container">
            <h3>联系我们</h3>
            <div class="touch-grids">
                <div class="col-md-4 touch-grid">

                    <h4>地址 : 浙江省湖州市吴兴区红星环球品牌中心北门三楼</h4>


                </div>
                <div class="col-md-4 touch-grid">
                    <h4>余经理 : 131-8520-5025</h4>
                </div>

                <div class="col-md-4 touch-grid">
                    <h4>E-mail : <a href="mailto:309648094@qq.com"> 309648094@QQ.COM</a></h4>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!--GET IN TOUCH-->
</div>
<!--footer-->
<div class="footer-section">
    <div class="container">
        <div class="footer-top">
            <p>Copyright &copy; 2017.湖州华宸装饰有限公司 版权所有 浙ICP备17040637号</p>
        </div>

    </div>
</div>
</body>
</html>
