<?php 
	trait ProductsModel{
		//ham lay danh sach cac ban ghi co phan trang
		public function modelRead($category_id,$recordPerPage,$key,$key1){
			//lay bien p truyen tu url
			$p = isset($_GET["p"]) && is_numeric($_GET["p"]) && $_GET["p"] > 0 ? ($_GET["p"]-1) : 0;			
			//lay tu ban ghi nao
			$from = $p * $recordPerPage;
			//---
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//sap xep cac ban ghi theo thu tu
			$orderBy = "order by id desc";
			$order = isset($_GET["order"]) ? $_GET["order"] : "";
			switch($order){
				case "priceAsc":
					$orderBy = " order by price asc ";
					break;
				case "priceDesc":
					$orderBy = " order by price desc ";
					break;
				case "nameAsc":
					$orderBy = " order by name asc ";
					break;
				case "nameDesc":
					$orderBy = " order by name desc ";
					break;
			}
			//thuc hien truy van

			$query = $conn->query("select * from products where category_id=$category_id and price<$key and price>$key1 $orderBy limit $from,$recordPerPage");
			//lay toan bo ket qua tra ve
			$result = $query->fetchAll();			
			//---
			return $result;
		}
		//tinh tong so ban ghi
		public function totalRecord($category_id,$recordPerPage){
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("select id from products where category_id=$category_id");
			//tra ve tong so ban ghi
			return $query->rowCount();
		}
		//lay mot ban ghi
		public function modelGetRecord($id){
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("select * from products where id=$id");
			//tra ve mot ban ghi
			return $query->fetch();
		}								
		//lay ten danh muc san pham
		public function modelGetCategory($category_id){
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("select name from categories where id=$category_id");
			$result = $query->fetch();
			return isset($result->name) ? $result->name : "";
		}	
		//lay brand danh muc san pham
		public function modelGetBrandCategory($category_id){
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("select * from brands where category_id=$category_id ");
			$result = $query->fetchAll();
			return $result;
		}	
		//lay type danh muc danh muc sp
		public function modelGetTypeCategory($category_id){
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("select * from types where category_id=$category_id ");
			$result = $query->fetchAll();
			return $result;
		}	
		public function related($id){
			$conn = Connection::getInstance();
            $query = $conn->query("select category_id from products where id=$id");
            $relate = $query->fetch();
            $category_id = $relate->category_id;
            $result = $conn->query("select * from products where category_id=$category_id and id<>$id limit 0,3");
            return $result->fetchAll();
		}		
		public function demSao1($id){
			$conn = Connection::getInstance();
            $query = $conn->query("select * from rating where product_id=$id and star=1");
            return $query->rowCount();
		}
		public function demSao2($id){
			$conn = Connection::getInstance();
            $query = $conn->query("select * from rating where product_id=$id and star=2");
            return $query->rowCount();
		}
		public function demSao3($id){
			$conn = Connection::getInstance();
            $query = $conn->query("select * from rating where product_id=$id and star=3");
            return $query->rowCount();
		}
		public function demSao4($id){
			$conn = Connection::getInstance();
            $query = $conn->query("select * from rating where product_id=$id and star=4");
            return $query->rowCount();
		}
		public function demSao5($id){
			$conn = Connection::getInstance();
            $query = $conn->query("select * from rating where product_id=$id and star=5");
            return $query->rowCount();
		}
		public function comments($id){
			$conn = Connection::getInstance();
            $query = $conn->query("select * from rating where product_id=$id");
            return $query->fetchAll();
		}
	}
 ?>