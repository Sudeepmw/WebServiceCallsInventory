<?php

include 'database_connection.php';


$query_json = "SELECT * FROM tb_im_items;";
$result = mysqli_query($con,$query_json);
$rows = array();
while($row = mysqli_fetch_assoc($result)) {
$rows[] = array('id' => $row['id'],'item_name' => $row['item_name'],'price' => $row['price'],'item_img_url' => $row['item_img_url'],'quantity' => $row['quantity']);
}

if(sizeof($rows)>0){
echo json_encode($rows);
}else{
    echo 'No data found';
}

mysqli_close($con);
?>
