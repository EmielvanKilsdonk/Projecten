<?php
session_start();
$connection = mysqli_connect("localhost", "root", "", "summaprojecten");

$checkBox = $_POST["Students"];

$query = "DELETE FROM lid WHERE lidid in (".implode(",", $checkBox ) . ")";
mysqli_query($connection, $query);

$query2 = "DELETE FROM projectlid WHERE lidid in (".implode(",", $checkBox ) . ")";
mysqli_query($connection, $query2);

header("location: ../Projecten/index.php");
?>