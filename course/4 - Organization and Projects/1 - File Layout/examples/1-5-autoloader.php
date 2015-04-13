<?php
class Autoload {
    public function load($class_name)
    {
        $file = __DIR__ . '/' . $class_name;
        if (file_exists($file)) {
            require $file;
        } else {
            return false;
        }
    }
}