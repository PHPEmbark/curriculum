<?php
class User
{
    protected $db;

    public function __construct($db)
    {
	$this->db = $db;
    }
    
    public function fetchAll() {
        $this->db->query('SELECT * FROM user');
    }
}
