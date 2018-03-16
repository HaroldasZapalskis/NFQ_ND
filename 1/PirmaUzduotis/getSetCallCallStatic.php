<?php

class MagicMethods {
    var $firstName = 'Vardas';
    var $lastName = 'Pavarde';

    function __get($name)
    {
        echo "__get(): Parametro \"$name\" klase neturi" . PHP_EOL;
    }

    function __set($name, $value)
    {
        echo "__set(): Parametro \"$name\" klase neturi. Bandete priskirti reiksme \"$value\"".PHP_EOL;
    }

    function __call($name, $arguments)
    {
        echo "__call(): Funkcijos \"$name\" klase neturi. Bandete paduoti parametrus: ";
        foreach ($arguments as $item)
            echo "$item ";
    }

    static function __callStatic($name, $arguments)
    {
        echo "__callStatic(): Funkcijos \"$name\" klase neturi. Bandete paduoti parametrus: ";
        foreach ($arguments as $item)
            echo "$item ";
    }
}

function run2()
{
    $object = new MagicMethods();

//__get()
    echo "$object->nera";

//__set()
    $object->nera = 12;

//__call()
    $object->nera(1, 11, 'abc', true, false);

//__callStatic()
    echo "" . PHP_EOL . "";
    MagicMethods::nera(1, 11);
}
