<?php 
/*
Créez une classe électeur dérivée de la même classe, et ajoutez-y deux propriétés bureau de vote et vote, ainsi que deux méthodes ; une méthode booleen qui permet retourner la valeur True à l’attribut vote et une autre méthode isVoter qui permet de tester si un électeur a voté.*/



class Electeur extends Personne{
    public $bureauVote;
    public $vote;

    function __construct($nom, $prenom, $bureauVote, $vote){
        parent::__construct($nom, $prenom);
        $this->bureauVote = $bureauVote;
        $this->vote = $vote;
    }

    public function getBureauVote(){
        return $this->bureauVote;
    }

    public function setBureauVote($bureauVote){
        $this->bureauVote = $bureauVote;
    }
    public function getVote(){
        return $this->Vote;
    }

    public function setVote($Vote){
        $this->vote = $Vote;
    }

    public function aVote(){
        $this->vote = True;
    }

    public function isVoter(){
        if($this->vote == TRUE){
            echo " L'electeur  ".$this->getPrenom()." a voté dans le bureau de vote ". $this->getBureauVote();
        }else {
            echo " L'electeur  ".$this->getPrenom()." n'a voté ";
        }
    }


}
