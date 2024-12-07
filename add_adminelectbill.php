		<?php
$year=$_POST['year'];
$indexno=$_POST['indexno'];
$noofunits=$_POST['noofunits'];
$solarunits=$_POST['solarunits'];
$finalunit=$_POST['finalunit'];
$tamt=$_POST['tamt'];
$edate=$_POST['edate'];
//var_dump($_POST);
$con=mysqli_connect("localhost", "root", "","muncipal");;
if (!$con)
	{
  		die('Could not connect: '. pg_error());
  	}
    if($con){}
        //echo"connected<br>";
$sql = "insert into elebill (indexno,noofunits,solarunits,finalunit,year,tamt,edate) values('$indexno','$noofunits','$solarunits','$finalunit','$year','$tamt','$edate')";
echo $sql;
if(mysqli_query($con,$sql))
{
   echo ("<script LANGUAGE='JavaScript'>
     window.alert('Bill Generated Successfully.');
      window.location.href='main.php';
       </script>");
} 
else
{
        echo "ERROR: Could not able to execute $sql. " . pg_error($con);
}
mysqli_close($con);
?>
