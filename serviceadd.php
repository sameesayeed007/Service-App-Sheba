<?php
session_start();

if (isset($_POST['btn'])) {
require 'database.php' ;
$name=$_POST['service_name'];
$provider=$_POST['service_provider'];
$price=$_POST['price'];
$type=$_POST['type'];
$service_id=$_POST['service_id'];
$url=$_POST['url'];
$username = $_SESSION['username'];
$flag="no";



$sql="INSERT INTO `cart`(`sid`,`userid`,`service_name`, `service_type`, `service_provider`, `price`) VALUES ('$service_id','$username','$name','$type','$provider','$price')";
$sql2="INSERT INTO `orders`(`sid`,`userid`,`service_name`, `service_type`, `service_provider`, `price`) VALUES ('$service_id','$username','$name','$type','$provider','$price')";
    $result=mysqli_query($conn,$sql);
    //$result2=mysqli_query($conn,$sql2);
 $sql1="UPDATE services SET avalibility='$flag' WHERE service_id='$service_id'";
    $result1=mysqli_query($conn,$sql1);
    header("Location: first.php");
     
   

}





else{
            echo "This is an existing username" ;
   
}