<?php
class User {
    public $user_id;
    public $name;
    public $display;
    public $password;
    
    public function validate() {
	if(empty($this->user_id)) {
	    return false;
	}
	
	return true;
    }
}
