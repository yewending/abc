<?php
// 允许上传的图片后缀
for($i=1;$i<5;$i++){
    $allowedExts = array("gif", "jpeg", "jpg", "png");
    $temp = explode(".", $_FILES["img_".$i]["name"]);
//echo $_FILES["img_".$i]["size"];
    $extension = end($temp);     // 获取文件后缀名
    if(!$_FILES["img_".$i]["size"]){
        continue;
    }
    if ((($_FILES["img_".$i]["type"] == "image/gif")
            || ($_FILES["img_".$i]["type"] == "image/jpeg")
            || ($_FILES["img_".$i]["type"] == "image/jpg")
            || ($_FILES["img_".$i]["type"] == "image/pjpeg")
            || ($_FILES["img_".$i]["type"] == "image/x-png")
            || ($_FILES["img_".$i]["type"] == "image/png"))
        && ($_FILES["img_".$i]["size"] < 20480000)   // 小于 200 kb
        && in_array($extension, $allowedExts))
    {
        if ($_FILES["img_".$i]["error"] > 0)
        {
            echo "错误：: " . $_FILES["file"]["error"] . "<br>";
        }
        else
        {
            move_uploaded_file($_FILES["img_".$i]["tmp_name"], "lunbo/" . 'banner'.$i.'.'.$extension);
            echo "图片".$i."上传成功"."<br>";
        }
    }
    else
    {
        echo "图片".$i."格式不正确"."<br>";
    }
}


?>