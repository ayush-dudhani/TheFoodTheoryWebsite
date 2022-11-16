<?php
include "db.php";

mysqli_select_db($con, 'customerreviews');
if(isset($_POST['submit'])){
$name = $_POST['dish'];
$type = $_POST['typeofdish'];
$img = addslashes(file_get_contents($_FILES['image']['tmp_name']));
$rate = $_POST['rate'];



$query = "insert into menu (name,mrp,typeofdish,img) values ('$name','$rate','$type','$img')";
$result = mysqli_query($con, $query);

echo "<script> alert('Added Successfully!'); </script>";
}

?>