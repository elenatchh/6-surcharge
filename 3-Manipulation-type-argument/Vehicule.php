<?php
/* 
/************************
UML:
---------------------
|    Vehicule		|
---------------------
|	$litresEssence	|
---------------------
|setlitresEssence()    	|
|getlitresEssence()		|
---------------------

---------------------
|    Pompe   		|
---------------------
|	$litresEssence	|
---------------------
|setlitresEssence()    	|
|getlitresEssence()		|
|donnerEssence()	|
---------------------
1. Création d'un véhicule 1
2. Attribuer un nombre de litres d'essence au vehicule 1 : 5Litres
3. Afficher le nombre de litres d'essence du vehicule 1
4. Création d'une pompe
5. Attribuer un nombre de litres d'essence à la pompe : 800
6. Afficher le nombre de litres d'essence de la pompe
7. la pompe donne de l'essence en faisant le plein (50L) à la voiture1
8. Afficher le nombre de litres d'essence pour la voiture1 après ravitaillement
9. Afficher nombre de litres d'essence restant pour la pompe
10. Faire en sorte que le véhicule ne puisse pas contenir plus de 50L d'essence (limite reservoir).
*/
/* 
class Vehicule{
    
    private int $litresEssence;

    public function __construct($l)
    {
        $this->setLitresEssence($l);
    }
    
    public function getLitresEssence()
    {
        return $this->litresEssence;
    }

    public function setLitresEssence($litresEssence)
    {
        $this->litresEssence = $litresEssence;
    }
}

class Pompe{
    private $litresEssence;

    public function __construct($l)
    {
        $this->setLitresEssence($l);
    }
    
    public function getLitresEssence()
    {
        return $this->litresEssence;
    }

    public function setLitresEssence($litresEssence)
    {
        $this->litresEssence = $litresEssence;
    }

    public function donnerEssence(Vehicule $voiture){

        if($voiture->getLitresEssence()+50 <=50){

            $this->setLitresEssence($this->getLitresEssence()-50);

            $voiture->setLitresEssence($voiture->getLitresEssence()+50);
        }else{

            $this->setLitresEssence($this->getLitresEssence()-(50-$voiture->getLitresEssence()));

            $voiture->setLitresEssence($voiture->getLitresEssence()+(50-$voiture->getLitresEssence()));
        }

    }
}

$voiture1 = new Vehicule(5);
$pomp1 = new Pompe(800);

echo $voiture1->getLitresEssence() . "L" . "<br>";
echo $pomp1->getLitresEssence() . "L" . "<br>";

$pomp1->donnerEssence($voiture1);
echo "Après ravitaillement : " . $voiture1->getLitresEssence() . "L" . "<br>";
echo "Essence restante : " . $pomp1->getLitresEssence() . "L" . "<br>"; */

class Vehicule{
    private $litresEssence;
    public $maxEssence;

    // public function __construct($max){
    //     $maxEssence = $max;
    // }

    public function getLitresEssence()
    {
        return $this->litresEssence;
    }

    public function setLitresEssence($litresEssence, $maxEssence)
    {   
        if($litresEssence <= $maxEssence){
            $this->litresEssence = $litresEssence;
            return $this;
        }else{
            echo "Le réservoir ne peut accueillir autant d'essence";
        }
    }
}
class Pompe{
    private $litresEssence;

    public function getLitresEssence()
    {
        return $this->litresEssence;
    }

    public function setLitresEssence($litresEssence)
    {
        $this->litresEssence = $litresEssence;
        return $this;
    }

    public function donnerEssence(Vehicule $v){
        $this->setLitresEssence($this->getLitresEssence() - $v->maxEssence +$v->getLitresEssence());
        $v->setLitresEssence($v->maxEssence, $v->maxEssence);
    }
}

$vehicule1 = new Vehicule;
$vehicule1->maxEssence = 50;
$vehicule1->setlitresEssence(5, 50);
echo "Le vehicule 1 a ". $vehicule1->getLitresEssence()." L<br>";

$pompe1 = new Pompe;
$pompe1->setlitresEssence(800);
echo "La pompe 1 dispose de ". $pompe1->getLitresEssence()." L<br>";

$pompe1->donnerEssence($vehicule1, $pompe1);
echo "Le vehicule 1 a ". $vehicule1->getLitresEssence()." L APRES RAVITAILLEMENT<br>";
echo "La pompe 1 dispose de ". $pompe1->getLitresEssence()." L APRES RAVITAILLEMENT<br>";