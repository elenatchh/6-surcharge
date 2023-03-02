<?php

// Les méthodes magiques sont des méthodes qui ont un nom précis et qui sont automatiquement appelées par PHP à certains moments. Elles sont toutes préfixées par __ (double underscore). Elles sont toutes en public et ne peuvent pas être appelées directement.

class User 
{
    public function __construct()
    {
    }

    public $adresse;
    public $ville;
    public $codePostal;

    //__set() est appelée lorsque l'on tente d'affecter une valeur à une propriété qui n'existe pas.
    public function __set($key, $value)
    {
       echo "La propriété $key n'existe pas. La valeur $value n'a pas été enregistrée.";
    }

    //__get() est appelée lorsque l'on tente d'accéder à une propriété qui n'existe pas.

    public function __get($key)
    {
        echo "La propriété $key n'existe pas.";
    }

    //__call() est appelée lorsque l'on tente d'appeler une méthode qui n'existe pas.

    public function __call($key, $value)
    {
        echo "La méthode $key n'existe pas. " . implode(', ', $value);
    }


}

$user1 = new User;

$user1->villes = 'Paris';
echo '<br>';
$user1->Presentation();


// INTERFACES ET CLASSES EXISTANTES
/* echo '<br>';
echo '<pre>';
print_r(get_declared_interfaces());
echo '</pre>';

echo '<br>';
echo '<pre>';
print_r(get_declared_classes());
echo '</pre>';
 */
// stdClass est une classe interne de PHP qui permet de créer des objets sans classe.
//Les objets de cette classe sont appelés objets anonymes.
 $tabFruit = ['pomme', 'poire', 'banane', 'cerise', 'fraise', 'framboise', 'melon', 'orange', 'pasteque', 'raisin', 'tomate'];

 $obj = (object) $tabFruit;

 var_dump($obj);
 $tabMulti = [
    [
           'prenom' => 'Julien',
           'nom' => 'Dupont',
           'telephone' => '0123456789'
       ],

       [
           'prenom' => 'Pierre',
           'nom' => 'Dupond',
           'telephone' => '0123456789'
    ]
];


$tabToObj = (object) $tabMulti;

var_dump($tabToObj);