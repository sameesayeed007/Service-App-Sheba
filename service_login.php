<?php


if (isset($_POST['service-login'])) { 
	require 'database.php' ;
    $username=$_POST['username'];
    $password=$_POST['password'];

    $sql="SELECT * FROM service_provider WHERE username='$username' AND password='$password'";
    $result=mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);
    if(mysqli_num_rows($result) > 0){
    	   session_start();
    	   $_SESSION['susername']=$row['username'];
    	   $_SESSION['sname']=$row['name'];

    	   echo "<script type=text/javascript>
                   alert('You are logged in.');
                   location='servicepanel.php';
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