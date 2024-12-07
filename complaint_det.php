<?php

$name=$_POST['name'];
$address=$_POST['address'];
$subject=$_POST['subject'];
$descr=$_POST['descr'];

$con=mysqli_connect("localhost", "root", "","muncipal");;
if (!$con)
	{
  		die('Could not connect: '. pg_error());
  	}
    if($con){}
    //echo"connected";

$sql = "insert into complaint(name,address,subject,descr) values('$name','$address','$subject','$descr')";
//echo $sql;
if(mysqli_query($con,$sql))
{
   echo ("<script LANGUAGE='JavaScript'>
     window.alert('Complaint Registered Succesfully. Appropriate action will be taken for your request.');
      window.location.href='main.php';
       </script>");
} 
else
{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}
mysqli_close($con);
?>
