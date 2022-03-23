<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost/brief_MVC/view/assets/css/clientDashboard.css">
    <title>Client Dashboard</title>
</head>

<body>
    <?php include("include/headerClient.php") ?>

    <p>
    <h3 style="color:#CC9544">Hi, <?php  echo $_SESSION['firstName']?></h3>Welcome to TrainLine booking system</p>

    <div class="section">
        <div class="booking-form">
            <div class="booking-title">
                <h3>Search your trip</h3>
            </div>
            <form action="http://localhost/brief_MVC/clientDashboard/search" method="POST">
                <div class="booking-input">
                    <div class="place-depart">
                        <label for="">From</label>
                        <input type="text" name="From" class="form-control" required>
                    </div>
                    <div class="place-depart">
                        <label for="">To</label>
                        <input type="text" name="To" class="form-control" required>
                    </div>
                    <div class="place-depart">
                        <label for="">Date Depart</label>
                        <input type="date" name="date" class="form-control" required>
                    </div>
                </div>
                <div class="search"> <button class="btn" type="submit" name="rechercher">Search</button>
                </div>
            </form>
        </div>
    </div>







    <!-- <div class="section">
        <div class="booking-form">
            <div class="booking-title">
                <h3>Search your trip </h3>
            </div>
            <form action="http://localhost/brief_MVC/clientdashboard/search" method="POST">
                <div class="booking-input">
                    <div class="place-depart">
                        <label for="">From</label>
                        <input type="text" name="From" class="form-control" required>
                    </div>
                    <div class="place-depart">
                        <label for="">To</label>
                        <input type="text" name="To" class="form-control" required>
                    </div>
                    <div class="place-depart">
                        <label for="">Date-Depart</label>
                        <input type="date" name="date" class="form-control" required>
                    </div>
                </div>
                <div class="search"> <button class="btn" type="submit" name="rechercher">Search</button>
                </div>
            </form>
        </div>
    </div> -->

    <!-- <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="active-member">
                            <div class="table-responsive">
                                <table class="table table-xs mb-0">
                                    <thead>
                                        <tr>
                                            <th scope="col">Departing</th>
                                            <th scope="col">Arriving</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Departing time</th>
                                            <th scope="col">Arriving time</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php foreach ($_SESSION["Trip"] as $getS) : ?>
                                            <tr>
                                                <td><?php echo $getS["gare_depart"]; ?></td>
                                                <td><?php echo $getS["gare_arrive"]; ?></td>
                                                <td><?php echo $getS["date"]; ?></td>
                                                <td><?php echo $getS["heure_depart"]; ?></td>
                                                <td><?php echo $getS["heure_arrive"]; ?></td>
                                                <td><?php echo $getS["price"]; ?></td>

                                                <td>
                                                    <form action="/brief_MVC/view/booking" method="post"><button name="ID_voyage" value="<?php echo $getS["ID_voyage"]; ?>" class="btn btn-warning">Book now</button></form>
                                                </td>

                                            </tr>
                                        <?php endforeach; ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->










    <script>
        /*===== EXPANDER MENU  =====*/
        const showMenu = (toggleId, navbarId, bodyId) => {
            const toggle = document.getElementById(toggleId),
                navbar = document.getElementById(navbarId),
                bodypadding = document.getElementById(bodyId)

            if (toggle && navbar) {
                toggle.addEventListener('click', () => {
                    navbar.classList.toggle('expander')

                    bodypadding.classList.toggle('body-pd')
                })
            }
        }
        showMenu('nav-toggle', 'navbar', 'body-pd')

        /*===== LINK ACTIVE  =====*/
        const linkColor = document.querySelectorAll('.nav__link')

        function colorLink() {
            linkColor.forEach(l => l.classList.remove('active'))
            this.classList.add('active')
        }
        linkColor.forEach(l => l.addEventListener('click', colorLink))
    </script>
    <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>