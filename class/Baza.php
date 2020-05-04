<?php
class Baza{
    private $konekcija;

    public function __construct()
    {
        $this->konekcija=mysqli_connect("127.0.0.1:3307","root","","biografija");
        if(!$this->konekcija)
            return false;
        mysqli_query($this->konekcija,"SET NAMES UTF-8");
        return $this->konekcija;
    }

    public function izvrsiUpit($upit){
        return mysqli_query($this->konekcija,$upit);
    }

    public function prebrojRedove($rez){
        return mysqli_num_rows($rez);
    }

    public function dohvatiNiz($rez){
        return mysqli_fetch_array($rez);
    }
}