<?php
echo "<h1 style='text-align:center;color:red;'>Classe, Objet, Instance, Visibilité</h1>";
// Une classe est un plan de construction pour créer des objets (instance de classe)
// La première lettre d'une classe est toujours en majuscule
class Panier{

    // Public , Protected , Private représente le niveau de visibilité d'une propriété ou d'une méthode

    // Public : accessible partout (dans la classe, dans les classes héritières, dans l'extérieur de la classe)

    // Protected : accessible dans la classe et dans les classes héritières

    // Private : accessible uniquement dans la classe
    public $nbProduit;
    protected $qteProduit;
    private $prixProduit;

    // Une méthode est une fonction dans une classe
    public function ajouterArticle(){ 
        return "L'article a été ajouté";
    }

    protected function retirerArticle(){
        return "L'article a été retiré";
    }

    private function affichageArticle(){
        return "Voici les articles";
    }

}

// Pour créer un objet (instance de classe) on utilise le mot clé new suivi du nom de la classe

$panier1 = new Panier;

echo $panier1->ajouterArticle() . '<br>';

// echo $panier1->retirerArticle() . '<br>'; // Erreur car la méthode est protected

// echo $panier1->affichageArticle() . '<br>'; // Erreur car la méthode est private

// Ajouter 5 produits dans nbProduit
$panier1->nbProduit = 5;

var_dump($panier1);

var_dump(get_class_methods($panier1));

// L'encapsulation est un principe de programmation qui consiste à regrouper les données et les méthodes qui les manipulent dans un même endroit (dans une classe)