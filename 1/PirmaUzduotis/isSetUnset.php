<?php

class MagicMethods2 {
    function __isset($name)
    {
        echo "isset(): Parametro \"".$name."\" klase neturi".PHP_EOL;
    }

    function __unset($name) {
        echo "unset(): Parametro \"".$name."\" klase neturi".PHP_EOL;
    }
}

function run3()
{
    $object = new MagicMethods2();
    isset($object->nera);

    unset($object->nera);
}