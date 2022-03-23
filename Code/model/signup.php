<?php 

require_once "../brief_MVC/model/DB.php";

class Register extends DB

{
    public function check($email)
    {
        $query = "SELECT * FROM `client` WHERE  email='$email'";
        $log = $this->Connect()->prepare($query);
        $log->execute();
        $res = $log->fetch(PDO::FETCH_ASSOC);
        return $res;
    }
    
    // public function signupClient($name,$second,$phone,$email,$password)
    public function signupClient($firstname,$lastname,$email,$password)
    {
        if(isset($_POST['submit']))
        {

           if($this->check($email)==null)
           {
            $query = "INSERT INTO client (firstname,lastname, email, password) VALUES ('$firstname', '$lastname','$email', '$password')";
            $log = $this->Connect()->prepare($query);
            $log->execute();
           }
          else{
              return true;
          }
          
              
         
        }
    }

}

?>