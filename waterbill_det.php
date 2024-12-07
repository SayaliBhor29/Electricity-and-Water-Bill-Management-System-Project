<?php
if (!isset($_SESSION)) { session_start(); }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Water Bill</title>
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


$sql = "SELECT * from waterbill where indexno="."'".$_SESSION['indexno']."'" ." and year="."'".$_POST['year']."'"." " ;
//echo $sql;
$rs=mysqli_query($con,$sql);	

?>
<div class="wrappert">
  <div class="form">
    <h2 style="text-align:center"> <a href="main.php"><img src="img/nmc.png"></a>	</h2>
        <h2 style="text-align:center"> Water Bill</h2>
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
	<th> No of Units</th>
	<th> Year-Mon</th>
	<th> Total Amount</th>
	<th> Due Date</th>
	</thead>
	<tbody>
	<?php
	while($row=mysqli_fetch_assoc($rs))
	{
		echo "<tr>";
		
		echo "<td>".$row['indexno']."</td>";
		echo "<td>".$row['noofunits']."</td>";
		echo "<td>".$row['year']."</td>";
		echo "<td>".$row['tamt']."</td>";
		echo "<td>".date('d-m-Y',strtotime($row['wdate']))."</td>";
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

