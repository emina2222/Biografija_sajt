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
    <title>CV-profil</title>
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
                <a class="nav-item nav-link navigacijaPozadina" href="galerija.php">Galerija</a>
                <a class="nav-item nav-link active navigacijaPozadina linijaIznadAktivnog" href="profesija.php">Profesionalni profil <span class="sr-only">(current)</span></a>
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

    <div class="row profil">
        <div class="col-md-4">
            <img src="images/e5.jpg" class="img-thumbnail">
        </div>
        <div class="col-md-8">
            <h1>Profil</h1>
            <div class="row">
                <div class="col-md-6 centar">
                    <i class="fas fa-signature oznake"></i>
                    <p>Emina Marmarac</p>
                    <i class="fas fa-birthday-cake oznake"></i>
                    <p>02.02.1999.</p>
                    <i class="fas fa-envelope oznake"></i>
                    <p>emarmarac22@gmail.com</p>
                    <i class="fas fa-map-marker-alt oznake"></i>
                    <p>Šumadijske divizije 6/53, Beograd</p>
                </div>
                <div class="col-md-6">
                    <ul>
                        <li class="prelaz"><i class="far fa-check-circle"></i> Java</li>
                        <li class="prelaz"><i class="far fa-check-circle"></i> PHP</li>
                        <li class="prelaz"><i class="far fa-check-circle"></i> Android</li>
                        <li class="prelaz"><i class="far fa-check-circle"></i> SQL</li>
                        <li class="prelaz"><i class="far fa-check-circle"></i> Git</li>
                        <li class="prelaz"><i class="far fa-check-circle"></i> Modelovanje baza podataka</li>
                        <li class="prelaz"><i class="far fa-check-circle"></i> Python</li>
                        <li class="prelaz"><i class="far fa-check-circle"></i> Engleski jezik (tečno)</li>
                        <li class="prelaz"><i class="far fa-check-circle"></i> Nemački jezik (B1)</li>
                        <li class="prelaz"><i class="far fa-check-circle"></i> Španski jezik (A2)</li>
                        <li class="prelaz"><i class="far fa-check-circle"></i> Volja za stalnim učenjem</li>
                        <li class="prelaz"><i class="far fa-check-circle"></i> Kreativni hobiji</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p>Kreativna sam i uporna. Motivisana sam, prilagodljiva i komunikativna. Organizovana sam i odgovorna osoba koja je spremna za učestvovanje u timskom radu. Uvek sam entuzijastična kada je u pitanju učenje novih veština i unapređivanje stečenih znanja.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <h1>Obrazovanje</h1>
            <ul>
                <li><i class="far fa-square"></i> Visoka škola elektrotehnike i računarstva, Beograd</li>
                <p><i>Trajanje: 2017 - trenutno</i></p>
                <p>Trenutno sam na završnoj godini Visoke škole elektrotehnike i računarstva, smer Nove računarske tehnologije.
                Na početku smo radili jezike C i C++. U drugoj godini studija, započela sam prve projekte u Java jeziku i neke
                manje projekte u C#. Iz web dizajna sam konstruisala web sajt za pet shop i
                sajt biografiju. U trećoj godini studija, napravila sam JavaFX aplikaciju Kućni budžet. Ovaj sajt je takođe moj projekat
                koji sam napravila da bih uvežbala PHP.</p>
                <li><i class="fas fa-check-square"></i> Prva ekonomska škola, Beograd</li>
                <p><i>Trajanje: 2013 - 2017.</i></p>
                <p>Završila sam Prvu ekonomsku školu, smer bankarski službenik. Tokom školovanja, imala sam praksu 3 godine u virtuelnoj
                banci gde smo u pravom bankarskom programu imali simulaciju bankarskog sistema. Kao završni rad sam radila transakcije po
                deviznom štednom računu i ostvarila maksimum poena 200/200.</p>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 pozadineZaProfesiju">
            <h1>Iskustvo</h1>
            <ul>
                <li><i class="fas fa-check-square"></i> Praksa, Banca "Intesa"</li>
                <p><i>Trajanje: Maj 2017 - Jun 2017.</i></p>
                <p>Praksa se odvijala u ekspozituri banke Intese. Asistirala sam u poslovima na blagajni, u sektoru za rad sa stanovništvom i
                u sektoru za rad sa pravnim licima. Osim toga, imala sam praksu u prostorijama zgrade banke Intese, gde sam slušala
                predavanja. Imala sam obuku i testove koji su me pripremili za konkretan rad u banci.</p>
                <li><i class="fas fa-check-square"></i> Praksa, Komercijalna banka</li>
                <p><i>Trajanje: Maj 2016 - Jun 2016.</i></p>
                <p>Praksa se odvijala u ekspozituri komercijalne Banke. Znanja koja sam tu stekla su minimalna, ali sam se po prvi put
                upoznala sa realnim bankarskim sistemom i organizacijom.</p>
            </ul>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <h1>Jezici</h1>
            <ul>
                <li><i class="fas fa-check-square"></i> Engleski jezik</li>
                <p><i>Nivo: napredni nivo</i></p>
                <p>U srednjoj školi sam učila poslovni engleski, koji je uključivao pisanje CV-a i propratnih pisama.</p>
                <li><i class="fas fa-check-square"></i> Nemački jezik</li>
                <p><i>Nivo: A2/B1</i></p>
                <p>U srednjoj školi sam učila nemački jezik i nastavila sam učenje preko online kurseva (goethe) i koristeći materijale
                sa interneta.</p>
                <li><i class="far fa-square"></i> Španski jezik</li>
                <p><i>Nivo: A2</i></p>
                <p>Nisam imala formalni vid učenja španskog jezika, ali tokom gledanja serija i komunikacije sa prijateljima iz
                Argentine, brzo sam naučila gramatiku i snalazila sam se u razgovorima.</p>
            </ul>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 pozadineZaProfesiju">
            <h1>Projekti</h1>
            <ul>
                <li><i class="fas fa-check-square"></i> Kućni budžet</li>
                <p><i>Programski jezik: </i> JavaFx</p>
                <p><i>Softversko okruženje: </i> IntelliJ Jet Brains</p>
                <p><i>Trajanje izrade: </i> 3-4 nedelje</p>
                <p><i>Baza podataka: </i> MySQL</p>
                <li><i class="fas fa-check-square"></i> Sajt biografija</li>
                <p><i>Programski jezik: </i> PHP</p>
                <p><i>Softversko okruženje: </i> PHPStorm Jet Brains</p>
                <p><i>Trajanje izrade: </i> 4+ nedelje</p>
                <p><i>Baza podataka: </i> MySQL (phpmyadmin)</p>
                <h4>Predstojeći projekti: </h4>
                <hr class="my4">
                <li><i class="far fa-square"></i> Pet Shop sajt</li>
                <p><i>Programski jezik: </i> Java Spring</p>
                <p><i>Softversko okruženje: </i> IntelliJ Jet Brains</p>
                <p><i>Trajanje izrade: </i> - </p>
                <p><i>Baza podataka: </i> MySQL</p>
                <li><i class="far fa-square"></i> Moodle kurs za programski jezik Java</li>
                <p><i>Platforma: </i> LMS Moodle</p>
                <p><i>Naziv kursa: </i> Programski jezik Java</p>
                <p><i>Trajanje izrade: </i> 2 meseca </p>
                <p><i>Baza podataka: </i> -</p>
                <li><i class="far fa-square"></i> Konstrukcija baze informacionog sistema</li>
                <p><i>Programski jezik: </i> SQL</p>
                <p><i>Softversko okruženje: </i> PowerDesigner</p>
                <p><i>Trajanje izrade: </i> - </p>
                <p><i>Server: </i> SQL Server </p>
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


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
</body>
</html>
