<?php
$config = ['name' => 'name', 'value' => 'value'];

class Injected {
    public function __construct($name, $value)
    {
        $this->name = $name;
        $this->value = $value;
    }
}

$object = new Injected($config['name'], $config['value']);
var_dump($object);