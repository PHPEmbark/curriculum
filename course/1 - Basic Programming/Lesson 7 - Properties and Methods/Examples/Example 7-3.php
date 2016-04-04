<?php

class foobar {
    protected $property = "abcdef";
    public function method() {
        echo $this->property;
    }
}

$object = new foobar();

$object->method();
