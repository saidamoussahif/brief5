<?php 

    require_once "../brief_MVC/model/DB.php";

class login extends DB

{

    public function signin($email,$password)
    {
        if(isset($_POST['submit']))
        {
           
            $query = "SELECT * FROM `admin` WHERE  email='$email' AND password='$password'";
            $log = $this->connect()->prepare($query);
            $log->execute();
            $res = $log->fetch(PDO::FETCH_ASSOC);
            return $res;
              
         
        }
    }

}

?>