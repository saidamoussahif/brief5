<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="http://localhost/brief_MVC/view/assets/css/dashboard.css">
    <title>Dashboard</title>
</head>

<body id="body-pd">

    <?php include("include/adminHeader.php") ?>
    
<div class="container-fluid text-light ">
    <!-- <div class="table-responsive"> -->
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row w-100">
                    <div class="col-xs-5 m-4">        
                       <a href="#" class="btn btn-light"  data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">
                           <i class="material-icons"></i> 
                           <!-- <span>Add New Trip</span> -->
                           <button type="button" class="btn" data-dismiss="modal" style="background-color:#CC9544;">Add a new trip</button>
                        </a>
<!-- create new trip -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header text-light" style="background-color:#CC9544">
            <h5 class="modal-title" id="exampleModalLabel">ADD A NEW TRIP</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body text-dark bg-light">
            <!-- form start -->
        <form action="http://localhost/brief_MVC/addV/addTrip" method="POST">
            
        <div class="form-group">
            <label for="examplegareD">Departing station</label>
            <input type="text" class="form-control" name="gare_depart" id="examplegareD">
            </div>

            <div class="form-group">
            <label for="examplegareA">Arriving station</label>
            <input type="text" class="form-control" name="gare_arrive" id="examplegareA">
            </div>
            <div class="form-group">
            <label for="examplegareA">Departing time</label>
            <input type="text" class="form-control" name="heure_depart" id="examplegareA">
            </div>
            <div class="form-group">
            <label for="examplegareA">Arriving time</label>
            <input type="text" class="form-control" name="heure_arrive" id="examplegareA">
            </div>

            <div class="form-group">
            <label for="exampledateD">Date</label>
            <input type="date" class="form-control" name="date" id="exampledateD">
            </div>
            <div class="form-group">
            <label for="exampleprice">Price</label>
            <input type="number" class="form-control m" name="price" id="exampleprice">
            </div>
            <div class="form-group">
        </div>

        <div class="modal-footer">
            <button type="submit" name="submit_add" class="btn text-light" style="background-color:#CC9544">Create</button>
        </div>
    </div>

</form>
            </div>
        </div>
    </div>
</div>
</div>
<div class="container-fluid ">
    <div class="row ">
        <div class="col-lg-12">
            <div class="card ">
                            <table class="table table-xs mb-5">
                                <thead class=" container bg-dark w-5">
                                 <tr>
                                    <th scope="col" style="color:#CC9544;">Departing</th>
                                    <th scope="col"style="color:#CC9544;">Arriving</th>
                                    <th scope="col"style="color:#CC9544;">Date</th>
                                    <th scope="col"style="color:#CC9544;">D_time</th>
                                    <th scope="col"style="color:#CC9544;">A_time</th>
                                    <th scope="col"style="color:#CC9544;">Price</th>
                                    <th scope="col"style="color:#CC9544;">Enable</th>
                                    <th scope="col"style="color:#CC9544;">Cancel</th>
                                </tr>


                                
                                </thead>
                                <tbody>
                                <?php  foreach($getTrips as $trips):?>
                                    <tr>
                                        <td><?php echo $trips["gare_depart"];?></td>
                                        <td><?php echo $trips["gare_arrive"];?></td>
                                        <td><?php echo $trips["date"];?></td>
                                        <td><?php echo $trips["heure_depart"];?></td>
                                        <td><?php echo $trips["heure_arrive"];?></td>
                                        <td><?php echo $trips["price"];?></td>
                                        <td><a href=""><button type="submit" name="cancel"  class="btn text-light" style="background-color:green">Actived</button></a></td>
                                        <td><a href=""><button type="submit" name="cancel" class="btn text-light" style="background-color:red">Cancel</button></a></td>
                                        <!-- <td><form action="/voyage_mvc/views/editvoyage.php" method="post"><button name="ID_voyage" value="<?php echo $onevoyage["ID_voyage"];?>" class="btn " style="background-color:#F0A500">Edit</button></form></td>
                                        <td><form action="/voyage_mvc/views/booking.php" method="post"><button name="ID_voyage" value="<?php echo $onevoyage["ID_voyage"];?>" class="btn " style="background-color:red">Cancel</button></form></td>
                                       -->
                                    </tr>
                                    <?php endforeach;?>
                                </tbody>
                            </table>
            </div>
        </div>
    </div>
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
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>
</html>