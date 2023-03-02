<?php

class Vehicule
{
    private static $marque = 'BMW'; // La propriété est static, elle est commune à toutes les instances de la classe Vehicle . Elle appartient à la classe et non à l'objet.
    private $couleur = 'Noir';
    private static $modele = 'X6';

    // self:: permet d'accéder à une constante ou une propriété static de la classe courante
    public function getMarque()
    {
        return self::$marque;
    }
    
    public function setMarque($marque)
    {
        self::$marque = $marque;
    }

    public function getCouleur()
    {
        return $this->couleur;
    }

    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;
    }

    public function getModele()
    {
        return self::$modele;
    }

    public  static function setModele($modele)
    {
        self::$modele = $modele;
    }
}


$vehicule1 = new Vehicule();

var_dump($vehicule1);

echo "Le véhicule1 est de marque " . $vehicule1->getMarque() . " de couleur " . $vehicule1->getCouleur() . " et de modèle " . $vehicule1->getModele() . " .<hr>";

$vehicule2 = new Vehicule();

echo "Le véhicule2 est de marque " . $vehicule2->getMarque() . " de couleur " . $vehicule2->getCouleur() . " et de modèle " . $vehicule2->getModele() . " .<hr>";

$vehicule3 = new Vehicule();
$vehicule3->setCouleur('Rouge');

echo "Le véhicule3 est de marque " . $vehicule3->getMarque() . " de couleur " . $vehicule3->getCouleur() . " et de modèle " . $vehicule3->getModele() . " .<hr>";

$vehicule4 = new Vehicule();

echo "Le véhicule4 est de marque " . $vehicule4->getMarque() . " de couleur " . $vehicule4->getCouleur() . " et de modèle " . $vehicule4->getModele() . " .<hr>";

$vehicule5 = new Vehicule();
$vehicule5->setMarque('Mercedes');

echo "Le véhicule5 est de marque " . $vehicule5->getMarque() . " de couleur " . $vehicule5->getCouleur() . " et de modèle " . $vehicule5->getModele() . " .<hr>";


echo "Le véhicule1 est de marque " . $vehicule1->getMarque() . " de couleur " . $vehicule1->getCouleur() . " et de modèle " . $vehicule1->getModele() . " .<hr>";

$vehicule6 = new Vehicule();
Vehicule::setModele('X1');

echo "Le véhicule6 est de marque " . $vehicule6->getMarque() . " de couleur " . $vehicule6->getCouleur() . " et de modèle " . $vehicule6->getModele() . " .<hr>";
?>