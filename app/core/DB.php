<?php 

// class DB
// {
//    protected    $servername = HOST;
//    protected    $username = USER;
//    protected    $password = PASS;
//    protected    $database = DBNAME;


//      public function connect()
//      {

//       try {
//         $conn = new PDO("mysql:host=localhost;dbname=trainline","root","");
//         // set the PDO error mode to exception
//         $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//         return $conn;
//       } catch(PDOException $e) {
//         echo "Connection failed: " . $e->getMessage();
//       }
//      }
// }

 
 class connexion{
    protected $host ='localhost';
    protected $dbname='trainline';
    protected $username='root';
    protected $password='';
    
    protected function Connect(){
        try{
            $conn=new PDO("mysql:host=$this->host;dbname=$this->dbname",$this->username,$this->password);  
           }

           catch (PDOException $e){
            echo $e->getMessage();
                                  }
           return $conn;
                                }
  
?>



 

