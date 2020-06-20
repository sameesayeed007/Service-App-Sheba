<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
  
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.wrap{
  width: 25%;
  position: absolute;
  top: 30%;
  left: 50%;
  transform: translate(-50%, -50%);
}
* {box-sizing: border-box;}

body {
  margin: 0;
  font-family:Calibri;
   background-color: white ;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color:  #7fb3d5 ;
  font-family: Calibri;
  font-size: 20px;
}

li {
  float: left;
}

li a, .dropbtn {
  display: inline-block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
  background-color: #ddd;
}

li.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #ddd;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {background-color:   #7f8c8d  ;}

.dropdown:hover .dropdown-content {
  display: block;
}
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

     h2{
     color: black;
     font-size: 25px;
     
     
     text-align: center;
     font-weight: bold;
     font-family: Calibri, monospace;
    }

      h3{
     color: black;
     font-size: 25px;
     
     
     text-align: center;
     font-weight: bold;
     font-family: Calibri, monospace;
    }

    body{
  background: #f2f2f2;
  font-family: 'Open Sans', sans-serif;
}
</style>
</head>
<body>

<h1>HOME-ASSISTANT24/7</h1>

<ul>
  
  <li class="dropdown">
      <a href="first.php" class="dropbtn"><?php echo"Hi, ".$_SESSION['name'];  ?></a>
    <div class="dropdown-content">
      <a href="cart.php">Your cart</a>
      <a href="order.php">Your order</a>
      <a href="logout.php">Logout</a>
      
    </div>
  </li>

  
  <li class="dropdown">
    <a href="nothing" class="dropbtn">Services</a>
    <div class="dropdown-content">
      <?php
        include_once 'database.php';
        $sql = "SELECT * FROM service_type";
        $result = mysqli_query($conn,$sql);
        if (mysqli_num_rows($result) > 0) {
          while($row = mysqli_fetch_array($result)){
            ?>
      <a href="<?php echo $row['address']?>"><?php echo $row['type']?></a>
      <?php } ?>
    </div>
  </li>
  <?php
}
else{
  echo "No result found";
}

?>
<li> <a class="active" href="first.php"><i class="fa fa-fw fa-home"></i> Home</a></li>
<li> <a class="active" href="first.php"><i class="fa fa-archive"></i> About</a></li>
<li> <a class="active" href="first.php"><i class="fa fa-fw fa-envelope"></i>Contact</a></li>


</ul>
  <br>
  
 <h2>Applicances repair</h2>
 <br>
 <br>

<div class="w3-display-position w3-margin-left w3-padding w3-third"  style="top:220px;left:480px">

	<?php
	require 'database.php';
	$type = "Appliance repair";
	$check="yes";
	$sql = "SELECT * from services WHERE service_type='$type' AND avalibility='$check'";
	$result=mysqli_query($conn,$sql);
	if (mysqli_num_rows($result) > 0){
			?>



<table>
  <tr>
    <th>Service</th>
    <th>Company</th>
    <th>Price</th>
    <th></th>
  </tr>
  <?php
  	while($row = mysqli_fetch_array($result)){

					?>
  <tr>
    <form action="add.php"method="POST">
    <td><?php echo $row['name'];?></td>
    <input type="hidden" name="service_name" value="<?php echo $row['name']; ?>">
    <td><?php echo $row['service_provider']; ?></td>
    <input type="hidden" name="service_provider" value="<?php echo $row['service_provider']; ?>">
    <td><?php echo "$".$row['price']; ?></td>
    <input type="hidden" name="price" value="<?php echo $row['price']; ?>">
    <input type="hidden" name="type" value="<?php echo $row['service_type']; ?>">
    <input type="hidden" name="url" value="appliance.php">
    <input type="hidden" name="service_id" value="<?php echo $row['service_id']; ?>">
    <td><button type="submit"name="btn" class="w3-button w3-white w3-border w3-round"onclick="myFunction()">ADD</button></td>
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
			echo "<h3>There are no services</h3>";
		}
		?>
</div>
<script>
function myFunction() {
  alert("The service has been added to your cart");
  //window.open("https://www.w3schools.com");
  //location='appliance.php';
   //location.replace("appliance.php");
  
  
  
}
</script>

</body>
</html>