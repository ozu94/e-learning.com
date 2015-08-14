<?php
require_once (ROOT.DS.'_base'.DS.'_basemodel.php');

/**
* 
*/
class data_test extends _baseModel
{
	function getAllQuestion(){
		$st = $this->connect->prepare("SELECT ch.id,ch.question,da.a,da.b,da.c,da.d FROM cauhoi AS ch INNER JOIN dapan AS da WHERE ch.id = da.cauhoiID");
		$st->execute();
		return $st->fetchAll(PDO::FETCH_ASSOC);
	}

	function getQuesById($key){
		$st = $this->connect->prepare("SELECT answer FROM cauhoi WHERE id = {$key} LIMIT 1");
		$st->execute();
		return $st->fetchAll(PDO::FETCH_ASSOC);
	}
	
}



?>