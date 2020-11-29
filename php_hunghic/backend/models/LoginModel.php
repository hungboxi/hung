<?php 
	trait LoginModel{
		public function modelLogin(){
			$email = $_POST["email"];
			$password = $_POST["password"];
			//mã hóa password
			$password = md5($password);
			//kiểm tra trong csdl
			$conn = Connection::getInstance();
			$query = $conn->query("select email, password from users where email='$email'");
			//lấy 1 bản ghi
			$result = $query->fetch();
			if(isset($result->email)){
				if($result->password == $password){
					//đăng nhập thành công
					$_SESSION["email"] = $email;
				}
			}
		}
	}
 ?>