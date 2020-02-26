<?php

include 'database_connection.php';
 
$item_name=$_GET["item_name"];
$price=$_GET["price"];
$id=$_GET["id"];


$query="update tb_im_items set item_name='$item_name',price='$price' where id='$id'";

$result = mysqli_query($con,$query);

mysqli_close($con);

echo '{"message":"Data is updated successfully.","status":"true"}';
?>