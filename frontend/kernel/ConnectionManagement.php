<?php
/*
Author: Borzyh Stanislav Al'bertovich Email: ff.0xff@yandex.ru
This class describes the management methods of connection to the user's browser
Method start() - You must call at the start of the script before 
		 something is displayed to the user
Method close() - Forcibly closes the connection to the browser and 
		 translates the script to the background
*/
class ConnectionManagement{

	public function start(){
		ob_start();
	}
	
	/* Closes the connection to the browser */
	public function close(){
		$length = ob_get_length();

		header('Connection: close');
		header("Content-Length: " . $length);
		header("Content-Encoding: none");
		header("Accept-Ranges: bytes");
		ob_end_flush();
		ob_flush();
		flush();
	}


}


?>
