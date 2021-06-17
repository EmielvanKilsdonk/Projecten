<html lang="nl">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Summa College - Maak Project</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="../css/signin.css" rel="stylesheet" />
</head>

<body class="text-center">
    <form class="form-signin" action="machtigingcontrole.php?project=<?php echo $_GET["project"] ?>" method="post">
        <img class="mb-4" src="../img/logo.png" alt="SUMMA COLLEGE" height="72" />
        <h1 class="h3 mb-3 font-weight-normal">Gebruikers toevoegen aan project</h1>

        <div class="form-check">
        <?php 
            $connection = mysqli_connect("localhost", "root", "", "summaprojecten");
            $query = "SELECT * FROM `lid` WHERE liddocent = 0;";
            $resultaat = mysqli_query($connection, $query);
            if (mysqli_num_rows($resultaat) > 0) {
                while($row = mysqli_fetch_array($resultaat, MYSQLI_ASSOC)) {
                    echo '<input class="form-check-input" type="checkbox" value="' . $row['lidid'] . '" name="Students[]" id="' . $row['lidid'] . '"';
                    $query2 = "SELECT * FROM `lid` INNER JOIN `projectlid` ON lid.lidid = projectlid.lidid WHERE projectid = ". $_GET["project"] ." AND lid.lidid = " . $row['lidid'] . ";";
                    $resultaat2 = mysqli_query($connection, $query2);
                    if (mysqli_num_rows($resultaat2) > 0) {
                        echo 'checked';
                    }
                    echo '>';
                    echo '<label class="form-check-label" for="' . $row['lidid'] . '">' . $row['lidnaam'] . '</label><br>';
                }
            }  
            else {
                echo 'Kon studenten niet laden. Probeer opnieuw.';
            }?>
        </div><br>
        
        <button class="btn btn-lg btn-danger btn-block" type="submit">
            Machtig
        </button>
    </form>
</body>

</html>