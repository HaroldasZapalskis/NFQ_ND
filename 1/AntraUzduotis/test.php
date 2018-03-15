<?php

use AntraUzduotis\ClassA;
use AntraUzduotis\Subpackage\ClassB;
use AntraUzduotis\Subpackage\Subsubpackage\ClassC;

require_once __DIR__.'/bootstrap.php';

$a = new ClassA();
$a->doSomething();

$b = new ClassB();
$b->doSomething();

$c = new ClassC();
$c->doSomething();

$d = \AntraUzduotis\Subpackage2\ClassD::doSomething();

$e = \AntraUzduotis\Subpackage\Subsubpackage\Subsubsubpackage\ClassE::doSomething();