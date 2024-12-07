<?php
if (!isset($_SESSION)) { session_start(); }
?>
<?php

$fname=$_POST['Name'];
//$uname=$_POST['Username'];

$pass=$_POST['Password'];
$gender=$_POST['Gender'];
$addharnumber=$_POST['AddharNumber'];
$indexno=$_POST['indexno'];
$phonenumber=$_POST['PhoneNumber'];
$address=$_POST['Address'];
$pincode=$_POST['PinCode'];
//echo $fname;
var_dump($_POST);
$con=mysqli_connect("localhost", "root", "","muncipal");;
if (!$con)
	{
  		die('Could not connect: '. pg_error());
  	}
    if($con)
    echo {"connected";
}
$sql = "insert into applicant (apname ,password , gender , addhar , phoneno , address , pin 
,indexno) values('$fname','$pass','$gender','$addharnumber','$phonenumber','$address','$pincode','$indexno')";
echo $sql;
if(mysqli_query($con,$sql))
{
   echo ("<script LANGUAGE='JavaScript'>
     window.alert('Registered Successfully. Please Login');
      window.location.href='login.html';
       </script>");
} 
else
{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}
mysqli_close($con);
?>
