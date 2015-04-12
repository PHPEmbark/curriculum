<?php

$object = new stdClass();
$objectcopy = $object;
$objectclone = clone $object;

var_dump( $object );
var_dump( $objectcopy );
var_dump( $objectclone );

?>
