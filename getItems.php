<?php

include 'database_connection.php';


$query = "SELECT * FROM tb_im_items;";
$result = mysqli_query($con,$query);
$rows = array();

while($row = mysqli_fetch_assoc($result)) {
$rows[] = array('id' => $row['id'],'item_name' => $row['item_name'],'price' => $row['price']);
}

echo json_encode($rows);

mysqli_close($con);
?>