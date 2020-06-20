<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>

@import url(https://fonts.googleapis.com/css?family=Open+Sans);

body{
  background: #f2f2f2;
  font-family: 'Open Sans', sans-serif;
}

.search {
  width: 100%;
  position: relative;
  display: flex;
}

.searchTerm {
  width: 100%;
  border: 3px solid black;
  border-right: none;
  padding: 5px;
  height: 36px;
  border-radius: 5px 0 0 5px;
  outline: none;
  color: #9DBFAF;
}

.searchTerm:focus{
  color: black;
}

.searchButton {
  width: 40px;
  height: 36px;
  border: 1px solid black;
  background: black;
  text-align: center;
  color: #fff;
  border-radius: 0 5px 5px 0;
  cursor: pointer;
  font-size: 20px;
}

/*Resize the wrap to see the search bar change!*/
.wrap{
  width: 20%;
  position: absolute;
  top: 30%;
  left: 70%;
  transform: translate(-50%, -50%);
}
* {box-sizing: border-box;}
   table {
  border-collapse: collapse;
  border: 1px solid black;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 18px;
}



th {
  background-color: #34495e;
  color: white;
}
    h1{
     color: White;
     font-size: 30px;
     
     background-color: #34495e;
     text-align: center;
     font-weight: bold;
     font-family: Calibri, monospace;
    }

body {
  margin: 0;
  font-family:Calibri;
   background-color:  #d4e6f1 ;
}

.topnav {
  overflow: hidden;
  background-color:  #7fb3d5;


}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 20px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {

  color: black;
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
 
 

</style>
</head>
<body>
  <h1>HOME-ASSISTANT24/7</h1>

<div class="topnav">
  <a class="active" href="servicepanel.php"><i class="fa fa-fw fa-home"></i> Home</a>
  <a class="active" href="addservices.php"><i class="fa fa-caret-square-o-down"></i>Add Services</a>
  <a href="servicesdue.php"><i class="fa fa-calendar-o"></i>Services Due</a>
  <a href="logout.php">Log Out</a>
  
   

</div>



 <br>
 <br>
<div class="w3-display-position w3-margin-left w3-padding w3-third"  style="top:220px;left:420px">

  <?php
  require 'database.php';
  //$type = "Appliance repair";
  //$check="yes";
  $name=$_SESSION['sname'];
  //$flag="no";
  $sql = "SELECT * from orders WHERE service_provider='$name'";
  $result=mysqli_query($conn,$sql);
  if (mysqli_num_rows($result) > 0){
      ?>



<table>
  <tr>
    <th>Name</th>
    <th>Phone Number</th>
    <th>Service</th>
    <th>Price</th>
    <th></th>
  </tr>
  <?php
    while($row = mysqli_fetch_array($result)){
         $cid = $row['userid'];
         $sqlx = "SELECT * from customers WHERE username='$cid'";
        $result5=mysqli_query($conn,$sqlx); 
        $row5=mysqli_fetch_array($result5);

          ?>
  <tr>
    <form action="done.php"method="POST">
    
    <td><?php echo $row5['name'];?></td>
    <input type="hidden" name="name" value="<?php echo $row5['name']; ?>">
    <td><?php echo $row5['phone_no']; ?></td>
    <input type="hidden" name="phone_no" value="<?php echo $row5['phone_no']; ?>">
    <td><?php echo $row['service_name']; ?></td>
    <input type="hidden" name="service_name" value="<?php echo $row['service_name']; ?>">
    <td><?php echo $row['price']; ?></td>
    <input type="hidden" name="price" value="<?php echo $row['price']; ?>">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    <input type="hidden" name="sid" value="<?php echo $row['sid']; ?>">
    <td><button type="submit"name="btn" class="w3-button w3-white w3-border w3-round"onclick="myFunction()">Completed!</button></td>
    </form>
  </tr>
  <?php  
            //mysqli_free_result($result);
      }
      ?>
 
 

</table>
<?php
    }



    else{
      echo "<br>";
      echo "<br>";
      echo "<h3>All the services pending have been completed</h3>";
    }
    ?>
</div>

<script>
function myFunction() {
  alert("Thank you for providing this service");
  //window.open("https://www.w3schools.com");
  //location='appliance.php';
   //location.replace("appliance.php");
  
  
  
}
</script>




</body>
</html>
