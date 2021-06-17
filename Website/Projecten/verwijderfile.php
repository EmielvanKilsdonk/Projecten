<?php
session_start();
$connection = mysqli_connect("localhost","root","", "summaprojecten");

$ProjectID = $_GET["project"];
$Bestand = $_GET["bestand"];

$query = "DELETE FROM bestand WHERE bestandurl = '$Bestand';";
$resultaat = mysqli_query($connection, $query);

unlink("../Bestanden/" . $Bestand);

header("location: ../Projecten/project.php?project=" . $ProjectID);
?>