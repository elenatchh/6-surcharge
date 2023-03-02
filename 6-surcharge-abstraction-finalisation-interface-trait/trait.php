<?php
// Un trait est un regroupement de méthodes et de propriétés pouvant être utilisé dans une classe. 
//Un trait peut contenir des méthodes normales, des méthodes abstraites, des constantes, des propriétés. 
//Un trait peut être utilisé dans une classe. Une classe peut utiliser plusieurs traits. Un trait peut utiliser un autre trait.
trait TPanier
trait TPanier{
    public $nbProduit = 1;
    public function affichageProduit(){
        return "affichage des produits <br>";
    }

}

trait TMembre{
    public function affichageMembre(){
        return "affichage des membres <br>";
    }
}

class Site{
    use TPanier, TMembre; // on peut utiliser plusieurs traits dans une même classe
}
?>