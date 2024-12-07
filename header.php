<?php
if(!isset($_SESSION)) 
{
 session_start(); 
}

?>

    <nav>
        <a href="main.php"><img src="img/nmc.png"></a>
        <div class="nav-links">
            <ul>
                <li><a href="/muncipal/main.php">HOME</a></li>
                <?php 

                if(isset($_SESSION['username']) and ($_SESSION['username'])=='admin' ){?>
               
                 <li><a href="/muncipal/adminwaterbill.php">WATER BILL</a></li>
                 <li><a href="/muncipal/adminelectbill.php">ELECTRICITY BILL</a></li>
                 <li><a href="/muncipal/adminhtbill.php">HOUSE TAX</a></li>
                 <li><a href="/muncipal/admincomplaint.php">COMPLAINTS</a></li>
    
                <li><a href="/muncipal/register.php">REGISTRATION</a></li>
                <li><a href="/muncipal/login.html">LOGIN</a></li>
                <li><a href='/muncipal/logoff.php'> <?php echo "LOGOUT ".STRTOUPPER($_SESSION['username']);?></a></li>             
		<?php 
		} 
		elseif(isset($_SESSION['indexno']))
		{ 
		
		echo "<li> <a href=/muncipal/waterbill.php?indexno=". $_SESSION['indexno']."> WATER BILL </a> </li>";
		echo "<li> <a href=/muncipal/electbill.php?indexno=". $_SESSION['indexno']."> ELECTRICITY BILL </a> </li>";
		echo "<li> <a href=/muncipal/htbill.php?indexno=". $_SESSION['indexno']."> HOUSE TAX</a> </li>";
		echo "<li><a href=/muncipal/complaint.php>COMPLAINT REGISTRAION</a></li>";
?>
 
                <li><a href="/muncipal/register.php">REGISTRATION</a></li>
                <li><a href="/muncipal/login.html">LOGIN</a></li>
                <li><a href='/muncipal/logoff.php'> <?php echo "LOGOUT ".STRTOUPPER($_SESSION['username']);?></a></li>
 
<?php
             }
	     else
	     {
?>	
	      
              
                <li><a href="/muncipal/register.php">REGISTRATION</a></li>
                <li><a href="/muncipal/login.html">LOGIN</a></li>
             
	<?php
		}
	?>	              
            </ul>
            </div>       
    </nav>
    

