<?php 
	trait NewsModel{
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
			$query = $conn->query("select * from news order by id desc limit $from,$recordPerPage");
			//lấy toàn bộ kết quả trả về
			$result = $query->fetchAll();
			//---
			return $result;
		}
		//tính tổng số bản ghi
		public function totalRecord($recordPerPage){
			//lấy biến kết nối
			$conn = Connection::getInstance();
			$query = $conn->query("select id from news");
			//trả về tổng số bản ghi
			return $query->rowCount();
		}
		//lấy 1 bản ghi 
		public function modelGetRecord($id){
			//lấy biến kết nối
			$conn = Connection::getInstance();
			$query = $conn->query("select * from news where id=$id");
			//trả về 1 bản ghi
			return $query->fetch();
		}
		
		//update bản ghi
		public function modelUpdate($id){
			$name = $_POST["name"];
			$description = $_POST["description"];
			$content = $_POST["content"];
			$hot = isset($_POST["hot"]) ? 1 : 0;
			//lấy biến kết nối
			$conn = Connection::getInstance();
			//update dữ liệu tương ứng id truyền vào
			$conn->query("update news set name='$name', description='$description', content='$content', hot=$hot where id=$id");
			//kiểm tra xem user có upload ảnh ko, nếu có thì xóa ảnh cũ, upload ảnh mới
			if($_FILES["photo"]["name"] != ""){
				//--
				//lấy ảnh cũ
				$queryOldPhoto = $conn->query("select photo from news where id=$id");
				//lấy 1 bản ghi
				$oldPhoto = $queryOldPhoto->fetch();
				if($oldPhoto->photo != "" && file_exists("../assets/upload/news/.".$oldPhoto->photo))
					unlink("../assets/upload/news/".$oldPhoto->photo);
				//--
				$photo = time()."_".$_FILES["photo"]["name"];
				//upload ảnh
				move_uploaded_file($_FILES["photo"]["tmp_name"], "../assets/upload/news/$photo");
				//update lại trường photo
				$conn->query("update news set photo='$photo' where id=$id");
			}
		}
		//crate bản ghi
		public function modelCreate(){
			$name = $_POST["name"];
			$description = $_POST["description"];
			$content = $_POST["content"];
			$hot = isset($_POST["hot"]) ? 1 : 0;
			$photo = "";
			//kiểm tra xem user có upload ảnh ko, nếu có thì xóa ảnh cũ, upload ảnh mới
			if($_FILES["photo"]["name"] != ""){
				$photo = time()."_".$_FILES["photo"]["name"];
				//upload ảnh
				move_uploaded_file($_FILES["photo"]["tmp_name"], "../assets/upload/news/$photo");
			}
			//lấy biến kết nối
			$conn = Connection::getInstance();
			//update dữ liệu tương ứng id truyền vào
			$conn->query("insert into news set name='$name', description='$description', content='$content', hot=$hot, photo='$photo'");

		}
		//xóa bản ghi 
		public function modelDelete($id){
			//lấy biến kết nối
			$conn = Connection::getInstance();
			//--
			//lấy ảnh cũ
			$queryOldPhoto = $conn->query("select photo from news where id=$id");
			//lấy 1 bản ghi
			$oldPhoto = $queryOldPhoto->fetch();
			if($oldPhoto->photo != "" && file_exists("../assets/upload/news/.".$oldPhoto->photo))
				unlink("../assets/upload/news/".$oldPhoto->photo);
			//--
			$conn->query("delete from news where id=$id");
		}
	}
 ?>