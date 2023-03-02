<?php

final class Application
{
    public function lancerApplication()
    {
        return 'L\'application se lance';
    }
}

$app = new Application;
echo $app->lancerApplication();


class Application2
{
    final public function lancerApplication()
    {
        return 'L\'application se lance ici aussi';
    }
}

class Extension extends Application2
{
    //public function lancerApplication(){} Erreur car la méthode lancerApplication() est final dans la classe Application2
    
}
/* 
class test extends Application
{
    //public function lancerApplication(){} Erreur car la classe Application est final
}
 */