<?php

include 'database_connection.php';
 
$item_name=$_GET["item_name"];
$price=$_GET["price"];
$id=$_GET["id"];
$quantity=$_GET["quantity"];

$query="update tb_im_items set item_name='$item_name',price=$price,quantity=$quantity where id='$id'";

$result = mysqli_query($con,$query);
echo $result;
echo '{"message":"Data is updated successfully.","status":"OK"}';

mysqli_close($con);

?>
