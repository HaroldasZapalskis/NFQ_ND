<?php

class MagicMethods {
    var $firstName;
    var $lastName;

    function __sleep()
    {
        return ['firstName', 'lastName'];
    }

    function __wakeup()
    {
        echo "wakeup(): firstName: ".$this->firstName." lastName: ".$this->lastName."".PHP_EOL."";
    }

    public static function __set_state($an_array)
    {
        $object = new MagicMethods();
        $object->firstName = $an_array['firstName'];

        return $object;
    }
}

class Dump {
    var $firstName = 'vardas';
    var $lastName = 'pavarde';

    public function __debugInfo()
    {
        return [
            'LietuviskasVardas' => $this->firstName,
            'LietuviskaPavarde' => $this->lastName
        ];
    }
}

$object = new MagicMethods();
$object->firstName = 'vardas';
$object->lastName = 'pavarde';

//sleep() wakeup()
echo "sleep(): ".serialize($object)."".PHP_EOL."";
unserialize('O:12:"MagicMethods":1:{s:8:"lastName";s:8:"pavardee";}');

//set_state()
echo "".PHP_EOL."set_state(): ".PHP_EOL."";
eval('$object2 = ' . var_export($object, true) . ';');
var_dump($object2);

//debugInfo()
echo "".PHP_EOL."debugInfo(): ".PHP_EOL."";
var_dump(new Dump());