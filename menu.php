<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="Description" content="Enter your description here" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <title>TFT - Menu</title>
  <link rel="stylesheet" href="menu.css">
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light" >
    <div class="container-fluid">
      <a class="navbar-brand" href="#">The Food Theory</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle active" href="menu.php" id="navbarDropdownMenuLink" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              Our Menu
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="menu.php#nav-beverages">Beverages</a></li>
              <li><a class="dropdown-item" href="menu.php#nav-snacks">Snacks</a></li>
              <li><a class="dropdown-item" href="menu.php#nav-south">South Indian</a></li>
              <li><a class="dropdown-item" href="menu.php#nav-soups">Soups</a></li>
              <li><a class="dropdown-item" href="menu.php#nav-starters">Starters</a></li>
              <li><a class="dropdown-item" href="menu.php#nav-noodles">Rice/Noodles</a></li>
              <li><a class="dropdown-item" href="menu.php#nav-main">Main Course</a></li>
              <li><a class="dropdown-item" href="menu.php#nav-pavbhaji">Pav Bhaji</a></li>
              <li><a class="dropdown-item" href="menu.php#nav-special">TFT Specials</a></li>
              <li><a class="dropdown-item" href="menu.php#nav-bread">Indian Breads</a></li>
              <li><a class="dropdown-item" href="menu.php#nav-thali">Thali</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="exDeals.php">Exclusive Deals</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="feedback.php">Feedback</a>
          </li>

        </ul>
        <form class="d-flex">
          <!-- <a href="#" class="btn btn-outline-success" type="submit">Order</a> -->
          <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#exampleModalCenter">Order</button>
          <a href="admin.php" class="btn btn-outline-success" type="submit"  >Admin</a>
  <!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Order Now</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="container-fluid d-flex">
      <div class="row " id="id1">
        <div class="card col" >
          <img class="card-img-top" src="assets/Zomato.png" alt="Card image cap">
          <div class="card-body">
            <a href="https://www.zomato.com/pune/the-food-theory-akurdi" target="_blank" class="btn btn-primary">Order</a>
          </div>
        </div>
        <div class="card col" style="width: 15rem; align-content: flex-end; flex-wrap: wrap; flex-direction:row;">
          <img class="card-img-top" src="assets/Swiggy.png" alt="Card image cap">
          <div class="card-body">
            <a href="https://www.zomato.com/pune/the-food-theory-akurdi" target="_blank" class="btn btn-primary">Order</a>
          </div>
        </div>
      </div>  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
        </form>
      </div>
    </div>
