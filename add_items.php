<?php

include 'database_connection.php';

if (!is_dir('images/')) {
    mkdir('images/', 0777, true);
}

$quantity=$_POST["quantity"];
$item_name=$_POST["item_name"];
$item_name=trim($item_name,'"');

$price=$_POST["price"];
$price=trim($price,'"');

$result = array("success" => $_FILES["file"]["name"]);
$file_path = basename( $_FILES['file']['name']);
$img_url='images/'.$file_path;
if(move_uploaded_file($_FILES['file']['tmp_name'], 'images/'.$file_path)) {
    $result = array("success" => "File successfully uploaded");
} else{
    $result = array("success" => "error uploading file");
}
$con=mysqli_connect($hostname, $username, $password,$dbname);
$query="insert into tb_im_items(item_name,price,item_img_url,quantity) values('$item_name',$price,'$img_url',$quantity);";
$retval_dis = mysqli_query($con,$query);
if($retval_dis)
{
   echo '{"message":"Item is added successfully.","status":"true"}'; 
}
else
{
    echo '{"message":"Item not added.","status":"false"}';
}
mysqli_close($con);

?>
