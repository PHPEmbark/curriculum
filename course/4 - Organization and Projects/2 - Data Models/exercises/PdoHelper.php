<?php

class HelperPdo extends PDO
{
    protected $dsn;
    protected $queries = [];

    public function __construct($path, $filename)
    {
	$this->dsn = 'sqlite:' . $path . '/' . $filename . '.sqlite';
	parent::__construct($this->dsn);
	$this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    
    public function exec($statement) {
	$this->queries[] = $statement;
	return parent::exec($statement);
    }

    public function query($statement) {
	$this->queries[] = $statement;
	return parent::query($statement);
    }

    public function prepare($statement) {
	$this->queries[] = $statement;
	return parent::prepare($statement);
    }
    
    public function getQueries() {
	return $this->queries;
    }
}