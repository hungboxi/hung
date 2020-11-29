<?php 
	//include file model
	include "models/NewsModel.php";
	class NewsController extends Controller{
		//sử dụng file model ở đây
		use NewsModel;
		//hàm tạo
		public function __construct(){
			//kiểm tra đăng nhập
			$this->authentication();
		}
		//hiển thị danh sách các bản ghi có phân trang
		public function index(){
			//định nghĩa số bản ghi trên 1 trang
			$recordPerPage = 25;
			//tính tổng số trang
			$numPage = ceil($this->totalRecord($recordPerPage)/$recordPerPage);
			//lấy dữ liệu từ model 
			$data = $this->modelRead($recordPerPage);
			//load view, truyền dữ liệu ra view
			$this->loadView("NewsView.php",["data"=>$data,"numPage"=>$numPage]);
		}
		//update bản ghi -trạng thái GET
		public function update(){
			//lấy biến id truyền từ url
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			//gọi hàm từ model để lấy dữ liệu 
			$record = $this->modelGetRecord($id);
			//tạo biến $action để đưa vào thuộc tính action của form 
			$action = "index.php?controller=news&action=updatePost&id=$id";
			//gọi view, truyền dữ liệu ra view
			$this->loadView("NewsFormView.php",["record"=>$record,"action"=>$action]);
		}
		//update bản ghi trạng thái POST
		public function updatePost(){
			//lấy biến id truyền từ url
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			//gọi hàm từ model để lấy dữ liệu 
			$record = $this->modelUpdate($id);
			//di chuyển đến url
			header("location:index.php?controller=news");
		}
		//create bản ghi -trạng thái GET
		public function create(){
			//tạo biến $action để đưa vào thuộc tính action của form 
			$action = "index.php?controller=news&action=createPost";
			//gọi view, truyền dữ liệu ra view
			$this->loadView("NewsFormView.php",["action"=>$action]);
		}
		//create bản ghi trạng thái POST
		public function createPost(){
			//gọi hàm từ model để create dữ liệu 
			$this->modelCreate();
				//di chuyển đến url
				header("location:index.php?controller=news");
		}
		//xóa bản ghi
		public function delete(){
			//lấy biến id truyền từ url
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			//gọi hàm từ model để lấy dữ liệu 
			$record = $this->modelDelete($id);
			//di chuyển đến url
			header("location:index.php?controller=news");
		}
	}
 ?>