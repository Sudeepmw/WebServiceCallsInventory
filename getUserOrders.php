<?php

include 'database_connection.php';
$order_created_by=$_GET["uname"];

$query_json = "SELECT * FROM tb_im_orders where order_created_by='$order_created_by' order by id desc;";
$result = mysqli_query($con,$query_json);
$rows = array();
while($row = mysqli_fetch_assoc($result)) {
$rows[] = array('quantity' => $row['quantity'],'id' => $row['id'],'items' => $row['items'],'price' => $row['price'],'status' => $row['status'],'order_date' => $row['order_date'],'order_created_by' => $row['order_created_by'],'restaurant_name' => $row['restaurant_name']);
}

if(sizeof($rows)>0){
echo json_encode($rows);
}else{
    echo 'No data found';
}

mysqli_close($con);
?>
