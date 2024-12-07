<?php
if (!isset($_SESSION)) { session_start(); }
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Municipal Corporation System</title>
<link rel="stylesheet" href="css/main.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
</head>
<body>

<section class="header">
<?php 
include('header.php');
?>
    <div class="text-box">
        <h1>Fight With COVID-19</COVID-19></h1>
        <p>We all can see how this COVID-19 pandemic has turned the nation upside down. There is an emergent loss of human life at one end and on the other hand, people are losing their jobs and businesses are shutting down. It is becoming difficult for many families to even put a meal on the table.<br> In such a tough time, what we all need to do is come together to fight against this pandemic. As they said, “Where there is Unity there is always Victory” – this is the power of staying united.</p>
    </div>
	</section>
	
	
	<?php
	include('footer.php');         
	?>
        
</body>
</html>



