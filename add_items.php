<?php

include 'database_connection.php';
 
$item_name=$_GET["item_name"];
$price=$_GET["price"];


$query="insert into tb_im_items(item_name,price) values('$item_name','$price');";



$result = mysqli_query($con,$query);


if($result)
{
   echo '{"message":"Item is added  successfully.","status":"true"}'; 
}
else
{
    echo '{"message":"Item not added.","status":"false"}';
}

mysqli_close($con);

?>