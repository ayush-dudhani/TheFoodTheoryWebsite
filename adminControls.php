

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>TFT - Admin Controls</title>
</head>
<body>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
  Add To Menu
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add Dish To Menu</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="insert.php" class="w-50 m-auto" enctype="multipart/form-data" method="post">
            <div class="form-group">
            <label >Dish Name</label>
            <input type="text" name="dish" title="" placeholder="Paneer Tikka Masala" autocomplete="off" class="form-control" required="yes">

                <label for="inputType">Type</label>
                <select id="inputType" class="form-control" name="typeofdish" required>
                <option selected>Choose...</option>
                <option>Beverages</option>
                <option>Snacks</option>
                <option>South Indian</option>
                <option>Soups</option>
                <option>Starters</option>
                <option>Rice/Noodles</option>
                <option>Main Course</option>
                <option>Pav Bhaji</option>
                <option>TFT Specials</option>
                <option>Indian Breads</option>
                <option>Thali</option>
                </select>

                <label for="dishImage">Upload a photo</label>
                <input type="file" name="image" class="form-control-file" id="dishImage">

                
                <label for="validationTooltipUsername">Rate</label>
                <div class="input-group">
                <div class="input-group-prepend">
                <span class="input-group-text" id="validationTooltipUsernamePrepend">₹</span>
                </div>
                <input type="text" name="rate" class="form-control" id="validationTooltipUsername" placeholder="MRP" aria-describedby="validationTooltipUsernamePrepend" required>
                </div>
        
                <br>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name='submit'>Submit</button>            
              </div>
        </form>
      
        </div>
    </div>
  </div>
</div>

<!-- <img src="assets/Apriori.png" class="d-block w-100" alt="..."> -->
<section class="my-5">
    <div class="py-5">
      <h3 class="text-center">Prediction</h3>
    </div>
    <div class="container-fluid">
      <!-- <div class="row">
        <div class="col-lg-5 col-md-6 col-12 m-auto px-5"> -->
          <?php
          include "db.php"; 
          ?>
          <table class="table">
            <thead class="thead-dark">
            <tr >
              <th>Bought </th>
              <th>Prdicted</th>
            </tr>
            </thead>
            <tr>
              <?php
              mysqli_select_db($con, 'customerreviews');
              $res = "SELECT * from prediction";
              $result = mysqli_query($con, $res);
              if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) { ?>
                   <tr>
                    <?php
                 echo '<td>' .$row[0]. '</td>';
                echo '<td>'. $row[1].'</td>';
                  echo '</tr>';
                
                
                }
              }
              ?>
            </tr>
          </table>
          
        <!-- </div>

      </div> -->
    </div>
  </section>



<section class="my-5">
    <div class="py-5">
      <h3 class="text-center">Cuisine Wise Statistical Data</h3>
    </div>
    <div class="container-fluid">
      <!-- <div class="row">
        <div class="col-lg-5 col-md-6 col-12 m-auto px-5"> -->
          <?php
          include "db.php"; 
          ?>
          <table class="table">
            <thead class="thead-dark">
            <tr >
              <th>Cuisines</th>
              <th>Food Rating</th>
            </tr>
            </thead>
            <tr>
              <?php
              mysqli_select_db($con, 'customerreviews');
              $res = "SELECT * from allcuisines";
              $result = mysqli_query($con, $res);
              if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) { ?>
                   <tr>
                    <?php
                 echo '<td>' .$row[1]. '</td>';
                echo '<td>'. $row[2].'</td>';
                  echo '</tr>';
                
                
                }
              }
              ?>
            </tr>
          </table>
          
        <!-- </div>

      </div> -->
    </div>
  </section>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>