<?php
session_start();



if ($_SESSION) {
    // verify if user or admin
    if (!$_SESSION['role']) {
        Redirect::to('home');
    }
    else{
        Redirect::to('dashbord');
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/nav.css">
    <title>Home</title>
</head>
<body>
    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">TrainLine</h2>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="#">Home</a> </li>
                    <li><a href="#">About</a> </li>
                    <li><a href="#">Signup</a> </li>
                </ul>
                
            </div>

            <div class="search">
                <input  class="srch" type="search" name="" placeholder="type to text">
                <a href="#"><button class="btn">Search</button></a>
            </div>

        </div>
        <div class="content">
            <h1>Train ticket <br><span>Book your ticket with TrainLine system</span></h1>
            <p  class="par" >Booking a train ticket shouldn't be complicated. <br>In Morocco, ONCF is the main railway company. However, between TGV<br>, intercity, ter or ouigo, there are price and service differences.<br>
                 Add to that the cross-border and European train companies,<br> and you have a nice puzzle to calculate which will be the best <br>choice of train ticket for travel.
               </p>

                <button class="cn"><a href="#">Book Now</a></button>

                <?php
                include_once('../controllers/login.php');
                if(isset($_POST['btnn'])){
                $email = $_POST['email'];
                $password = $_POST['password'];
                $object = new user();
                $object->Login($email,$password);
                }


        ?>
                <div class="form"  method="POST">
                    <h2>Sign in</h2>
                    <input type="email" name="email" placeholder="Enter Email Here">
                    <input  type="password" name="password" placeholder="Enter Password Here">
                       <button type="submit" name="btnn" class="btnn"><a href="#"></a>Sign in</button>
            
                    <p class="link">Don't have an account<br>
                    <a href="#">Sign up</a> here</a></p>
                   
                    
                </div>
        </div>
    </div>


   
</body>
</html>