</nav>
  <nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
      <a class="nav-item nav-link active" id="nav-beverages-tab" data-toggle="tab" href="#nav-beverages" role="tab"
        aria-controls="nav-beverages" aria-selected="true">Beverages</a>
      <a class="nav-item nav-link" id="nav-snacks-tab" data-toggle="tab" href="#nav-snacks" role="tab"
        aria-controls="nav-snacks" aria-selected="false">Snacks</a>
      <a class="nav-item nav-link" id="nav-south-tab" data-toggle="tab" href="#nav-south" role="tab"
        aria-controls="nav-south" aria-selected="false">South Indian</a>
      <a class="nav-item nav-link" id="nav-soups-tab" data-toggle="tab" href="#nav-soups" role="tab"
        aria-controls="nav-soups" aria-selected="false">Soups</a>
      <a class="nav-item nav-link" id="nav-starters-tab" data-toggle="tab" href="#nav-starters" role="tab"
        aria-controls="nav-starters" aria-selected="false">Starters</a>
      <a class="nav-item nav-link" id="nav-noodles-tab" data-toggle="tab" href="#nav-noodles" role="tab"
        aria-controls="nav-noodles" aria-selected="false">Rice/Noodles</a>
      <a class="nav-item nav-link" id="nav-main-tab" data-toggle="tab" href="#nav-main" role="tab"
        aria-controls="nav-main" aria-selected="false">Main Course</a>
      <a class="nav-item nav-link" id="nav-pavbhaji-tab" data-toggle="tab" href="#nav-pavbhaji" role="tab"
        aria-controls="nav-pavbhaji" aria-selected="false">Pav Bhaji</a>
      <a class="nav-item nav-link" id="nav-special-tab" data-toggle="tab" href="#nav-special" role="tab"
        aria-controls="nav-special" aria-selected="false">TFT Specials</a>
      <a class="nav-item nav-link" id="nav-bread-tab" data-toggle="tab" href="#nav-bread" role="tab"
        aria-controls="nav-bread" aria-selected="false">Indian Breads</a>
      <a class="nav-item nav-link" id="nav-thali-tab" data-toggle="tab" href="#nav-thali" role="tab"
        aria-controls="nav-thali" aria-selected="false">Thali</a>
    </div>
  </nav>
  <div class="tab-content" id="nav-tabContent">
    <div class="tab-pane fade show active" id="nav-beverages" role="tabpanel" aria-labelledby="nav-beverages-tab">
    <div class="row my-5">
        <?php
  include 'db.php';
  mysqli_select_db($con, 'customerreviews');
  $res = "SELECT * from menu where typeofdish='Beverages'";
  $result = mysqli_query($con, $res);
  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) { ?>
        <div class="col-sm-6 col-lg-3">
          <div class="card">
            <div class="card-body">
              <?php
      echo '<img class="card-img-top " src="data:image/jpeg; base64,' . base64_encode($row[4]) . '" alt="Card image cap">';
        ?>
              <div class="name-mrp" style="justify-content: space-around;">
                <?php
      echo '<p class="card-text my-0">' . $row[1] . '</p>';
      echo '<p class="card-text my-0">₹ ' . $row[2] . '</p>';
          ?>
              </div>

            </div>
          </div>
        </div>
        <?php
    }
  }
    ?>
      </div>
    </div>
    <div class="tab-pane fade" id="nav-snacks" role="tabpanel" aria-labelledby="nav-snacks-tab">
    <div class="row my-5">
        <?php
  include 'db.php';
  mysqli_select_db($con, 'customerreviews');
  $res = "SELECT * from menu where typeofdish='Snacks'";
  $result = mysqli_query($con, $res);
  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) { ?>
        <div class="col-sm-6 col-lg-3">
          <div class="card">
            <div class="card-body">
              <?php
      echo '<img class="card-img-top img-id" src="data:image/jpeg; base64,' . base64_encode($row[4]) . '" alt="Card image cap">';
        ?>
              <div class="name-mrp" style="justify-content: space-around;">
                <?php
      echo '<p class="card-text my-0">' . $row[1] . '</p>';
      echo '<p class="card-text my-0">₹ ' . $row[2] . '</p>';
          ?>
              </div>

            </div>
          </div>
        </div>
        <?php }}?>
      </div>
    </div>



    <div class="tab-pane fade" id="nav-south" role="tabpanel" aria-labelledby="nav-south-tab">
    <div class="row my-5">
        <?php
  include 'db.php';
  mysqli_select_db($con, 'customerreviews');
  $res = "SELECT * from menu where typeofdish='South Indian'";
  $result = mysqli_query($con, $res);
  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) { ?>
        <div class="col-sm-6 col-lg-3">
          <div class="card">
            <div class="card-body">
              <?php
      echo '<img class="card-img-top img-id" src="data:image/jpeg; base64,' . base64_encode($row[4]) . '" alt="Card image cap">';
        ?>
              <div class="name-mrp" style="justify-content: space-around;">
                <?php
      echo '<p class="card-text my-0">' . $row[1] . '</p>';
      echo '<p class="card-text my-0">₹ ' . $row[2] . '</p>';
          ?>
              </div>

            </div>
          </div>
        </div>
        <?php }} ?>
      </div>
    </div>


    <div class="tab-pane fade" id="nav-soups" role="tabpanel" aria-labelledby="nav-soups-tab">
    <div class="row my-5">
        <?php
  include 'db.php';
  mysqli_select_db($con, 'customerreviews');
  $res = "SELECT * from menu where typeofdish='Soups'";
  $result = mysqli_query($con, $res);
  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) { ?>
        <div class="col-sm-6 col-lg-3">
          <div class="card">
            <div class="card-body">
              <?php
      echo '<img class="card-img-top img-id" src="data:image/jpeg; base64,' . base64_encode($row[4]) . '" alt="Card image cap">';
        ?>
              <div class="name-mrp" style="justify-content: space-around;">
                <?php
      echo '<p class="card-text my-0">' . $row[1] . '</p>';
      echo '<p class="card-text my-0">₹ ' . $row[2] . '</p>';
          ?>
              </div>

            </div>
          </div>
        </div>
        <?php }}?>
      </div>
    </div>


    <div class="tab-pane fade" id="nav-starters" role="tabpanel" aria-labelledby="nav-starters-tab">
    <div class="row my-5">
        <?php
  include 'db.php';
  mysqli_select_db($con, 'customerreviews');
  $res = "SELECT * from menu where typeofdish='Starters'";
  $result = mysqli_query($con, $res);
  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) { ?>
        <div class="col-sm-6 col-lg-3">
          <div class="card">
            <div class="card-body">
              <?php
      echo '<img class="card-img-top img-id" src="data:image/jpeg; base64,' . base64_encode($row[4]) . '" alt="Card image cap">';
        ?>
              <div class="name-mrp" style="justify-content: space-around;">
                <?php
      echo '<p class="card-text my-0">' . $row[1] . '</p>';
      echo '<p class="card-text my-0">₹ ' . $row[2] . '</p>';
          ?>
              </div>

            </div>
          </div>
        </div>
        <?php }}?>
      </div>
    </div>



    <div class="tab-pane fade" id="nav-noodles" role="tabpanel" aria-labelledby="nav-noodles-tab">
    <div class="row my-5">
        <?php
  include 'db.php';
  mysqli_select_db($con, 'customerreviews');
  $res = "SELECT * from menu where typeofdish='Rice/Noodles'";
  $result = mysqli_query($con, $res);
  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) { ?>
        <div class="col-sm-6 col-lg-3">
          <div class="card">
            <div class="card-body">
              <?php
      echo '<img class="card-img-top img-id" src="data:image/jpeg; base64,' . base64_encode($row[4]) . '" alt="Card image cap">';
        ?>
              <div class="name-mrp" style="justify-content: space-around;">
                <?php
      echo '<p class="card-text my-0">' . $row[1] . '</p>';
      echo '<p class="card-text my-0">₹ ' . $row[2] . '</p>';
          ?>
              </div>

            </div>
          </div>
        </div>
        <?php }}?>
      </div>
    </div>



    <div class="tab-pane fade" id="nav-main" role="tabpanel" aria-labelledby="nav-main-tab">
    <div class="row my-5">
        <?php
  include 'db.php';
  mysqli_select_db($con, 'customerreviews');
  $res = "SELECT * from menu where typeofdish='Main Course'";
  $result = mysqli_query($con, $res);
  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) { ?>
        <div class="col-sm-6 col-lg-3">
          <div class="card">
            <div class="card-body">
              <?php
      echo '<img class="card-img-top img-id" src="data:image/jpeg; base64,' . base64_encode($row[4]) . '" alt="Card image cap">';
        ?>
              <div class="name-mrp" style="justify-content: space-around;">
                <?php
      echo '<p class="card-text my-0">' . $row[1] . '</p>';
      echo '<p class="card-text my-0">₹ ' . $row[2] . '</p>';
          ?>
              </div>

            </div>
          </div>
        </div>
        <?php }}?>
      </div>
    </div>


    <div class="tab-pane fade" id="nav-pavbhaji" role="tabpanel" aria-labelledby="nav-pavbhaji-tab">
    <div class="row my-5">
        <?php
  include 'db.php';
  mysqli_select_db($con, 'customerreviews');
  $res = "SELECT * from menu where typeofdish='Pav Bhaji'";
  $result = mysqli_query($con, $res);
  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) { ?>
        <div class="col-sm-6 col-lg-3">
          <div class="card">
            <div class="card-body">
              <?php
      echo '<img class="card-img-top img-id" src="data:image/jpeg; base64,' . base64_encode($row[4]) . '" alt="Card image cap">';
        ?>
              <div class="name-mrp" style="justify-content: space-around;">
                <?php
      echo '<p class="card-text my-0">' . $row[1] . '</p>';
      echo '<p class="card-text my-0">₹ ' . $row[2] . '</p>';
          ?>
              </div>

            </div>
          </div>
        </div>
        <?php }}?>
      </div>
    </div>


    <div class="tab-pane fade" id="nav-special" role="tabpanel" aria-labelledby="nav-special-tab">
    <div class="row my-5">
        <?php
  include 'db.php';
  mysqli_select_db($con, 'customerreviews');
  $res = "SELECT * from menu where typeofdish='TFT Specials'";
  $result = mysqli_query($con, $res);
  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) { ?>
        <div class="col-sm-6 col-lg-3">
          <div class="card">
            <div class="card-body">
              <?php
      echo '<img class="card-img-top img-id" src="data:image/jpeg; base64,' . base64_encode($row[4]) . '" alt="Card image cap">';
        ?>
              <div class="name-mrp" style="justify-content: space-around;">
                <?php
      echo '<p class="card-text my-0">' . $row[1] . '</p>';
      echo '<p class="card-text my-0">₹ ' . $row[2] . '</p>';
          ?>
              </div>

            </div>
          </div>
        </div>
        <?php }}?>
      </div>
    </div>

    <div class="tab-pane fade" id="nav-bread" role="tabpanel" aria-labelledby="nav-bread-tab">
    <div class="row my-5">
        <?php
  include 'db.php';
  mysqli_select_db($con, 'customerreviews');
  $res = "SELECT * from menu where typeofdish='Indian Breads'";
  $result = mysqli_query($con, $res);
  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) { ?>
        <div class="col-sm-6 col-lg-3">
          <div class="card">
            <div class="card-body">
              <?php
      echo '<img class="card-img-top img-id" src="data:image/jpeg; base64,' . base64_encode($row[4]) . '" alt="Card image cap">';
        ?>
              <div class="name-mrp" style="justify-content: space-around;">
                <?php
      echo '<p class="card-text my-0">' . $row[1] . '</p>';
      echo '<p class="card-text my-0">₹ ' . $row[2] . '</p>';
          ?>
              </div>

            </div>
          </div>
        </div>
        <?php }}?>
      </div>
    </div>


    <div class="tab-pane fade" id="nav-thali" role="tabpanel" aria-labelledby="nav-thali-tab">
    <div class="row my-5">
        <?php
  include 'db.php';
  mysqli_select_db($con, 'customerreviews');
  $res = "SELECT * from menu where typeofdish='Thali'";
  $result = mysqli_query($con, $res);
  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) { ?>
        <div class="col-sm-6 col-lg-3">
          <div class="card">
            <div class="card-body">
              <?php
      echo '<img class="card-img-top img-id" src="data:image/jpeg; base64,' . base64_encode($row[4]) . '" alt="Card image cap">';
        ?>
              <div class="name-mrp" style="justify-content: space-around;">
                <?php
      echo '<p class="card-text my-0">' . $row[1] . '</p>';
      echo '<p class="card-text my-0">₹ ' . $row[2] . '</p>';
          ?>
              </div>

            </div>
          </div>
        </div>
        <?php }}?>
      </div>
    </div>

  </div>


  <?php 
  function card($name){
    
  echo '<div class="row my-5">';
  include 'db.php';
  mysqli_select_db($con, 'customerreviews');
  $res = "SELECT * from menu where typeofdish= ' ". $name ."'";
  $result = mysqli_query($con,$res);
  if(mysqli_num_rows($result) > 0){
    while($row =mysqli_fetch_array($result)){ 
      echo '<div class="col-sm-6 col-lg-3">';
      echo '<div class="card">';
        echo '<div class="card-body">';
        
        echo '<img class="card-img-top img-id" src="data:image/jpeg; base64,'.base64_encode($row[4])  .'" alt="Card image cap">';
        
        echo '<div class="name-mrp" style="justify-content: space-around;">';
           
        echo '<p class="card-text my-0">'.  $row[1] .'</p>';
          echo'<p class="card-text my-0">₹ '. $row[2].'</p>';
          
          echo '</div>  </div> </div> </div>';
         } } 
          echo '</div>';
         }
    ?>



  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>

  <div class="container footer-container" style="background-color:aliceblue;">
    
  
    <footer class="py-5">
      <div class="row">
        <div class="col-2">
          <h6 class="text-uppercase fw-bold mb-4">Quick Links</h6>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
            <li class="nav-item mb-2"><a href="menu.php" class="nav-link p-0 text-muted">Our Menu</a></li>
            <li class="nav-item mb-2"><a href="exDeals.php" class="nav-link p-0 text-muted">Exclusive Deals</a></li>
            <li class="nav-item mb-2"><a href="feedback.php" class="nav-link p-0 text-muted">Feedback</a></li>
          </ul>
        </div>
  

        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-5">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
          <p><i class="bi bi-geo-alt-fill"></i> Sector No. 26, Pradhikaran, Nigdi, Pimpri-Chinchwad, Maharashtra 411044</p>
          <p><i class="bi bi-envelope-fill"></i>
            info@example.com
          </p>
          <p><i class="bi bi-telephone-fill"></i> + 01 234 567 88</p>
        </div>
  
        <div class="col-4 offset-1 map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1890.1350631661644!2d73.76047022810252!3d18.651870520511373!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2b9b4b1cc21b7%3A0xb3714c17d2940279!2sSurya%20fast%20food%20%26%20family%20(%20pure%20veg%20)!5e0!3m2!1sen!2sin!4v1667129046816!5m2!1sen!2sin" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title='map'></iframe>
        </div>
      </div>
  
      <div class="d-flex justify-content-between py-4 my-4 border-top">
        <p>© 2022 Surya's TFT. All rights reserved. </p>
        <a href="https://github.com/ayush-dudhani">Developer Contact</a>  
      </div>
    </footer>
    </div>

    
</body>

</html>