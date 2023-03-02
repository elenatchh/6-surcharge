<?php

// Pattern Singleton : permet de créer une seule instance d'une classe et de la partager entre toutes les autres classes

class Singleton
{
    public $numero = 20;
    private static $instance = null; // propriété static qui appartient à la classe et non à l'objet

    private function __construct(){} // private pour empêcher l'instanciation de la classe

    private function __clone(){} // private pour empêcher la clonage de la classe

    public static function getInstance()
    {
        if(is_null(self::$instance)) // si l'instance n'existe pas encore on la crée
        {
            self::$instance = new Singleton; // self:: permet d'accéder à une propriété static de la classe courante
        }
        return self::$instance; // on retourne l'instance
    }
}

// $singleton1 = new Singleton();  erreur car le constructeur est private

$singleton1 = Singleton::getInstance(); // on appelle la méthode getInstance() qui retourne l'instance de la classe Singleton
var_dump($singleton1); // on affiche l'instance de la classe Singleton 

$singleton2 = Singleton::getInstance(); 
var_dump($singleton2);

$singleton3 = Singleton::getInstance();
var_dump($singleton3);
?>