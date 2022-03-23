<?php
session_start();
require_once __DIR__ . "/../model/booking.php";

class UserSearch
{
    
    public function index()
    {
        require_once __DIR__ . "/../view/UserSearch.php";
    }

    public function Reserver()
    {
        require_once __DIR__ . "/../view/Userbook.php";
    }

    public function reservation()
    {
        $gets = new Search();
        $this->getSingleTrip = $gets->SingleTripUser($_POST["ID_voyage"]);
        if (!empty($this->getSingleTrip)) {
            require_once __DIR__ . "/../view/userBook.php";
        } else {
            echo "<script>alert(\"la variable est nulle\")</script>";
            header("Location:http://localhost/brief_MVC/clientDashboard");
        }
    }
}




    

    