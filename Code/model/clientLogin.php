<?php 

require_once "../brief_MVC/model/DB.php";

class SignIn extends DB

{
    
    public function signinClient($email,$password)
    {
        if(isset($_POST['submit']))
        {

           
            $query = "SELECT * FROM `client` WHERE  email='$email' AND password='$password'";

            $log = $this->connect()->prepare($query);
            $log->execute();
            $res = $log->fetch(PDO::FETCH_ASSOC);
            return $res;
        }
    }

}

?>