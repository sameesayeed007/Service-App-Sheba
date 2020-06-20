<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

   h1{
     color: White;
     font-size: 30px;
     
     background-color: #34495e;
     text-align: center;
     font-weight: bold;
     font-family: Calibri, monospace;
    }

    * {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 16.5%;
  padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
  margin-left: 50px;
  content: "";
  clear: both;
  display: table;
}
</style>
</head>
<body>
  <h1>HOME-ASSISSTANT24/7</h1>

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
<form action="search.php" method="POST">
<div class="wrap">
   <div class="search">
   	  
      <input type="text" name="txt" class="searchTerm" placeholder="What are you looking for?">
      <button type="submit" name="btn-search"class="searchButton">
        <i class="fa fa-search"></i>
     </button>
   </div>
</div>
</form>
<?php 
   //if(isset($_SESSION['username'])){
    //echo "<p>You are logged in</p>";
   //}
  // else{
    //echo "<p>You are logged out</p>";
  //}
 ?>
 <br>
 <br>
 <br>
  <br>
 <br>
 <br>
  <br>
 <br>
 <br>
  <br>
 <br>
 <br>
 <div class="row">
  <div class="column">
   <a href="appliance.php"><img src="appliance.jpg" alt="Snow" style="width:100%"></a> 
  </div>
  <div class="column">
   <a href="beautyservices.php"> <img src="beautyservices.png" alt="Forest" style="width:100%"></a>
  </div>
  <div class="column">
    <a href="cleaning.php"> <img src="cleaning.jpg" alt="Mountains" style="width:100%"></a>
  </div>
    <div class="column">
    <a href="shifting.php"><img src="shifting.jpg" alt="Mountains" style="width:100%"></a>
  </div>
    <div class="column">
    <a href="carwash.php"><img src="carwash.jpg" alt="Mountains" style="width:100%"></a>
  </div>
    <div class="column">
    <a href="electric.php"> <img src="electric.jpg" alt="Mountains" style="width:100%"></a>
  </div>
</div>
 
</body>
</html>

