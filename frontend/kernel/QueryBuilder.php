<?php
/*
Author: Borzyh Stanislav Al'bertovich Email: ff.0xff@yandex.ru
This class describes methods for constructing queries MySQL database
*/

class QueryBuilder extends Connectiondb{

	    /**
     	     * @param int $banerID
     	     */
	public function saveStat($banerID){
	
	$mysql= $this->Connection();
	$mysql->real_escape_string($banerID);
	$mysql->query("INSERT INTO `statistics_fr` (`id`, `id_baner`, `add_date`, `progress`) VALUES (NULL, '".$banerID."', '".date("H:i:s")."', '0');");
	$mysql->close();
}


	    /**
             * @return object(mysqli)
     	     */
	public function turnGet(){
	
	$mysql= $this->Connection();
	$turn = $mysql->query("SELECT * FROM `statistics_fr` WHERE `progress` = 0;");
	$mysql->close();
	return $turn;
}

	    /**
     	     * @param int $idBase
     	     */
	public function updateStatusProgress($idBase){
	
	$mysql= $this->Connection();
	$turn = $mysql->query("UPDATE `statistics_fr` SET `progress` = '1' WHERE `statistics_fr`.`id` = ".$idBase.";");
	$mysql->close();

}
	    /**
             * @return object(mysqli)
     	     */
	public function listDB(){
	
	$mysql= $this->Connection();
	$turn = $mysql->query("SELECT * FROM `statistics_fr`;");
	$mysql->close();
	return $turn;

}






}





?>
