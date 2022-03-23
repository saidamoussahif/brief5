<?php

require_once "../brief_MVC/model/DB.php";

class Dashboard extends DB
{


    public function Trips()
    {
        $query = "SELECT * FROM voyage ";
        $log = $this->Connect()->prepare($query);
        $log->execute();
        $res = $log->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }

    // public function Cancel($id)
    // {
    //     $query = "UPDATE voyage SET Availablity = 'canceld' WHERE ID_voyage = $id ";
    //     $log = $this->connect()->prepare($query);
    //     return $log->execute();

    // }

}



?>