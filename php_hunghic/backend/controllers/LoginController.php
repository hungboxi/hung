<?php 
	//load model
	include "models/LoginModel.php";
	class LoginController extends Controller{
		//hàm tạo để kiểm tra đăng nhập
		// public function __construct(){
		// 	$this->authentication();
		// }
		//sử dụng class model
		use LoginModel;
		public function index(){
			$this->loadView("LoginView.php");
		}
		//khi ấn nút submit 
		public function login(){
			//gọi hàm modelLogin trong model
			$this->modelLogin();
			//quay lại trang index
			header("location:index.php");
		}
		//đăng xuất
		public function logout(){
			//hủy session
			unset($_SESSION["email"]);
			header("location:index.php");
		}
	}
 ?>