<?php
/*
Author: Borzyh Stanislav Al'bertovich Email: ff.0xff@yandex.ru
class describes the methods saves statistics backend end server
*/
class statistic extends QueryBuilder {

	/**
	 * @param array $query
         */
	public function save($query){
	foreach ($query as $value) $this->saveStat($value['id_baner'],$value['add_date']);
	}


}


?>
