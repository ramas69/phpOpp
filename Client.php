
<?php 


class Client extends Personne {

    public $adresse;

    public function __construct($nom, $prenom, $adresse){
        parent::__construct($nom, $prenom);
        $this->adresse = $adresse;
    }

    public function getAdresse(){
        return $this->adresse;
    }

    public function setAdresse($adresse){
        $this->adresse = $adresse;
    }

    public function getCoordonnee(){
        $cord = "Le client ".$this->getPrenom(). " ".$this->getNom(). " habite à ".$this->adresse. "<br>";
        return $cord;
    }

    
}