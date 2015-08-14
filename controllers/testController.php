<?php
include (ROOT.DS.'models'.DS.'data_test.php');
require_once (ROOT.DS.'_base'.DS.'_baseController.php');
/**
* 
*/
class testController extends _baseController
{
	function index(){
		$this->pageTitle = "Trắc nghiệm online";
		$this->render('index.php');
	}

	function begin(){
		$this->pageTitle = "Trắc nghiệm online";
		$obj = new data_test();
		$Questions = $obj->getAllQuestion();
		$this->render('test.php', array('Questions' => $Questions));
	}

	function finish(){
		$this->pageTitle = "Trắc nghiệm online";
		$kiemtra = array();
		foreach ($_GET as $key => $value) {
			if (is_numeric($key)) {
				$obj = new data_test();
				$result = $obj->getQuesById($key);
				if ($value == $result[0]['answer']) {
					$kiemtra[$key] = "Đúng";
				} else {
					$kiemtra[$key] = "Sai";
				}
			}
		}
		$this->render('result.php', array('kiemtra' => $kiemtra));
	}
}


?>