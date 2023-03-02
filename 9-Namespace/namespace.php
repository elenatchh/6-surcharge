<?php
namespace A\mySpace;
class PDO{
    public function show(){
        echo 'je suis la classe POO du namespace A\mySpace';
    }
}

$name = new PDO;
$name-> show();
echo '<hr>'; 
echo __NAMESPACE__;
// connexion a la BDD
$pdo = new \PDO('mysql:host=localhost;dbname=entreprise', 'root', '');
var_dump($pdo); 
?>