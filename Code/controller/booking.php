<?php
require_once __DIR__ . "/../model/booking.php";
session_start();
class booking
{
    public $voyage = array();

    public function index()
    {
        require_once __DIR__ . "/../view/booking.php";
        
    }

    public function Research()
    {
        if (isset($_SESSION['ID_voyage']))
            $this->voyage = $_SESSION['ID_voyage'];
        else

            $_SESSION['ID_voyage'] = $this->voyage;

        // require_once __DIR__ . "/../view/booking.php";

        if (isset($_POST["submit"])) {

            $depart = $_POST["From"];
            $arrive = $_POST["To"];
            $date = $_POST["date"];

            $get = new Search();
            $getTrip = $get->book($depart, $arrive, $date);

            $_SESSION['ID_voyage'] = $getTrip;
            $this->voyage = $getTrip;

            if ($getTrip) 
            {
                
                require_once __DIR__ . "/../view/UserSearch.php";
            } 
            else 
            {
                require_once __DIR__ . "/../view/booking.php";

                echo "<script language=\"javascript\">";
                echo "alert('No Results Found')";
                echo "</script>";
            }
        }
    }

    

    
}
