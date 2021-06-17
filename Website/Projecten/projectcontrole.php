<?php
session_start();
$connection = mysqli_connect("localhost","root","", "summaprojecten");

$Projectname = $_POST['inputProjectname'];
$Desc = $_POST['inputDesc'];
$checkBox = $_POST['Students'];

$query = "INSERT INTO project (projectnaam, projectomschrijving) VALUES ('$Projectname', '$Desc')";
$resultaat = mysqli_query($connection, $query);

$query1 = "SELECT * FROM project WHERE projectnaam = '$Projectname'";
$resultaat1 = mysqli_query($connection, $query1);

if (mysqli_num_rows($resultaat1) > 0)
      {
        while($row = mysqli_fetch_array($resultaat1, MYSQLI_ASSOC))
        {
            $query2 = "INSERT INTO projectlid (projectid, lidid) VALUES ";
            for ($i=0; $i<count($checkBox); $i++)
            $query2 .= "(".$row['projectid'].", '" . $checkBox[$i] . "'),";
            $query2 = rtrim($query2,',');
            mysqli_query($connection, $query2);
        }
      }

header("location: ../Projecten/index.php");
?>