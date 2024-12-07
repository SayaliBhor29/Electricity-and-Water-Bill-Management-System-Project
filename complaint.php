<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Complaint Registration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/main.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="css/register.css">
</head>
<body>
 <?php 
include('header.php');
?> 
    <div class="wrapper">
        <div class="title">
          Complaint Registration Form
        </div>
        <form action="/muncipal/complaint_det.php" method="POST">
        <div class="form">
           <div class="inputfield">
              <label >Name</label>
              <input id="name" name="name" type="text" class="input" required>
           </div>  
            <div class="inputfield">
              <label>Address</label>
              <input id="address" name="address" type="text" class="input"  required>
           </div>                       
          <div class="inputfield">
              <label>Subject</label>
              <input id="subject" name="subject" type="text" class="input" required>
           </div> 
          <div class="inputfield">
              <label>Description</label>
              <textarea id="descr" name="descr" class="input" required></textarea>
           </div> 
          
          <div class="inputfield">
            
            <input id="complaint" name="complaint" type="submit" value="Submit" class="btn">
          </div>
        </div>
    </div>
  </form>
</body>
</html>
