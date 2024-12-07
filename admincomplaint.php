<?php
if (!isset($_SESSION)) { session_start(); }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View All Complaints</title>
    
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/main.css">
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

$sql = "SELECT * from complaint order by 1" ;
//echo $sql;
$rs=mysqli_query($con,$sql);	

?>
<?php 
include('header.php');
?> 

<div class="wrappert">
<div class="form">
        <div class="title">
         <h2 style="text-align:center"> <a href="main.php"><img src="img/nmc.png"></a>	</h2>
            <h2 style="text-align:center"> View All Complaints</h2> 
        </div>
      	<br>
       <table class="table" border="1" width="100%" >
       <thead>
      
	<th> No</th>
	<th> Name</th>
	<th> Address</th>
	<th> Subject</th>
	<th> Description</th>
	</thead>
	<tbody>
	<?php
	while($row=mysqli_fetch_assoc($rs))
	{
		echo "<tr>";
		echo "<td>".$row['compid']."</td>";
		echo "<td>".$row['name']."</td>";
		echo "<td>".$row['address']."</td>";
		echo "<td>".$row['subject']."</td>";
		echo "<td>".$row['descr']."</td>";
		echo "</tr>";
	}
		?>
       </tbody>
       </table>
     <br>   
    
	<div class="inputfield">
	        <input type='submit' name='print' id='print' value='Print' class='btn' onclick='window.print();'>
        </div>
     </div>
      </div>
</div>
<?php
	include('footer.php');         
	?>
</body>
</html>
