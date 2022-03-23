<?php 

require_once "../brief_MVC/model/DB.php";

class afficheClient extends DB

{
    public function accountsClient()
    {
       
            $query = "SELECT * FROM `client`";
            $log = $this->Connect()->prepare($query);
            $log->execute();
            $res = $log->fetchAll(PDO::FETCH_ASSOC);
            return $res; 
       
    }

}

?>