<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Reigster</title>
</head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.entire{
}
.error {color: #FF0000;}
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", Arial, Helvetica, sans-serif}

body  {
    background:  #1b2631;

    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
}
    h1{
     color: White;
     font-size: 30px;
     
     background-color: #34495e;
     text-align: center;
     font-weight: bold;
     font-family: Calibri, monospace;
    }
</style>
<body>
     <h1>HOME-ASSISTANT24/7</h1>

	<div class="entire">
     <div class="w3-display-bottommiddle w3-margin-left w3-padding w3-third">
     <div class="w3-container w3-blue-grey">
          <h2>User Sign Up</h2>
     </div>

     <div class="w3-container w3-white w3-padding-16">
          <p><span class="error">* Required field.</span></p>
          <form  action="customer_register.php" method="GET" >
          <div class="w3-row-padding" style="margin:0 -16px;">
               <div class="w3-half w3-margin-bottom">
                    <label> Name </label>
                    <input class="w3-input w3-border" type="text" name="name" placeholder="Name" pattern = "[a-zA-Z][a-zA-Z ]{2,}" title="must be longer than 5 characters" required >
                    <span class="error">*</span>
               </div>
               <div class="w3-half">
                    <label> Phone Number</label>
                    <input class="w3-input w3-border" type="text" name="phone" placeholder="01731360828" pattern="[0-9]{11}" title="11 digit phone number" required >
                    <span class="error">*</span>
               </div>
          </div>
          <div class="w3-row-padding " style="margin:8px -16px;">
               <div class="w3-row-padding w3-margin-bottom">
                    <label> Username</label>
                    <input class="w3-input w3-border" type="text" name="username" placeholder="Username" title="e.g. ST1014" required>
                    <span class="error">*</span>
               </div>
          </div>
          <div class="w3-row-padding" style="margin:0 -16px;">
               <div class="w3-half w3-margin-bottom">
                    <label> Password</label>
                    <input class="w3-input w3-border" type="password" name="password" placeholder="Password123" autocomplete="off" maxlength="12" title="maximum characters: 12" required>
                    <span class="error">*</span>
               </div>  
              
              
               <div class="w3-half">
                    <label>Credit Card Number</label>
                    <input class="w3-input w3-border" type="text" name="creditcard" placeholder="1234567812345678" pattern="[0-9]{5}" title="5 digit creditcard number" required>
                    <span class="error">*</span>
               </div>
          </div>
          <button class="w3-button w3-dark-grey" type="submit" name='register-submit'><i class="w3-margin-middle"></i> Sign up!</button>
          </form>
          <br>
          <a href="index.php">Go back to the home page</a>
    </div>
 </div>
</div>
</body>
</html>