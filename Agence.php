<?php

require("ConnexionSingleton.php");

class Agence {

    private int $id_agence;
    private string $nomAgence;
    private string $adresseAgence;
    private int $codeAgence;
    

    public function __construct($id_agence,$nomAgence,$adresseAgence,$codeAgence) {

    $this -> id_agence = $id_agence; 
    $this -> nomAgence = $nomAgence;
    $this -> adresseAgence = $adresseAgence;
    $this -> codeAgence = $codeAgence;
    
 }

 private ?PDO $connexion = null;

 public function __construct(?PDO $connexion = null)
 {
     if ($this->connexion == null) {
         $this->connexion = ConnexionSingleton::getConnexion();
     } else {
         $this->connexion = $connexion;
     }
 }


    public function getid_agence():int{
        return $this->id_agence;
}
    public function getnomAgence():string{
        return $this->nomAgence;
}
    public function getadresseAgence():string{
        return $this->adresseAgence;
}
    public function getcodeAgence():int{
        return $this->codeAgence;
}

    public function setid_agence(array $donnees):int{

        return $this->codeAgence;
}

public function __toString(){
    return ($this->id_agence."\n".$this->nomAgence."\n".$this->adresseAgence."\n".$this->codeAgence);}

}

 ?>