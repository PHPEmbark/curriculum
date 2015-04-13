<?php

class Db extends PDO
{
    public function __construct($dsn)
    {
	parent::__construct($dsn);
	$this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
}