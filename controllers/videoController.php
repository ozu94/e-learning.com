<?php

require (ROOT.DS.'_base'.DS.'_baseController.php');
/**
* 
*/
class videoController extends _baseController
{
	function index()
	{
		$this->pageTitle = "Học qua video";
		$this->render("index.php");	
	}
}