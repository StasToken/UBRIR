<?php
require('./kernel/_init_.php');

if(isset($_POST['query'])){
	$statistic->save(json_decode($_POST['query'],true));//Get statistics and save it	
}
?>
