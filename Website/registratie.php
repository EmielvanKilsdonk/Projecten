<html lang="nl">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Summa College - registratie</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="css/signin.css" rel="stylesheet" />
</head>

<body class="text-center">
    <form class="form-signin" action="controle.php?method=registreren" method="post">
        <img class="mb-4" src="img/logo.png" alt="SUMMA COLLEGE" height="72" />
        <h1 class="h3 mb-3 font-weight-normal">Registreren</h1>

        <label for="inputName" class="sr-only">Naam</label>
        <input type="text" id="inputName" name="inputName" class="form-control" placeholder="Naam" required pattern="[a-zA-Z0-9!_ ]{0,25}" title="Geen speciale tekens"/>

        <label for="inputUsername" class="sr-only">Email</label>
        <input type="text" id="inputUsername" name="inputUsername" class="form-control" placeholder="Gebruikersnaam" required pattern="[a-zA-Z0-9!_]{0,25}" title="Geen speciale tekens"/>

        <label for="inputPassword" class="sr-only">Wachtwoord</label>
        <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Wachtwoord" required pattern="[a-zA-Z0-9!_]{0,25}" title="Geen speciale tekens"/>

        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="1" name="inputDocent" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                Ik ben een docent/opdrachtgever
            </label>
        </div>
        
        <p><a href="login.php">Al een account? Log hier in</a></p>

        <button class="btn btn-lg btn-primary btn-block" type="submit">
            Registeer
        </button>
    </form>
</body>

</html>