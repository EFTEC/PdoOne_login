<?php
@session_start();

use eftec\bladeone\BladeOne;
use eftec\PdoOne;
use eftec\ValidationOne;

include __DIR__."/../vendor/autoload.php";


// singleton and container

/** @var BladeOne $bladeOne */
$bladeOne=null;
/** @var PdoOne $pdoOne */
$pdoOne=null;
/** @var ValidationOne $validationOne */
$validationOne=null;

function bladeOne() {
    global $bladeOne;
    if($bladeOne===null) {
        $bladeOne=new BladeOne();
    }
    return $bladeOne;
}
function pdoOne() {
    global $pdoOne;
    if($pdoOne===null) {
        $pdoOne=new PdoOne('mysql','127.0.0.1','root','abc.123','testdb');
        $pdoOne->logLevel=3; // it shows all errors.
        $pdoOne->open();
    }
    return $pdoOne;
}
function validationOne() {
    global $validationOne;
    if($validationOne===null) {
        $validationOne=new ValidationOne();
    }
    return $validationOne;
}




