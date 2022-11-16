<?php
include "db.php";
mysqli_select_db($con, 'customerreviews');
$user = $_POST['user'];
$review = $_POST['feed'];
$frating = $_POST['food-rating'];
$srating = $_POST['service-rating'];
$orating = $_POST['overall-rating'];
$query = "insert into custreviewsdata (name, review, foodrating, servicerating, overallrating) values ('$user', '$review', '$frating' , '$srating', '$orating')";

mysqli_query($con, $query);
header('location:index.php');
?>