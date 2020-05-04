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
    <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>Biografija</title>
</head>
<body class="slika" onload="typeWriter()">
<div class="container pozadina">

    <nav class="navbar navbar-expand-lg navbar-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link navigacijaPozadina" href="pocetna.php">Početna </a>
                <a class="nav-item nav-link active navigacijaPozadina linijaIznadAktivnog" href="biografija.php">O meni <span class="sr-only">(current)</span></a>
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

    <div class="row">
        <div class="col-md-12 roditelj">
            <img src="images/nebo.jpg" class="img-fluid">
            <div class="tekstSaStrane">
                <p class="tekstDobrodoslice" id="tekstDobrodoslice"></p>
            </div>
        </div>
    </div>

    <!--<div class="centar">
        <h1 id="ispis"></h1>
    </div>-->

    <div class="row">
        <div class="col-md-8 offset-md-2">
            <ul class="timeline">
                <li>
                    <h2 class="natpis">Detinjstvo</h2>
                    <p>Rođena sam 2.februara 1999.godine u Užicu. Detinjstvo sam provela u Užicu, uz par selidbi sa jednog kraja grada na drugi. Bila sam zdrava devojčica, namćorasta i bucmasta. Nisam imala probleme sa komunikacijom, bila sam druželjubiva. Sa svojih 6 godina, upisala sam osnovnu školu i počela da treniram atletiku. U početku se nije nazirao bilo kakav uspeh iz sporta niti iz škole. Vremenom, uz puno rada i truda, nizala sam uspehe u školi. Od svih predmeta, najviše sam posvećivala pažnje biologiji i književnosti. Prirodne nauke su mi bile bauk. Pobeđivala sam na takmičenjima iz srpskog jezika više puta. Bila sam uvek okupirana nečim, često sam putovala u druge gradove u Srbiji i regionu.Iz detinjstva pamtim igranje na strmoj ulici iscepanom fudbalskom loptom i vožnju biciklom i trotinetom.</p>
                    <div class="roditelj2">
                        <img src="images/dete.jpg" class="img-fluid" alt="putovanje">
                        <div class="overlay"></div>
                        <a href="galerija.php" class="link btn btn-outline-success dugmeZaGaleriju" role="button">Pogledajte galeriju</a>
                    </div>
                </li>
                <li>
                    <h2 class="natpis">Sport</h2>
                    <p>Atletiku sam počela da treniram kad sam imala 6 godina. U početku se nije nazirao talenat, bila sam krupne građe i prilično nedisciplinovana. Učlanila sam se u Atletski klub "Užice" čiji je trener Željko Čeliković, veliki paraolimpijac koji je učestvovao u mnogim takmičenjima i olimpijadama širom sveta. Uz velika odricanja i disciplinu, atletika je postala moj život. Stekla sam prijatelje za ceo život i oni su mi bili kao porodica. Osvajala sam medalje i pehare na mnogim takmičenjima u zemlji i regionu. Bila sam šampionka i vicešampionka Srbije u disciplini 1500 metara i 3000 metara. Osvajala sam zlatne medalje iz kraćih disciplina kao što su 600 i 800 metara. Ispunila sam normu za učešće na evropskom prvenstvu, ali sam se zbog zdravstvenih problema povukla iz sporta.</p>
                    <div class="roditelj2">
                        <img src="images/klub.jpg" class="img-fluid" alt="putovanje">
                        <div class="overlay"></div>
                        <a href="galerija.php" class="link btn btn-outline-success dugmeZaGaleriju" role="button">Pogledajte galeriju</a>
                    </div>
                </li>
                <li>
                    <h2 class="natpis">Putovanja</h2>
                    <p>Putovanja po Srbiji mi uvek ostavljaju lepe uspomene. Posetila sam skoro sve velike gradove u Srbiji, uključujući Novi Sad, Niš, Kragujevac, Kraljevo itd. Priroda i planinski predeli su me ostavljali bez daha. U avgustu 2019. godine sam otputovala u Češku, Prag. Iskustvo i uspomene koje nosim iz tog grada ću pamtiti zauvek. </p>
                    <div class="roditelj2">
                        <img src="images/ch3.jpg" class="img-fluid" alt="putovanje">
                        <div class="overlay"></div>
                        <a href="galerija.php#putovanja" class="link btn btn-outline-success dugmeZaGaleriju" role="button">Pogledajte galeriju</a>
                    </div>
                </li>
                <li>
                    <h2 class="natpis">Hobi</h2>
                    <p>Moj prvi hobi kojim se ponosim je slikarstvo. Ne bih rekla da se smatram umetnikom, ali svakako budi u meni veličanstvene količine kreativnosti. Daje mi drugačiji pogled na svet. Moj drugi hobi je ručna izrada nakita. Nakit je neizostavni deo aksesoara kod svake žene, pa i kod mene. Uživam da pravim ogrlice i narukvice. Moj dizajn je, kao što se vidi iz priloženog, veoma jednostavan, ali ne i dosadan. Sadrži dozu sofisticiranosti.</p>
                    <div class="roditelj2">
                        <img src="images/n2.jpg" class="img-fluid" alt="putovanje">
                        <div class="overlay"></div>
                        <a href="galerija.php#hobi" class="link btn btn-outline-success dugmeZaGaleriju" role="button">Pogledajte galeriju</a>
                    </div>
                </li>
            </ul>
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

<script>
    var i = 0;
    var txt = 'Endless creativity.';
    var speed = 100;

    function typeWriter() {
        if (i < txt.length) {
            document.getElementById("tekstDobrodoslice").innerHTML += txt.charAt(i);
            i++;
            setTimeout(typeWriter, speed); //ceka 100 ms da pozove funkciju typewriter
        }
    }
</script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
</body>
</html>