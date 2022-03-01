
<?php

class Personne {
    public  $nom;
    public $prenom;

    function __construct($nom, $prenom)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
    }

    function getNom(){
        return $this->nom;
    }

    function setNom($nom){
        $this->nom = $nom;
    }

    function getPrenom(){
        return $this->prenom;
    }

    function setPrenom($prenom){
        $this->prenom = $prenom;
    }


}

