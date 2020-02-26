<?php

include 'database_connection.php';
 
$status=$_GET["status"];
$id=$_GET["id"];


$query= "SELECT emailid FROM tb_im_user_registration WHERE uname=(SELECT order_created_by FROM tb_im_orders WHERE id=$id)";
$result1 = mysqli_query($con,$query);
$emailId="namaiarun@gmail.com";
while($row = mysqli_fetch_assoc($result1)) {
$emailId=$row['emailid'];
}
echo $emailId;
mysqli_close($con);
    $to = $emailId;    
    $subject = "Your order status : ";
    $message = "";
        
         if($status=="Delivered"){
            $message = "Your order is delivered sucessfully."; 
         }else{
             $message = "Sorry, your order is cancelled due to out of stock.";
         }
         
            $header = "From:namaiarun@gmail.com \r\n";
         $result2 = mail ($to,$subject,$message,$header);

echo '{"message":"Updated successfully.","status":"true"}';
?>