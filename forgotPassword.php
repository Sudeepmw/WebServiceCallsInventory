<?php

            include 'database_connection.php';
            
            
            $uname=$_GET["uname"];
$emailid=$_GET["emailid"];
$pwd="";
            
           
            $query_json = "SELECT * from tb_im_user_registration where uname='$uname' and emailid='$emailid';";
                        
$query_pwd = "SELECT pwd from tb_im_user_registration where uname='$uname' and emailid='$emailid';";
            $result_pwd = mysqli_query($con,$query_pwd);
            $result = mysqli_query($con,$query_json);
            while($row = mysqli_fetch_assoc($result_pwd)) {
                $pwd=$row['pwd'];
            }
       
            $row = mysqli_fetch_array($result);
            if(!$row)
            {
                echo '{"message":"Sorry Invalid Email/Username","status":"false"}';
            }else{
            
 $to = $emailid;
     
         $subject = "Password Request";
         
         $message = "Your password is <b>".$pwd."</b>";
         
         
         $header = "From:namaiarun@gmail.com \r\n";
        
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
                      echo '{"message":"Password sent to your register mail successfully.","status":"true"}';
            }
?>