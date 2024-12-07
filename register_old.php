<?php
if (!isset($_SESSION)) { session_start(); }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    echo"connected";

$sql = "SELECT max(indexno)+1  indexno from applicant" ;
$rs=mysqli_query($con,$sql);	
//echo $sql;
if($rs)
{
   if  (mysqli_num_rows($rs) > 0)
   {
   	//$_SESSION['username']=$_POST['username'];
	while ($row = mysqli_fetch_assoc($rs)) 
	{
		$_SESSION['indexno']=$row['indexno'];
	}
  }
}	

  ?> 	
    <div class="wrapper">
        <div class="title">
          Registration Form
        </div>
        <form action="/muncipal/register_det.php" method="POST">
        <div class="form">
           <div class="inputfield">
              <label >Name</label>
              <input id="Name" name="Name" type="text" class="input" required>
           </div>  
           <div class="inputfield">
              <label>Index Number</label>
              <input id="indexno" name="indexno" type="text" class="input" value="<?php echo $_SESSION['indexno'];?>" readonly>
              </div>
           <div class="inputfield">
              <label>Password</label>
              <input id="Password" name="Password" type="password" class="input"required>
           </div>  
          
            <div class="inputfield">
              <label>Gender</label>
              
              <select name="Gender" class="custom_select">
		    <option value="">Select</option>
		    <option value="male">Male</option>
		    <option value="female">Female</option>
        	</select>	
           </div> 
            <div class="inputfield">
              <label>Addhar Number</label>
              <input id="AddharNumber" name="AddharNumber" type="text" class="input">
           </div> 
           
         	
          <div class="inputfield">
              <label>Phone Number</label>
              <input id="PhoneNumber" name="PhoneNumber" type="text" class="input" maxlength="10" required>
           </div> 
          <div class="inputfield">
              <label>Address</label>
              <textarea id="Address" name="Address" class="textarea"></textarea>
           </div> 
          <div class="inputfield">
              <label>Pin Code</label>
              <input id="PinCode" name="PinCode" type="text" class="input" maxlength="6" required>
           </div> 
           
          <div class="inputfield terms">
              <label class="check">
                <input type="checkbox" id="chk" >
                <span class="checkmark"></span>
              </label>
              <p>Agreed to terms and conditions <a href="/muncipal/terms.html">Click here</a></p>
           </div> 
          <div class="inputfield">
            
            <input id="Register" name="Register" type="submit" value="Register" class="btn">
          </div>
        </div>
    </div>
  </form>
</body>
</html>

<script>
/*function funchk()
{
onclick="funchk()"
if (document.getElementById("chk").checked)
{
	document.getElementById("Register").disabled = false;
}
else
{
	document.getElementById("Register").disabled = true;
}

}
*/
</script>

