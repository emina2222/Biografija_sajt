<?php
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style">
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>Hvala</title>
</head>
<body>
<div class="container pozadina">

    <nav class="navbar navbar-expand-lg navbar-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link navigacijaPozadina" href="pocetna.php">Početna</a>
                <a class="nav-item nav-link navigacijaPozadina" href="biografija.php">O meni</a>
                <a class="nav-item nav-link navigacijaPozadina" href="galerija.php">Galerija</a>
                <a class="nav-item nav-link navigacijaPozadina" href="profesija.php">Profesionalni profil</a>
                <a class="nav-item nav-link navigacijaPozadina" href="kontakt.php">Kontakt</a>
            </div>
        </div>
        <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link navigacijaPozadina" href="logout.php">Sign Out</a>
                </li>
            </ul>
        </div>
    </nav>


    <div class="jumbotron dzambo crnaSlova">
        <p class="lead">Mejl je uspešno poslat! Odgovor ćete dobiti u najkraćem roku.</p>
        <hr class="my-4">
        <p class="lead">
            <a class="btn btn-outline-success crnaSlova" href="pocetna.php" role="button">Vrati se na početnu</a>
        </p>
    </div>

</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

</body>
</html>
