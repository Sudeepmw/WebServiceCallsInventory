<?php

include 'database_connection.php';
 
$items=$_GET["items"];
$price=$_GET["price"];
$order_date=$_GET["order_date"];
$order_created_by=$_GET["order_created_by"];
$quantity=$_GET["quantity"];
$restaurant_name=$_GET["restaurant_name"];
$updated_str=$_GET["updated_str"];

$con=mysqli_connect($hostname, $username, $password,$dbname);
mysqli_query ($con,"set character_set_results='utf8'");
$query_dis="insert into tb_im_orders(items,price,status,order_date,order_created_by,quantity,restaurant_name) values('$items',$price,'In Process','$order_date','$order_created_by','$quantity','$restaurant_name');";

$retval_dis = mysqli_query($con,$query_dis);



$res=explode("|",$updated_str);
$qstr="";
for($i=0;$i<sizeof($res);$i++){
    $res1=explode("@",$res[$i]);
    $qstr="update tb_im_items set quantity=quantity-".$res1[0]." where item_name='".$res1[1]."'";
    mysqli_query($con,$qstr);
    
}
echo '{"message":"Ordered successfully.","status":"true"}';
mysqli_close($con);
?>
