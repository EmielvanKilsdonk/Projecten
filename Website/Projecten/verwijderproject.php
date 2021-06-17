<?php
session_start();
$connection = mysqli_connect("localhost","root","", "summaprojecten");

$ProjectID = $_GET["project"];

$query = "SELECT * FROM bestand WHERE projectid = '$ProjectID'";
      $resultaat = mysqli_query($connection, $query);

      if (mysqli_num_rows($resultaat) > 0)
      {
        while($row = mysqli_fetch_array($resultaat, MYSQLI_ASSOC))
        {
            unlink("../Bestanden/" . $row['bestandurl']);
        }
      }

$query2 = "DELETE FROM bestand WHERE projectid = '$ProjectID';";
$resultaat = mysqli_query($connection, $query2);

$query3 = "DELETE FROM project WHERE projectid = '$ProjectID';";
$resultaat = mysqli_query($connection, $query3);

$query4 = "DELETE FROM projectlid WHERE projectid = '$ProjectID';";
$resultaat = mysqli_query($connection, $query4);

header("location: ../Projecten/index.php");
?>