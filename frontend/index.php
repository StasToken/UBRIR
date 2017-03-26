<?php
set_time_limit(40);
ignore_user_abort(true);

require('./kernel/_init_.php');

if(isset($_GET['id_baner'])){
	$ConnectionMan->start();
	$returnIdBaner=$statistic->save($_GET['id_baner']);
	echo json_encode($returnIdBaner);
	$ConnectionMan->close(); // Close the connection to the browser and go to the background
	$Transporter->sendBakend();
}



?>
