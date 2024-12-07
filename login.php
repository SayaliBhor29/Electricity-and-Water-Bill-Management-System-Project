<?php
if (!isset($_SESSION)) { session_start(); }

$indexno=$_POST['indexno'];
$password=$_POST['password'];

$con=mysqli_connect("localhost", "root", "","muncipal");;
if (!$con)
	{
  		die('Could not connect: '. pg_error());
  	}
    if($con)
    echo"connected";

$sql = "SELECT * from applicant where indexno="."'".$_POST['indexno']."'" ." and password="."'".$_POST['password']."'" ;
$rs=mysqli_query($con,$sql);	
//echo $sql;
if($rs)
{
   if  (mysqli_num_rows($rs) > 0)
   {
   	
	while ($row = mysqli_fetch_assoc($rs)) 
	{
		$_SESSION['indexno']=$row['indexno'];
		$_SESSION['username']=$row['username'];
	}
  	
   	
   	
   echo ("<script LANGUAGE='JavaScript'>
         window.location.href='main.php';
       </script>");
   }
   else
   {
	  echo ("<script LANGUAGE='JavaScript'>
     window.alert('Invalid Login Details. Please login again');
      window.location.href='login.html';
       </script>");
	
   }
} 
else
{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}
mysqli_close($con);
?>
