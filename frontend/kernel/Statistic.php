<?php
/*
Author: Borzyh Stanislav Al'bertovich Email: ff.0xff@yandex.ru
class describes the methods saves statistics Front end server
*/
class statistic extends QueryBuilder {

	/**
	 * @param int $id
     	 * @return int id banner
         */
	public function save($id){
	$this->saveStat($id);
	return $id;


	}


}


?>
