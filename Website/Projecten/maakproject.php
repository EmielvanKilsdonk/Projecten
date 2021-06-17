<html lang="nl">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Summa College - Maak Project</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="../css/signin.css" rel="stylesheet" />
</head>

<body class="text-center">
    <form class="form-signin" action="projectcontrole.php" method="post">
        <img class="mb-4" src="../img/logo.png" alt="SUMMA COLLEGE" height="72" />
        <h1 class="h3 mb-3 font-weight-normal">Project aanmaken</h1>

        <label for="inputProjectname" class="sr-only">Projectnaam</label>
        <input type="text" id="inputProjectname" name="inputProjectname" class="form-control" placeholder="Projectnaam" required pattern="[a-zA-Z0-9!_]{0,25}" title="Geen speciale tekens"/>

        <label for="inputDesc" class="sr-only">Omschrijving</label>
        <input type="text" id="inputDesc" name="inputDesc" class="form-control" placeholder="Omschrijving" required pattern="[a-zA-Z0-9!_ ]{0,50}" title="Geen speciale tekens"/>

        <div class="form-check">
        <?php 
            $connection = mysqli_connect("localhost", "root", "", "summaprojecten");
            $query = "SELECT * FROM `lid` WHERE liddocent = 0;";
            $resultaat = mysqli_query($connection, $query);
            if (mysqli_num_rows($resultaat) > 0) {
                while($row = mysqli_fetch_array($resultaat, MYSQLI_ASSOC)) {
                    echo '<input class="form-check-input" type="checkbox" value="' . $row['lidid'] . '" name="Students[]" id="' . $row['lidid'] . '">';
                    echo '<label class="form-check-label" for="' . $row['lidid'] . '">' . $row['lidnaam'] . '</label><br>';
                }
            }  
            else {
                echo 'Kon studenten niet laden. Probeer opnieuw.';
            }?>
        </div><br>
        
        <button class="btn btn-lg btn-primary btn-block" type="submit">
            Maak nieuw project
        </button>
    </form>
</body>

</html>