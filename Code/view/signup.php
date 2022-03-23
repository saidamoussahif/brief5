
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost/brief_MVC/view/assets/css/signup.css">
    <title>Sign up</title>
</head>
<body>

      
<?php include("include/header.php") ?>
      <!-- Sign Up Form -->

      <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <form class="border bgClass shadow p-3 rounded" action="http://localhost/brief_MVC/signup/regis" method="post" style="width: 450px;">
            <h1 class="text-center p-3" style="color:#ff7200"> Sign Up</h1>

            <div class="form-group mb-3">
                <label class="mb-3" for="firstname">First Name</label>
                <input type="text" class="form-control" id="email" name="firstname" placeholder="Enter First Name">
            </div>
            <div class="form-group mb-3">
                <label class="mb-3" for="lastname">Last Name</label>
                <input type="text" class="form-control" id="email" name="lastname" placeholder="Last Name">
            </div>
            <div class="form-group mb-3">
                <label class="mb-3" for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
            </div>
            <div class="form-group mb-3">
                <label class="mb-3" for="password">Password</label>
                <input type="password" class="form-control" id="text" name="password" placeholder="********">
            </div>
         
            <button type="submit" name="submit" class="btnn">Submit</button>

            <p style="color: white;">Already have account
                <a href="http://localhost/brief_MVC/clientlogin" class="link-danger">Sign In</a>
            </p>
        </form>
    </div>
</body>
</html>