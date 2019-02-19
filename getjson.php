<?php
require "init.php";
$sql = "SELECT * FROM users;";
$result = mysqli_query($connection,$sql);
$response = array();
while($row=mysqli_fetch_array($result)){
    array_push($response,array("name"=>$row[0],"password"=>$row[1],"contact"=>$row[2],"country"=>$row[3]));
}
echo json_encode($response);
mysqli_close($connection);
 ?>
