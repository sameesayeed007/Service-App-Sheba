<?php
session_start();

if (isset($_GET['register-submit'])) { //Checking if the user pressed the submit button
	# code...
    require 'database.php' ;
    $name=$_GET['name'];
    $username=$_GET['username'];
    $phone=$_GET['phone'];
    $password=$_GET['password'];
    $credit=$_GET['creditcard'];
               
              $hpass = password_hash($password,PASSWORD_DEFAULT);
               $sql1="SELECT * FROM customers WHERE username='$username'";
               $result1=mysqli_query($conn,$sql1);
               if(mysqli_num_rows($result1) > 0){
                  //header("Location: register.php?registration=unsuccessful/Thisuseridalreadexists");
                  echo "<script type=text/javascript>
                   alert('This username is already used');
                   location='register.php';
                   </script>";
                  
               }
               else{

               $sql="INSERT INTO `customers`(`username`, `name`, `password`, `phone_no`, `creditcard_no`) VALUES ('$username','$name','$password','$phone','$credit')";

              $result=mysqli_query($conn,$sql);
             
              //header("Location: register.php?registration=successful");
                 echo "<script type=text/javascript>
                   alert('You have been registered.');
                   location='login.php';
                   </script>";
}
}
else{
            //echo "This is an existing username" ;
   
}