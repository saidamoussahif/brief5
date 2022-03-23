<?php
require_once "../brief_MVC/model/DB.php";

class update extends DB
{
	public function getOneVoyage($id)
    {
        return $this->db->select("SELECT * FROM `voyage` WHERE ID_voyage= $id ");
    }


    public function editVoyage($id,$gare_depart,$gare_arrive,$heure_depart,$heure_arrive,$date,$price)
    {
        if(isset($_POST['submit']))
        {   
            
            $query = " UPDATE  `voyage` SET  gare_depart= $gare_depart, gare_arrive= $gare_arrive , heure_depart= $heure_depart , heure_arrive= $heure_arrive , date= $date , price= $price  WHERE  ID_voyage= $id";

            $log = $this->Connect()->prepare($query);
            $log->execute();
            $res = $log->fetch(PDO::FETCH_ASSOC);
            return $res;
        }
    }



	



	}




    
