<?php

require_once __DIR__ . "/../model/dashboard.php";

session_start();

class AdminDashboard{
            
    public function index()
    {
        if(!empty($_SESSION['ID_admin']))
        {
            $gets = new Dashboard();
            $getTrips = $gets->Trips();

            require_once __DIR__."/../view/dashboard.php";
        }
        else
        {
            require_once __DIR__."/../view/adminLogin.php";
        }
        
    }   

    // function CancelTrip($id)
	// {
	// 	$cancel = new Dashboard();
	// 	$cancel->Cancel($id);
	// 	if($cancel)
	// 	{
	// 		header("Location:http://localhost/brief_MVC/dashboard");
	// 	}
	// }

   
}




?>