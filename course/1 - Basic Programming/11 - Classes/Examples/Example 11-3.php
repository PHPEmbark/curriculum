<?php

class ExampleClass {
    function __destruct() {
        echo 'Object destroyed';
    }
}

$object = new ExampleClass();
unset( $object );

?>
