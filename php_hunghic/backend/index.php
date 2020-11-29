<?php 
	session_start();
	//load file controller.php
	include "../app/Controller.php";
	//load file Connection.php
	include "../app/Connection.php";
	//----
	//lấy biến controller truyền từ url
	$controller = isset($_GET["controller"]) ? $_GET["controller"]:"Home";
	//lấy biến action truyền từ url
	$action = isset($_GET["action"]) ? $_GET["action"]:"index";
	//ghép thành đường dẫn file controller vật lý
	$fileController = "controllers/".ucfirst($controller)."Controller.php";
	//tên class
	$classController = ucfirst($controller)."Controller";
	//load file controller
	include $fileController;
	//kiểm tra xem class đó tồn tại hay không, nếu có thì khởi tạo 
	if(class_exists($classController)){
		$obj = new $classController();
		$obj->$action();
	}else die("$fileController không tồn tại");
	//----
 ?>
