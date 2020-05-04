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
    <link rel="stylesheet" href="stilZaGaleriju.css">
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rajdhani&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>Galerija</title>
</head>
<body class="slika">
<div class="container pozadina">

    <nav class="navbar navbar-expand-lg navbar-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link navigacijaPozadina" href="pocetna.php">Početna</a>
                <a class="nav-item nav-link navigacijaPozadina" href="biografija.php">O meni</a>
                <a class="nav-item nav-link active navigacijaPozadina linijaIznadAktivnog" href="galerija.php">Galerija <span class="sr-only">(current)</span></a>
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
    <hr class="my-4">
    <div class="row">
        <div class="col-md-12">
            <h2 class="sekcija">Gallery of experiences</h2>
        </div>
    </div>
    <hr class="my-4">


    <div class="row">
        <div class="col-md-12">
            <img src="images/p1.jpg" class="img-fluid prelazak" alt="Zimovanje na Zlatiboru">
        </div>
    </div>

    <hr class="my-4">
    <div class="row">
        <div class="col-md-12" id="putovanja">
            <h2 class="sekcija">Putovanja</h2>
        </div>
    </div>
    <hr class="my-4">

    <div class="row">
        <div class="col-md-6">
            <img src="images/ch2.jpg" class="img-fluid prelazak" alt="Najveće umetničko delo napravljeno od porcelana, Drezden (Nemačka)">
        </div>
        <div class="col-md-6">
            <img src="images/ch3.jpg" class="img-fluid prelazak" alt="Drezden, Nemačka">
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <img src="images/ce1.jpg" class="img-fluid prelazak" alt="Narodni muzej, Prag (Češka)">
        </div>
        <div class="col-md-4">
            <img src="images/ce2.jpg" class="img-fluid prelazak" alt="Astronomski sat, Prag (Češka)">
        </div>
        <div class="col-md-4">
            <img src="images/ce3.jpg" class="img-fluid prelazak" alt="Zalazak sunca sa pogledom na Hradčane, Stari grad, Prag">
        </div>
    </div>

    <hr class="my-4">
    <div class="row">
        <div class="col-md-12" id="hobi">
            <h2 class="sekcija">Hobi</h2>
        </div>
    </div>
    <hr class="my-4">

    <div class="row">
        <div class="col-md-4">
            <img src="images/n1.jpg" class="img-fluid prelazak" alt="Narukvica ruža">
        </div>
        <div class="col-md-4">
            <img src="images/n4.jpg" class="img-fluid prelazak" alt="Ogrlica sa plavim kamenom">
        </div>
        <div class="col-md-4">
            <img src="images/n3.jpg" class="img-fluid prelazak" alt="Ogrlica bubamara">
        </div>
    </div>

    <hr class="my-4">
    <div class="row">
        <div class="col-md-12">
            <h2 class="sekcija">Umetnost</h2>
        </div>
    </div>
    <hr class="my-4">

    <div class="row">
        <div class="col-md-12">
            <img src="images/nebo.jpg" class="img-fluid prelazak" alt="Nebo">
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <img src="images/u5.jpg" class="img-fluid prelazak" alt="Odsjaj i planine">
        </div>
        <div class="col-md-6">
            <img src="images/u1.jpg" class="img-fluid prelazak" alt="Zalazak sunca u Africi">
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <img src="images/u2.png" class="img-fluid prelazak" alt="Mesečina i zaliv">
        </div>
        <div class="col-md-4">
            <img src="images/u3.jpg" class="img-fluid prelazak" alt="Raw heart">
        </div>
        <div class="col-md-4">
            <img src="images/u4.jpg" class="img-fluid prelazak" alt="Old photograph">
        </div>
    </div>


    <div id="myModal" class="modal">
        <span class="close">&times;</span>
        <img class="modal-content" id="img01">
        <div id="caption"></div>
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

<script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the image and insert it inside the modal - use its "alt" text as a caption
    var img = document.getElementsByTagName('img');
    var modalImg = document.getElementById("img01");
    var captionText = document.getElementById("caption");
    showImageModal = function(e){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    };

    Array.prototype.forEach.call(img, function(element){
        element.addEventListener("click", showImageModal, true); //attach the onclick handler to the image using the correct approach with addEventListener.
    });

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }
</script>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
</body>
</html>
