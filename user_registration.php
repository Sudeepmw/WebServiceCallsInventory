<?php

include 'database_connection.php';
 
$name=$_GET["name"];
$phone=$_GET["phone"];
$emailid=$_GET["emailid"];
$restaurant_name=$_GET["restaurant_name"];
$pwd=$_GET["pwd1"];
$uname=$_GET["uname1"];


$sql = "SELECT uname FROM tb_im_user_registration where uname='$uname'";

$result = $con->query($sql);

if ($result->num_rows > 0) {
   echo '{"message":"exists","status":"true"}';
} else {
    $query="insert into tb_im_user_registration(name,phone,emailid,uname,pwd,restaurant_name) values('$name','$phone','$emailid','$uname','$pwd','$restaurant_name');";


$result = mysqli_query($con,$query);

mysqli_close($con);

echo '{"message":"success","status":"true"}';
}


?>