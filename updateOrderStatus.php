<?php

include 'database_connection.php';
 
$status=$_GET["status"];
$id=$_GET["id"];

$query="update tb_im_orders set status='$status' where id=$id";
$retval_dis = mysqli_query($con,$query);

$query="SELECT emailid FROM tb_im_user_registration WHERE uname=(SELECT order_created_by FROM tb_im_orders WHERE id=$id)";
$retval_json1 = mysqli_query($con,$query);

while($row = mysqli_fetch_assoc($retval_json1)) {
$emailId=$row['emailid'];
}

$query="SELECT * FROM tb_im_orders WHERE id=$id";
$retval_json2 = mysqli_query($con,$query);
$items="";
$price="";
while($row = mysqli_fetch_assoc($retval_json2)) {
$items=$row['items'];
$price=$row['price'];
}

mysqli_close($con);

    $to = $emailId;
    
    $subject = "Your order status : ";
    $message = "";
        
         if($status=="Delivered"){
            $message = "Your order with reference number: <b>".$id."</b> has been delivered sucessfully."."\r\n <b> Order Details </b>:" .$items."\r\n <b> Order Price </b> : ".$price; 
           
         }else{
             $message = "Sorry, your order with Reference ID :<b> ".$id." </b> has been cancelled.";
         }
        
            $header = "From:namaiarun@gmail.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         $retval = mail ($to,$subject,$message,$header);
         

echo '{"message":"Updated successfully.","status":"true"}';
?>
