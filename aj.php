<html>
<body>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
Employee no: <input type="text" name="eno" id="eno">
<br>
Employee name: <input type="text" name="ename" id="ename">
<br>
Salary: <input type="text" name="salary" id="salary">
<br>
<input type="submit" name="insert" value="insert"/>
<input type="submit" name="delete" value="delete"/>
<input type="submit" name="update" value="update"/>
<input type="submit" name="search" value="search"/>
</form>
</body>
<html>

<?php
if (isset($_POST['insert']))
{
	$eno=$_POST['eno'];
	$ename=$_POST['ename'];
	$salary=$_POST['salary'];
	$con=mysqli_connect("localhost", "root", "","muncipal");;
	if (!$con)
	{
		die('Could not connect: ' );
	}
	
	$sql = "insert into employee(eno,ename,salary) values($eno,'$ename',$salary)";
	if(mysqli_query($con,$sql))
	{
?>
<script>
	alert("Records inserted successfully.");
</script>
<?php
	}
	else
	{
		echo "ERROR: Could not able to execute $sql. " ;
	}
	mysqli_close($con);

}
else if (isset($_POST['delete']))
{
	$eno=$_POST['eno'];
	
	$con=mysqli_connect("localhost", "root", "","muncipal");;
	if (!$con)
	{
		die('Could not connect: ' );
	}

	$sql = "delete from employee where eno=$eno";
	if(mysqli_query($con,$sql))
	{
?>
<script>
	alert("Records deleted successfully.");
</script>
<?php    		
	}
	else
	{
		echo "ERROR: Could not able to execute $sql. " ;
	}
	mysqli_close($con);

}
else if (isset($_POST['update']))
{
	$eno=$_POST['eno'];
	$ename=$_POST['ename'];
	$salary=$_POST['salary'];
	$con=mysqli_connect("localhost", "root", "","muncipal");;
	if (!$con)
	{
		die('Could not connect: ' );
	}
	$sql = "update employee set ename='$ename',salary=$salary where eno=$eno";
	if(mysqli_query($con,$sql))
	{
?>
<script>
	alert("Records updated successfully.");
</script>
<?php
	}
	else
	{
		echo "ERROR: Could not able to execute $sql. " ;
	}
	mysqli_close($con);

}
else if (isset($_POST['search']))
{
	$eno=$_POST['eno'];
	$ename=$_POST['ename'];
	$salary=$_POST['salary'];
	$con=mysqli_connect("localhost", "root", "","muncipal");;
	if (!$con)
	{
		die('Could not connect: ' );
	}
	
	$sql = "select * from employee where eno=$eno";
	$result = mysqli_query($con,$sql);
	while($rowval = pg_fetch_array($result))
	{
		$eno= $rowval['eno'];
		$ename= $rowval['ename'];
		$salary= $rowval['salary'];		
	}
?>
<script>	
document.getElementById("eno").value="<?php echo $eno;?>";
document.getElementById("ename").value="<?php echo $ename;?>";
document.getElementById("salary").value="<?php echo $salary;?>";
</script>
<?php
	mysqli_close($con);
}
?>





