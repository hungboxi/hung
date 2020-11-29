<?php 
	trait HomeModel{
		//lay 6 san pham noi bat
		public function modelHotProducts(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from products where hot=1 order by id desc limit 0,4");
			return $query->fetchAll();
		}		
		//hien thi cac danh muc co truong displayhome=1
		public function modelListCategories(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from categories where displayhome=1 order by id desc");
			return $query->fetchAll();
		}
		//lay 6 san pham thuoc danh muc co id truyen vao
		public function modelListProducts($category_id){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from products where category_id=$category_id order by id desc limit 0,4");
			return $query->fetchAll();
		}
		//lay 6 tin tuc noi bat
		public function modelHotNews(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from news where hot=0 order by id desc limit 0,4");
			return $query->fetchAll();
		}		
	}
 ?>