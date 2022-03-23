<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost/brief_MVC/view/assets/css/booking.css">
    <title>Search</title>
</head>

<body style="background:url">

    <!-- include header -->
    <?php include("include/header.php") ?>

    <div class="container-fluid">
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
                                            <th scope="col">Available seats</th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($_SESSION['ID_voyage'] as $onevoyage) : ?>
                                            <tr>
                                                <td><?php echo $onevoyage["gare_depart"]; ?></td>
                                                <td><?php echo $onevoyage["gare_arrive"]; ?></td>
                                                <td><?php echo $onevoyage["date"]; ?></td>
                                                <td><?php echo $onevoyage["heure_depart"]; ?></td>
                                                <td><?php echo $onevoyage["heure_arrive"]; ?></td>
                                                <td><?php echo $onevoyage["price"]; ?></td>
                                                
                                                <td>
                                                    <form action="/brief_MVC/UserSearch/Reserver" method="post"><button type="submit" name="ID_voyage" value="<?php echo $onevoyage["ID_voyage"]; ?>" class="btn btn-warning">Book now</button></form>
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


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>