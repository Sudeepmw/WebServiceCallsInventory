<?php

include 'database_connection.php';
$uname=$_GET["uname"];

$query = "SELECT * FROM tb_im_user_registration where 

uname='$uname' limit 1;";

$result = mysqli_query($con,$query);

$rows = array();

while($row = mysqli_fetch_assoc($result)) {

$rows[] = array('id' => $row['id'],'name' => $row['name'],'phone' => $row['phone'],'emailid' => $row['emailid'],'pwd' => $row['pwd']);
}

echo json_encode($rows);

mysqli_close($con);
?>