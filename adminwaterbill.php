<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Water Bill</title>
    

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
        <div class="title">
          Generate Water Bill
        </div>
        <form action="/muncipal/add_adminwaterbill.php" method="POST">
        <div class="form">
           <div class="inputfield">
              <label >Month and Year</label>
              
              <input id="year" name="year" type="month" class="input" required>
           </div>  
           	
           <div class="inputfield">
              <label >Index No</label>
              <input id="indexno" name="indexno" type="text" class="input" required>
           </div>  
            <div class="inputfield">
              <label>No Of Units(Rs.5/unit)</label>
              <input id="noofunits" name="noofunits" type="text" class="input" onKeyup="cal_amt()" required>
           </div>  
            <div class="inputfield">
              <label>Total Amount</label>
              <input id="tamt" name="tamt" type="text" class="input" required>
           </div>  
           <div class="inputfield">
              <label>Due Date</label>
              <input id="wdate" name="wdate" type="date" class="input" required>
           </div>  
          
           
          <div class="inputfield">
            
            <input id="submit" name="submit" type="submit" value="Submit" class="btn">
          </div>
        </div>
    </div>
  </form>
 	<?php
	include('footer.php');         
	?>
 
</body>
</html>

<script>
function cal_amt()
{
	document.getElementById("tamt").value=document.getElementById("noofunits").value*5;
}
</script>
