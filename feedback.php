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
<title>The Food Theory</title>
<link rel="stylesheet" href="feedback.css">
<script src="feedback.js"></script>
<link rel="stylesheet" href="index.css">


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
            <a class="nav-link dropdown-toggle" href="menu.php" id="navbarDropdownMenuLink" role="button"
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
            <a class="nav-link active" href="feedback.php">Feedback</a>
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


    <div class="w-50 m-auto">
        <h3 class="text-uppercase fw-bold mb-4 text-center"> Thank You For Visiting Us!</h3>
        <h4 class="text-uppercase fw-bold mb-4 text-center">Help us Serve you Better</h4>
        <form action="custreviews.php" method="post">
            <div class="form-group">
                <label>Name: </label>
                <input type="text" name="user" title="" placeholder="Name" autocomplete="off" class="form-control" required="yes">
                <label for="exampleFormControlTextarea1" class="form-label">Review: </label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="feed" required></textarea>
            <br>
       
            <p>Food Rating :</p>                       
<div class="container-wrapper">  
  <div class="container d-flex">
    <div class="row justify-content-center">    
      <!-- star rating -->
      <div class="rating-wrapper">
          
        <!-- star 5 -->
        <input type="radio" id="5-star-rating" name="food-rating" value="5">
        <label for="5-star-rating" class="star-rating">
          <p>5</p>
        </label>
        
         <!-- star 4 -->
        <input type="radio" id="4-star-rating" name="food-rating" value="4">
        <label for="4-star-rating" class="star-rating star">
        <p>4</p>        </label>
        
         <!-- star 3 -->
        <input type="radio" id="3-star-rating" name="food-rating" value="3">
        <label for="3-star-rating" class="star-rating star">
        <p>3</p>        </label>
        
        <!-- star 2 -->
        <input type="radio" id="2-star-rating" name="food-rating" value="2">
        <label for="2-star-rating" class="star-rating star">
        <p>2</p>     
        </label>
        
        <!-- star 1 -->
        <input type="radio" id="1-star-rating" name="food-rating" value="1">
        <label for="1-star-rating" class="star-rating star">
        <p>1</p>  
        </label>
       </div>
      
    </div>
  </div>
</div>
<p>Service Rating :</p>
<div class="container-wrapper">  
  <div class="container d-flex">
    <div class="row justify-content-center">    
      <!-- star rating -->
      <div class="rating-wrapper">
          
        <!-- star 5 -->
        <input type="radio" id="5-star-rating" name="service-rating" value="5">
        <label for="5-star-rating" class="star-rating">
          <p>5</p>
        </label>
        
         <!-- star 4 -->
        <input type="radio" id="4-star-rating" name="service-rating" value="4">
        <label for="4-star-rating" class="star-rating star">
        <p>4</p>        </label>
        
         <!-- star 3 -->
        <input type="radio" id="3-star-rating" name="service-rating" value="3">
        <label for="3-star-rating" class="star-rating star">
        <p>3</p>        </label>
        
        <!-- star 2 -->
        <input type="radio" id="2-star-rating" name="service-rating" value="2">
        <label for="2-star-rating" class="star-rating star">
        <p>2</p>     
        </label>
        
        <!-- star 1 -->
        <input type="radio" id="1-star-rating" name="service-rating" value="1">
        <label for="1-star-rating" class="star-rating star">
        <p>1</p>  
        </label>
       </div>
      
    </div>
  </div>
</div>
<p>Overall Rating :</p>
<div class="container-wrapper">  
  <div class="container d-flex">
    <div class="row justify-content-center">    

      <!-- star rating -->
      <div class="rating-wrapper">
          
        <!-- star 5 -->
        <input type="radio" id="5-star-rating" name="overall-rating" value="5">
        <label for="5-star-rating" class="star-rating">
          <p>5</p>
        </label>
        
         <!-- star 4 -->
        <input type="radio" id="4-star-rating" name="overall-rating" value="4">
        <label for="4-star-rating" class="star-rating star">
        <p>4</p>        </label>
        
         <!-- star 3 -->
        <input type="radio" id="3-star-rating" name="overall-rating" value="3">
        <label for="3-star-rating" class="star-rating star">
        <p>3</p>        </label>
        
        <!-- star 2 -->
        <input type="radio" id="2-star-rating" name="overall-rating" value="2">
        <label for="2-star-rating" class="star-rating star">
        <p>2</p>     
        </label>
        
        <!-- star 1 -->
        <input type="radio" id="1-star-rating" name="overall-rating" value="1">
        <label for="1-star-rating" class="star-rating star">
        <p>1</p>  
        </label>
       </div>
      
    </div>
  </div>
</div>
          
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>

<div style="background-color:aliceblue;" class="container footer-container mt-5" >
    
  
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
          <p>?? 2022 Surya's TFT. All rights reserved. </p>
          <a href="https://github.com/ayush-dudhani">Developer Contact</a>  
        </div>
      </footer>
      </div>
</body>
</html>