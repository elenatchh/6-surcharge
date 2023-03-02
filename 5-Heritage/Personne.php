<?php
/* 
Créez une classe représentant une personne avec les propriétés nom et prénom et
un constructeur.
Créez une classe client dérivée de la classe personne en y ajoutant la propriété adresse et
une méthode getCoordonnee() qui affiche les coordonnées complètes de la personne.
Créez une classe électeur dérivée de la même classe, et ajoutez-y deux propriétés bureau de
vote et vote, ainsi que deux méthodes ; une méthode booleen qui permet retourner la
valeur True à l’attribut vote et une autre méthode isVoter qui permet de tester si un
électeur a voté.

*/
class Personne{
    public $nom;
    public $prenom;

    public function __construct($n, $p){
        $this->nom = $n;
        $this->prenom = $p;
    }
}

class Client extends Personne{
    public $adresse ='8av de la republique';

    public function getCoordonnee(){
        echo $this->nom ."<br>";
        echo $this->prenom ."<br>";
        echo $this->adresse ."<br>";
    }

}

$moi = new Client('H', 'Amine');
$moi->adresse = '8av de la republique';
$moi->getCoordonnee();

class Electeur extends Personne{
    public $bureauDeVote = 'Paris';
    public $vote = 'true';
    public $test;

    public function bolVote(){

        if ($this->vote == 'true'){
            return true;
        }else{
            return false;
        }

    }

    public function isVoter(){

        if ($this->bolVote()){
            $this->test = new Client('H', 'Amine');
            echo $this->nom .' ' .$this->prenom ." a voté dans le bureau de vote : " .$this->bureauDeVote ." et habite au " .$this->test->adresse;
        }else{
            echo $this->nom .' ' .$this->prenom ." n'a pas voté dans le bureau de vote : " .$this->bureauDeVote;
        }

    }
}

$electeur = new Electeur('H', 'Amine');
$electeur->isVoter();
?>