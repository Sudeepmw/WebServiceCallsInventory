<?php

include 'database_connection.php';
 
$items=$_GET["items"];
$price=$_GET["price"];
$order_date=$_GET["order_date"];
$order_created_by=$_GET["order_created_by"];
$quantity=$_GET["quantity"];
$restaurant_name=$_GET["restaurant_name"];

$query="insert into tb_im_orders(items,price,status,order_date,order_created_by,quantity,restaurant_name) values('$items',$price,'In Process','$order_date','$order_created_by','$quantity','$restaurant_name');";


$result= mysqli_query($con,$query);

mysqli_close($con);

echo '{"message":"Ordered successfully.","status":"true"}';
?>