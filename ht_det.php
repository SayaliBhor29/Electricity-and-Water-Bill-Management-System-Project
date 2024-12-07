<?php
if (!isset($_SESSION)) { session_start(); }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>House Tax Bill</title>
    <link rel="stylesheet" href="css/register.css">
</head>
<body>

<?php

$con=mysqli_connect("localhost", "root", "","muncipal");;
if (!$con)
	{
  		die('Could not connect: '. pg_error());
  	}
    if($con)
    {}//echo"connected";


$sql = "SELECT * from applicant where indexno="."'".$_SESSION['indexno']."'" ;
//echo $sql;
$ap=mysqli_query($con,$sql);

$sql = "SELECT * from housetax where indexno="."'".$_SESSION['indexno']."'" ." and year="."'".$_POST['year']."'"." " ;
//echo $sql;
$rs=mysqli_query($con,$sql);	

?>
<div class="wrappert">
  <div class="form">
   <h2 style="text-align:center"> <a href="main.php"><img src="img/nmc.png"></a>	</h2>
        <h2 style="text-align:center"> House Tax</h2>
        <br>
      	<table class="">
	<?php
	
	while($row1=mysqli_fetch_assoc($ap))
	{
		echo "<tr><td><b>Name </b> </td><td>: </td><td>".$row1['username']."</td></tr>";
		
		echo "<tr><td><b>Address</b>  </td><td>:</td><td> ".$row1['address']."</td></tr>";
		echo "<tr><td><b>Pin </b> </td><td>:</td><td>   ".$row1['pin']."</td></tr>";
		echo "<tr><td><b>Mobile </b> </td><td>:</td><td>   ".$row1['phoneno']."</td></tr>";
	}
	
	?>
	</table>
	<br>
	<br>
       <table class="table" border="1" width="100%">
       <thead>
      
	<th> Index No</th>
	<th> Year-Mon</th>
	<th> Amount</th>
	<th> Sanitization charges</th>
	<th> Total Amount</th>
	<th> Due Date</th>
	</thead>
	<tbody>
	<?php
	while($row=mysqli_fetch_assoc($rs))
	{
		echo "<tr>";
		
		echo "<td>".$row['indexno']."</td>";
		echo "<td>".$row['year']."</td>";
		echo "<td>".$row['amt']."</td>";
		echo "<td>".$row['sanitamt']."</td>";
		echo "<td>".$row['tamt']."</td>";
		echo "<td>".date('d-m-Y',strtotime($row['hdate']))."</td>";
		echo "</tr>";
	}
		?>
       </tbody>
       </table>
     <br>   
   
	<div class="inputfield">
	  <input type='submit' name='print' id='print' value='Print' class='btn' onclick='window.print();'>
	    <br>
<br>
        </div>

     </div>
</div>
</body>
</html>

