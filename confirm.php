<<?php 
session_start();

 require 'database.php' ;
 $name=$_SESSION['username'];
 $sql="SELECT * FROM cart WHERE userid='$name'";
 $result=mysqli_query($conn,$sql);
  while($row = mysqli_fetch_array($result)){
  	$sid=$row['sid'];
  	$userid=$row['userid'];
  	$service_name=$row['service_name'];
  	$service_type=$row['service_type'];
  	$service_provider=$row['service_provider'];
  	$price=$row['price'];
    $done="no";

  	$sql2="INSERT INTO `orders`(`sid`,`userid`,`service_name`, `service_type`, `service_provider`, `price`) VALUES ('$sid','$userid','$service_name','$service_type','$service_provider','$price')";
  	 mysqli_query($conn,$sql2);
  }
  $sql3="DELETE FROM cart WHERE userid='$name'";
  mysqli_query($conn,$sql3);
  header("Location: afterconfirm.php");


 ?>