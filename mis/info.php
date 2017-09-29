<?php
$con = mysqli_connect("bdm269199292.my3w.com","bdm269199292","1y2w3dYWD");
if (!$con)
{
    die('Could not connect: ' . mysqli_error());
}else{
    mysqli_query($con,"SET NAMES 'utf8'");
    mysqli_select_db($con,"bdm269199292_db");
    $query = "SELECT * FROM info";
    $result = mysqli_query($con, $query);
    $info = mysqli_fetch_assoc($result);
    mysqli_close($con);
}

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
    <link rel="stylesheet" href="css/pintuer.css">
    <link rel="stylesheet" href="css/admin.css">
    <script src="js/jquery.js"></script>
    <script src="js/pintuer.js"></script>  
</head>
<body>
<div class="panel admin-panel">
  <div class="panel-head"><strong><span class="icon-pencil-square-o"></span> 公司信息</strong></div>
  <div class="body-content">
      <form class="form-x" action="saveInfo.php" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <div class="label">
          <label>公司简介：</label>
        </div>
        <div class="field">
          <textarea class="input" name="desc"><?=$info['company_desc']?></textarea>
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>联系人：</label>
        </div>
        <div class="field">
          <input type="text" class="input" name="person" value="<?=$info['person']?>" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>手机：</label>
        </div>
        <div class="field">
          <input type="text" class="input" name="mobile" value="<?=$info['mobile']?>" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>电话：</label>
        </div>
        <div class="field">
          <input type="text" class="input" name="phone" value="<?=$info['phone']?>" />
          <div class="tips"></div>
        </div>
      </div>

      <div class="form-group">
        <div class="label">
          <label>传真：</label>
        </div>
        <div class="field">
          <input type="text" class="input" name="fax" value="<?=$info['fax']?>" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>QQ：</label>
        </div>
        <div class="field">
          <input type="text" class="input" name="qq" value="<?=$info['qq']?>" />
          <div class="tips"></div>
        </div>
      </div>
     
      <div class="form-group">
        <div class="label">
          <label>Email：</label>
        </div>
        <div class="field">
          <input type="text" class="input" name="mail" value="<?=$info['mail']?>" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>地址：</label>
        </div>
        <div class="field">
          <input type="text" class="input" name="address" value="<?=$info['address']?>" />
          <div class="tips"></div>
        </div>
      </div>  

      <div class="form-group">
        <div class="label">
          <label></label>
        </div>
        <div class="field">

          <button class="button bg-main icon-check-square-o" type="submit"> 提交</button>
        </div>
      </div>
    </form>
  </div>
</div>
</body></html>