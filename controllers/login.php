<?php
session_start();

include_once("DB.php");
//extends ->
            class user extends connexion{

                public function Login($email,$password){
                    $query="select * from users";
                    $result=$this->Connect()->query($query);
                    $data=$result->fetchAll();
                       for ($i=0; $i <count($data) ; $i++) { 
                           if($data[$i]["email"]==$email && $data[$i]["password"]==$password ){
                                $_SESSION["admin"]=$email; 
                                header('location:Dashboard.php');
                               }else{
                                echo"<script>alert('authentication')</script>";
                            
                            }
                               
                           } 
                    }
                }
ob_end_flush();

?>