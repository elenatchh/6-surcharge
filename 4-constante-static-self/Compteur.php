<?php

class Compteur
{
    public static $nbInstanceClass = 0;

    public $nbInstanceObjet = 0;

    public function __construct()
    {
        ++self::$nbInstanceClass;
        ++$this->nbInstanceObjet;
    }

}

$compteur1 = new Compteur();
$compteur2 = new Compteur();
$compteur3 = new Compteur();
$compteur4 = new Compteur();
$compteur5 = new Compteur();

// Nombre d'instance de la classe
echo Compteur::$nbInstanceClass ."<hr>";

// Nombre d'instance de l'objet
echo $compteur5->nbInstanceObjet ."<hr>";
?>