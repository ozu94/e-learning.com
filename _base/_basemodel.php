<?php
/**
* 
*/
class _baseModel
{
	public $connect;
	function __construct()
	{
		try {
			//Tạo kết nối tới database
			$this->connect = new PDO('mysql:host='.DB_HOST.';dbname='.DB_DBNAME.';charset=utf8',
		        DB_USERNAME,
		        DB_PASSWORD); 
		} catch (Exception $e) {
			file_put_contents('log.txt', $e->getMessage() . 'rn', FILE_APPEND); 
		}
	}
}
