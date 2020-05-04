<?php
class Korisnik{
    private $id;
    private $korisnickoime;
    private $lozinka;
    private $ime;
    private $prezime;

    public function __construct($id, $korisnickoime, $lozinka, $ime, $prezime)
    {
        $this->id = $id;
        $this->korisnickoime = $korisnickoime;
        $this->lozinka = $lozinka;
        $this->ime = $ime;
        $this->prezime = $prezime;
    }

    public function __get($name)
    {
        return isset($this->$name)?$this->$name:"";
    }

    public function __set($name, $value)
    {
        if(isset($this->$name)){
            $this->$name=$value;
        }
    }

    public function __toString()
    {
        return $this->ime." ".$this->prezime;
    }

}