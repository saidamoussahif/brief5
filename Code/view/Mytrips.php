<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/brief_MVC/view/assets/css/clientDashboard.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Client Dashboard</title>
</head>

<body>
    <?php include("include/headerClient.php") ?>

    <p style="color:red">
    <h3>Hi, <?php  echo $_SESSION['firstName']?></h3>Welcome to TrainLine booking system</p>

    <h1>My trips</h1>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="active-member">

                            <div class="table-responsive">
                                <table class="table table-xs mb-0">
                                    <thead style="background-color: #CC9544;">
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

                                        <?php foreach ($getTrips as $getT) : ?>
                                            <tr>
                                                <td><?php echo $getT["gare_depart"]; ?></td>
                                                <td><?php echo $getT["gare_arrive"]; ?></td>
                                                <td><?php echo $getT["date"]; ?></td>
                                                <td><?php echo $getT["heure_depart"]; ?></td>
                                                <td><?php echo $getT["heure_arrive"]; ?></td>
                                                <td><?php echo $getT["price"]; ?></td>
                                                <td><i class="fa-thin fa-octagon-xmark"></i></td>
                                               
                                                

                                                <td>

                                                    <!-- <form action="/brief_MVC/clientDashboard/reservation?id=<?php $getT["ID_voyage"]; ?>" method="post">
                                                        <php $_SESSION["Book"] = $getT["ID_voyage"];
                                                        echo $_SESSION["Book"]; ?>
                                                        <input type="submit" name="ID_voyage" value="Book now" class="btn btn-warning">
                                                    </form> -->
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
    </div>










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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>