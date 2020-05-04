<?php session_start();
require_once("class/Baza.php");
require_once("class/Korisnik.php");
require_once("class/Greske.php");

$message="";
$greska="";
$greskaBroj=0;

if(isset($_POST['username']) and isset($_POST['password'])){
    $korisnickoime=$_POST['username'];
    $lozinka=$_POST['password'];
    $konekcija=new Baza();
    $greskaBroj=0;

    $rez=$konekcija->izvrsiUpit("SELECT * FROM korisnici WHERE korisnickoime='{$korisnickoime}' AND lozinka='{$lozinka}'");
    if($konekcija->prebrojRedove($rez)==1){
        $red=$konekcija->dohvatiNiz($rez);
        $korisnik=new Korisnik($red['id'],$red['korisnickoime'],$red['lozinka'],$red['ime'],$red['prezime']);
        $_SESSION['korisnik']=serialize($korisnik);
        $_SESSION['vremeLogovanja']=time();
        header("Location: pocetna.php");
        exit();
    }
    else{
        $greskaBroj=1;
    }
}
else{
    $greska="";
}
if($greskaBroj==1){
    $greska="Ne postoji korisnik sa ovim podacima!";
}


if(isset($_SESSION['isteklo'])){
    $message="Vaša sesija je istekla.";
    unset($_SESSION['isteklo']);
}
else{
    $message="Prijavite se.";
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="style">
    <title>Prijava na sistem</title>
</head>
<body>
<div class="container vh-100">
    <form action="index.php" method="post">
        <div class="row align-items-center vh-100">
            <div class="col-md-6 mx-auto">
                <div class="form-group">
                    <label class="slova"><?php  echo $message; ?></label>
                    <br>
                    <label class="slova">Korisničko ime:</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                    <label class="slova">Lozinka: </label>
                    <input type="password" name="password" class="form-control"><br>
                </div>
                <div class="form-group centar">
                    <button type="submit" class="btn btn-outline-primary" style="color:white;">Ulogujte se</button>
                </div>
                <p class="slova centar"><?php echo $greska;?></p>
            </div>
        </div>
    </form>

</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
</body>
</html>
