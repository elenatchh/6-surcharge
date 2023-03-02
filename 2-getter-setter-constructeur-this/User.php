<?php

// Faite une classe User ayant la propriété private $prenom et un constructeur.essayer de renseigner l'attribut prenom sans changer l'extérieur de la classe.
class User{
    private $prenom;

    public function __construct($p)
    {
        $this->setPrenom($p);
    }

    public function setPrenom($p){
        $this->prenom = $p;
    }

    public function getPrenom(){
        return $this->prenom;
    }
    
}

$user1 = new User('Jean');