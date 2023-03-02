<?php
class A{
    public function calcul(){
        //return après 1000 lignes de code 
        return 10;
    }
}
// Surcharge ou override permet de modifier le comportement d'une méthode héritée. 
// On peut aussi ajouter des paramètres à la méthode héritée
// parent:: permet d'appeler la méthode héritée


class B extends A{ // ca étend 
    public function calcul(){
        $nb = parent::calcul(); 
        if($nb <=100){
            return "$nb est inférieur a 100";
        }
        else{
            return "$nb est supérieur a 100"; 
        }
    }
    public function calcul2()
    {
        $nb= parent::calcul(); // On appelle la méthode calcul() de la classe A sans surcharge
    }
}

$b = new B; // On instancie la classe B
echo $b->calcul(); // On appelle la méthode calcul() de la classe B