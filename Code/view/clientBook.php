<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js">
  <link rel="stylesheet" href="http://localhost/brief_MVC/view/assets/css/clientBook.css">
  <title>Booking</title>
</head>

<body>
  <?php
  // include("include/headerClient.php") ; 
  // if(!empty($_SESSION["getTrips"])) {
  //  print_r($_SESSION["getTrips"]);
  // }
  ?>

  <div class="booking-form-box">
    <!-- <div class="radio-btn">
<input type="radio"  class="btn" name="check" name="check" checked="checked"><span>Round-Trip</span>
<input type="radio"  class="btn" name="check"><span>One Way</span>
    </div> -->
    <form action="http://localhost/brief_MVC/clientDashboard/reserv" method="POST">
      <div class="booking-form">

        <label> From</label>
        <input type="text" name="From" value="<?= $this->getSingleTrip["gare_depart"] ?>" class="form-control" placeholder="from" readonly>

        <label> To</label>
        <input type="text" name="To" class="form-control" value="<?= $this->getSingleTrip["gare_arrive"] ?> " placeholder="to" readonly>

        <div class="input-grp">
          <label>Departing</label>
          <input type="time" name="dateD" value="<?= substr($this->getSingleTrip["heure_depart"], 0, 5); ?>" class="form-control select-date" readonly>
        </div>
        <div class="input-grp">
          <label>Arriving</label>
          <input type="time" name="dateA" value="<?= substr($this->getSingleTrip["heure_arrive"], 0, 5); ?>" class="form-control select-date" readonly>
        </div>

        <div class="place-depart">
          <label for="">Date</label>
          <input type="date" name="date" value="<?= $this->getSingleTrip["date"] ?>" class="form-control" readonly>
        </div>
        <div class="place-depart">
          <label for="">Price</label>
          <input type="number" name="Price" value="<?= $this->getSingleTrip["price"] ?>" class="form-control" readonly>
        </div>

        <div class="input-grp">
          <button type="submit" name="submit" class="btn btn-primary booking">Book a seat</button>
        </div>
      </div>
    </form>
  </div>

  <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
</body>

</html>