<?php 

require_once "./model/DB.php";

class Search extends DB

{
    public function book($depart,$arrive,$date)
    {
        $query = "SELECT * FROM `voyage` WHERE gare_depart like '$depart%' AND gare_arrive like '$arrive%' AND date = '$date'";
        $log = $this->Connect()->prepare($query);
        $log->execute();
        $res = $log->fetchAll(PDO::FETCH_ASSOC);
        return $res; 
       
    }

    public function SingleTripUser($id)
    {
        $query = "SELECT * FROM voyage WHERE ID_voyage = '$id' ";
        $log = $this->Connect()->prepare($query);
        $log->execute();
        $res = $log->fetch();
        return $res;
    }

    // public function getVoyage()
    // {
    //     $query = "SELECT * FROM `voyage` WHERE gare_depart like '$depart%' AND gare_arrive like '$arrive%' AND date = '$date'";
      
    // }
}
