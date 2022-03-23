<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Edit Trips</title>
</head>
<body>
 
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header text-light" style="background-color:#CC9544">
            <h5 class="modal-title" id="exampleModalLabel">UPDATE A TRIP</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body text-dark bg-light">
        <form action="http://localhost/brief_MVC/Edit/editTrip" method="POST">
            
        <div class="form-group">
            <label for="examplegareD">Departing station</label>
            <input type="text" class="form-control" name="gareD" id="examplegareD">
            </div>

            <div class="form-group">
            <label for="examplegareA">Arriving station</label>
            <input type="text" class="form-control" name="gareA" id="examplegareA">
            </div>
            <div class="form-group">
            <label for="examplegareA">Departing time</label>
            <input type="text" class="form-control" name="gareA" id="examplegareA">
            </div>
            <div class="form-group">
            <label for="examplegareA">Arriving time</label>
            <input type="text" class="form-control" name="gareA" id="examplegareA">
            </div>

            <div class="form-group">
            <label for="exampledateD">Date</label>
            <input type="datetime-local" class="form-control" name="dateD" id="exampledateD">
            </div>
            <div class="form-group">
            <label for="exampleprice">Price</label>
            <input type="number" class="form-control m" name="price" id="exampleprice">
            </div>
           
            <div class="form-group">
            <label for="examplegareA">Train name</label>
            <input type="text" class="form-control" name="gareA" id="examplegareA">
            </div>
            
        </div>

        <div class="modal-footer">
            <button type="submit"  name="update" class="btn text-light"  style="background-color:#CC9544">Update</button>
        </div>
    </div>

</form>

    </div>
</div>


</body>
</html>