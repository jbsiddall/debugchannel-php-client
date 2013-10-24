<?php

require 'vendor/autoload.php';

use DocBlock\Parser;
use debugchannel\D;

$d = new Parser();
$d->analyze("debugchannel\D");

$output = [];
$dbug = new debugchannel\D("192.168.2.17", "docblock");

foreach( $d->getMethods() as $method ) {
    $output[] = format_method($method);
}

function format_method( $method ) {

    $d = new debugchannel\D("192.168.2.17", "docblock");

//    foreach( $method->getAnnotations() as $annotation ) {
//        $d($annotation->getValues());
//    }
    return get_class( $method );

}

