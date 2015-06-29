<?php
include("connect.php");
include('tables.php');

$_POST = array_map('strip_tags', $_POST);
$_POST = array_map('htmlspecialchars', $_POST);
//date format and time zone
date_default_timezone_set('America/New_York');
$date = date('l jS \of F Y h:i:s A');
$item=$_POST['item'];
$result = mysqli_query($con,"SELECT * FROM $table WHERE item='$item' ");
if( mysqli_num_rows($result) > 0) {
    print "updating...";
}
else
{
    $sql="INSERT INTO $table (item) VALUES ('$item')";
    if (!mysqli_query($con,$sql)) {
      die('Error: ' . mysqli_error($con));
    }
}
foreach($_POST as $key => $value) {
    echo 'Current value in $_POST["' . $key . '"] is : ' . $value . '<br>';
    $entry = mysqli_real_escape_string($con, $value);
    //$sql="UPDATE WHERE pid='$pid' $table ($key) VALUES ('$entry')";
    $sql="UPDATE $table SET $key='$entry' WHERE item='$item'";
    mysqli_query($con,$sql);
    //if (!mysqli_query($con,$sql)) {
    //  die('Error: ' . mysqli_error($con));
    //}
}
//$udate = date_create();
//$unix_date = date_timestamp_get($udate);
//$sql="UPDATE $table SET updated='$unix_date' WHERE pid='$pid'";
//mysqli_query($con,$sql);
//if (!mysqli_query($con,$sql)) {
//  die('Error: ' . mysqli_error($con));
//}
mysqli_close($con);
//echo "<br>$date";
?>
