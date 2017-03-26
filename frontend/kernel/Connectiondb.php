<?php
/*
Author: Borzyh Stanislav Al'bertovich Email: ff.0xff@yandex.ru
This is the class to connect to a MySQL database
It describes methods of installation, connections
*/

class Connectiondb extends Config{

	/**
     	* @return object(mysqli) or Error to connect MySQL
     	*/
	protected function Connection(){
	
	$mysql = new mysqli($this->hostDB, $this->userDB, $this->passwordDB, $this->dataBase);
	
	/* check connection */ 
	if ($mysql->connect_errno) {
    		echo "Error to connect MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}else{
		return $mysql;
	     } 
	
	
	}

}

?>
