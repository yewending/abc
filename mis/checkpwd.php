
<?php

    $con = mysqli_connect("bdm269199292.my3w.com","bdm269199292","1y2w3dYWD");
    if (!$con)
    {
        die('Could not connect: ' . mysqli_error());
    }

    mysqli_query($con,"SET NAMES 'utf8'");
    mysqli_select_db($con,"bdm269199292_db");
//var_dump($_POST);
    $name = $_POST['name'];
    $pwd = $_POST['pwd'];
    $query = "select * from user where name = '$name' and pwd = '$pwd'";
    $result = mysqli_query($con, $query);
    mysqli_close($con);
    if (mysqli_num_rows($result) == 1)
    {
//        session_start();
//        $_SESSION['views']=1;
        echo 0;
    }
    else
    {
        echo -1;
    }



