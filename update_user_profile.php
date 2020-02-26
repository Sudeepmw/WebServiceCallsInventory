<?php

include 'database_connection.php';
 
$name=$_GET["name"];
$phone=$_GET["phone"];
$emailid=$_GET["emailid"];
$uname=$_GET["uname1"];
$pwd=$_GET["pwd1"];


$query="update tb_im_user_registration set name='$name',phone='$phone',emailid='$emailid',pwd='$pwd' where uname='$uname'";


$result = mysqli_query($con,$query);

mysqli_close($con);

echo '{"message":"Updated successfully.","status":"true"}';
?>