<?php
/*
Author: Borzyh Stanislav Al'bertovich Email: ff.0xff@yandex.ru
This class describes methods for constructing queries MySQL database
*/

class QueryBuilder extends Connectiondb{

	    /**
     	     * @param int $banerID string $add_date
     	     */
	public function saveStat($banerID,$add_date){
	
	$mysql= $this->Connection();
	$qwerty="INSERT INTO `statistics_bk` (`id`, `id_baner`, `add_date`, `add_local_date`) VALUES (NULL, '".$banerID."', '".$add_date."', '".date("H:i:s")."');";
	$mysql->real_escape_string($qwerty);
	$mysql->query($qwerty);
	$mysql->close();
}

	    /**
             * @return object(mysqli)
     	     */
	public function listDB(){
	
	$mysql= $this->Connection();
	$turn = $mysql->query("SELECT * FROM `statistics_bk`;");
	$mysql->close();
	return $turn;

}






}





?>
