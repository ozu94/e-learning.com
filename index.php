<?php
//load config
require_once 'config.php';

//xử lý request từ trình duyệt và gọi controller/action tương ứng
if (isset($_GET['controller'])) {
	$controller = $_GET['controller'].'Controller';
} else {
	$controller = 'videoController';
}

if (isset($_GET['action'])) {
	$action = $_GET['action'];
} else {
	$action = 'index';
}

$file = 'controllers'.DS.$controller.'.php'; //controllers/testController.php
if (file_exists($file)) {
	require $file; //add controller
	$c = new $controller;
	$c->$action();
} else {

	require ROOT.DS.'error_404.php';
}

//đóng kết nối
$db = null;

?>
