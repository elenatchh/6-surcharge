<?php

class A
{
    public function test1()
    {
        return "test1";
    }

}

class B extends A
{
    public function test2()
    {
        return "test2";
    }
}

class C extends B
{
    public function test3()
    {
        return "test3";
    }
}

// Une classe ne peut pas hériter d'elle même
// Non symétrique : A ne peut pas hériter de B et B ne peut pas hériter de A
// pas d'héritage multiple : une classe ne peut hériter que d'une seule classe
?>