<?php 
	trait ReviewProductModel{
		public function updateReview($id){
			$rating=isset($_POST["rating"]) ? $_POST["rating"] : 5;
			$comment=isset($_POST["comment"]) ? $_POST["comment"] : 0;
			$email=$_SESSION["customer_email"];
			$conn = Connection::getInstance();
			$conn->query("insert into rating set star=$rating, comment='$comment' , product_id=$id , email='$email' ");
		}
	}
 ?>