
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="http://localhost/brief_MVC/view/assets/css/accountsclient.css">
    <title>Accounts</title>
</head>
<body id="body-pd">

<?php include("include/adminHeader.php") ?>

   

<div class="container">
          
  <table class="table table-bordered">
    <thead  style="background-color:#CC9544 ;" >
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
    <?php  foreach($client as $oneclient):?>
      <tr>
        <td><?php echo $oneclient["firstName"];?></td>
        <td><?php echo $oneclient["lastName"];?></td>
        <td><?php echo $oneclient["email"];?></td>
      </tr>
      <?php endforeach;?>
    </tbody>
  </table>
</div>
     









        
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