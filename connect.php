<?php
$host="localhost";
$user="metalx_user";
$pwd="]VoTFo3F;K?.";
$db="metalx_shopping";
// Create connection
$con=mysqli_connect($host,$user,$pwd,$db);
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
