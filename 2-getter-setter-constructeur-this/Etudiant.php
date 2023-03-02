<?php
// Faire une classe Etudiant avec les propriétés private suivantes : nom, prenom, age, classe, moyenne. Faire une méthode sePresenter() qui affiche les informations de l'étudiant. Instancier 2 étudiants et les faire se présenter.

class Etudiant{
    private $nom, $prenom, $age, $classe, $moyenne;

    public function __construct($n, $p, $a, $c, $m){
        $this->setNom($n);
        $this->setPrenom($p);
        $this->setAge($a);
        $this->setClasse($c);
        $this->setMoyenne($m);
    }



    public function sePresenter(){
        return "Je m'appelle " . $this->getNom() . " " . $this->getPrenom() . " j'ai " . $this->getAge() . " ans, je suis en " . $this->getClasse() . " et ma moyenne est de " . $this->getMoyenne() . "<br>";

    }

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of prenom
     */ 
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */ 
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of age
     */ 
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set the value of age
     *
     * @return  self
     */ 
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get the value of classe
     */ 
    public function getClasse()
    {
        return $this->classe;
    }

    /**
     * Set the value of classe
     *
     * @return  self
     */ 
    public function setClasse($classe)
    {
        $this->classe = $classe;

        return $this;
    }

    /**
     * Get the value of moyenne
     */ 
    public function getMoyenne()
    {
        return $this->moyenne;
    }

    /**
     * Set the value of moyenne
     *
     * @return  self
     */ 
    public function setMoyenne($moyenne)
    {
        $this->moyenne = $moyenne;

        return $this;
    }
}

$etudiant = new Etudiant("DUPONT", "Jean", 18, "Terminale", 15);

echo $etudiant->sePresenter();