<?php
/*
Author: Borzyh Stanislav Al'bertovich Email: ff.0xff@yandex.ru 
This configuration, specify the network details for connecting to MySQL
And sets the address Back-end servers
*/
class Config{

	// Details for connecting to the database MySQL
	public $hostDB='localhost'; // host
	public $userDB='user'; // user
	public $passwordDB='password'; // password
	public $dataBase='frontent_database'; // data base

	//address of the backend servers
	// example: http://localhost/backend/index.php
	// or http://127.0.0.1/backend/index.php
	public $backendHost='http://192.168.1.150/backend/index.php';

}

?>
