<?php
    $connection = mysqli_connect("localhost","root","", "summaprojecten");

    $wachtwoord = $_POST['inputPassword'];
    $hash = password_hash($wachtwoord, PASSWORD_BCRYPT);
    $username = $_POST['inputUsername'];
    $name = $_POST['inputName'];
    $docent = $_POST['inputDocent'];

    //INLOGGEN
    if(isset($_GET['method']) && $_GET['method'] == 'login')
    {

      $query = "SELECT * FROM lid WHERE gebruikersnaam = '$username'";
      $resultaat = mysqli_query($connection, $query);


      if (mysqli_num_rows($resultaat) > 0)
      {
        while($row = mysqli_fetch_array($resultaat, MYSQLI_ASSOC))
        {
          $hash1 = $row['wachtwoord'];

          if (password_verify($wachtwoord, $hash1)) {
            session_start();
            $_SESSION['login'] = true;
            $_SESSION['user'] = $row['lidid'];
            $_SESSION['docent'] = $row['liddocent'];
          }

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
      session_start();
      $_SESSION["login"] = true;
      
      if(empty($docent))
      {
        $docent = 0;
      }

      $query = "INSERT INTO lid(lidnaam, liddocent, gebruikersnaam, wachtwoord)
      VALUES('$name', '$docent', '$username', '$hash');";
      $resultaat = mysqli_query($connection, $query);

      $query2 = "SELECT * FROM lid WHERE gebruikersnaam = '$username' AND wachtwoord = '$hash'";
      $resultaat2 = mysqli_query($connection, $query2);

      if (mysqli_num_rows($resultaat2) > 0)
      {
        while($row = mysqli_fetch_array($resultaat2, MYSQLI_ASSOC))
        {
          $_SESSION['user'] = $row['lidid'];
          $_SESSION['docent'] = $row['liddocent'];
        }
      }
      header("location: index.php");
      exit;
    }
    else
    {
      echo '<script>alert("Verkeerde wachtwoord of gebruikersnaam!")</script>';
      header("location: index.php");
      exit;
    }

?>