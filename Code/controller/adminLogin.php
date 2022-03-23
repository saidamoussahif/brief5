<?php

      require_once __DIR__."/../model/adminLogin.php";

      session_start();

      class adminLogin{
            
            public function index()
            {
                  require_once __DIR__."/../view/adminLogin.php";
            }
            
            public function login()
            {
                  $email= "" ;
                  $password= "" ;

                  if(isset($_POST['email']) && isset($_POST['password']))
                  {

                        $email=$_POST['email'];
                        $password=$_POST['password'];
                  }


                  $signin = new login();
                  $var = $signin->signin($email,$password);

                  if($var)
                  {
                        $_SESSION['ID_admin'] = $var['ID_admin'];
                        $_SESSION['email'] = $email;
                        $_SESSION['password'] = $password;

                        header("Location:http://localhost/brief_MVC/admindashboard");
                  }
                  else
                  {
                        header("Location:http://localhost/brief_MVC/adminlogin");
                  }

            


            }

       
            public function LogOut()
            {
                unset($_SESSION['ID_client']);
                unset($_SESSION['email']);
                unset($_SESSION['password']);
                session_unset();
                session_destroy();
                print_r($_SESSION);
                header("Location: http://localhost/brief_MVC/home");
               
            }
        

        }
 ?>