<?php 
	include "models/ReviewProductModel.php";
	class ReviewProductController extends Controller{
		use ReviewProductModel;
		public function review(){
			$id=isset($_GET["id"]) ? $_GET["id"]: 0;
			$record=$this->updateReview($id);
			header("location:index.php?controller=products&action=detail&id=$id");
		}
	}
 ?>