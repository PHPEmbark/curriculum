<?php
include '1-2-autoloader.php';

$autoloader = new Autoloader();
spl_autoload_register([$autoloader, 'load']);

$object = new Test();