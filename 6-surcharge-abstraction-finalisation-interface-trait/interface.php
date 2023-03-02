<?php

// Une interface est une liste de méthodes abstraites. Une interface ne peut pas être instanciée.
// Une interface peut être implémentée par une classe. Une classe peut implémenter plusieurs interfaces.
// Une interface peut hériter d'une autre interface. Une interface peut contenir des constantes. 
//Une interface peut contenir des méthodes normales.

interface Mouvement
{
    public function avancer();
    public function reculer();
}

class Bateau implements Mouvement
{
    public function avancer()
    {
        return 'Le bateau avance';
    }

    public function reculer()
    {
    }
}