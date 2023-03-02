<?php
echo "<h1 style='text-align:center;color:red;'>Getter - Setter - Constructeur - this</h1>";

class Homme{

    private $nom, $prenom;

    // Le constructeur est une méthode magique qui s'exécute automatiquement lors de l'instanciation d'un objet. Elle permet d'effectuer des traitements avant l'utilisation de l'objet
    public function __construct()
    {
        echo "Je suis le constructeur de la classe Homme";
    }

    // Setter ou Mutateur : permet de modifier la valeur d'une propriété
    public function setNom($n){
        if(is_string($n)){
            $n = trim($n);
            $this->nom = $n;
        }
    }

    // Getter ou Accesseur : permet de récupérer la valeur d'une propriété

    public function getNom(){
        return $this->nom;
    }

    public function setPrenom($p){
        if(is_string($p)){
            $p = trim($p);
            $this->prenom = $p;
        }
    }

    public function getPrenom(){
        return $this->prenom;
    }

}

$homme1 = new Homme;

$homme1->setNom("DUPONT");
$homme1->setPrenom("Jean");
echo "<br><br> Bonjour je suis " . $homme1->getNom() . " " . $homme1->getPrenom() . "<br>";