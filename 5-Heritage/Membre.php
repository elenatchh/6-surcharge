<?php

class Membre
{
    public $id = 15;
    public $pseudo;
    public $mdp;

    public function __construct()
    {
        echo "Je suis un membre <hr>";
    }

    public function inscription()
    {
        return "Je m'inscris <hr>";
    }

    public function connexion()
    {
        return "Je me connecte <hr>";
    }
}

// extends permet de créer une classe enfant qui hérite des propriétés et méthodes de la classe parente
class Admin extends Membre
{

    public function accesBackOffice()
    {

        return "J'ai accès au back office <hr>";
    }

}

$admin = new Admin;

var_dump($admin);

var_dump(get_class_methods($admin));
echo $admin->inscription();
echo $admin->connexion();
echo $admin->accesBackOffice();
?>