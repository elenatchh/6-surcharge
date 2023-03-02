<?php
// Une classe abstract ne peut pas être instanciée. Elle sert de modèle pour les classes qui vont l'hériter. 
//Une méthode abstract doit être définie dans la classe fille.Les méthodes abstract ne peuvent pas avoir de contenu.
abstract class Joueur{
    public function seConnecter(){
        return $this->etreMajeur();
    }

    abstract public function etreMajeur();// Une méthode abstract 
    abstract public function devise();
}

class JoueurFr extends Joueur
{
    public function etreMajeur()
    {
        return 18;
    }

    public function devise()
    {
        return '€';
    }
}

// $joueur = new Joueur; erreur car la classe Joueur est abstract

$joueurFr = new JoueurFr;
echo $joueurFr->seConnecter();
echo $joueurFr->devise();
?>