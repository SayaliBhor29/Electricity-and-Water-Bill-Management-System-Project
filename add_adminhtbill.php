<?php
$year=$_POST['year'];
$indexno=$_POST['indexno'];
$amt=$_POST['amt'];
$sanitamt=$_POST['sanitamt'];
$tamt=$_POST['tamt'];
$hdate=$_POST['hdate'];
//var_dump($_POST);
$con=mysqli_connect("localhost", "root", "","muncipal");;
if (!$con)
	{
  		die('Could not connect: '. pg_error());
  	}
    if($con){}
        //echo"connected<br>";
$sql = "insert into housetax (indexno,year,amt,sanitamt,tamt,hdate) values('$indexno','$year','$amt','$sanitamt','$tamt','$hdate')";
//echo $sql;
if(mysqli_query($con,$sql))
{
   echo ("<script LANGUAGE='JavaScript'>
     window.alert('Bill Generated Successfully.');
      window.location.href='main.php';
       </script>");
} 
else
{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}
mysqli_close($con);
?>
