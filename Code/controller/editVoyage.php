<?php
session_start();
require_once __DIR__."/../model/editVoyage.php";
require_once __DIR__."/../model/dashboard.php";

class Edit extends DB {
  
	function index() {
	
		// $this->view->allvoyage = $this->model->getAllvoyage();
		// $this->view->render('index/index');
		
	}

	

	// function addTrip()
	// {
	// 	// require_once __DIR__."/../view/home.php";

	// 	if(isset($_POST['submit_add']))
	// 	{

	// 		$gareD = $_POST['gare_depart'];
	// 		$gareA = $_POST['gare_arrive'];
	// 		$dateD = $_POST['heure_depart'];
	// 		$dateA = $_POST['heure_arrive'];
	// 		$time = $_POST['date'];
	// 		$price = $_POST['price'];
        
	// 		$add = new AddVoyage();

	// 		$add->add($gareD,$gareA,$dateD,$dateA,$time,$price);

	// 		header("Location:http://localhost/brief_MVC/dashboard");

	// 	}
		 
	// }
			
	}