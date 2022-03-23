<?php

require_once "../brief_MVC/model/DB.php";

class AddVoyage extends DB
{


    public function add($gareD,$gareA,$dateD,$dateA,$time,$price)
    {
        
            $query = "INSERT INTO voyage (gare_depart, gare_arrive, heure_depart, heure_arrive, date, price) VALUES ('$gareD', '$gareA', '$dateD', '$dateA', '$time', '$price')";
            $log = $this->connect()->prepare($query);
            return $log->execute();
    }
}




?>