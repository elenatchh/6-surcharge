<?php

class Animal
{
    protected function deplacement()
    {
        return "Je me déplace <hr>";
    }

    public function manger()
    {
        return "Je mange <hr>";
    }

}

class Elephant extends Animal
{
    public function quiSuisJe()
    {
        return "Je suis un éléphant et " . $this->deplacement();
    }
}

class Chat extends Animal
{
    public function quiSuisJe()
    {
        return "Je suis un chat  <hr>";
    }

    public function manger() // On peut redéfinir une méthode héritée
    {
        return "Je mange peu comme un chat <hr>";
    }

}

$elephant = new Elephant;

echo "Elephant : " . $elephant->quiSuisJe();
echo "Elephant : " . $elephant->manger();


$chat = new Chat;

echo "Chat : " . $chat->quiSuisJe();
echo "Chat : " . $chat->manger();
?>