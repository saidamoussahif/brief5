
<?php
// include('core/DB.php'); 
// //Products 
// $query = $conn->prepare("SELECT COUNT(id_product) FROM product;");/* requete sql*/
// $query->execute(); 
// $count_prd=$query->fetchColumn();
// //get the products 
// $query_get = $conn->prepare("SELECT *FROM product;");
// $query_get->execute();
// $result_prd=$query_get->fetchAll();
// //Add Products 
// if (isset($_POST['add'])) {
//   $nom=$_POST['Name'];
//   $cat=$_POST['Category'];
//   $desc=$_POST['Description'];
//   $stock=$_POST['Stock'];
//   $price=$_POST['Price'];
//   $image=$_FILES['image']['name'];
//   if(isset($_FILES['image'])){
//       $buffer_image = basename($_FILES["image"]["name"]);
//           $tr_image = "uploads/" . $buffer_image;
//           move_uploaded_file($_FILES["image"]["tmp_name"], $tr_image);
//           $query_prd=$conn->prepare("INSERT INTO `product`(`nom`, `description`, `prix`, `image`, `category`, `stock`) VALUES ('$nom','$desc','$price','$image','$cat','$stock');");
//           $query_prd->execute();  
// }
// }

//Categories
// $queryc = $conn->prepare("SELECT COUNT(id_category) FROM category;");
// $queryc->execute();
// $count_ctg=$queryc->fetchColumn();
// //get the categories
// $queryCat=$conn->prepare("SELECT * FROM `category`;");
// $queryCat->execute();
// $resultsC=$queryCat->fetchAll();
//Users
// $queryu = $conn->prepare("SELECT COUNT(id_employer) FROM employer;");
// $queryu->execute();
// $count_usr=$queryu->fetchColumn();
// ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/assets/css/main.css">
    
    <title>Dashboard</title>
</head>
    <h1>Admin's Dashboard</h1>
    <div class="profile">
        <!-- <img src="public/assets/img/user.png" class="pro-img"> -->
    <span>Admin</span>
        </div>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Train</th>
            <th scope="col">Road</th>
            <th scope="col">F.C</th>
            <th scope="col">S.C</th>
            <th scope="col">Total Bookings</th>
            <th scope="col">Date/Time</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <div class="line"></div>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Al Boraq</td>
            <td>Casablanca To Tanger</td>
            <td>169 dh</td>
            <td>100dh</td>
            <td>110 Seats Available For First Class </td>
            <td>19-02-2022/10:30 AM</td>
            <td>
            <a href="#"><i class="bi bi-pencil-fill" style="color: green;"></i></a>
              <a href="#"><i class="bi bi-trash3" style="color: orange;"></i></a>
            </td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Al Atlas</td>
            <td>Casablanca To Settat</td>
            <td>75 dh</td>
            <td>100dh</td>
            <td>110 Seats Available For First Class </td>
            <td>19-02-2022/10:30 AM</td>
            <td>     <a href="#"><i class="bi bi-pencil-fill" style="color: green;"></i></a>
              <a href="#"><i class="bi bi-trash3" style="color: orange;"></i></a>
            </td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Al Atlas</td>
            <td>Casablanca To Settat</td>
            <td>75 dh</td>
            <td>100dh</td>
            <td>110 Seats Available For First Class </td>
            <td>19-02-2022/10:30 AM</td>
            <td>  <a href="#"><i class="bi bi-pencil-fill" style="color: green;"></i></a>
              <a href="#"><i class="bi bi-trash3" style="color: orange;"></i></a>
            </td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Al Atlas</td>
            <td>Casablanca To Settat</td>
            <td>75 dh</td>
            <td>100dh</td>
            <td>110 Seats Available For First Class </td>
            <td>19-02-2022/10:30 AM</td>
            <td>
            <a href="#"><i class="bi bi-pencil-fill" style="color: green;"></i></a>
              <a href="#"><i class="bi bi-trash3" style="color: orange;"></i></a>
            </td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Al Atlas</td>
            <td>Casablanca To Settat</td>
            <td>75 dh</td>
            <td>100dh</td>
            <td>110 Seats Available For First Class </td>
            <td>19-02-2022/10:30 AM</td>
            <td>
            <a href="#"><i class="bi bi-pencil-fill" style="color: green;"></i></a>
              <a href="#"><i class="bi bi-trash3" style="color: orange;"></i></a>
            </td>
          </tr>
         
        </tbody>
      </table>
    <script>/*===== EXPANDER MENU  =====*/ 
        const showMenu = (toggleId, navbarId, bodyId)=>{
          const toggle = document.getElementById(toggleId),
          navbar = document.getElementById(navbarId),
          bodypadding = document.getElementById(bodyId)
        
          if(toggle && navbar){
            toggle.addEventListener('click', ()=>{
              navbar.classList.toggle('expander')
        
              bodypadding.classList.toggle('body-pd')
            })
          }
        }
        showMenu('nav-toggle','navbar','body-pd')
        
        /*===== LINK ACTIVE  =====*/ 
        const linkColor = document.querySelectorAll('.nav__link')
        function colorLink(){
          linkColor.forEach(l=> l.classList.remove('active'))
          this.classList.add('active')
        }
        linkColor.forEach(l=> l.addEventListener('click', colorLink))
        
        
        </script>
<script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
</body>
</html>