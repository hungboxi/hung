<?php 
	trait CategoriesModel{
		//hàm lấy danh sách các bản ghi có phân trang
		public function modelRead($recordPerPage){
			//lấy biến p truyền từ url
			$p = isset($_GET["p"]) && is_numeric($_GET["p"]) && $_GET["p"] > 0 ? ($_GET["p"]-1) : 0;
			//lấy từ bản ghi nào
			$from = $p * $recordPerPage;
			//---
			//lấy biến kết nối csdl
			$conn = Connection::getInstance();
			//thực hiện truy vấn
			$query = $conn->query("select * from categories where parent_id=0 order by id desc limit $from,$recordPerPage");
			//lấy toàn bộ kết quả trả về
			$result = $query->fetchAll();
			//---
			return $result;
		}
		//tính tổng số bản ghi
		public function totalRecord($recordPerPage){
			//lấy biến kết nối
			$conn = Connection::getInstance();
			$query = $conn->query("select id from categories where parent_id=0");
			//trả về tổng số bản ghi
			return $query->rowCount();
		}
		//lấy 1 bản ghi 
		public function modelGetRecord($id){
			//lấy biến kết nối
			$conn = Connection::getInstance();
			$query = $conn->query("select * from categories where id=$id");
			//trả về 1 bản ghi
			return $query->fetch();
		}
		//xóa bản ghi 
		public function modelDelete($id){
			//lấy biến kết nối
			$conn = Connection::getInstance();
			$conn->query("delete from categories where id=$id");
		}
		//lấy các danh mục con
		public function modelReadSubCategories($category_id){
			//lấy biến kết nối
			$conn = Connection::getInstance();
			$query = $conn->query("select * from categories where parent_id= $category_id order by id desc");
			//trả về 1 bản ghi
			return $query->fetchAll();
		}
		//liệt kê các danh mục (cho chức năng create, update)
		public function modelListCategories($category_id){
			//lấy biến kết nối
			$conn = Connection::getInstance();
			$query = $conn->query("select * from categories where parent_id=0 and id <> $category_id order by id desc");
			//trả về bản ghi
			return $query->fetchAll();
		}
		//update bản ghi
		public function modelUpdate($id){
			$name = $_POST["name"];
			$parent_id = $_POST["parent_id"];
			//lấy biến kết nối
			$conn = Connection::getInstance();
			$query = $conn->query("update categories set name='$name', parent_id=$parent_id where id=$id" );
		}
		//crate bản ghi
		//update bản ghi
		public function modelCreate(){
			$name = $_POST["name"];
			$parent_id = $_POST["parent_id"];
			//lấy biến kết nối
			$conn = Connection::getInstance();
			$query = $conn->query("insert into categories set name='$name', parent_id=$parent_id");
		}
	}
 ?>