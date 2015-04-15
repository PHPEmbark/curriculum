<?php

$array = [
    'foo',
    'bar',
];
var_dump( $array );
unset( $array[1] );
$array[] = 'asdf';
var_dump( $array );

?>
