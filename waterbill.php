<?php
if (!isset($_SESSION)) { session_start(); }
$indexno=$_SESSION['indexno'];
$username=$_SESSION['username'];

?>



<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
   	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>WaterBill Details</title>


	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/register.css">
  </head>
  <body>
   <?php 
include('header.php');
?> 
    <div class="wrapper">
      <h2>Details for Water Bill</h2><br>
      <form method="POST" name="waterbill" action="/muncipal/waterbill_det.php">
        <div class="form">
         <div class="inputfield">
             <label>Month and Year</label>
             <input type="month" name="year" class="input" required>
        </div>  
        <div class="inputfield">
          <label>Index No</label>
          <input type="text" name="indexno" value="<?php echo $indexno;?>" class="input" required readonly>         
        </div>
             <div class="inputfield">
            <input id="submit" name="submit" type="submit" value="Submit" class="btn">
          </div>
      </form>
    </div>

  </body>
  
</html>
