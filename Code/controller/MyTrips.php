<?php

session_start();

require_once __DIR__ . "/../model/clientDashboard.php";

class MyTrips
{
    public function index()
    {
        if(!empty($_SESSION['ID_client']))
        {
            $gets = new SearchClient();
            $getTrips = $gets->MyTrips();

            require_once __DIR__ . "/../view/Mytrips.php";

        }
        
        else
        {
            require_once __DIR__ . "/../view/clientLogin.php";
        }
        
            
        
        
        
    }
}




?>