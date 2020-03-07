<?php

include 'database_connection.php';
 
$name=$_GET["name"];
$phone=$_GET["phone"];
$emailid=$_GET["emailid"];
$uname=$_GET["uname1"];
$pwd=$_GET["pwd1"];
$res=$_GET["res"];
$pincode =$_GET["pincode"];
$locality=$_GET["locality"];
$shipping_address=$_GET["shipping_address"];



$query_dis="update tb_im_user_registration set name='$name',phone='$phone',emailid='$emailid',pwd='$pwd',postalcode='$pincode',locality='$locality',shipping_address='$shipping_address',restaurant_name='$res' where uname='$uname'";

$retval_dis = mysqli_query($con,$query_dis);

mysqli_close($con);

echo '{"Message":"Updated successfully.","status":"true"}';
?>
