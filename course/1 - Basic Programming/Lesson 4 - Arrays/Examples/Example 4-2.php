<?php

$array = [
    1 => "foo",
    2 => "bar",
];

$array[1] = "asdf";
$array[3] = 10;

unset($array[2]);

var_dump($array);
