<?php
session_start();

if (isset($_GET['service-add'])) { //Checking if the user pressed the submit button
  # code...
    require 'database.php' ;
    $name=$_GET['service_name'];
    $price=$_GET['price'];
    $type=$_GET['type'];
    $company=$_SESSION['sname'];
    $flag="yes";
    
               
            
            

               $sql="INSERT INTO `services`(`name`, `service_type`, `service_provider`, `avalibility`, `price`) VALUES ('$name','$type','$company','$flag','$price')";

              $result=mysqli_query($conn,$sql);
             
              //header("Location: register.php?registration=successful");
                 echo "<script type=text/javascript>
                   alert('The service has been added.');
                   location='servicepanel.php';
                   </script>";

}
else{
            //echo "This is an existing username" ;
   
}