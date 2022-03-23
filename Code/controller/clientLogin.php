<?php

      require_once __DIR__."/../model/clientLogin.php";

      session_start();

      class clientLogin{
            
            public function index()
            {
                  require_once __DIR__."/../view/clientLogin.php";
            }
            
            public function login()
            {
                 
                $email = $_POST['email'];
                $password = $_POST['password'];
                $firstName = $_POST['firstName'];
                $lastName = $_POST['lastName'];

                

                $signin = new SignIn();
                $var = $signin->signinClient($email,$password);

                  if($var)
                  {
                        $_SESSION['ID_client'] = $var['ID_client'];
                        $_SESSION['firstName'] = $var['firstName'];
                        $_SESSION['lastName'] = $var['lastName'];
                        $_SESSION['email'] = $email;
                        $_SESSION['password'] = $password;

                        header("Location:http://localhost/brief_MVC/clientDashboard");
                  }
                  else
                  {
                        header("Location:http://localhost/brief_MVC/clientLogin");
                  }


            }

            public function LogOut()
            {
                unset($_SESSION['ID_client']);
                unset($_SESSION['firsName']);
                unset($_SESSION['lastName']);
                unset($_SESSION['email']);
                unset($_SESSION['password']);
                session_destroy();
        
            //     require_once __DIR__."/../view/index.php";
            header("Location:http://localhost/brief_MVC/home");
            }

        }
 ?>