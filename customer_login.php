<?php


if (isset($_POST['customer-login'])) { 
	require 'database.php' ;
    $username=$_POST['username'];
    $password=$_POST['password'];

    $sql="SELECT * FROM customers WHERE username='$username' AND password='$password'";
    $result=mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);
    if(mysqli_num_rows($result) > 0){
    	   session_start();
    	   $_SESSION['username']=$row['username'];
    	   $_SESSION['name']=$row['name'];

    	   echo "<script type=text/javascript>
                   alert('You are logged in.');
                   location='first.php';
                   </script>";
    }
    else{
    	echo "<script type=text/javascript>
                   alert('You have entered the wrong username or password');
                   location='login.php';
                   </script>";
    }

}

else{

}