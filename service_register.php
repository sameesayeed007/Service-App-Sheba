<?php
session_start();

if (isset($_GET['register-submit'])) { //Checking if the user pressed the submit button
	# code...
    require 'database.php' ;
    $name=$_GET['name'];
    $username=$_GET['username'];
    //$phone=$_GET['phone'];
    $password=$_GET['password'];
    //$credit=$_GET['creditcard'];
               
              $hpass = password_hash($password,PASSWORD_DEFAULT);
               $sql1="SELECT * FROM service_provider WHERE username='$username'";
               $sql2="SELECT * FROM service_provider WHERE name='$name'";

               $result1=mysqli_query($conn,$sql1);
               $result2=mysqli_query($conn,$sql2);
               if(mysqli_num_rows($result1) > 0){
                  //header("Location: register.php?registration=unsuccessful/Thisuseridalreadexists");
                  echo "<script type=text/javascript>
                   alert('This username is already used');
                   location='serviceregister.php';
                   </script>";
                  
               }
                  else if(mysqli_num_rows($result2) > 0){
                  //header("Location: register.php?registration=unsuccessful/Thisuseridalreadexists");
                  echo "<script type=text/javascript>
                   alert('This name is already used');
                   location='serviceregister.php';
                   </script>";
                  
               }
               else{

               $sql="INSERT INTO `service_provider`(`username`, `name`, `password`) VALUES ('$username','$name','$password')";

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