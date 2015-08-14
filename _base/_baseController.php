<?php

/**
* 
*/
class _baseController
{
	public $layout = true;

	public function render($view, $arr = array() )
	{
		//parse Array param từ action qua view
		foreach ($arr as $key => $value) 
		{
			$$key = $arr[$key];
		}

		//lấy content của file views/testController/index.php
		$file = ROOT.DS.'views'.DS.get_class($this).DS.$view;
		if(file_exists($file))
		{
			ob_start();
			include $file;
			$content = ob_get_contents();
			ob_end_clean();
		}else{
			ob_start();
			$content = ob_get_contents();
			ob_end_clean();
		}
		
		//render page html
		if($this->layout == true)
		{
			include(ROOT.DS.'views'.DS.'layout'.DS.'main.php');
		}else{
			echo $content;
		}
	}
}