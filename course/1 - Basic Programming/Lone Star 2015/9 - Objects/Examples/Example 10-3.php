<?php

$object = new stdClass();

$objectcopy = $object;

unset($object);

$objectcopy = null;

?>
