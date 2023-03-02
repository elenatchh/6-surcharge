<?php

class Maison
{

    private static $nbPiece = 7; // propriété static qui appartient à la classe et non à l'objet
    public static $espaceTerrain = '500m²';
    public $couleur = 'blanc';
    const HAUTEUR = '10m';
    private  $nbPorte = 10;

    public function getNbPorte()
    {
        return $this->nbPorte;
    }

    public static function getNbPiece() // méthode static qui appartient à la classe et non à l'objet
    {
        return self::$nbPiece;
    }

}
// 1- Quel est le nombre de pièces de la maison?
echo "La maison a: " . Maison::getNbPiece(). " pièces <hr>";

//2- Quelle est la superficie du terrain ?

echo "La maison a comme superficie : ". Maison::$espaceTerrain ."<hr>";

//3- Quelle est la hauteur de la maison

echo "La hauteur de la maison est : " . Maison::HAUTEUR ."<hr>";


//4- Créer un objet Maison(instancier la classe)
$maison1 = new Maison;

// 5- Quelle est la couleur de cette maison que vous aviez instancier ?
echo "La couleur de cette maison est : " . $maison1->couleur."<hr>";

// 6- Quelle est le nombre de porte cette maison que vous aviez instancier ?

echo "nombre de porte :" . $maison1->getNbPorte()."<hr>";
?>