<?php 
	//include file model
	include "models/ProductsModel.php";
	class ProductsController extends Controller{
		//su dung file model o day
		use ProductsModel;
		//hien thi danh sach cac ban ghi co phan trang
		public function category(){
			$category_id = isset($_GET["id"]) ? $_GET["id"] : 0;
			//dinh nghia so ban ghi tren mot trang
			$recordPerPage = 12;
			$key = isset($_GET["key"]) ? $_GET["key"] : 100000000000000;
			$key1 = isset($_GET["key1"]) ? $_GET["key1"] : 0;
			//tinh tong so trang
			$numPage = ceil($this->totalRecord($category_id,$recordPerPage)/$recordPerPage);
			//lay du lieu tu model
			$data = $this->modelRead($category_id,$recordPerPage,$key,$key1);
			$record = $this->modelGetBrandCategory($category_id);
			$recordType = $this->modelGetTypeCategory($category_id);
			//load view, truyen du lieu ra view
			$this->loadView("ProductsCategoryView.php",["data"=>$data,"numPage"=>$numPage,"record"=>$record,"recordType"=>$recordType,"category_id"=>$category_id]);
		}		
		//chi tiet san pham
		public function detail(){
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			$record = $this->modelGetRecord($id);
			$data=$this->related($id);
			$demSao1 = $this->demSao1($id);
			$demSao2 = $this->demSao2($id);
			$demSao3 = $this->demSao3($id);
			$demSao4 = $this->demSao4($id);
			$demSao5 = $this->demSao5($id);
			$comments= $this->comments($id);
			//load view, truyen du lieu ra view
			$this->loadView("ProductsDetailView.php",["record"=>$record,"data"=>$data,"id"=>$id,"demSao1"=>$demSao1,"demSao2"=>$demSao2,"demSao3"=>$demSao3,"demSao4"=>$demSao4,"demSao5"=>$demSao5,"comments"=>$comments]);
		}
	}
 ?>