<?php 
	//include file model
	include "models/CategoriesModel.php";
	class CategoriesController extends Controller{
		//sử dụng file model ở đây
		use CategoriesModel;
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
			$this->loadView("CategoriesView.php",["data"=>$data,"numPage"=>$numPage]);
		}
		//update bản ghi -trạng thái GET
		public function update(){
			//lấy biến id truyền từ url
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			//gọi hàm từ model để lấy dữ liệu 
			$record = $this->modelGetRecord($id);
			//tạo biến $action để đưa vào thuộc tính action của form 
			$action = "index.php?controller=categories&action=updatePost&id=$id";
			//gọi view, truyền dữ liệu ra view
			$this->loadView("CategoriesFormView.php",["record"=>$record,"action"=>$action]);
		}
		//update bản ghi trạng thái POST
		public function updatePost(){
			//lấy biến id truyền từ url
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			//gọi hàm từ model để lấy dữ liệu 
			$record = $this->modelUpdate($id);
			//di chuyển đến url
			header("location:index.php?controller=categories");
		}
		//create bản ghi -trạng thái GET
		public function create(){
			//tạo biến $action để đưa vào thuộc tính action của form 
			$action = "index.php?controller=categories&action=createPost";
			//gọi view, truyền dữ liệu ra view
			$this->loadView("CategoriesFormView.php",["action"=>$action]);
		}
		//create bản ghi trạng thái POST
		public function createPost(){
			//gọi hàm từ model để create dữ liệu 
			$this->modelCreate();
				//di chuyển đến url
				header("location:index.php?controller=categories");
		}
		//xóa bản ghi
		public function delete(){
			//lấy biến id truyền từ url
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			//gọi hàm từ model để lấy dữ liệu 
			$record = $this->modelDelete($id);
			//di chuyển đến url
			header("location:index.php?controller=categories");
		}
	}
 ?>