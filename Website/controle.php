<?php
    $connection = mysqli_connect("localhost","root","", "summaprojecten");

    $wachtwoord = $_POST['inputPassword'];
    $username = $_POST['inputUsername'];
    $name = $_POST['inputName'];
    $docent = $_POST['inputDocent'];

    //INLOGGEN
    if(isset($_GET['method']) && $_GET['method'] == 'login')
    {

      $query = "SELECT * FROM lid WHERE gebruikersnaam = '$username' AND wachtwoord = '$wachtwoord'";
      $resultaat = mysqli_query($connection, $query);


      if (mysqli_num_rows($resultaat) > 0)
      {
        while($row = mysqli_fetch_array($resultaat, MYSQLI_ASSOC))
        {
          session_start();
          $_SESSION['login'] = true;
          $_SESSION['user'] = $row['lidid'];

          header("location: index.php");
          exit;
        }
      }
      else {
        header("location: index.php");
        exit;
      }
    }
    //REGISTREREN
    else if(isset($_GET['method']) && $_GET['method'] == 'registreren')
    {
      
    }
    else
    {
      header("location: index.php");
      exit;
    }

?>