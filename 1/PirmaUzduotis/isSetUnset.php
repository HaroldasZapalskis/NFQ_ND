<?php

class MagicMethods {
    function __isset($name)
    {
        echo "isset(): Parametro \"".$name."\" klase neturi".PHP_EOL."";
    }

    function __unset($name) {
        echo "unset(): Parametro \"".$name."\" klase neturi".PHP_EOL."";
    }
}

$object = new MagicMethods();
isset($object->nera);

empty($object->nera);