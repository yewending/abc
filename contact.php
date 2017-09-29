<?php
$con = mysqli_connect("bdm269199292.my3w.com", "bdm269199292", "1y2w3dYWD");
if (!$con) {
    die('Could not connect: ' . mysqli_error());
} else {
    mysqli_query($con,"SET NAMES 'utf8'");
    mysqli_select_db($con, "bdm269199292_db");
    $query = "SELECT * FROM info";
    $result = mysqli_query($con, $query);
    $info = mysqli_fetch_assoc($result);
    mysqli_close($con);
}
?>

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
                            <li><a href="services.html">案例</a></li>
<!--                            <li><a href="about.html">团队简介</a></li>-->

                            <li class="active"><a href="contact.php">联系我们</a></li>
                        </ul>

                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>

        </div>
    </div>
</div>
<!--header-->
<!--about-->

<div class="content">
    <div class="contact">
        <div class="container">
            <div class="col-xs-12">
                <div class="baidu-map">
                    <iframe src="http://j.map.baidu.com/WbJRj"
                            style="width:100%;height:400px; border:none;border-radius: 10px;"
                            align="float:middle"></iframe>
                </div>
            </div>
            <div class="col-xs-12">
                <h4 class="company-introduction">公司简介</h4>
                <p class="company-text">
                    <?php echo $info['company_desc'] ?>
                </p>
            </div>


        </div>
    </div>
    <!--What We Offer?-->
    <div class="whatweoffer">
        <div class="container">
            <h3>为什么选择华宸</h3>
            <div class="offer-grids">
                <div class="col-md-7 offer-grid">
                    <h4>您的满意，是我们永远的追求</h4>
                    <p>公司从事装饰装修行业多年，有着创新的设计、合理的报价，还有一批独立的专业化的施工队伍，确保施工绿色环保，安全文明。 公司本着“崇尚自由，追求完美”的设计理念，凭借超前的设计构思、合理的预算报价、精良的施工工艺，优质的全程服务，真诚的为每一位顾客，量身定制全新、优雅、舒适的居家生活、文化空间。 </p>

                </div>
                <div class="col-md-5 offer-grid1">
                    <h4>设计专业度</h4>
                    <div class="progress">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 98%">
                            <span class="sr-only">40% Complete (success)</span>
                        </div>
                    </div>
                    <h4>施工专业度</h4>
                    <div class="progress">
                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                            <span class="sr-only">98% Complete</span>
                        </div>
                    </div>
                    <h4>品牌专业度</h4>
                    <div class="progress">
                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                            <span class="sr-only">98% Complete (warning)</span>
                        </div>
                    </div>
                    <h4>售后专业度</h4>
                    <div class="progress">
                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                            <span class="sr-only">98% Complete (danger)</span>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

    <!--What We Offer?-->
    <!--GET IN TOUCH-->
    <div class="touch-section">
        <div class="container">
            <h3>联系我们</h3>
            <div class="touch-grids">

                <div class="col-md-4 touch-grid">
                    <h4>联系人： <?php echo $info['person']?></h4>
                </div>
                <div class="col-md-4 touch-grid">
                    <h4> 手机号：<?php echo $info['phone'] ?></h4>
                </div>
                <div class="col-md-4 touch-grid">
                    <h4>E-mail : <?php echo $info['mail'] ?></a></h4>
                </div>
                <br> <br>
                <div class="col-md-4 touch-grid">
                    <h4>传真 : <?php echo $info['fax'] ?></a></h4>
                </div>
                <div class="col-md-4 touch-grid">
                    <h4>QQ : <?php echo $info['qq'] ?></a></h4>
                </div>
                <div class="col-md-4 touch-grid">
                    <h4>电话 : <?php echo $info['mobile'] ?></a></h4>
                </div>
                <br> <br>
                <div class="col-md-4 touch-grid site">

                    <h4> 地址： <?php echo $info['address'] ?></h4>
                </div>
                <br> <br>
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
</html>
