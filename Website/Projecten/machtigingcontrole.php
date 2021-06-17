<?php
session_start();
$connection = mysqli_connect("localhost","root","", "summaprojecten");

$ProjectID = $_GET["project"];
$checkBox = $_POST["Students"];

$query1 = "DELETE FROM projectlid WHERE projectid = '$ProjectID';";
$resultaat = mysqli_query($connection, $query1);

$query2 = "INSERT INTO projectlid (projectid, lidid) VALUES ";
for ($i=0; $i<count($checkBox); $i++)
$query2 .= "(".$_GET["project"].", '" . $checkBox[$i] . "'),";
$query2 = rtrim($query2,',');
mysqli_query($connection, $query2);

header("location: ../Projecten/index.php");
?>