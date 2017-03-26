<?php
/*
Author: Borzyh Stanislav Al'bertovich Email: ff.0xff@yandex.ru 
Class for uploading files on the backend 
*/
class Transporter extends Config{
	
	private $packet = array();


	
	public function sendBakend(){
	$this->turnBild();
	$this->sendPacket();
	}
	

	
	private function turnBild(){

	$QueryBuilder = new QueryBuilder();
	$turn = $QueryBuilder->turnGet();
	$row_cnt=$turn->num_rows;
	// Create a package to send only if you have accumulated 50 or more sent messages
	if($row_cnt < 50){
	exit();
	}
	$index=0;
	while ($row = $turn->fetch_assoc()) {
	$this->packet[$index]['add_date']=$row['add_date'];
	$this->packet[$index]['id_baner']=$row['id_baner'];
	$this->packet[$index]['id']=$row['id'];
	$index++;
	}

	}
 
	private function sendPacket(){

		
	
	$QueryBuilder = new QueryBuilder();
	foreach ($this->packet as $dataPacket){
		$QueryBuilder->updateStatusProgress($dataPacket['id']);
	}
	
	



 	/* 
	Sent to the server statistics normal POST request 
	PS: I know you can use CURL but I don't know whether you have it on 
	the server, by default CURL is not installed, so I made a simple POST request without it 	 
	*/
	$postdata = http_build_query(
    		array(
        		'query' => json_encode($this->packet)
    		     )
	);
	$opts = array('http' =>
    			array(
        			'method'  => 'POST',
        			'header'  => 'Content-type: application/x-www-form-urlencoded',
        			'content' => $postdata
    			     )
	);
	$context  = stream_context_create($opts);
	$result = file_get_contents($this->backendHost, false, $context);
	

	}


}



?>
