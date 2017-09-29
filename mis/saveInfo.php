
<?php

$con = mysqli_connect("bdm269199292.my3w.com","bdm269199292","1y2w3dYWD");
if (!$con)
{
    die('Could not connect: ' . mysqli_error());
}
mysqli_query($con,"SET NAMES 'utf8'");
mysqli_select_db($con,"bdm269199292_db");
//var_dump($_POST);
$desc = $_POST['desc'];
$person = $_POST['person'];
$mobile = $_POST['mobile'];
$phone = $_POST['phone'];
$fax = $_POST['fax'];
$qq = $_POST['qq'];
$mail = $_POST['mail'];
$address = $_POST['address'];


$query = "update info set company_desc = '$desc',person = '$person',mobile = '$mobile',phone = '$phone',fax = '$fax',qq = '$qq',mail = '$mail',address = '$address'";
$result = mysqli_query($con, $query);
mysqli_close($con);
echo 0;



