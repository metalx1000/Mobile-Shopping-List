<?php
#ini_set('display_errors',1);
#ini_set('display_startup_errors',1);
#error_reporting(-1);

include('connect.php');
include('tables.php');
$_POST = array_map('strip_tags', $_POST);
$_POST = array_map('htmlspecialchars', $_POST);

$item=$_POST['item'];

echo "Removing $item\n";
$query = "DELETE FROM $table WHERE item = \"" . $item . "\"";
mysqli_query($con, $query) or die('Error');

mysqli_close($con);
?>
