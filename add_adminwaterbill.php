<?php
$year=$_POST['year'];
$indexno=$_POST['indexno'];
$noofunits=$_POST['noofunits'];
$tamt=$_POST['tamt'];
$wdate=$_POST['wdate'];
//var_dump($_POST);
$con=mysqli_connect("localhost", "root", "","muncipal");;
if (!$con)
	{
  		die('Could not connect: '. pg_error());
  	}
    if($con){}
        //echo"connected<br>";
$sql = "insert into waterbill (indexno,noofunits,year,tamt,wdate) values('$indexno','$noofunits','$year','$tamt','$wdate')";
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
