<?php session_start();
require_once("class/Baza.php");
require_once("class/Korisnik.php");
require_once("class/Greske.php");

if(isset($_SESSION['korisnik'])){
    $korisnik=unserialize($_SESSION['korisnik']);
}
else{
    Greske::obavestenje("Niste prijavljeni.");
}

if($_SESSION['korisnik']==null || time()-$_SESSION['vremeLogovanja']>1800){
    $message="Vaša sesija je istekla.";
    $_SESSION['isteklo']=$message;
    header("Location: index.php");
}
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
    <link href="https://fonts.googleapis.com/css?family=Rajdhani&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>Početna strana</title>
</head>
<body class="slika">
<div class="container pozadina">

<nav class="navbar navbar-expand-lg navbar-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-item nav-link active navigacijaPozadina linijaIznadAktivnog" href="pocetna.php">Početna <span class="sr-only">(current)</span></a>
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

    <div class="col-md-12 roditelj">
        <img src="images/e2.jpg" alt="ceska" class="img-fluid">
        <div class="tekstGore">
            <p class="tekstDobrodoslice">Build yourself.</p>
            <a href="kontakt.php" class="link btn btn-outline-success" role="button">Kontaktirajte me</a>
        </div>
    </div>
    <div class="jumbotron dzambo crnaSlova">
        <p class="lead">Obično me pamte po neobičnom imenu i tome što obožavam smoki.</p>
        <hr class="my-4">
        <p>Možda je vreme da se otkrije više o meni.</p>
        <p class="lead">
        <a class="btn btn-outline-success crnaSlova" href="biografija.php" role="button">Ko je Emina Marmarac?</a>
        </p>
    </div>



    <div class="row">
        <div class="col-md-12">
            <h1>Upoznajte mog ježa Boleta</h1>
            <video width="100%" controls>
                <source src="images/jez3.mp4" type="video/mp4">
            </video>
        </div>
    </div>




    <div class="row footerP">
        <div class="col-md-6 centar">
            <p class="kopirajt">E-mina 	&#x24B8; Since 1999.</p>
        </div>
        <div class="col-md-6 centar">
            <a href="https://www.instagram.com/autostoper_sa_sekirom/" target="_blank"><i class="fab fa-instagram oznake"></i></a>
            <a href="https://www.facebook.com/emina.emax" target="_blank"><i class="fab fa-facebook oznake"></i></a>
            <a href="https://twitter.com/EMarmarac" target="_blank"><i class="fab fa-twitter oznake"></i></a>
            <a href="https://linkedin.com/in/emina-marmarac" target="_blank"><i class="fab fa-linkedin oznake"></i></a>
        </div>
    </div>



</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
</body>
</html>