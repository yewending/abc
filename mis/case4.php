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
    <div class="body-content">
        <form class="form-x" action="upload.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <div class="label">
                    <label>图片1：</label>
                </div>
                <div class="field">
                    <input type="file" id="url1" name="img_1" class="input tips" style="width:25%; float:left;"  value=""  data-toggle="hover" data-place="right" />
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>图片2：</label>
                </div>
                <div class="field">
                    <input type="file" id="url1" name="img_2" class="input tips" style="width:25%; float:left;"  value=""  data-toggle="hover" data-place="right" />
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>图片3：</label>
                </div>
                <div class="field">
                    <input type="file" id="url1" name="img_3" class="input tips" style="width:25%; float:left;"  value=""  data-toggle="hover" data-place="right" />
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>图片4：</label>
                </div>
                <div class="field">
                    <input type="file" id="url1" name="img_4" class="input tips" style="width:25%; float:left;"  value=""  data-toggle="hover" data-place="right" />
                </div>
            </div>

            <div class="form-group">
                <div class="label">
                    <label>当前内容：</label>
                </div>
                <div class="field">
          <textarea name="content">
            <?php
            $file = fopen("article/article4.txt","r");
            echo fread($file,filesize("article/article4.txt"));
            fclose($file);
            ?>

          </textarea>
                    <div class="tips"></div>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label></label>
                </div>
                <div class="field">
                    <input type="hidden" name="case" value="4">
                    <button class="button bg-main icon-check-square-o" type="submit"> 提交</button>
                </div>
            </div>
        </form>
    </div>
</div>
</body></html>