<?php

class MagicMethods4 {
    var $firstName = 'Vardas';
    var $lastName = 'Pavarde';

    function __clone()
    {
        $this->firstName = 'Bob';
    }

    function __toString()
    {
        return '__toString(): ' .$this->firstName. ' ' .$this->lastName. '' .PHP_EOL;
    }

    function __invoke()
    {
        return '__invoke(): Tai objektas, o ne metodas';
    }
}

function run5()
{
    $object = new MagicMethods4();

//__toString()
    echo $object;
    $object2 = clone $object;
    echo $object2;

//__invoke()
    echo '' . $object(1) . '';
}