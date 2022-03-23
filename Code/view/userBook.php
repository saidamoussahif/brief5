<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/brief_MVC/view/assets/css/userBook.css">
    <title>Booking</title>
</head>
<body>

<div class="booking-form-box">
    <!-- <div class="radio-btn">
<input type="radio"  class="btn" name="check" name="check" checked="checked"><span>Round-Trip</span>
<input type="radio"  class="btn" name="check"><span>One Way</span>
    </div> -->

<div class="booking-form">

<label>First name</label>  
  <input type="text" name="First name"  class="form-control" placeholder="First name">

  <label> Last name</label>  
  <input type="text" name="Last name" class="form-control" placeholder="Last name">

  <label> Email</label>  
  <input type="email" name="Email" class="form-control" placeholder="Email">

  <label> From</label>  
  <input type="text"  name="From" value="<?= $this->getSingleTrip["gare_depart"] ?>" class="form-control" placeholder="from">

  <label> To</label>  
  <input type="text"  name="To" class="form-control" placeholder="to">

  <div class="input-grp">
  <label>Departing</label>  
  <input type="time" name="date" class="form-control select-date">
  </div>
  <div class="input-grp">
  <label>Arriving</label>  
  <input type="time" name="date" class="form-control select-date">
  </div>

  <div class="place-depart">
    <label for="">Date</label>
  <input type="date" name="date" class="form-control" >
</div>

  <div class="input-grp">
  <button type="button" class="btn btn-primary booking">Book a seat</button>
  </div>
</div>
</div>













<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>