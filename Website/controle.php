<?php
    $connection = mysqli_connect("localhost","root","", "summaprojecten");

    //INLOGGEN
    if(isset($_GET['method']) && $_GET['method'] == 'login')
    {
      $wachtwoord = $_POST['inputPassword'];
      $username = $_POST['inputUsername'];

      $query = "SELECT * FROM lid WHERE gebruikersnaam = '$username' AND wachtwoord = '$wachtwoord'";
      $resultaat = mysqli_query($connection, $query);


      if (mysqli_num_rows($resultaat) > 0)
      {
        while($row = mysqli_fetch_array($resultaat, MYSQLI_NUM))
        {
          session_start();
          $_SESSION['login'] = true;

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
    else if(isset($_GET['method']) && $_GET['method'] == 'login')
    {
      
    }
    else
    {
      header("location: index.php");
      exit;
    }

?>