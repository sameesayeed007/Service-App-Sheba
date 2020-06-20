<?php
session_start();

if (isset($_POST['btn'])){
	require 'database.php' ;
	$id=$_POST['id'];
	$service_id=$_POST['sid'];
	$flag="yes";
	$sql="DELETE FROM cart WHERE id='$id'";
	$result=mysqli_query($conn,$sql);
	$sql1="UPDATE services SET avalibility='$flag' WHERE service_id='$service_id'";
    $result1=mysqli_query($conn,$sql1);
	header("Location: cart.php");
}

else{

}