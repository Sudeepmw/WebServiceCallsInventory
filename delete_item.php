<?php

include 'database_connection.php';
 

$id=$_GET["id"];


$query="delete from tb_im_items  where id='$id'";

$result = mysqli_query($con,$query);

mysqli_close($con);

echo '{"message":"Deleted successfully.","status":"true"}';
?>