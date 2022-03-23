<?php
    
    session_start();

    require_once __DIR__."/../model/accountsClient.php";




    class AccountsClient{

        public function index()
        {
        
            if(!empty($_SESSION['ID_admin']))
                {    
                    $get = new afficheClient();
                    $client = $get->accountsClient();

                    require_once __DIR__."/../view/accountsClient.php";
                }
                else{

                    require_once __DIR__."/../view/clientLogin.php";
                }
                
            
        }
        
        
        



        public function LogOut()
        {
            unset($_SESSION['ID']);
            unset($_SESSION['email']);
            unset($_SESSION['password']);
            session_unset();
            session_destroy();
            print_r($_SESSION);
            header("Location: Location:http://localhost/brief_MVC/home");
            
          
        }
        
    }
?>