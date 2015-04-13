<?php
$config = ['name' => 'name', 'value' => 'value'];

class NotInjected {
    public function __construct($config)
    {
        $this->name = $config['name'];
        $this->value = $config['value'];
    }
}

$object = new NotInjected($config);
var_dump($object);