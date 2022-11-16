<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>The Food Theory</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

  <link rel="stylesheet" href="index.css">
  <script src="index.js"></script>
  <!-- for pyscript -->
  <script defer src="pyscript/pyscript.js"></script>
  <link rel="stylesheet" href="pyscript/pyscript.css"/>
  <script defer src="pyscript/pyscript.js.map"></script>
  <py-script src="pyscript/pyscript.py"></py-script>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">The Food Theory</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
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
            <a href="https://www.swiggy.com/restaurants/the-food-theory-next-to-pccoe-college-akurdi-ravet-pune-535497" target="_blank" class="btn btn-primary">Order</a>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>


  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
        aria-label="Slide 4"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
        aria-label="Slide 5"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="assets/foodthali.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="assets/surya.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="assets/Ratings.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="assets/Food Ratings.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="assets/Service Ratings.png" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
      data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
      data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <section class="my-5">
    <div class="py-5">
      <h3 class="text-center">Our Top 5 Cuisines</h3>
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
              $res = "SELECT * from topcuisine";
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


  <section class="my-5">
    <div class="py-5">
      <h3 class="text-center">About Us</h3>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
          <img src="assets/suryaLogo-removebg-preview.png" alt="" class="image-fluid aboutimg">
        </div>
        <div class="col-lg-6 col-md-6 col-12">
          <h3 class="display-5">We Promise to Provide Best Quality Food</h3>
          <p class="py-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum, impedit, veniam officia
            perferendis molestiae quisquam doloremque modi fuga minus deleniti, quam cupiditate! Error id eius veritatis
            quia illum ipsa consequuntur praesentium deleniti enim tempore. Explicabo laboriosam harum minima
            dignissimos voluptatibus odit aliquid, nam doloribus impedit beatae iusto. Odit recusandae repellat facilis
            earum maxime labore ex alias eius voluptates commodi fugit sequi inventore, quae eum, nobis fuga praesentium
            nam eos totam quidem. Corporis molestiae blanditiis sunt pariatur dolores expedita rerum excepturi.</p>
          <a href="#" class="btn btn-success">Check More</a>
        </div>

      </div>
    </div>
  </section>


  <section class="my-5">
    <div class="py-5">
      <h3 class="text-center">We Are Proud Sponsers</h3>
    </div>
    <div class="container-fluid">
      <div class="row" id="id1">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="assets/anantyaLogo.png" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Anantya 2022</h5>
            <p class="card-text">The Annual Event of Computer Department, PCCOE</p>
            <a href="https://pccoe.acm.org/anantya/index.html" target="_blank" class="btn btn-primary">Know More</a>
          </div>
        </div>
      </div>  
    </div>
    
  </section>

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




<div id="plot"></div>
 
<py-env>
  - matplotlib
  - numpy
  - pandas
</py-env>
<!-- <py-repl id="my-repl"  auto-generate="true"> </py-repl> -->
<py-script output="plot">
import matplotlib.pyplot as plt
import numpy as np
import pandas as pd
x = np.random.randn(1000)
y = np.random.randn(1000)
fig, ax = plt.subplots()
ax.scatter(x,y)
fig
<!-- csv_file = r'C:/xampp/htdocs/surya/file.csv'
data = pd.read_csv(csv_file) -->


<!-- csv_file = 'file.csv'
data = pd.read_csv(csv_file)
data.groupby(['foodrating']).size().plot(kind='pie', autopct='%1.0f%%', title='RATINGS')
plt.show() -->

import matplotlib.pyplot as plt
import numpy as np
import pandas as pd
csv_file ='C:/xampp/htdocs/surya/file.csv'
data = pd.read_csv(csv_file)
data.groupby(['foodrating']).size().plot(kind='pie', autopct='%1.0f%%', title='RATINGS')
plt.show()

<!-- csv_file ='C:/xampp/htdocs/surya/file.csv'
data = pd.read_csv(csv_file)
FoodRating = data["foodrating"]
x =[]
y = []
x= list(FoodRating)
y = count()
plt.title("Foodrating")
plt.pie(x,labels=y,autopct='%.2f%%')
plt.show() -->


<!-- csv_file = r'C:/xampp/htdocs/surya/file.csv'
data = pd.read_csv(csv_file)
FoodRating = data["foodrating"]
Count = data.groupby(["foodrating"])
plt.title("Foodrating")
Count.size().plot(kind='pie', autopct='%1.0f%%')
plt.show() -->
</py-script>
<!-- <?php
$command=escapeshellcmd('pythonplot.py');
$output=shell_exec($command);
echo $output;
?> -->
</body>

</html>