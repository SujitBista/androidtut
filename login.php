<?php
require "init.php";

$name="ashu";
$password="ashu123";
$contact="0000";
$country="India";
$sql_query="select name from users where name like '$name' and password like '$password';";

$result=mysqli_query($connection,$sql_query);

if(mysqli_num_rows($result) > 0)
{
  $row=mysqli_fetch_assoc($result);
  $name=$row["name"];
  echo "$name";
}else{
  echo "error";
}

 ?>
