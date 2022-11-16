<?php
$con = mysqli_connect('localhost','root');
mysqli_select_db($con, 'customerreviews');
if(isset($_POST['username'])){
    
$user = $_POST['username'];
$pass = $_POST['password'];

$query = "select * from admininfo where user='".$user."' and pass='".$pass."' limit 1";

$result = mysqli_query($con, $query);

if(mysqli_num_rows($result)==1){
    header('location: adminControls.php');
}
else{
    echo '<script> alert("Incorrrect username or password"); </script>';
}

}

?>
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
<title>TFT - Admin Page</title>
</head>
<body style="background-color:aliceblue">

<div class="w-50 m-auto">
<h3 class="text-uppercase fw-bold mb-4 text-center mt-5"> Admin Page</h3>
<form method="post" action="#">
  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Username">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>
