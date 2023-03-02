<?php
/* 
Exercice : Au vue de cette classe vous allez essayer de renseigner les attributs : pseudo et mdp (c'est_à-dire  écrire setteurs et getteurs).

class Membre
{
	private $pseudo;
	private $mdp;
}

Le pseudo doit être de type string, et doit être compris etre 3 et 15 caractères
*/

class Membre
{
    private $pseudo;
    private $mdp;


    public function setPseudo($pseudo){
        if(is_string($pseudo) && strlen($pseudo) >= 3 && strlen($pseudo) <= 15){
            $this->pseudo = $pseudo;
        }else{
            echo "Le pseudo doit être de type string, et doit être compris etre 3 et 15 caractères";
        }
    }

    public function getPseudo(){
        return $this->pseudo;
    }

    public function setMdp($mdp){
        if(is_string($mdp) && strlen($mdp) >= 3 && strlen($mdp) <= 15){
            $this->mdp = $mdp;
        }else{
            echo "Le mdp doit être de type string, et doit être compris etre 3 et 15 caractères";
        }
    }

    public function getMdp(){
        return $this->mdp;
    }

}

$member = new Membre;
$member->setPseudo("toto");
$member->setMdp("totoPassword");

echo $member->getPseudo() . " " . $member->getMdp();