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

        <label for="inputUsername" class="sr-only">Email</label>
        <input type="email" id="inputUsername" name="inputUsername" class="form-control" placeholder="Gebruikersnaam" required />

        <label for="inputPassword" class="sr-only">Wachtwoord</label>
        <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Wachtwoord" required />
        
        <p><a href="login.php">Al een account? Log hier in</a></p>

        <button class="btn btn-lg btn-primary btn-block" type="submit">
            Log in
        </button>
    </form>
</body>

</html>