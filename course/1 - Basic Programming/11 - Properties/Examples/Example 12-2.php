<?php

class exampleClass {
    public $property = 'foo';
}

$object = new exampleClass();
echo $object->property;
$object->property = 'bar';
echo $object->property;

?>
