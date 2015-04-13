<?php
class Autoloader {
    
    protected $classPath;

    public function __construct($class_path)
    {
        $this->classPath = $class_path;
    }

    public function load($class_name)
    {
        $file = $this->classPath . '/' . str_replace("\\", "/", $class_name) . '.php';

        if (file_exists($file)) {
            require $file;
        } else {
            return false;
        }
    }

    public function register()
    {
        spl_autoload_register([$this, 'load']);
    }
}