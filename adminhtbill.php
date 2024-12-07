<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> HOUSE TAX</title>
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
          Generate House Tax
        </div>
        <form action="/muncipal/add_adminhtbill.php" method="POST">
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
              <label>Amount</label>
              <input id="amt" name="amt" type="text" class="input" onKeyup="cal_amt()" required>
           </div>  
	   <div class="inputfield">
              <label>Sanitization charge </label>
              <input id="sanitamt" name="sanitamt" type="text" class="input" onKeyup="cal_amt()" required>
           </div>  
          
            <div class="inputfield">
              <label>Total Amount</label>
              <input id="tamt" name="tamt" type="text" class="input" required>
           </div>  
           <div class="inputfield">
              <label>Due Date</label>
              <input id="hdate" name="hdate" type="date" class="input" required>
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
document.getElementById("tamt").value=Number(document.getElementById("amt").value) + Number(document.getElementById("sanitamt").value);
}
</script>
