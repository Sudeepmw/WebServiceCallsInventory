<?php
$uname=$_GET["uname"];
$pwd=$_GET["pwd"];

            include 'database_connection.php';
           
            $query_json = "SELECT * from tb_im_admin where uname='$uname' and pwd='$pwd';";
            $result = mysqli_query($con,$query_json);
            $row = mysqli_fetch_array($result);
            if(!$row)
            {
                echo '{"Message":"Invalid username / password","status":"false"}';
            }else{
                echo '{"Message":"Login successfully","status":"true"}';
            }
?>
