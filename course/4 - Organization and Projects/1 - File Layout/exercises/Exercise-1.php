<?php

class Person {
    protected $name;
    protected $age;
    protected $haircolor;
    
    public function __construct($name, $age, $haircolor) {
        $this->name = $name;
        $this->age = $age;
        $this->haircolor = $haircolor;
    }
}

$storage = ['name' => 'Sally', 'age' => 15, 'haircolor' => 'red'];
var_dump(new Person($storage['name'], $storage['age'], $storage['haircolor']));

$storage = newstdclass;
$storage->name = 'Lucy';
$storage->age = '12';
$storage->haircolor = 'brown';
var_dump(new Person($storage->name, $storage->age, $storage->haircolor));

$name = 'Fred';
$age = '26';
$haircolor = 'black';
var_dump(new Person($name, $age, $haircolor));