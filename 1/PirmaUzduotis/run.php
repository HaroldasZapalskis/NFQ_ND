<?php

@include 'constructDestruct.php';
@include 'getSetCallCallStatic.php';
@include 'isSetUnset.php';
@include 'sleepWakeupSetStateDebugInfo.php';
@include 'toStringClone.php';

//construct destruct
echo "**************Construct, Destruct*************".PHP_EOL;
run();
//get set call callStatic
echo PHP_EOL.PHP_EOL."**************Get, Set, Call, CallStatic**********************".PHP_EOL;
run2();
//isSet unset
echo PHP_EOL.PHP_EOL."**************IsSet, Unset************************************".PHP_EOL;
run3();
echo PHP_EOL.PHP_EOL."**************Sleep, Wakeup, SetState, DebugInfo**************".PHP_EOL;
//sleep wakeup setState debugInfo
run4();
//toString clone
echo PHP_EOL."**************ToString, Clone*********************************".PHP_EOL;
run5();