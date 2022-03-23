<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost/brief_MVC/view/assets/css/adminLogin.css">
    <title>Sign In Admin</title>
</head>
<body>
<!-- include  -->
<?php  include("include/header.php")  ?>

<div class="bg-login">
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <form class="border bgClass shadow p-3 rounded" action="http://localhost/brief_MVC/adminLogin/login" method="post" style="width: 450px;">
            <h1 class="text-center p-3" style="color:#ff7200"> Sign in</h1>

            <div class="form-group mb-3">
                <label class="mb-3" for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
            </div>
            <div class="form-group mb-3">
                <label class="mb-3" for="password">Password</label>
                <input type="password" class="form-control" id="text" name="password" placeholder="********">
            </div>
         
            <button type="submit" name="submit" class="btnn">Log In</button>
            <p class="text-center pt-5 ">Sign In as a Client ? <a href="http://localhost/brief_MVC/clientlogin">Sign In</a></p>
        </form>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>