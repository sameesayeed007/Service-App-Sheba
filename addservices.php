<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
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
  width: 20%;
  position: absolute;
  top: 30%;
  left: 70%;
  transform: translate(-50%, -50%);
}
* {box-sizing: border-box;}

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

   <div class="w3-display-position w3-margin-left w3-padding w3-third" style="top:150px;left:450px">
     <div class="w3-container w3-blue-grey">
          <h2>Add Services</h2>
     </div>

     <div class="w3-container w3-white w3-padding-16">
          
          <form method="GET" action="addservices_backend.php" target="_blank" >
        
          <div class="w3-row-padding " style="margin:8px -16px;">
               <div class="w3-row-padding w3-margin-bottom">
                    <label> Service name</label>
                    <input class="w3-input w3-border" type="text" name="service_name" placeholder="servicename" title="e.g. Office Cleaning" required>
                    
               </div>
          </div>
              <div class="w3-row-padding " style="margin:8px -16px;">
               <div class="w3-row-padding w3-margin-bottom">
                    <label>Price</label>
                    <input class="w3-input w3-border" type="text" name="price" placeholder="Price" title="e.g. $100" required>
                    
               </div>
          </div>
                <div class="w3-row-padding " style="margin:8px -16px;">
               <div class="w3-row-padding w3-margin-bottom">
                    <label>Service type</label>
                    <br>
                    <br>
                    <select name="type">
                <option value="Appliance repair">Appliance repair</option>
                <option value="Beauty services">Beauty services</option>
                <option value="Cleaning and Pest Control">Cleaning and Pest Control</option>
                <option value="Car wash and servicing">Car wash and servicing</option>
                <option value="Electric and Sanitary">Electric and Sanitary</option>
                <option value="Shifting">Shifting</option>
                </select>
                    
               </div>
          </div>
         
          
          <button class="w3-button w3-dark-grey" type="submit" name="service-add"><i class="w3-margin-middle"></i>Add!</button>
          </form>
  
   



<?php 
   if(isset($_SESSION['username'])){
    //echo "<p>You are logged in</p>";
   }
   else{
    //echo "<p>You are logged out</p>";
   }
 ?>


</body>
</html>
