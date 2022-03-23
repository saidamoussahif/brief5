<?php

require_once "./model/DB.php";

class SearchClient extends DB

{
    public function book($depart, $arrive, $date)
    {
        $query = "SELECT * FROM `voyage` WHERE gare_depart like '$depart%' AND gare_arrive like '$arrive%' AND date = '$date' AND Availablity = 'Available'";
        $log = $this->Connect()->prepare($query);
        $log->execute();
        $res = $log->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }


    
    public function MyTrips()
    {
        $query = "SELECT * FROM reservation ";
        $log = $this->Connect()->prepare($query);
        $log->execute();
        $res = $log->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }
    public function SingleTrip($id)
    {
        $query = "SELECT * FROM voyage WHERE ID_voyage = $id";
        $log = $this->Connect()->prepare($query);
        $log->execute();
        $res = $log->fetch();
        return $res;
    }
    public function reservation($id)
    {
        $query = "SELECT * FROM voyage WHERE ID_voyage = $id ";
        $log = $this->Connect()->prepare($query);
        $log->execute();
        $res = $log->fetch();
        return $res;
    }


    public function insert($depart, $arrive,$heure_depart, $heure_arrive,$date,$price)
    {
        
            $query = "INSERT INTO reservation (gare_depart, gare_arrive, heure_depart, heure_arrive, date, price) VALUES ('$depart', '$arrive','$heure_depart', '$heure_arrive','$date', '$price')";
            $log = $this->Connect()->prepare($query);
            $log->execute();
        
    
     
    }
}
