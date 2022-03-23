<?php 

class DB{
    protected $host ='localhost';
    protected $dbname='trainline';
    protected $username='root';
    protected $password='';
    
    public function Connect(){

        try{
            
            $conn=new PDO("mysql:host=localhost;dbname=trainline","root",""); 
            return $conn; 
           }
           catch (PDOException $e){
            echo $e->getMessage();
            }
           
    }
}
?>
