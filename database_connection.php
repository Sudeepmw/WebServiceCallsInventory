<?php
$hostname = "localhost";
            $dbname = "inventory_ordering";
              $username = "arunkumar";
            $password = "arunkumar";
            
            
   $con=mysqli_connect($hostname, $username, $password,$dbname);
   mysqli_query ($Conn,"set character_set_results='utf8'");           
?>