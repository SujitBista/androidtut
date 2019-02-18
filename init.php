<?php
   $db_name="project";
   $mysql_user="root";
   $mysql_password="root";
   $server_name="localhost";
   $connection = mysqli_connect($server_name,$mysql_user,$mysql_password,$db_name);
   if(!$connection){
     echo "Connection not successful";
   }else{
     echo "connection succeful";
   }
 ?>
