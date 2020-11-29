<?php 
	//include file model
	include "models/SearchModel.php";
	class SearchController extends Controller{
		//su dung file model o day
		use SearchModel;
		//ham tao
		public function __construct(){			
		}
		//hien thi danh sach cac ban ghi co phan trang
		public function productName(){
			$key = isset($_GET["key"]) ? $_GET["key"] : "";
			$key1 = isset($_GET["key1"]) ? $_GET["key1"] : 0;
			//dinh nghia so ban ghi tren mot trang
			$recordPerPage = 25;
			//tinh tong so trang
			$numPage = ceil($this->totalRecordSearchProductName($key,$recordPerPage)/$recordPerPage);
			//lay du lieu tu model
			$data = $this->modelReadSearchProductName($key,$recordPerPage,$key);
			//load view, truyen du lieu ra view
			$this->loadView("SearchProductNameView.php",["data"=>$data,"numPage"=>$numPage]);
		}
		public function smartSearch(){
			$key = isset($_GET["key"]) ? $_GET["key"] : "";
			$data = $this->modelSmartSearch($key);
			foreach($data as $rows){
				echo "<li><img style='width:100px;' src='../assets/upload/products/$rows->photo'> <a href='index.php?controller=products&action=detail&id=$rows->id'>$rows->name</a></li>";
			}
		}	
		public function brandSearch(){
			$key = isset($_GET['key']) ? $_GET['key'] : '';
			$data = $this->modelBrandSearch($key);
			foreach($data as $rows){
				$b =number_format($rows->price);
				$a = number_format($rows->price - ($rows->price*$rows->discount)/100);
				echo "<div class='form-group col-md-5 col-sm-12 col-lg-3' style='padding-left: 25px; width: 250px; margin: 25px;'>
          <div style='width: 250px; height: 350px; padding: 0px;' class='img1'><a href='index.php?controller=products&action=detail&id=$rows->idd;'><img style='width: 250px; height: 250px; padding: 0px;' src='../assets/upload/products/$rows->photo' title='$rows->namee' alt=' $rows->namee' class='img-responsive'></a>
            <div class='t'>
              <a href='index.php?controller=products&action=detail&id=$rows->idd'> $rows->namee</a><br>
              <p><span class='special-price' style='margin-left: 20px;'> <span class='price product-price' style='text-decoration:line-through;'> $b </span> ₫ </span> 
                      <span class='special-price'> <span class='price product-price'>$a</span>₫ </span></p>
            </div>
           </div>
            <style type='text/css'>
              .fa-star{color: #00ff00; font-size: 15px; margin-left: 10px;}
            </style>
            <a style='padding-left: 35%; padding-top: 20px;' href='index.php?controller=cart&action=create&id=$rows->idd?>' ><input class='bu1' type='button' value='Thêm Vào Giỏ' style='width: 50%; height: 25px; border: none; color: white; border-radius: 10px 10px 10px 10px; '></a>
          </div>
          ";
			}
		}	
	}
 ?>