<?php
$uname=$_GET["uname"];
$pwd=$_GET["pwd"];

            include 'database_connection.php';
            
            $query = "SELECT * from tb_im_user_registration where uname='$uname' and pwd='$pwd';";
            $result = mysqli_query($con,$query);
            $row = mysqli_fetch_array($result);
            if(!$row)
            {
                echo '{"message":"Invalid username / password","status":"false"}';
            }else{
                echo '{"message":"Login is successfully","status":"true"}';
            }
?>