<?php

include 'database_connection.php';
$uname=$_GET["uname"];

$query_json = "SELECT * FROM tb_im_user_registration where uname='$uname' limit 1;";
$result = mysqli_query($con,$query_json);




	    $rows = array();
while($row = mysqli_fetch_assoc($result)) {
$rows[] = array('id' => $row['id'],'name' => $row['name'],'phone' => $row['phone'],'restaurant_name' => $row['restaurant_name'],'emailid' => $row['emailid'],'pwd' => $row['pwd'],'pincode' => $row['postalcode'],'locality' => $row['locality'],'shipping_address' => $row['shipping_address']);

    
}
if(sizeof($rows)>0){
echo json_encode($rows);
}
else{
    echo 'No data found';
}

mysqli_close($con);
	     
?>
