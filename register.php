<?php
require "init.php";

$name = "ashu";
$password="ashu123";
$contact="0000";
$country="India";
$sql_query="insert into users values('$name','$password','$contact','$country');";

if(mysqli_query($connection,$sql_query))
{
  echo "data inserted";
}else{
  echo "error";
}

 ?>
