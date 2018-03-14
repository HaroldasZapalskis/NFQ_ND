<?php

class Tevas {
    function __construct()
    {
        echo "   construct(): Tevas".PHP_EOL."";
    }

    function __destruct()
    {
        echo "   destruct(): Tevas".PHP_EOL."";
    }
}

class Vaikas extends Tevas {
    function __construct()
    {
        parent::__construct();
        echo "   construct(): Vaikas".PHP_EOL."";
    }

    function __destruct()
    {
        echo "   destruct(): Vaikas".PHP_EOL."";
    }
}

class AntrasVaikas extends Tevas {
    //Kadangi neturi savo construct, paveldi tevo
}

class TreciasVaikas extends Tevas {
    function __construct()
    {
        echo "   construct(): Trecias vaikas".PHP_EOL."";
    }
    function __destruct()
    {
        parent::__destruct();
        echo "   destruct(): Trecias vaikas".PHP_EOL."";
    }
}

class Anukas extends Vaikas {
    function __construct()
    {
        parent::__construct();
        echo "   construct(): Anukas".PHP_EOL."";
    }
}


echo "Anuko objekto sukurimas: ".PHP_EOL."";
$Anukas = new Anukas();


echo "".PHP_EOL."Anuko objekto sunaikinimas: ".PHP_EOL."";
unset($Anukas);

echo "".PHP_EOL."Antro vaiko objekto sukurimas: ".PHP_EOL."";
$AntrasVaikas = new AntrasVaikas();

echo "".PHP_EOL."Trecio vaiko objekto sukurimas: ".PHP_EOL."";
$TreciasVaikas = new TreciasVaikas();

echo "".PHP_EOL."Trecio vaiko objekto sunaikinimas: ".PHP_EOL."";
unset($TreciasVaikas);

echo "".PHP_EOL."Susinaikina likusieji: ".PHP_EOL."";