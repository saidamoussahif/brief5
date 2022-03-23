<?php

require_once __DIR__."/../model/Signup.php";

class SignUp{
    public function index()
    {
        $error = "";
        require_once __DIR__."/../view/signup.php";
    }


    public function regis()
    {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        $logC = new Register();
        $var=$logC->signupClient($firstname,$lastname,$email,$password);
        if(!$var)
        {   
            
            header("Location:http://localhost/brief_MVC/clientLogin");
        }
        else{
            
            $error = "Email already exist";
            require_once __DIR__."/../view/signup.php";
        }
    }

    
}



?>