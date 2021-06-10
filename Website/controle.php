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
<<<<<<< Updated upstream
    else if(isset($_GET['method']) && $_GET['method'] == 'login')
=======
    //REGISTREREN
    else if(isset($_GET['method']) && $_GET['method'] == 'registreren')
>>>>>>> Stashed changes
    {
      
    }
    else
    {
      header("location: index.php");
      exit;
    }

?>