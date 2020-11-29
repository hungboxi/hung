<?php 
	include "models/MoresModel.php";
	class MoresController extends Controller{
		use MoresModel;
		//ham mac dinh
				public function index(){
			//load view
			$this->loadView("MoresView.php");
		}

	}
 ?>