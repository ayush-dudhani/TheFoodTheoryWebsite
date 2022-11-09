<?php
$con = mysqli_connect('localhost','root');
if($con){
    echo "Connection established";
}
else{
    echo "Connection failed";
}
?>