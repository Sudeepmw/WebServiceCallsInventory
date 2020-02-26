<?php

include 'database_connection.php';

$query = "SELECT * FROM tb_im_orders where status='Delivered';";

$result = mysqli_query($con,$query);
$rows = array();

while($row = mysqli_fetch_assoc($result)) {

$rows[] = array('quantity' => $row['quantity'],'id' => $row['id'],'items' => $row['items'],'price' => $row['price'],'status' => $row['status'],'order_date' => $row['order_date'],'order_created_by' => $row['order_created_by']);
}

echo json_encode($rows);

mysqli_close($con);
?>