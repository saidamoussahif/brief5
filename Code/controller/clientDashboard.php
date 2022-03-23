<?php
session_start();

require_once __DIR__ . "/../model/clientDashboard.php";

class clientDashboard
{
    // public $getSingleTrip;
    public function index()
    {

        $getSingleTrip = array();
        if (isset($_SESSION['ID_voyage']))

            $this->voyage = $_SESSION['ID_voyage'];
            // else
            // $_SESSION['ID_voyage'] = $this->voyage;

        if(!empty($_SESSION['ID_client']))
        {
            require_once __DIR__ . "/../view/clientDashboard.php";
        }
        else
        {
            require_once __DIR__ . "/../view/clientLogin.php";
        }

        
    }

    public function search()
    {
        if (isset($_POST["rechercher"])) {

            $depart = $_POST["From"];
            $arrive = $_POST["To"];
            $date = $_POST["date"];

            $gets = new SearchClient();
            $getTrips = $gets->book($depart, $arrive, $date);
            $_SESSION['ID_voyage'] = $getTrips;
            $this->voyage = $getTrips;

            if (!empty($getTrips)) {
                require_once __DIR__ . "/../view/result.php";
            } else {
                echo "<script>alert(\"la variable est nulle\")</script>";
                header("Location:http://localhost/brief_MVC/clientDashboard");

            }
        }
    }


    public function MyTrips()
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

    public function reservation()
    {
        $gets = new SearchClient();
        $getSingleTrip = $gets->SingleTrip($_POST["IdVoyage"]);
        $this->getSingleTrip = $getSingleTrip;
        if (!empty($this->getSingleTrip)) {
            require_once __DIR__ . "/../view/clientBook.php";
        } else {
            echo "<script>alert(\"la variable est nulle\")</script>";
            header("Location:http://localhost/brief_MVC/clientDashboard");
        }
    }


    

    public function reserv()
    {
        if(isset($_POST['submit']))
        {
            $depart = $_POST['From'];
            $arrive = $_POST['To'];
            $heure_depart = $_POST['dateD'];
            $heure_arrive = $_POST['dateA'];
            $date = $_POST['date'];
            $price = $_POST['Price'];
            
            $logC = new SearchClient();
            $var=$logC->insert($depart, $arrive,$heure_depart, $heure_arrive,$date,$price);

            if(!$var)
            {   
                header("Location:http://localhost/brief_MVC/clientdashboard/mytrips");
            }
            else
            {
                echo "error";
            }
        }
        
    }
}
