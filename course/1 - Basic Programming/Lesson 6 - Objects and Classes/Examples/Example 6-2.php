<?php

$object = new stdClass();

$objectclone = clone $object;

var_dump($object);
var_dump($objectclone);

unset($object);
unset($objectclone);
